<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notify extends CI_Controller {

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

        //保存请求路径
        $http_type = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')) ? 'https://' : 'http://';
        file_put_contents(__DIR__.'/request_logs_'.date('Y-m-d').'.txt', date('Y-m-d H:i:s').' '.$http_type . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'].PHP_EOL,FILE_APPEND);


        if($_GET['type']=='pay9') {
            $this->pay9_notify();
        } else if($_GET['type']=='th') {
            $this->th_notify();
        } else if($_GET['type']=='payss_notify') {
            $this->payss_notify();
        }
    }

    public function succdone($tradeno) {
        $this->load->model('model');
        $log = $this->db->get_where("paylogs",array('tradeno'=>$tradeno))->row_array();
        if($log && $log['status']==0) {
            $this->db->where('tradeno', $tradeno)->update('paylogs', array('status' => 1));
            $site = $this->db->get_where("user", array('sub_domain' => $log['domain']))->row_array();
            $update = array(
                'his_amout' => $site['his_amout'] + $log['total'],
                'balance' => $site['balance'] + $log['total'] - $log['fee'],
                'fee_amout' => $site['fee_amout'] + $log['fee'],
                'pay_num' => $site['pay_num'] + 1,
            );
            $this->db->where('id', $site['id'])->update("user", $update);


            $msg = '你有一笔订单已支付成功';
            if(strpos($site['notify'], 'telegram')!==false) {
                $url = 'https://api.telegram.org/bot'.$this->configs['telegram_token'].'/sendMessage?chat_id='.$site['telegram'].'&text='.$msg;
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_POST, TRUE);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_exec($ch);
                curl_close($ch);
            }

            if(strpos($site['notify'], 'email')!==false) {
                $this->load->library('email');
                $this->email->from(config_item('smtp_user'), $site['name']);
                $this->email->to($site['email']);
                $this->email->subject('支付结果');
                $this->email->message($msg);
                $this->email->send();
                $this->email->print_debugger(array('headers'));
            }


            echo "成功";
        } else {
            echo '已支付完成';
        }
    }

    public function pay9_notify() {
        $pay9_key = 'nbbuemidrhngjirieb';
        $data = $_POST;

        ksort($data);
        reset($data);
        $sign = '';
        foreach ($data as $key => $val) {
            if ($val == '' || $key == 'sign' || $key == 'signType' || $key == 'charset') {
                continue;
            }
            if ($sign) {
                $sign .= '&';
            }
            $sign .= "$key=$val";
        }
        $in_sign = md5($sign . '&' . $pay9_key);


        if(isset($data['status']) && isset($data['outTradeNo']) && isset($data['sign'])) {
            if (!$data['status'] || !$data['outTradeNo'] || $in_sign != $data['sign']) { //不合法的数据
                exit('不合法的数据');
            }
        } else {
            exit('不合法的数据');
        }


        file_put_contents(__DIR__.'/pay9_notify_'.date('Y-m-d').'.txt', json_encode($data).PHP_EOL,FILE_APPEND);


        $this->succdone($data['outTradeNo']);
    }

    public function th_notify() {
        $data = $_POST;

        file_put_contents(__DIR__.'/th_notify_'.date('Y-m-d').'.txt', json_encode($data).PHP_EOL,FILE_APPEND);

        if ($data['fxstatus'] == 'succ') {
            $this->succdone($data['fxorderid']);
        } else {
            exit('失败');
        }
    }

    public function payss_notify() {
        $data = $_POST;
        file_put_contents(__DIR__.'/payss_notify_'.date('Y-m-d').'.txt', json_encode($data).PHP_EOL,FILE_APPEND);

        $api_key = 'e46f7b82bf4939e2';
        $secret_key = 'dadddcce06361d73a7af82558dff8bec';
        $pm_id = $data['pm_id'];
        $amount = $data['amount'];
        $currency = $data['currency'];
        $track_id = $data['track_id'];
        $state = $data['state'];


        $arr = array($api_key, $pm_id, $amount, $currency, $track_id, $state, $secret_key);
        $notify_sig = md5(implode('|', $arr));
        if($notify_sig != $data['notify_sig']) {
            exit('数据校验失败');
        }
        
        if ($data['state'] == 'completed') {
            $this->succdone($data['track_id']);
        } else {
            exit('失败');
        }
    }
}
