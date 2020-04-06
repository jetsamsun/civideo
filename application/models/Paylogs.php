<?php
/**
 * Created by PhpStorm.
 * User: navy
 * Date: 2020/2/20
 * Time: 18:58
 */


class Paylogs extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
}