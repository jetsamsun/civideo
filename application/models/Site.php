<?php
/**
 * Created by PhpStorm.
 * User: navy
 * Date: 2020/2/20
 * Time: 18:58
 */


class Site extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getBysub($sub) {
        $this->load->database();
        $query = $this->db->from('site')->where(array('sub_domain' => $sub))->get();
        return $query->row_array();
    }
}