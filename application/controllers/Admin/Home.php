<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Admin_Controller.php";

class Home extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel');
    }

    public function index()
    {

        if ($this->admin_user_id == "") {
            redirect("admin/auth");
        } else {
            $data['menu'] = 'dashboard';
            $data['userCounts']=$this->AdminModel->getUserCount();
            $data['postCounts']=$this->AdminModel->getPostCount();
            $this->admin_showpage('admin/home', $data);
        }
    }
    public function edit(){
        $data['menu'] = 'edit';
        $this->admin_showpage('admin/home', $data);
    }

    public function sellers(){
        $data['menu'] = 'sellers';
        $data['sellers']=$this->AdminModel->getSellers();
        $this->admin_showpage('admin/home', $data);
    }
    public function customers(){
        $data['menu'] = 'customers';
        $data['customers']=$this->AdminModel->getCustomers();
        $this->admin_showpage('admin/home', $data);
    }
    public function allPosts(){
        $data['menu'] = 'allPosts';
        $data['posts']=$this->AdminModel->getPosts();
        $this->admin_showpage('admin/home', $data);
    }
    public function featuredPosts(){
        $data['menu'] = 'featuredPosts';
        $data['posts']=$this->AdminModel->getFeaturedPosts();
        $this->admin_showpage('admin/home', $data);
    }
    public function approve(){
        $result=$this->AdminModel->approve($_POST['user_data_id'],$_POST['value']);
        die(json_encode($result));
    }
    public function feature(){
        $result=$this->AdminModel->feature($_POST['post_id'],$_POST['value']);
        die(json_encode($result));
    }
}
