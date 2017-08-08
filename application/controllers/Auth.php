<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Front_Controller.php";

class Auth extends Front_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('UserModel');
    }

    public function index() {
        $this->load->view('auth/login');
    }
    public function register() {
        $this->load->view('auth/signup');
    }

    public function login() {
        $result= $this->UserModel->loginCheck($_POST["email"],md5($_POST["password"]));
        if ($result) {
            $newdata = array(
                'login_user_id'  => $result->id,
                'login_user_name'     => $result->fullname,
                'login_user_email'     => $result->email_address,
                'login_user_type'     => $result->usertype,
                'login_user_job_permit'     => $result->job_permit,
                'login_user_education_permit'     => $result->education_permit,
                'login_user_property_permit'     => $result->property_permit,
                'login_user_customer_permit'     => $result->customer_permit,
                'login_user_fullname'     => $result->fullname
            );
            $this->session->set_userdata($newdata);
            $result1['status'] = "ok";
        } else {
            $result1['status'] = "fail";
        }
        die(json_encode($result1));
    }

    public function checkEmail() {
        if ($this->UserModel->checkEmail($_POST["email"])) {
            $result['status'] = "duplicate";
        } else {
            $result['status'] = "new";
        }
        die(json_encode($result));
    }

    public function signup() {
        $input_user_data = array(
            'fullname' => $_POST["fullname"],
            'email_address' => $_POST["email"],
            'password' => md5($_POST["password"]),
            'usertype' => $_POST["user_type"]
        );
        $inserted_id=$this->UserModel->signUp($input_user_data);
        if ($inserted_id) {
            $newdata = array(
                'login_user_id'  => $inserted_id,
                'login_user_name'     => $_POST["fullname"],
                'login_user_email'     => $_POST["email"],
                'login_user_fullname'     => '',
                'login_user_type'     => $_POST["user_type"],
                'login_user_job_permit'     => 'Non Approved',
                'login_user_education_permit'     => 'Non Approved',
                'login_user_property_permit'     => 'Non Approved',
                'login_user_customer_permit'     => 'Non Approved',
                'login_user_fullname'     => ''
            );
            $this->session->set_userdata($newdata);
            redirect("home");
        }
    }

    public function signout() {
        $this->session->unset_userdata('login_user_id');
        $this->session->unset_userdata('login_user_name');
        $this->session->unset_userdata('login_user_email');
        $this->session->unset_userdata('login_user_type');
        $this->session->unset_userdata('login_user_job_permit');
        $this->session->unset_userdata('login_user_education_permit');
        $this->session->unset_userdata('login_user_property_permit');
        $this->session->unset_userdata('login_user_customer_permit');
        $this->session->unset_userdata('login_user_fullname');
        redirect("home");
    }

}
