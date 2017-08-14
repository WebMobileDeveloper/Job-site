<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Admin_Controller.php";

class Home extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->admin_user_id == "") {
            redirect("admin/auth");
        }
        $this->load->model('AdminModel');
    }

    public function index()
    {
        $data['menu'] = 'dashboard';
        $data['userCounts'] = $this->AdminModel->getUserCount();
        $data['postCounts'] = $this->AdminModel->getPostCount();
        $this->admin_showpage('admin/home', $data);

    }

    public function edit()
    {
        $data['menu'] = 'edit';
        $this->admin_showpage('admin/home', $data);
    }

    public function payment()
    {
        $data['menu'] = 'payment';
        $data['sellers'] = $this->AdminModel->getSellers();
        $this->admin_showpage('admin/home', $data);
    }

    public function sellers()
    {
        $data['menu'] = 'sellers';
        $data['sellers'] = $this->AdminModel->getSellers();
        $this->admin_showpage('admin/home', $data);
    }

    public function customers()
    {
        $data['menu'] = 'customers';
        $data['customers'] = $this->AdminModel->getCustomers();
        $this->admin_showpage('admin/home', $data);
    }

    public function allPosts()
    {
        $data['menu'] = 'allPosts';
        $data['posts'] = $this->AdminModel->getPosts();
        $this->admin_showpage('admin/home', $data);
    }

    public function featuredPosts()
    {
        $data['menu'] = 'featuredPosts';
        $data['posts'] = $this->AdminModel->getFeaturedPosts();
        $this->admin_showpage('admin/home', $data);
    }

    public function approve()
    {
        $result = $this->AdminModel->approve($_POST['user_data_id'], $_POST['value']);
        die(json_encode($result));
    }

    public function feature()
    {
        $result = $this->AdminModel->feature($_POST['post_id'], $_POST['value']);
        die(json_encode($result));
    }

    public function getSellerData()
    {
        $result = $this->AdminModel->getSellerData($_POST['id']);
        die(json_encode($result));
    }

    public function savePayment()
    {

        $slip_name='';
        if ($_FILES['slip']["tmp_name"] != '') {
            $target_dir = APPPATH . "../assets/front/bank_slip/";
            $slip_name=$_POST['id'] . "." . $_POST['modalExt'];
            $target_file = $target_dir . $slip_name;
            move_uploaded_file($_FILES['slip']["tmp_name"], $target_file);
        }
        $result = $this->AdminModel->savePayment($_POST['id'], $_POST['payment_method'], $_POST['bank_name'], $_POST['package'],$slip_name,$_POST['note']);
        //die(json_encode($result));
        redirect(site_url('admin/home/payment'));
    }
}
