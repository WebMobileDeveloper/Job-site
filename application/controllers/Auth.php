<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "core/Front_Controller.php";
class Auth extends Front_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->front_showpage('Post/auth/login');
    }
    public function register() {
        $this->front_showpage('Post/auth/signup');
    }

    public function login() {
        $email = $this->input->post("email");
        $password = md5($this->input->post("password"));
        $this->db->select("*");
        $this->db->where('email_address', $email);
        $this->db->where('password', $password);
        $this->db->from('users_job_client');
        $query = $this->db->get();
        $users = $query->result();

        if (count($users) > 0) {
            $login_user_id = $users[0]->id;
            $this->session->set_userdata('login_job_client_id', $login_user_id);
            $this->session->set_userdata('login_user_name', $users[0]->fullname);
            $this->session->set_userdata('login_user_email', $users[0]->email_address);
            $result['status'] = "ok";
            $data = array(
                'logined_date' => date('Y-m-d H:i:s')
            );
            $this->db->where('id', $login_user_id);
            $this->db->update('users', $data);
        } else {
            $result['status'] = "fail";
        }
        die(json_encode($result));
    }

    public function logincheck() {
        $email = $this->input->post("email");
        $this->db->select("*");
        $this->db->where('email_address', $email);
        $this->db->from('users_job_client');
        $query = $this->db->get();
        $users = $query->result();
        if (count($users) > 0) {
            $result['status'] = "duplicate";
        } else {
            $result['status'] = "new";
        }
        die(json_encode($result));
    }

    public function signup() {
        $email = $this->input->post("email");
        $fullname = $this->input->post("fullname");
        $password = $this->input->post("password");

        $input_user_data = array(
            'fullname' => $fullname,
            'email_address' => $email,
            'password' => md5($password)
        );
        $result = $this->db->insert('users_job_client', $input_user_data);
        if ($result) {
            redirect("job/post");
        }
    }

    public function signout() {
        $this->session->unset_userdata('login_job_client_id');
        $this->session->unset_userdata('login_user_name');
        $this->session->unset_userdata('login_user_email');
        $this->session->unset_userdata('company_id');
        redirect("home");
    }

}
