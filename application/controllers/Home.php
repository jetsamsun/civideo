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


        // 热门影视

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
            ->limit(10, 0);

        $hot = $query->order_by('media_movies.Score', 'DESC')->get()->result_array();  //获取热门影片

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

            $str = '';
            $acs = [];
            if($v['Actors']) {
                $Actors = explode(',', $v['Actors']);
                foreach ($Actors as $act) {
                    $res = $this->db->get_where('media_actors', array('Id' => $act))->row_array();

                    if (empty($res['Image'])) {
                        $res['Image_t'] = '/assets/images/portrait.jpg';
                    } else {
                        if (strpos($res['Image'], 'http://') !== false || strpos($res['Image'], 'https://') !== false) {
                            $res['Image_t'] = $res['Image'];
                        } else {
                            $res['Image_t'] = $this->cfgs['img_url'] . $res['Image'];
                        }
                    }
                    $acs[] = $res;

                    $name = $res['Name'];
                    if ($str) $str = $str . ' / ' . $name;
                    else $str = $name;
                }
            }
            $v['actors_txt'] = $str;
        }


        // 最新电影
        $movieid = 5;
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
            ->where('media_cats.Pid', $movieid)
            ->join('media_country', 'media_country.Code = media_movies.Country', 'left')
            ->limit(21, 0);

        $movie = $query->order_by('media_movies.Update_time', 'DESC')->get()->result_array();  //获取最新电影

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

            $str = '';
            $acs = [];
            if($v['Actors']) {
                $Actors = explode(',', $v['Actors']);
                foreach ($Actors as $act) {
                    $res = $this->db->get_where('media_actors', array('Id' => $act))->row_array();

                    if (empty($res['Image'])) {
                        $res['Image_t'] = '/assets/images/portrait.jpg';
                    } else {
                        if (strpos($res['Image'], 'http://') !== false || strpos($res['Image'], 'https://') !== false) {
                            $res['Image_t'] = $res['Image'];
                        } else {
                            $res['Image_t'] = $this->cfgs['img_url'] . $res['Image'];
                        }
                    }
                    $acs[] = $res;

                    $name = $res['Name'];
                    if ($str) $str = $str . ' / ' . $name;
                    else $str = $name;
                }
            }
            $v['actors_txt'] = $str;
        }


        // 热播电视剧
        $tvid = 7;
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
            ->where('media_cats.Pid', $tvid)
            ->join('media_country', 'media_country.Code = media_movies.Country', 'left')
            ->limit($limit, $offset);

        $tv = $query->order_by('media_movies.Score', 'DESC')->get()->result_array();  //获取最新电视剧

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

            $str = '';
            $acs = [];
            if($v['Actors']) {
                $Actors = explode(',', $v['Actors']);
                foreach ($Actors as $act) {
                    $res = $this->db->get_where('media_actors', array('Id' => $act))->row_array();

                    if (empty($res['Image'])) {
                        $res['Image_t'] = '/assets/images/portrait.jpg';
                    } else {
                        if (strpos($res['Image'], 'http://') !== false || strpos($res['Image'], 'https://') !== false) {
                            $res['Image_t'] = $res['Image'];
                        } else {
                            $res['Image_t'] = $this->cfgs['img_url'] . $res['Image'];
                        }
                    }
                    $acs[] = $res;

                    $name = $res['Name'];
                    if ($str) $str = $str . ' / ' . $name;
                    else $str = $name;
                }
            }
            $v['actors_txt'] = $str;
        }

        $ranking = $this->db
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
            ->where('media_cats.Pid', $tvid)
            ->join('media_country', 'media_country.Code = media_movies.Country', 'left')
            ->limit(10, 0)
            ->order_by('Score', 'RANDOM')
            ->get()
            ->result_array();  //获取热门影片

        $data['ranking'] = $ranking;


        // 综艺频道
        $varietyid = 19;
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
            ->where('media_cats.Pid', $varietyid)
            ->join('media_country', 'media_country.Code = media_movies.Country', 'left')
            ->limit(12, 0);

        $variety = $query->order_by('media_movies.Update_time', 'DESC')->get()->result_array();  //获取最新综艺

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

            if (empty($v['Image'])) {
                $v['Image_t'] = '/assets/images/no.jpg';
            } else {
                if (strpos($v['Image'], 'http://') !== false || strpos($v['Image'], 'https://') !== false) {
                    $v['Image_t'] = $v['Image'];
                } else {
                    $v['Image_t'] = $this->cfgs['img_url'] . $v['Image'];
                }
            }
        }


        // 精彩动漫
        $cartoonid = 8;
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
            ->where('media_cats.Pid', $cartoonid)
            ->join('media_country', 'media_country.Code = media_movies.Country', 'left')
            ->limit(7, 0);

        $cartoon = $query->order_by('media_movies.Update_time', 'DESC')->get()->result_array();  //获取最新动漫

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

    public function search() {
        $keyword = isset($_GET['wd'])?$_GET['wd']:'';


        $query = $this->db->select('
                media_movies.*,
                media_type.Name as type_txt, 
                media_cats.Name as cat_txt,
                media_country.Name as country_txt,
                ');
        $query->from('media_movies');
        if(!empty($keyword)) {
            $query->like('media_movies.Name', $keyword, 'both');
        }

        $query->join('media_type', 'media_type.Id = media_movies.Type', 'left');
        $query->join('media_cats', 'media_cats.Id = media_movies.Cats', 'left');
        $query->join('media_country', 'media_country.Code = media_movies.Country', 'left');
        $query->limit(10, 0);

        $movies = $query->get()->result_array();
        foreach ($movies as &$v) {
            if (empty($v['Image_big'])) {
                $v['Image_big_t'] = '/assets/images/no.jpg';
            } else {
                if (strpos($v['Image_big'], 'http://') !== false || strpos($v['Image_big'], 'https://') !== false) {
                    $v['Image_big_t'] = $v['Image_big'];
                } else {
                    $v['Image_big_t'] = $this->cfgs['img_url'] . $v['Image_big'];
                }
            }

            $str = '';
            $acs = [];
            if($v['Actors']) {
                $Actors = explode(',', $v['Actors']);
                foreach ($Actors as $act) {
                    $res = $this->db->get_where('media_actors', array('Id' => $act))->row_array();

                    if (empty($res['Image'])) {
                        $res['Image_t'] = '/assets/images/portrait.jpg';
                    } else {
                        if (strpos($res['Image'], 'http://') !== false || strpos($res['Image'], 'https://') !== false) {
                            $res['Image_t'] = $res['Image'];
                        } else {
                            $res['Image_t'] = $this->cfgs['img_url'] . $res['Image'];
                        }
                    }
                    $acs[] = $res;

                    $name = $res['Name'];
                    if ($str) $str = $str . ' / ' . $name;
                    else $str = $name;
                }
            }
            $v['actors_txt'] = $str;

            $str = '';
            if($v['Directors']) {
                $Directors = explode(',', $v['Directors']);
                foreach ($Directors as $dtr) {
                    $res = $this->db->get_where('media_actors', array('Id' => $dtr))->row_array();
                    $name = $res['Name'];
                    if ($str) $str = $str . '&nbsp;' . $name;
                    else $str = $name;
                }
            }
            $v['directors_txt'] = $str;


            $str = '';
            if($v['Tags']) {
                $Tags = explode(',', $v['Tags']);
                foreach ($Tags as $tg) {
                    $res = $this->db->get_where('media_tags', array('Id' => $tg))->row_array();
                    $name = $res['Name'];
                    if ($str) $str = $str . '&nbsp;' . $name;
                    else $str = $name;
                }
            }
            $v['tags_txt'] = $str;
        }

        $data['movies'] = $movies;
        $data['keyword'] = $keyword;

        $this->load->view('search',$data);
    }

    public function videolist()
    {
        $limit = 36;
        $offset = 0;

        if($_GET['channel'] == 'movie') {
            $channelid = 5;
        } else if($_GET['channel'] == 'tv') {
            $channelid = 7;
        } else if($_GET['channel'] == 'variety') {
            $channelid = 19;
        } else if($_GET['channel'] == 'cartoon') {
            $channelid = 8;
        } else {
            exit('Channel Undefined');
        }


        $cats = $this->db->get_where('media_cats', array('Pid' =>$channelid))->result_array();
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


        // 按条件查询
        $arg = isset($_GET['arg'])?$_GET['arg']:'';   //点击位置
        $keyword = isset($_GET['key'])?$_GET['key']:'';   // 按关键字
        $cat = isset($_GET['cat'])?$_GET['cat']:'';  // 按类型
        $tag = isset($_GET['tag'])?$_GET['tag']:'';  // 按标签
        $cty = isset($_GET['cty'])?$_GET['cty']:'';   // 按地区
        $year = isset($_GET['year'])?$_GET['year']:'';   // 按年份
        $lang = isset($_GET['lang'])?$_GET['lang']:'';    // 按语言
        $sort = isset($_GET['sort'])?$_GET['sort']:'time';    // 按排序
        $page = isset($_GET['page'])?$_GET['page']:1;   // 按页码

        $data['arg'] = $arg;
        $data['keyword'] = $keyword;
        $data['cat'] = $cat;
        $data['tag'] = $tag;
        $data['cty'] = $cty;
        $data['year'] = $year;
        $data['lang'] = $lang;
        $data['sort'] = $sort;


        $query = $this->db->select('media_movies.*');
        $query->from('media_movies');

        if($arg == 'search' && !empty($keyword)) {
            $query->like('media_movies.Name', $keyword, 'both');
        }
        if (!empty($tag)) {
            $query->like('media_movies.Tags', $tag, 'both');
        }
        if (!empty($cat)) {
            $query->where('media_movies.Cats', $cat);
        }
        if (!empty($cty)) {
            $query->where('media_movies.Country', $cty);
        }
        if (!empty($year)) {
            $query->where('media_movies.Year', $year);
        }
        if (!empty($lang)) {
            //$query->like('media_movies.Langs', $lang, 'both');
        }

        $query->join('media_cats', 'media_cats.Id = media_movies.Cats');
        $query->where('media_cats.Pid', $channelid);   // 电影

        if ($sort == 'time') {
            $query->order_by('media_movies.Update_time', 'DESC');
        } else if($sort == 'hot') {
            $query->order_by('media_movies.Score', 'DESC');
        } else if($sort == 'sore') {
            $query->order_by('media_movies.Score', 'DESC');
        }

        $query_count = clone($query);
        $total = $query_count->count_all_results();
        $pages = ceil($total / $limit);  //页数
        if($pages == 0) $pages = 1;
        if($page > $pages) $page = 1;
        $offset = $limit * ($page-1);


        $show_page_num = 5;
        $last = $page < $show_page_num ? ($pages < $show_page_num ? $pages : $show_page_num) : ($page + 1 > $pages ? $pages : $page + 1);  //最后一位页码
        $pages_show = [];
        while ($last && $show_page_num) {
            $pages_show[] = $last--;
            $show_page_num--;
        }
        $pages_show = array_reverse($pages_show);


        $data['total'] = $total;  //总条数
        $data['page'] = $page;   //当前页
        $data['pages'] = $pages;   //页数
        $data['pages_show'] = $pages_show;   //显示哪些页
        $data['channel'] = $_GET['channel'];


        $query->limit($limit, $offset);

        $movies = $query->get()->result_array();

        foreach ($movies as &$v) {
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

        $data['movies'] = $movies;
        $this->load->view('videolist', $data);
    }

    public function player()
    {
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
        $acs = [];
        if($detail['Actors']) {
            $Actors = explode(',', $detail['Actors']);
            foreach ($Actors as $v) {
                $res = $this->db->get_where('media_actors', array('Id' => $v))->row_array();

                if (empty($res['Image'])) {
                    $res['Image_t'] = '/assets/images/portrait.jpg';
                } else {
                    if (strpos($res['Image'], 'http://') !== false || strpos($res['Image'], 'https://') !== false) {
                        $res['Image_t'] = $res['Image'];
                    } else {
                        $res['Image_t'] = $this->cfgs['img_url'] . $res['Image'];
                    }
                }
                $acs[] = $res;

                $name = $res['Name'];
                if ($str) $str = $str . '&nbsp;' . $name;
                else $str = $name;
            }
        }
        $detail['actors_txt'] = $str;


        $str = '';
        if($detail['Directors']) {
            $Directors = explode(',', $detail['Directors']);
            foreach ($Directors as $v) {
                $res = $this->db->get_where('media_actors', array('Id' => $v))->row_array();
                $name = $res['Name'];
                if ($str) $str = $str . '&nbsp;' . $name;
                else $str = $name;
            }
        }
        $detail['directors_txt'] = $str;


        $str = '';
        if($detail['Tags']) {
            $Tags = explode(',', $detail['Tags']);
            foreach ($Tags as $v) {
                $res = $this->db->get_where('media_tags', array('Id' => $v))->row_array();
                $name = $res['Name'];
                if ($str) $str = $str . '&nbsp;' . $name;
                else $str = $name;
            }
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


        $limit = 6;
        $offset = 0;
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

        foreach ($rand as &$v) {
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

        $limit = 10;
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

        $hots = $query->order_by('Score', 'DESC')->get()->result_array();  //获取热门影片

        foreach ($hots as &$v) {
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

        $data['rand'] = $rand;
        $data['detail'] = $detail;
        $data['episodes'] = $episodes;
        $data['hots'] = $hots;
        $data['acs'] = $acs;


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
