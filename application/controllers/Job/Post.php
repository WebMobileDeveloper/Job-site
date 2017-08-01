<?php

require_once APPPATH . "core/Front_Controller.php";
class Post extends Front_Controller {

    public $login_user_id;

    public function __construct() {
        parent::__construct();
//         $this->load->library('session');
    }

    public function index() {
        /*$login_user_id = $this->session->userdata('login_user_id');

        if ($login_user_id == "") {
            redirect("auth");
        } else {
            $this->load->view('home');
        }*/
        if($this->session->userdata('login_job_client_id')==''){
            redirect("job/auth");
        }
        $this->front_showpage('post/post_job');
        $this->load->view('post/postjs');
    }
    public function save(){
        $this->load->model('Post/PostModel');
        $user_id=$_SESSION['login_job_client_id'];
        $category=implode(",",$_POST['category']);

        $result=$this->PostModel->insertPost($user_id, $_POST['title'], $_POST['location'], $category, $_POST['job_type'], $_POST['experience'], $_POST['tags'], $_POST['ckeditor']);
        echo json_encode($result);
    }

}
