<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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

        $query = $this->db->get_where('config');
        $cfgs = $query->result_array();
        foreach ($cfgs as $v) {
            $this->cfgs[$v['name']] = $v['value'];
        }
    }
    public function index()
    {
        $limit = 18;
        $offset = 0;

        $query = $this->db
            ->select('
                media_movies.*, 
                media_type.Name as type_txt, 
                media_cats.Name as cat_txt,
                media_country.Name as country_txt,
                ')
            ->from('media_movies')
            ->where('Issue', 1)
            ->where('Status', '<>',4)
            ->join('media_type', 'media_type.Id = media_movies.Type', 'left')
            ->join('media_cats', 'media_cats.Id = media_movies.Cats', 'left')
            ->join('media_country', 'media_country.Code = media_movies.Country', 'left')
            ->limit($limit, $offset);

        $hot = $query->order_by('Score', 'DESC')->get()->result_array();  //获取热门影片

        foreach ($hot as &$v) {
            if (empty($v['Image_big'])) {
                $v['Image_big_t'] = '/assets/images/no.jpg';
            } else {
                if (strpos($v['Image_big'], 'http://') !== false || strpos($v['Image_big'], 'https://') !== false) {
                    $v['Image_big_t'] = $v['Image_big'];
                } else {
                    $v['Image_big_t'] = $this->cfgs['img_url'] . $v['Image_big'];
                }
            }
        }

        $query = $this->db
            ->select('
                media_movies.*, 
                media_type.Name as type_txt, 
                media_cats.Name as cat_txt,
                media_country.Name as country_txt,
                ')
            ->from('media_movies')
            ->where('Issue', 1)
            ->where('Status', '<>',4)
            ->join('media_type', 'media_type.Id = media_movies.Type', 'left')
            ->join('media_cats', 'media_cats.Id = media_movies.Cats', 'left')
            ->join('media_country', 'media_country.Code = media_movies.Country', 'left')
            ->limit($limit, $offset);

        $movie = $query->order_by('Update_time', 'DESC')->get()->result_array();  //获取最新电影

        foreach ($movie as &$v) {
            if (empty($v['Image_big'])) {
                $v['Image_big_t'] = '/assets/images/no.jpg';
            } else {
                if (strpos($v['Image_big'], 'http://') !== false || strpos($v['Image_big'], 'https://') !== false) {
                    $v['Image_big_t'] = $v['Image_big'];
                } else {
                    $v['Image_big_t'] = $this->cfgs['img_url'] . $v['Image_big'];
                }
            }
        }

        $query = $this->db
            ->select('
                media_movies.*, 
                media_type.Name as type_txt, 
                media_cats.Name as cat_txt,
                media_country.Name as country_txt,
                ')
            ->from('media_movies')
            ->where('Issue', 1)
            ->where('Status', '<>',4)
            ->join('media_type', 'media_type.Id = media_movies.Type', 'left')
            ->join('media_cats', 'media_cats.Id = media_movies.Cats', 'left')
            ->join('media_country', 'media_country.Code = media_movies.Country', 'left')
            ->limit($limit, $offset);

        $tv = $query->order_by('Update_time', 'DESC')->get()->result_array();  //获取最新电视剧

        foreach ($tv as &$v) {
            if (empty($v['Image_big'])) {
                $v['Image_big_t'] = '/assets/images/no.jpg';
            } else {
                if (strpos($v['Image_big'], 'http://') !== false || strpos($v['Image_big'], 'https://') !== false) {
                    $v['Image_big_t'] = $v['Image_big'];
                } else {
                    $v['Image_big_t'] = $this->cfgs['img_url'] . $v['Image_big'];
                }
            }
        }

        $query = $this->db
            ->select('
                media_movies.*, 
                media_type.Name as type_txt, 
                media_cats.Name as cat_txt,
                media_country.Name as country_txt,
                ')
            ->from('media_movies')
            ->where('Issue', 1)
            ->where('Status', '<>',4)
            ->join('media_type', 'media_type.Id = media_movies.Type', 'left')
            ->join('media_cats', 'media_cats.Id = media_movies.Cats', 'left')
            ->join('media_country', 'media_country.Code = media_movies.Country', 'left')
            ->limit($limit, $offset);

        $variety = $query->order_by('Update_time', 'DESC')->get()->result_array();  //获取最新综艺

        foreach ($variety as &$v) {
            if (empty($v['Image_big'])) {
                $v['Image_big_t'] = '/assets/images/no.jpg';
            } else {
                if (strpos($v['Image_big'], 'http://') !== false || strpos($v['Image_big'], 'https://') !== false) {
                    $v['Image_big_t'] = $v['Image_big'];
                } else {
                    $v['Image_big_t'] = $this->cfgs['img_url'] . $v['Image_big'];
                }
            }
        }

        $query = $this->db
            ->select('
                media_movies.*, 
                media_type.Name as type_txt, 
                media_cats.Name as cat_txt,
                media_country.Name as country_txt,
                ')
            ->from('media_movies')
            ->where('Issue', 1)
            ->where('Status', '<>',4)
            ->join('media_type', 'media_type.Id = media_movies.Type', 'left')
            ->join('media_cats', 'media_cats.Id = media_movies.Cats', 'left')
            ->join('media_country', 'media_country.Code = media_movies.Country', 'left')
            ->limit($limit, $offset);

        $cartoon = $query->order_by('Update_time', 'DESC')->get()->result_array();  //获取最新动漫

        foreach ($cartoon as &$v) {
            if (empty($v['Image_big'])) {
                $v['Image_big_t'] = '/assets/images/no.jpg';
            } else {
                if (strpos($v['Image_big'], 'http://') !== false || strpos($v['Image_big'], 'https://') !== false) {
                    $v['Image_big_t'] = $v['Image_big'];
                } else {
                    $v['Image_big_t'] = $this->cfgs['img_url'] . $v['Image_big'];
                }
            }
        }


        $data['hot'] = $hot;
        $data['movie'] = $movie;
        $data['tv'] = $tv;
        $data['variety'] = $variety;
        $data['cartoon'] = $cartoon;

        $this->load->view('index', $data);
    }
    public function about()
    {
        $this->load->view('about');
    }

    public function contact()
    {
        $this->load->view('contact');
    }

    public function movielist()
    {
//        $field = $_GET['search_field'];
//        $keyword = '%'.$_GET['keyword'].'%';
//        $sql = "select count(*) num from app_media_movies where domain='$sub_domain' and $field like '$keyword'";
//
//        $res = $this->db->query($sql)->row_array();
//        $total = $res['num'];
//        $pages = ceil($total / $limit);  //页数
//        $url = site_url('admin/transaction');
//
//        $query = $this->db
//            ->select('media_movies.*, payment.sprovider_text, payment.gateway_text')
//            ->from('paylogs')
//            ->where('domain', $_SESSION['userinfo']['sub_domain'])
//            ->like($field, $_GET['keyword'], 'both')
//            ->join('payment', 'payment.gateway = paylogs.pay_type')
//            ->limit($limit, $offset)
//            ->order_by('datetime', 'DESC')
//            ->get()
//            ->result_array();


        $cats = $this->db->get_where('media_cats', array('Pid' =>5))->result_array();  //电影
        $tags = $this->db->get_where('media_tags')->result_array();  //标签
        $countrys = $this->db->get_where('media_country')->result_array();  //标签

        $from = 1998;
        $to = date('Y');
        $years = [];
        for ($i = $to; $i>= $from; $i--) {
            $years[] = $i;
        }

        $languages = array('国语','英语','韩语','日语','法语','德语','其它');

        $data['cats'] = $cats;
        $data['tags'] = $tags;
        $data['countrys'] = $countrys;
        $data['years'] = $years;
        $data['languages'] = $languages;
        $this->load->view('movielist',$data);
    }

    public function player()
    {
        $limit = 6;
        $offset = mt_rand(0,10);

        $detail = $this->db
            ->select('
                media_movies.*,
                media_type.Name as type_txt, 
                media_cats.Name as cat_txt,
                media_country.Name as country_txt,
                ')
            ->from('media_movies')
            ->where('media_movies.Id',$_GET['mid'])
            ->join('media_type', 'media_type.Id = media_movies.Type', 'left')
            ->join('media_cats', 'media_cats.Id = media_movies.Cats', 'left')
            ->join('media_country', 'media_country.Code = media_movies.Country', 'left')
            ->get()
            ->row_array();

        if(empty($detail['Image_big'])) {
            $detail['Image_big_t'] = '/assets/images/no.jpg';
        } else {
            if(strpos($detail['Image_big'], 'http://') !== false || strpos($detail['Image_big'], 'https://') !== false) {
                $detail['Image_big_t'] = $detail['Image_big'];
            } else {
                $detail['Image_big_t'] = $this->cfgs['img_url'] . $detail['Image_big'];
            }
        }


        $str = '';
        $Actors = explode(',', $detail['Actors']);
        foreach ($Actors as $v) {
            $res = $this->db->get_where('media_actors', array('Id' => $v))->row_array();
            $name = $res['Name'];
            if($str) $str = $str.'&nbsp;'.$name;
            else $str = $name;
        }
        $detail['actors_txt'] = $str;

        $str = '';
        $Directors = explode(',', $detail['Directors']);
        foreach ($Directors as $v) {
            $res = $this->db->get_where('media_actors', array('Id' => $v))->row_array();
            $name = $res['Name'];
            if($str) $str = $str.'&nbsp;'.$name;
            else $str = $name;
        }
        $detail['directors_txt'] = $str;

        $str = '';
        $Tags = explode(',', $detail['Tags']);
        foreach ($Tags as $v) {
            $res = $this->db->get_where('media_tags', array('Id' => $v))->row_array();
            $name = $res['Name'];
            if($str) $str = $str.'&nbsp;'.$name;
            else $str = $name;
        }
        $detail['tags_txt'] = $str;


        $episodes = $this->db
            ->select('*')
            ->from('media_episodes')
            ->where('Issue', 1)
            ->where('media_episodes.MId',$_GET['mid'])
            ->order_by('Season')
            ->order_by('Episode')
            ->get()
            ->result_array();


        $rand = $this->db
            ->select('
                media_movies.*, 
                media_type.Name as type_txt, 
                media_cats.Name as cat_txt,
                media_country.Name as country_txt,
                ')
            ->from('media_movies')
            ->where('Issue', 1)
            ->where('Status', '<>',4)
            ->join('media_type', 'media_type.Id = media_movies.Type', 'left')
            ->join('media_cats', 'media_cats.Id = media_movies.Cats', 'left')
            ->join('media_country', 'media_country.Code = media_movies.Country', 'left')
            ->limit($limit, $offset)
            ->order_by('Score', 'RANDOM')
            ->get()
            ->result_array();  //获取热门影片

        $data['rand'] = $rand;
        $data['detail'] = $detail;
        $data['episodes'] = $episodes;

        $this->load->view('player', $data);
    }
    
    public function apply()
    {
        if(strtolower($_SERVER["REQUEST_METHOD"]) == 'post') {
            $data = $_POST;
            $sub_domain = trim($data['sub_domain']).'.'.$this->configs['site_domain'];

            $query = $this->db->get_where('user', array('sub_domain' => $sub_domain));
            $res = $query->row_array();
            if($res) {
                echo  json_encode(array('code'=>-1, 'msg'=>'子域名已经存在！'));
            } else {

                $insert['email'] = $data['email'];
                $insert['name'] = $data['username'];
                $insert['contact'] = $data['contact'];
                $insert['sub_domain'] = $sub_domain;
                $insert['domain'] = $this->configs['site_domain'];
                $insert['website'] = $data['site_url'];
                $insert['logo'] = $data['logo'];
                $insert['createtime'] = time();
                $insert['message'] = $data['message'];
                $insert['site_name'] = $data['site_name'];

                $this->db->insert('user', $insert);

                echo json_encode(array('code' => 0, 'msg' => '提交成功，审核中'));
            }
        } else {
            $data['configs'] = $this->configs;
            $this->load->view('apply', $data);
        }
    }
    public function site()
    {
        $query = $this->db->get_where('user', array('sub_domain' => $_SERVER['HTTP_HOST']));
        $data = $query->row_array();

        if($data) {
            $payments = [];
            $query = $this->db->get("payment")->result_array();
            foreach ($query as $v) {
                $payments[$v['sprovider']]['sprovider'] = $v['sprovider'];
                $payments[$v['sprovider']]['sprovider_text'] = $v['sprovider_text'];
                $payments[$v['sprovider']]['label'] = $v['label'];
                $payments[$v['sprovider']]['gateway'][$v['gateway']] = $v;
            }
            $pys = explode(',', $data['payment']);
            foreach ($payments as $k=>$v) {
                if(in_array($v['sprovider'],$pys)) {
                    $status = 0;
                    foreach ($v['gateway'] as $vv) {
                        if ($vv['status'] == 1) {
                            $status = 1;
                        }
                    }
                    if (!$status) {
                        unset($payments[$k]);
                    }
                } else {
                    unset($payments[$k]);
                }
            }
            $data['payments'] = $payments;

            $bankinfo = $this->db->get("bankinfo")->result_array();
            $data['bankinfo'] = $bankinfo;

            $this->load->vars('data', $data)->view('site');
        } else {
            die('站点未找到！');
        }
    }

    public function site404()
    {
        $domain = $_SERVER['HTTP_HOST'];
        if($domain!=$this->configs['site_domain']) {
            header("location:http://".$this->configs['site_domain']."/404");
        }
        $this->load->view('404');
    }
    public function captcha() {
        $this->load->helper('captcha');
        $captcha_url = $this->configs['site_url'].'/captcha/';
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
