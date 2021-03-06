<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . "core/Admin_Controller.php";
class Auth extends Admin_Controller {

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
    public function change_email(){
        $this->db->where('id', $this->admin_user_id);
        $this->db->set('email_address', $_POST['email']);
        $this->db->update('users');
        $this->session->set_userdata('admin_user_email', $_POST['email']);
        redirect('admin/home/edit');
    }

    public function change_pass(){
        $this->db->where('id', $this->admin_user_id);
        $this->db->set('password', md5($_POST['password']));
        $this->db->update('users');
        redirect('admin/home/edit');
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
            $this->session->set_userdata('admin_user_id', $login_user_id);
            $this->session->set_userdata('admin_user_name', $users[0]->fullname);
            $this->session->set_userdata('admin_user_email', $users[0]->email_address);
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

    public function checkEmail() {
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
        $this->session->unset_userdata('admin_user_id');
        $this->session->unset_userdata('admin_user_name');
        $this->session->unset_userdata('admin_user_email');
        redirect("admin");
    }

}
