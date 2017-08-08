<?php

require_once APPPATH . "core/Front_Controller.php";
class Post extends Front_Controller {

    public $login_user_id;

    public function __construct() {
        parent::__construct();
//         $this->load->library('session');
    }

    public function index() {
        if($this->session->userdata('login_user_id')==''){
            redirect("auth");
        }
        $this->front_showpage('post/post_job');
        $this->load->view('post/postjs');
    }

    public function save(){
        $this->load->model('Post/PostModel');
        $user_id=$_SESSION['login_user_id'];
        $category=implode(",",$_POST['category']);
        $result=$this->PostModel->insertPost($user_id, $_POST['title'],$_POST['date'], $_POST['location'],$_POST['city'], $category, $_POST['job_type'], $_POST['experience'],$_POST['price'], $_POST['tags'], $_POST['ckeditor']);
        echo json_encode($result);
    }

}
