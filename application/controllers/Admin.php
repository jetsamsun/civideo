<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('model');
        session_start();

        if(!isset($_SESSION["userinfo"]) && $this->router->method != 'login') {
            header("Location:".site_url('admin/login'));
        }
    }

    public function index(){
	    $bars = [];
	    $keys = lastdays(10);
	    foreach($keys as $v) {
	        $start = strtotime($v.' 00:00:00');
            $end = strtotime($v.' 23:59:59');

            $sub_domain = $_SESSION["userinfo"]['sub_domain'];
            $sql = "select sum(total) num from app_paylogs where domain='$sub_domain' and status=1 and datetime between $start and $end;";
            $res = $this->db->query($sql)->row_array();

            $bars[substr($v, 5)] = $res['num'];
        }

	    $lines = [];
        $keys = lastmonths(12);
        foreach($keys as $v) {
            $start = strtotime($v.'-01 00:00:00');
            $days = date('t',$start);
            $end = strtotime($v.'-'.$days.' 23:59:59');

            $sub_domain = $_SESSION["userinfo"]['sub_domain'];
            $sql = "select sum(total) num from app_paylogs where domain='$sub_domain' and status=1 and datetime between $start and $end;";
            $res = $this->db->query($sql)->row_array();

            $lines[$v] = $res['num'];
        }

        $data['page'] = 'index';
        $data['title'] = '主页面 - 会员中心 - 收付站';
        $data['bars'] = $bars;
        $data['lines'] = $lines;
        $this->load->view('admin/index', $data);
    }
    public function login(){
        if(IS_POST) {
            if($_POST['captcha'] != $_SESSION['captcha']) {
                echo json_encode(array('code' => -1, 'msg' => '验证码错误'));
                return ;
            }
            $query = $this->db->get_where('user',array('name'=>$_POST['username'],'pass'=>md5($_POST['password'])));
            $userinfo = $query->row_array();
            if($userinfo) {
                if($userinfo['status']!=1) {
                    echo json_encode(array('code' => -1, 'msg' => '站点尚未通过审核，不能登录！'));
                } else {
                    $_SESSION["userinfo"] = $userinfo;
                    echo json_encode(array('code' => 0, 'msg' => '登录成功'));
                }
            } else {
                echo json_encode(array('code'=>-1, 'msg'=>'用户名或密码错误'));
            }
        } else {
            $data['page'] = 'login';
            $data['title'] = '登录页面 - 会员中心 - 收付站';
            $this->load->view('admin/login', $data);
        }
    }
    public function profile(){
	    if(IS_POST) {
            $update['email'] = $_POST['email'];
            $update['telegram'] = $_POST['telegram'];
            $update['notify'] = $_POST['notify'];

            $this->db->where('id', $_SESSION['userinfo']['id']);
            $this->db->update('user', $update);

            $query = $this->db->get_where('user',array('id'=>$_SESSION['userinfo']['id']));
            $userinfo = $query->row_array();
            $_SESSION["userinfo"] = $userinfo;

            echo json_encode(array('code'=>0, 'msg'=>'保存成功'));
        } else {
            $data['page'] = 'login';
            $data['title'] = '账户信息 - 会员中心 - 收付站';
            $data['nofity'] = explode(',', $_SESSION['userinfo']['notify']);
            $this->load->view('admin/profile', $data);
        }
    }
    public function editpwd(){
        if(IS_POST) {
            $query = $this->db->get_where('user',array('name'=>$_SESSION['userinfo']['name'],'pass'=>md5($_POST['oldpwd'])));
            $userinfo = $query->row_array();
            if(!$userinfo) {
                echo json_encode(array('code'=>-1, 'msg'=>'验证密码失败'));
            } else {
                $update['pass'] = md5($_POST['newpwd']);
                $this->db->where('id', $_SESSION['userinfo']['id']);
                $this->db->update('user', $update);
                unset($_SESSION["userinfo"]);

                echo json_encode(array('code'=>0, 'msg'=>'密码修改成功，请重新登录'));
            }
        } else {
            $data['page'] = 'login';
            $data['title'] = '修改密码 - 会员中心 - 收付站';
            $this->load->view('admin/editpwd', $data);
        }
    }
    public function logout(){
        unset($_SESSION["userinfo"]);
	    echo json_encode(array('code'=>0, 'msg'=>'登出成功'));
    }
    public function set(){
        if(IS_POST) {
            $update['email'] = $_POST['web_site_email'];
            $update['contact'] = $_POST['web_site_contact'];
            $update['website'] = $_POST['web_site_addr'];
            $update['logo'] = $_POST['web_site_logo'];
            $update['message'] = $_POST['web_site_description'];
            $update['js_code'] = $_POST['web_site_js'];
            $update['site_name'] = $_POST['web_site_title'];

            $this->db->where('sub_domain', $_POST['web_site_domain']);
            $this->db->update('user', $update);

            $query = $this->db->get_where('user',array('sub_domain'=>$_POST['web_site_domain']));
            $userinfo = $query->row_array();
            $_SESSION["userinfo"] = $userinfo;

            echo json_encode(array('code'=>0, 'msg'=>'修改成功'));
        } else {
            $data['page'] = 'set';
            $data['title'] = '站点配置 - 会员中心 - 收付站';
            $this->load->view('admin/set', $data);
        }
    }
    public function financial(){
        if(IS_POST) {
            //foreign:foreign,payment:str,deposit:deposit,branch:branch,account:account,address:address
            $update['foreign'] = $_POST['foreign']=='true'? 1 : 0;
            $update['payment'] = $_POST['payment'];
            $update['bank'] = json_encode(array('deposit'=>$_POST['deposit'],'branch'=>$_POST['branch'],'account'=>$_POST['account'],'address'=>$_POST['address']));

            $this->db->where('id', $_SESSION['userinfo']['id']);
            $this->db->update('user', $update);

            $query = $this->db->get_where('user',array('id'=>$_SESSION['userinfo']['id']));
            $userinfo = $query->row_array();
            $_SESSION["userinfo"] = $userinfo;

            echo json_encode(array('code'=>0, 'msg'=>'修改成功'));
        } else {
            $payments = [];
            $query = $this->db->get("payment")->result_array();
            foreach ($query as $v) {
                $payments[$v['sprovider']]['sprovider_text'] = $v['sprovider_text'];
                $payments[$v['sprovider']]['label'] = $v['label'];
                $payments[$v['sprovider']]['gateway'][$v['gateway']] = $v;
            }
            foreach ($payments as $k=>$v) {
                $status = 0;
                foreach ($v['gateway'] as $vv) {
                    if($vv['status']==1) {
                        $status = 1;
                    }
                }
                if(!$status) {
                    unset($payments[$k]);
                }
            }
            $data['payments'] = $payments;

            $data['page'] = 'financial';
            $data['title'] = '财务配置 - 会员中心 - 收付站';
            $data['payment'] = explode(',', $_SESSION['userinfo']['payment']);
            $data['bank'] = !empty($_SESSION['userinfo']['bank']) ? json_decode($_SESSION['userinfo']['bank']) : array('deposit'=>'','branch'=>'','account'=>'','address'=>'',);
            $this->load->view('admin/financial', $data);
        }
    }
    public function transaction(){
        if(IS_POST) {
            if($_GET['op']=='del') {
                if(strpos($_POST['ids'],',')!==false) {
                    $ids = explode(',', $_POST['ids']);
                    foreach ($ids as $v) {
                        $this->db->where('id', $v)->delete('paylogs');
                    }
                } else {
                    $bool = $this->db->where('id', $_POST['ids'])->delete('paylogs');
                }
                echo json_encode(array('code' => 0, 'msg' => '删除成功'));
            }
        } else {
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $limit = 10;
            $offset = ($page - 1) * $limit;
            $sub_domain = $_SESSION['userinfo']['sub_domain'];

            if(isset($_GET['search_field']) && !empty($_GET['keyword'])) {
                $field = $_GET['search_field'];
                $keyword = '%'.$_GET['keyword'].'%';
                $sql = "select count(*) num from app_paylogs where domain='$sub_domain' and $field like '$keyword'";

                $res = $this->db->query($sql)->row_array();
                $total = $res['num'];
                $pages = ceil($total / $limit);  //页数
                $url = site_url('admin/transaction');

                $query = $this->db
                    ->select('paylogs.*, payment.sprovider_text, payment.gateway_text')
                    ->from('paylogs')
                    ->where('domain', $_SESSION['userinfo']['sub_domain'])
                    ->like($field, $_GET['keyword'], 'both')
                    ->join('payment', 'payment.gateway = paylogs.pay_type')
                    ->limit($limit, $offset)
                    ->order_by('datetime', 'DESC')
                    ->get()
                    ->result_array();
            } else {
                $sql = "select count(*) num from app_paylogs where domain='$sub_domain'";

                $res = $this->db->query($sql)->row_array();
                $total = $res['num'];
                $pages = ceil($total / $limit);  //页数
                $url = site_url('admin/transaction');

                $query = $this->db
                    ->select('paylogs.*, payment.sprovider_text, payment.gateway_text')
                    ->from('paylogs')
                    ->where('domain', $_SESSION['userinfo']['sub_domain'])
                    ->join('payment', 'payment.gateway = paylogs.pay_type')
                    ->limit($limit, $offset)
                    ->order_by('datetime', 'DESC')
                    ->get()
                    ->result_array();
            }


            $data['page'] = 'transaction';
            $data['title'] = '交易流水 - 会员中心 - 收付站';
            $data['logs'] = $query;
            $data['pagination'] = pagination($url, $pages, $total, $limit, $offset, $page);
            $this->load->view('admin/transaction', $data);
        }
    }
    public function withdraw(){
        if(IS_POST) {
            if($_GET['op']=='del') {
                if(strpos($_POST['ids'],',')!==false) {
                    $ids = explode(',', $_POST['ids']);
                    foreach ($ids as $v) {
                        $this->db->where('id', $v)->delete('withdraw');
                    }
                } else {
                    $this->db->where('id', $_POST['ids'])->delete('withdraw');
                }
                echo json_encode(array('code' => 0, 'msg' => '删除成功'));
            } else if($_GET['op']=='apply') {
                $data = array(
                    'total' => $_POST['amount'],
                    'status' => 0,
                    'tradeno' => rand(1001,9999).time().rand(101,999),
                    'datetime' => time(),
                    'fee' => 0,
                    'domain' => $_SESSION['userinfo']['sub_domain']
                );
                $this->db->insert('withdraw', $data);

                echo json_encode(array('code' => 0, 'msg' => '提交成功，待审核'));
            }
        } else {
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $limit = 10;
            $offset = ($page - 1) * $limit;
            $sub_domain = $_SESSION['userinfo']['sub_domain'];

            if(isset($_GET['search_field']) && !empty($_GET['keyword'])) {
                $field = $_GET['search_field'];
                $keyword = '%'.$_GET['keyword'].'%';
                $sql = "select count(*) num from app_withdraw where domain='$sub_domain' and $field like '$keyword'";

                $res = $this->db->query($sql)->row_array();
                $total = $res['num'];
                $pages = ceil($total / $limit);  //页数
                $url = site_url('admin/withdraw');

                $query = $this->db
                    ->where('domain', $_SESSION['userinfo']['sub_domain'])
                    ->like($field, $_GET['keyword'], 'both')
                    ->order_by('datetime', 'DESC')
                    ->get('withdraw', $limit, $offset)
                    ->result_array();
            } else {
                $sql = "select count(*) num from app_withdraw where domain='$sub_domain'";

                $res = $this->db->query($sql)->row_array();
                $total = $res['num'];
                $pages = ceil($total / $limit);  //页数
                $url = site_url('admin/withdraw');

                $query = $this->db
                    ->where('domain', $_SESSION['userinfo']['sub_domain'])
                    ->order_by('datetime', 'DESC')
                    ->get('withdraw', $limit, $offset)
                    ->result_array();
            }


            $data['page'] = 'withdraw';
            $data['title'] = '提现流水 - 会员中心 - 收付站';
            $data['logs'] = $query;
            $data['pagination'] = pagination($url, $pages, $total, $limit, $offset, $page);
            $this->load->view('admin/withdraw', $data);
        }
    }


    public function lyear_config_system(){
        $data['page'] = 'lyear_config_system';
        $data['title'] = '系统配置 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_config_system',$data);
    }
    public function lyear_config_upload(){
        $data['page'] = 'lyear_config_upload';
        $data['title'] = '上传配置 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_config_upload',$data);
    }
    public function lyear_pages_profile(){
        $data['page'] = 'lyear_pages_profile';
        $data['title'] = '个人信息 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_pages_profile',$data);
    }
    public function lyear_pages_edit_pwd(){
        $data['page'] = 'lyear_pages_edit_pwd';
        $data['title'] = '修改密码 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_pages_edit_pwd',$data);
    }


    public function lyear_ui_buttons(){
        $data['page'] = 'lyear_ui_buttons';
        $data['title'] = '按钮 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_ui_buttons',$data);
    }
    public function lyear_ui_cards(){
        $data['page'] = 'lyear_ui_cards';
        $data['title'] = '卡片 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_ui_cards',$data);
    }
    public function lyear_ui_grid(){
        $data['page'] = 'lyear_ui_grid';
        $data['title'] = '格栅 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_ui_grid',$data);
    }
    public function lyear_ui_icons(){
        $data['page'] = 'lyear_ui_icons';
        $data['title'] = '图标 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_ui_icons',$data);
    }
    public function lyear_ui_tables(){
        $data['page'] = 'lyear_ui_tables';
        $data['title'] = '表格 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_ui_tables',$data);
    }
    public function lyear_ui_modals(){
        $data['page'] = 'lyear_ui_modals';
        $data['title'] = '模态框 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_ui_modals',$data);
    }
    public function lyear_ui_tooltips_popover(){
        $data['page'] = 'lyear_ui_tooltips_popover';
        $data['title'] = '提示 / 弹出框 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_ui_tooltips_popover',$data);
    }
    public function lyear_ui_alerts(){
        $data['page'] = 'lyear_ui_alerts';
        $data['title'] = '警告框 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_ui_alerts',$data);
    }
    public function lyear_ui_pagination(){
        $data['page'] = 'lyear_ui_pagination';
        $data['title'] = '分页 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_ui_pagination',$data);
    }
    public function lyear_ui_progress(){
        $data['page'] = 'lyear_ui_progress';
        $data['title'] = '进度条 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_ui_progress',$data);
    }
    public function lyear_ui_tabs(){
        $data['page'] = 'lyear_ui_tabs';
        $data['title'] = '标签页 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_ui_tabs',$data);
    }
    public function lyear_ui_typography(){
        $data['page'] = 'lyear_ui_typography';
        $data['title'] = '排版 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_ui_typography',$data);
    }
    public function lyear_ui_step(){
        $data['page'] = 'lyear_ui_step';
        $data['title'] = '步骤 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_ui_step',$data);
    }
    public function lyear_ui_other(){
        $data['page'] = 'lyear_ui_other';
        $data['title'] = '其他 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_ui_other',$data);
    }


    public function lyear_forms_elements(){
        $data['page'] = 'lyear_forms_elements';
        $data['title'] = '表单 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_forms_elements',$data);
    }
    public function lyear_forms_radio(){
        $data['page'] = 'lyear_forms_radio';
        $data['title'] = '单选框 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_forms_radio',$data);
    }
    public function lyear_forms_checkbox(){
        $data['page'] = 'lyear_forms_checkbox';
        $data['title'] = '复选框 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_forms_checkbox',$data);
    }
    public function lyear_forms_switch(){
        $data['page'] = 'lyear_forms_switch';
        $data['title'] = '开关 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_forms_switch',$data);
    }


    public function lyear_pages_doc(){
        $data['page'] = 'lyear_pages_doc';
        $data['title'] = '文档列表 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_pages_doc',$data);
    }
    public function lyear_pages_gallery(){
        $data['page'] = 'lyear_pages_gallery';
        $data['title'] = '图库列表 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_pages_gallery',$data);
    }
    public function lyear_pages_config(){
        $data['page'] = 'lyear_pages_config';
        $data['title'] = '网站配置 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_pages_config',$data);
    }
    public function lyear_pages_rabc(){
        $data['page'] = 'lyear_pages_rabc';
        $data['title'] = '设置权限 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_pages_rabc',$data);
    }
    public function lyear_pages_add_doc(){
        $data['page'] = 'lyear_pages_add_doc';
        $data['title'] = '新增文档 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_pages_add_doc',$data);
    }
    public function lyear_pages_guide(){
        $data['page'] = 'lyear_pages_guide';
        $data['title'] = '表单向导 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_pages_guide',$data);
    }
    public function lyear_pages_login(){
        $data['page'] = 'lyear_pages_login';
        $data['title'] = '登录页面 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_pages_login',$data);
    }
    public function lyear_pages_error(){
        $data['page'] = 'lyear_pages_error';
        $data['title'] = '错误页面 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_pages_error',$data);
    }


    public function lyear_js_datepicker(){
        $data['page'] = 'lyear_js_datepicker';
        $data['title'] = '日期选择器 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_js_datepicker',$data);
    }
    public function lyear_js_sliders(){
        $data['page'] = 'lyear_js_sliders';
        $data['title'] = '滑块 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_js_sliders',$data);
    }
    public function lyear_js_colorpicker(){
        $data['page'] = 'lyear_js_colorpicker';
        $data['title'] = '颜色选择器 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_js_colorpicker',$data);
    }
    public function lyear_js_chartjs(){
        $data['page'] = 'lyear_js_chartjs';
        $data['title'] = '图表 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_js_chartjs',$data);
    }
    public function lyear_js_jconfirm(){
        $data['page'] = 'lyear_js_jconfirm';
        $data['title'] = '对话框 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_js_jconfirm',$data);
    }
    public function lyear_js_tags_input(){
        $data['page'] = 'lyear_js_tags_input';
        $data['title'] = '标签插件 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_js_tags_input',$data);
    }
    public function lyear_js_notify(){
        $data['page'] = 'lyear_js_notify';
        $data['title'] = '通知消息 - 光年(Light Year Admin)后台管理系统模板';
        $this->load->view('admin/lyear_js_notify',$data);
    }
}