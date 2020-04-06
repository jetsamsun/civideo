<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chinese extends CI_Controller {

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

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $domain = $_SERVER['HTTP_HOST'];
        $arr = explode('.', $domain);
        $this->load->model('model');

        if(count($arr) > 2) {
            if($this->uri->uri_string() != "")
            {
                header("location:/");
            }
           $this->site();
        } else {
            $this->router->method;
        }
    }
	public function index()
	{
        $domain = $_SERVER['HTTP_HOST'];
        $arr = explode('.', $domain);
        if(count($arr)  == 2) {
            $this->load->view('index');
        }
	}
    public function about()
    {
        $this->load->view('about');
    }

    public function contact()
    {
        $this->load->view('contact');
    }

    public function service()
    {
        $this->load->view('service');
    }

    public function apply()
    {
        if(strtolower($_SERVER["REQUEST_METHOD"]) == 'post') {
            $data = $_POST;
            $sub_domain = trim($data['sub_domain']).'.'.config_item('site_domain');

            $query = $this->db->get_where('site', array('sub_domain' => $sub_domain));
            $res = $query->row_array();
            if($res) {
                echo  json_encode(array('code'=>-1, 'msg'=>'子域名已经存在！'));
            } else {
            
                $insert['email'] = $data['email'];
                $insert['name'] = $data['username'];
                $insert['contact'] = $data['contact'];
                $insert['sub_domain'] = $sub_domain;
                $insert['domain'] = config_item('site_domain');
                $insert['website'] = $data['site_url'];
                $insert['logo'] = $data['logo'];
                $insert['createtime'] = time();
                $insert['message'] = $data['message'];
                $insert['site_name'] = $data['site_name'];

                $this->db->insert('site', $insert);

                echo json_encode(array('code' => 0, 'msg' => '提交成功，审核中'));
            }
        } else {
            $this->load->view('apply');
        }
    }
    public function site()
    {
        $this->load->model('Site');
        if($data = $this->Site->getBysub($_SERVER['HTTP_HOST'])) {
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

            $this->load->vars('data', $data)->view('site');
        } else {
            die('站点未找到！');
        }
    }

    public function site404()
    {
        $domain = $_SERVER['HTTP_HOST'];
        if($domain!=config_item('site_domain')) {
            header("location:http://".config_item('site_domain')."/404");
        }
        $this->load->view('404');
    }
    public function captcha() {
        $this->load->helper('captcha');
        $captcha_url = $this->options['site_url'].'/captcha/';
        $vals = array(
            'word'      => rand(100001,999999),
            'img_path'  => './captcha/',
            'img_url'   => $captcha_url,
            'font_path' => './path/to/fonts/texb.ttf',
            'img_width' => '100',
            'img_height'    => 30,
            'expiration'    => 1,
            'word_length'   => 6,
            'font_size' => 18,
            'img_id'    => 'Imageid',
            'pool'      => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

            // White background and border, black text and red grid
            'colors'    => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
                'grid' => array(255, 40, 40)
            )
        );

        $cap = create_captcha($vals);
        session_start();
        $_SESSION['captcha'] = $cap['word'];
        echo $captcha_url.$cap['filename'];
    }
}
