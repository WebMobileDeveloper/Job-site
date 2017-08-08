<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $param = $this->uri->rsegment(4);
        if ($param == "register") {
            $this->load->view('admin/auth/signup');
        }
        $this->load->view('admin/auth/login');
    }

    public function login() {
        $email = $this->input->post("email");
        $password = md5($this->input->post("password"));
        $this->db->select("*");
        $this->db->where('email_address', $email);
        $this->db->where('password', $password);
        $this->db->from('users');
        $query = $this->db->get();
        $users = $query->result();

        if (count($users) > 0) {
            $login_user_id = $users[0]->id;
            $this->session->set_userdata('login_admin_id', $login_user_id);
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
        $this->db->from('users');
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
        $result = $this->db->insert('users', $input_user_data);
        if ($result) {
            redirect("admin/auth");
        }
    }

    public function signout() {
        $this->session->unset_userdata('login_admin_id');
        $this->session->unset_userdata('login_user_name');
        $this->session->unset_userdata('login_user_email');
        $this->session->unset_userdata('company_id');
        redirect("admin/auth");
    }

}
