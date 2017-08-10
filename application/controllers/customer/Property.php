<?php

require_once APPPATH . "core/Front_Controller.php";

class Property extends Front_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->login_user_id) {
            redirect("auth");
        }
        $this->load->model("UserModel");
        $this->load->model('property/PostModel');
        $this->data['customer_info'] = $this->UserModel->getUserData($this->login_user_id);
    }

    public function index()
    {
    }

    public function applied_posts()
    {
        $per_page = 5;
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 1;
        $this->data["result"] = $this->PostModel->getAppliedPostsById($this->login_user_id, $per_page, $page);
        $this->data['total_count'] = $this->PostModel->AppliedRecordCountById($this->login_user_id,'property');
        $this->data['per_page'] = $per_page;
        $this->data['page'] = $page;

        $this->data['selected_menu'] = 'Applied Property';
        $this->data['title'] = 'Applied Properties';
        $this->data['type'] = 'property';
        $this->data['Ctype'] = 'Property';
        $this->front_showpage('customer/appliedPosts', $this->data);
    }

    public function featured_posts()
    {
        $per_page = 5;
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 1;
        $this->data["result"] = $this->PostModel->getFeaturedPostsById(0, $per_page, $page);
        $this->data['total_count'] = $this->PostModel->FeaturedRecordCountById(0,'property');


        $this->data['per_page'] = $per_page;
        $this->data['page'] = $page;

        $this->data['selected_menu'] = 'Featured Properties';
        $this->data['title'] = 'Featured Properties';
        $this->data['type'] = 'property';
        $this->data['Ctype'] = 'Property';
        $this->front_showpage('customer/featuredPostList', $this->data);
    }
    public function user_post_detail($post_id, $client_id, $customer_id = -1)
    {
        $data['post_id'] = $post_id;
        $data['post_detail'] = $this->PostModel->getPostDetailById($post_id, $customer_id);
        $data["featured_posts"] = $this->PostModel->getFeaturedPostsById($client_id, 5, 1);

        $this->load->model("UserModel");
        $data['client_info'] = $this->UserModel->getClientDetail($client_id,'property');

        $data['allResume']=array();
        if($customer_id!=-1) {
            $this->load->model('ResumeModel');
            $data['allResume'] = $this->ResumeModel->getCustomerResumes($customer_id);
        }

        $this->front_showpage('customer/userPostDetail', $data);
    }

}
