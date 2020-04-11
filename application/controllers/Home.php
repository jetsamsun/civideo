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

    public function service()
    {
        $this->load->view('service');
    }

    public function detail()
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
            ->where('media_movies.Id',$_GET['id'])
            ->join('media_type', 'media_type.Id = media_movies.Type', 'left')
            ->join('media_cats', 'media_cats.Id = media_movies.Cats', 'left')
            ->join('media_country', 'media_country.Code = media_movies.Country', 'left')
            ->get()
            ->row_array();

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
            ->select('
                media_episodes.*, 
                ')
            ->from('media_episodes')
            ->where('Issue', 1)
            ->where('media_episodes.MId',$_GET['id'])
            ->order_by('Season')
            ->order_by('Episode')
            ->get()
            ->result_array();


        $arr = [];
        foreach($episodes as $v) {
            if(!empty($v['Code'])) {
                $arr[$v['Code']][] = $v;
            }
        }
        ksort($arr);
        $episodes = $arr;


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

        $rand = $query->order_by('Score', 'RANDOM')->get()->result_array();  //获取热门影片

        $data['rand'] = $rand;
        $data['detail'] = $detail;
        $data['episodes'] = $episodes;

        $this->load->view('detail', $data);
    }

    public function player()
    {
        $limit = 6;
        $offset = mt_rand(0,10);

        $detail = $this->db
            ->select('
                media_episodes.*, 
                media_type.Name as type_txt, 
                media_cats.Name as cat_txt,
                media_country.Name as country_txt,
                media_movies.Name as movies_name,
                ')
            ->from('media_episodes')
            ->where('media_episodes.Id',$_GET['id'])
            ->join('media_movies', 'media_movies.Id = media_episodes.MId', 'left')
            ->join('media_type', 'media_type.Id = media_movies.Type', 'left')
            ->join('media_cats', 'media_cats.Id = media_movies.Cats', 'left')
            ->join('media_country', 'media_country.Code = media_movies.Country', 'left')
            ->get()
            ->row_array();


        $episodes = $this->db
            ->select('*')
            ->from('media_episodes')
            ->where('Issue', 1)
            ->where('media_episodes.MId',$detail['MId'])
            ->order_by('Season')
            ->order_by('Episode')
            ->get()
            ->result_array();
        $arr = [];
        foreach($episodes as $v) {
            if(!empty($v['Code'])) {
                $arr[$v['Code']][] = $v;
            }
        }
        ksort($arr);
        $episodes = $arr;


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
