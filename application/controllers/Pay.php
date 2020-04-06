<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pay extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    public function index() {
        $this->load->model('model');
        $subsite = $this->db->get_where('site',array('sub_domain'=>$_SERVER['HTTP_HOST']))->row_array();

        $data = array(
            'rmoney' => $_GET['amount'],
            'orderid' => $_GET['number'],
            'paytype' => $_GET['paytype'],
            'username'=>$subsite['name'],
            'email'=>$subsite['email']
        );

        $payment = $this->db->get_where('payment',array('gateway'=>$_GET['paytype']))->row_array();

        if($_GET['amount'] < $payment['min_charge'] || $_GET['amount'] > $payment['max_charge']) {
            $str = "金额范围：".$payment['min_charge'].' ~ '.$payment['max_charge'];
            echo '<script>alert("'.$str.'")</script>';
            return ;
        }

        $fee = round($payment['fee_rate'] / 100 * $_GET['amount'] + $payment['single_fee'],2);
        $fee = $fee < $payment['min_fee'] ? $payment['min_fee'] : $fee;

        $insert['userid'] = 0;
        $insert['total'] = $_GET['amount'];
        $insert['fee'] = $fee;
        $insert['status'] = 0;
        $insert['tradeno'] = $_GET['number'];
        $insert['datetime'] = time();
        $insert['trade_type'] =  '支付';
        $insert['gate_type'] = $payment['sprovider'];
        $insert['pay_type'] = $payment['gateway'];
        $insert['domain'] = $subsite['sub_domain'];
        $this->db->insert('paylogs', $insert);


        switch($payment['sprovider']) {
            case "pay9":
                return  $this->pay9($data);
            case "th":
                return  $this->thbank($data);
            case "payssion":
                $data['pm_id']='unionpay_cn';
                $data['pm_name']='Unionpay';
                return $this->payssion($data);
            default:
                die("方法未定义");
                break;
        }
    }

    public function check() {
        $this->load->model('model');

        $query = $this->db->get_where('paylogs', array('tradeno' => $_GET['number']));
        $data = $query->row_array();

        if(!$data) {
            $data['status']=0;
            echo  json_encode(array('code'=>0, 'msg'=>'ok', 'data'=>$data));
            return ;
        }

        $data['datetime'] = date('Y-m-d H:i:s',$data['datetime']);

        if($data['pay_type']=='chinabank') {
            $data['pay_type']='网银';
        } else if($data['pay_type']=='thalipay') {
            $data['pay_type']='支付宝';
        } else if($data['pay_type']=='thtenpay') {
            $data['pay_type']='微信';
        } else if($data['pay_type']=='alipay') {
            $data['pay_type']='支付宝';
        } else if($data['pay_type']=='tenpay') {
            $data['pay_type']='微信支付';
        } else if($data['pay_type']=='yunshoufu') {
            $data['pay_type']='云闪付';
        } else if($data['pay_type']=='payssion') {
            $data['pay_type']='网银';
        } else {
            $data['pay_type']='未定义';
        }

        if(empty($data)) $data['status']=0;

        echo  json_encode(array('code'=>0, 'msg'=>'ok', 'data'=>$data));
    }

    public function isHTTPS()
    {
        define('HTTPS', false);
        if (defined('HTTPS') && HTTPS) {
            return true;
        }
        if (!isset($_SERVER)) {
            return false;
        }
        if (!isset($_SERVER['HTTPS'])) {
            return false;
        }
        if ($_SERVER['HTTPS'] === 1) {  //Apache
            return true;
        }

        if ($_SERVER['HTTPS'] === 'on') { //IIS
            return true;
        }

        if ($_SERVER['SERVER_PORT'] == 443) { //其他
            return true;
        }
        return false;
    }

    public function pay9($data) {
        $url = ($this->isHTTPS() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'];

        $pay9_url1 = 'https://newapi.9pay.vip/unionOrder';
        $pay9_id = '1001046413';
        $pay9_key = 'nbbuemidrhngjirieb';


        if($data['paytype']=='alipay') {
            $paytype='10106';
        } else if($data['paytype']=='tenpay') {
            $paytype='10104';
        } else if($data['paytype']=='yunshoufu') {
            $paytype='10101';
        } else {
            die('未定义');
        }

        $amount = $data['rmoney'];
        $service = $paytype;  // 10103 云闪付
        $notifyUrl = $url.site_url('notify/index').'?type=pay9';   // 订单支付成功回调地址 必填

        $data = array(
            'amount' => $amount,
            'notifyUrl' => $notifyUrl,
            'partner' => $pay9_id,
            'service' => $service,
            'tradeNo' => $data['orderid']
        );
        ksort($data);
        reset($data);

        $sign = '';
        foreach ($data as $key => $val) { //遍历需要传递的参数
            if ($val == '' || $key == 'sign') {
                continue;
            } //跳过这些不参数签名
            if ($sign != '') { //后面追加&拼接URL
                $sign .= '&';
            }
            $sign .= "$key=$val";
        }
        $data['sign'] = md5($sign . '&' . $pay9_key);


        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $pay9_url1);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        $re = curl_exec($curl);
        curl_close($curl);

        echo $re;
    }

    public function thbank($data) {
        $url = ($this->isHTTPS() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'];
        $api_url='https://api.thgroup888.com';
        $key = 'fd4d529dcedefff779adf229fbe0112f';

        if($data['paytype']=='thalipay') {
            $paytype='zfb_saoma';
        } else if($data['paytype']=='thtenpay') {
            $paytype='wx_saoma';
        } else if($data['paytype']=='chinabank') {
            $paytype='bank_udun';
        }

        $post['fxid']='880115';
        $post['fxamount']=$data['rmoney'];
        $post['fxorderid']=$data['orderid'];
        $post['fxnotifyurl'] = $url.site_url('notify/index').'?type=th';   // 订单支付成功回调地址 必填
        $post['fxip']=$_SERVER["REMOTE_ADDR"];
        $post['fxpaytype']=$paytype;
        $post['fxretype']=0;
        $post['fxsign']=md5($post['fxid'].$post['fxorderid'].$post['fxamount'].$post['fxnotifyurl'].$key);


        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $api_url);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
        $re = curl_exec($curl);
        curl_close($curl);

        echo $re;
    }

    public function payssion($data) {
        $api_key = 'e46f7b82bf4939e2';
        $secret_key = 'dadddcce06361d73a7af82558dff8bec';
        $source = 'whmcs';
        //$url = 'http://sandbox.payssion.com/payment/create.html';   // testmode=on
        $url = 'https://www.payssion.com/payment/create.html';

        // Invoice Parameters
        $track_id = $data['orderid'];
        $description = '';
        $amount = $data['rel_amount'];
        $currency = $data['plat_cur'];
        $pm_id = $data['pm_id'];



        // Client Parameters
        $uri = ($this->isHTTPS() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'];
        $payer_name = $data['username'];
        $payer_email = $data['email'];
        $notify_url = $url.site_url('notify/index').'?type=payss_notify';
        $success_url = $url.site_url('notify/index').'?type=payss_success';
        $redirect_url = $url.site_url('notify/index').'?type=payss_redirect';


        $arr = array($api_key, $pm_id, $amount, $currency, $track_id, '', $secret_key);
        $api_sig = md5(implode('|', $arr));


        $code = '<form method="post" id="form1" action="' . $url . '">
	<input type="hidden" name="source" value="'.$source.'" />
	<input type="hidden" name="api_key" value="'.$api_key.'" />
	<input type="hidden" name="api_sig" value="'.$api_sig.'" />
	<input type="hidden" name="pm_id" value="'.$pm_id.'" />
	<input type="hidden" name="payer_name" value="'.$payer_name.'" />
	<input type="hidden" name="payer_email" value="'.$payer_email.'" />
	<input type="hidden" name="track_id" value="'.$track_id.'" />
	<input type="hidden" name="description" value="'.$description.'" />
	<input type="hidden" name="amount" value="'.$amount.'" />
	<input type="hidden" name="currency" value="'.$currency.'" />
	<input type="hidden" name="notify_url" value="'.$notify_url.'" />
	<input type="hidden" name="success_url" value="'.$success_url.'" />
	<input type="hidden" name="redirect_url" value="'.$redirect_url.'" />
	</form>
	
	<script>
		document.getElementById("form1").submit()
	</script>';

        echo $code;
    }

}
