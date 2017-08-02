<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public $login_user_id;

    public function __construct() {
        parent::__construct();
//         $this->load->library('session');
    }

    public function index() {
        $login_user_id = $this->session->userdata('login_admin_id');
//        var_dump($login_user_id);exit;
        if ($login_user_id == "") {
            redirect("admin/auth");
        } else {            
            $this->load->view('admin/home');
        }
    }

}
