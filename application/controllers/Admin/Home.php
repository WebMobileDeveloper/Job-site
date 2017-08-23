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
        $this->data['top_menu']='';
        $this->data['selected_menu']='';
    }

    public function index()
    {
        $this->data['top_menu']='Dashboard';
        $this->data['selected_menu'] = 'dashboard';
        $this->data['userCounts'] = $this->AdminModel->getUserCount();
        $this->data['postCounts'] = $this->AdminModel->getPostCount();
        $this->admin_showpage('admin/home', $this->data);

    }

    public function edit()
    {
        $this->data['top_menu']='Dashboard';
        $this->data['selected_menu'] = 'edit';
        $this->admin_showpage('admin/home', $this->data);
    }


    public function sellers()
    {
        $this->data['top_menu']='Users';
        $this->data['selected_menu'] = 'sellers';
        $this->data['sellers'] = $this->AdminModel->getSellers();
        $this->admin_showpage('admin/home', $this->data);
    }

    public function customers()
    {
        $this->data['top_menu']='Users';
        $this->data['selected_menu'] = 'customers';
        $this->data['customers'] = $this->AdminModel->getCustomers();
        $this->admin_showpage('admin/home', $this->data);
    }

    public function allPosts()
    {
        $this->data['top_menu']='Posts';
        $this->data['selected_menu'] = 'allPosts';
        $this->data['posts'] = $this->AdminModel->getPosts();
        $this->admin_showpage('admin/home', $this->data);
    }

    public function featuredPosts()
    {
        $this->data['top_menu']='Posts';
        $this->data['selected_menu'] = 'featuredPosts';
        $this->data['posts'] = $this->AdminModel->getFeaturedPosts();
        $this->admin_showpage('admin/home', $this->data);
    }

    public function payment()
    {
        $this->data['top_menu']='Payment';
        $this->data['selected_menu'] = 'allPayments';
        $this->data['sellers'] = $this->AdminModel->getPaymentData();
        $this->admin_showpage('admin/home', $this->data);
    }
    public function paymentsBySeller()
    {
        $this->data['top_menu']='Payment';
        $this->data['selected_menu'] = 'paymentsBySeller';
        $this->data['sellers'] = $this->AdminModel->getPaymentDataBySeller();
        $this->admin_showpage('admin/home', $this->data);
    }
    public function sellerPayments($seller_id)
    {
        $this->data['top_menu']='Payment';
        $this->data['selected_menu'] = 'sellerPayments';
        $this->data['sellers'] = $this->AdminModel->getPaymentDataBySeller($seller_id);
        $this->data['seller_id'] = $seller_id;
        $this->admin_showpage('admin/home', $this->data);
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

    public function getPaymentDataByID()
    {
        $result = $this->AdminModel->getPaymentDataByID($_POST['id']);
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
        $result = $this->AdminModel->savePayment($_POST['id'], $_POST['payment_method'], $_POST['bank_name'], $_POST['package'],$slip_name,$_POST['note']
            ,$_POST['paid_amount'],$_POST['charge_count']);
        //die(json_encode($result));
        redirect(site_url('admin/home/payment'));
    }
    public function addPayment($personal=0)
    {
        $slip_name='';
        if ($_FILES['slip']["tmp_name"] != '') {
            $slip_name= "." . $_POST['modalExt'];
        }
        $result = $this->AdminModel->addPayment($_POST['id'], $_POST['payment_method'], $_POST['bank_name'], $_POST['package'],$slip_name,$_POST['note']
            ,$_POST['paid_amount'],$_POST['charge_count']);
        if ($_FILES['slip']["tmp_name"] != '') {
            $target_dir = APPPATH . "../assets/front/bank_slip/";
            $target_file = $target_dir . $result;
            move_uploaded_file($_FILES['slip']["tmp_name"], $target_file);
        }
        if($personal=1){
            redirect(site_url('admin/home/sellerPayments/'.$_POST['id']));
        }else {
            redirect(site_url('admin/home/paymentsBySeller'));
        }
    }
}
