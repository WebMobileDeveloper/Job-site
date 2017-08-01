<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {

        $this->db->select("*");
        $this->db->from('users');
        $query = $this->db->get();
        $result['login_users'] = $query->result();
        $this->load->view('admin/user/user', $result);
    }

    public function edit() {
        $user_id = $this->uri->rsegment(3, 0);
        if ($user_id) {
            $this->db->select("*");
            $this->db->from('users');
            $this->db->where('id', $user_id);

            $query = $this->db->get();
            $result['user_data'] = $query->result();
            $this->load->view('admin/user/user_edit', $result);
        } else {
            $this->load->view('admin/user/user_edit');
        }
    }

    public function save_user() {
        $post_data = $this->input->post();
     
        $permit = '';
        $k=0;
        foreach ($post_data['company_id'] as $key => $value) {
            if($k==0){
                 $permit =$key;
            }else{
                $permit =$permit .",".$key;
            }
           $k++;
        }
        
//           var_dump($post_data);
//        exit;
        if ($post_data['user_id'] == "") {

            $input_user_data = array(
                'fullname' => $post_data['fullname'],
                'email_address' => $post_data['email_address'],
                'password' => md5($post_data['password']),
                'company_permit'=>$permit
            );
            $result = $this->db->insert('users', $input_user_data);
        } else {

            $input_user_data = array(
                'fullname' => $post_data['fullname'],
                'email_address' => $post_data['email_address'],
                'company_permit'=>$permit
            );
            $result = $this->db->where('id',$post_data['user_id'])->update('users', $input_user_data);
        }


        if ($result) {
            redirect("admin/user");
        }
    }

    public function delete() {

        $id = $this->uri->rsegment(3, 0);
        $this->db->where("id", $id);
        $this->db->delete("users");
        redirect("admin/user");
    }

}
