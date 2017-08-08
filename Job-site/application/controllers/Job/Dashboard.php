<?php

require_once APPPATH . "core/Front_Controller.php";
class Dashboard extends Front_Controller {

    public $login_user_id;

    public function __construct() {
        parent::__construct();
//         $this->load->library('session');
        if($this->session->userdata('login_user_id')==''){
            redirect("auth");
        }
    }
    public function index() {
        $data['selected_menu']='Dashboard';
        $this->front_showpage('post/dashboard',$data);
    }
    public function edit_profile() {
        $data['selected_menu']='Edit Profile';
        $data['title']='Edit Your Profile';
        $this->front_showpage('post/dashboard',$data);
        //$this->front_showpage('post/edit_profile',$data);
    }
    public function resume() {
        $data['selected_menu']='Resume';
        $data['title']='The Resumes You Got';
        $this->front_showpage('post/dashboard',$data);
    }
    public function active_jobs() {
        $data['selected_menu']='Active Jobs';
        $data['title']='Active Jobs';
        $this->front_showpage('post/dashboard',$data);
    }
    public function featured_jobs() {
        $data['selected_menu']='Featured Jobs';
        $data['title']='Featured Jobs';
        $this->front_showpage('post/dashboard',$data);
    }
    public function followers() {
        $data['selected_menu']='Followers';
        $data['title']='Company Followers';
        $this->front_showpage('post/dashboard',$data);
    }


}
