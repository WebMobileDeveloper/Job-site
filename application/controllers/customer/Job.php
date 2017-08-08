<?php

require_once APPPATH . "core/Front_Controller.php";

class Job extends Front_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->login_user_id) {
            redirect("auth");
        }
        $this->load->model("UserModel");
        $this->load->model('job/PostModel');
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
        $this->data['total_count'] = $this->PostModel->AppliedRecordCountById($this->login_user_id,'job');
        $this->data['per_page'] = $per_page;
        $this->data['page'] = $page;

        $this->data['selected_menu'] = 'Applied Jobs';
        $this->data['title'] = 'Applied Jobs';
        $this->data['type'] = 'job';
        $this->data['Ctype'] = 'Job';
        $this->front_showpage('customer/appliedPosts', $this->data);
    }

    public function featured_posts()
    {
        $per_page = 5;
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 1;
        $this->data["result"] = $this->PostModel->getFeaturedPostsById(0, $per_page, $page);
        $this->data['total_count'] = $this->PostModel->FeaturedRecordCountById(0,'job');


        $this->data['per_page'] = $per_page;
        $this->data['page'] = $page;

        $this->data['selected_menu'] = 'Featured Jobs';
        $this->data['title'] = 'Featured Jobs';
        $this->data['type'] = 'job';
        $this->data['Ctype'] = 'Job';
        $this->front_showpage('customer/featuredPostList', $this->data);
    }
    public function user_post_detail($post_id, $client_id, $customer_id = -1)
    {
        $data['post_id'] = $post_id;
        $data['post_detail'] = $this->PostModel->getPostDetailById($post_id, $customer_id);
        $data["featured_posts"] = $this->PostModel->getFeaturedPostsById($client_id, 5, 1);

        $this->load->model("UserModel");
        $data['client_info'] = $this->UserModel->getClientDetail($client_id,'job');

        $data['allResume']=array();
        if($customer_id!=-1) {
            $this->load->model('ResumeModel');
            $data['allResume'] = $this->ResumeModel->getCustomerResumes($customer_id);
        }

        $this->front_showpage('customer/userPostDetail', $data);
    }
    /*public function save()
    {
        $this->load->model('job/PostModel');
        $user_id = $this->login_user_id;
        $category = implode(",", $_POST['category']);
        $result = $this->PostModel->insertPost($user_id, $_POST['title'], $_POST['date'], $category, $_POST['job_type'], $_POST['experience'], $_POST['price'], $_POST['tags'], $_POST['description'],
            $_POST['specification'], $_POST['technical_guidance'], $_POST['vacancies']);
        echo json_encode($result);
    }

    public function search_job()
    {
        $user_id = -1;
        if ($this->login_user_id) {
            if ($this->login_user_type == 'customer') {
                $user_id = $this->login_user_id;
            }
        }
        $data['per_page'] = 5;
        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 1;
        $data['tags'] = (isset($_POST['keyword'])) ? $_POST['keyword'] : '';
        $data['category'] = (isset($_POST['category'])) ? $_POST['category'] : '';
        $data['country'] = (isset($_POST['country'])) ? $_POST['country'] : '';

        $this->load->model('job/PostModel');
        $data['result'] = $this->PostModel->SearchJobsById($user_id, $data['per_page'], $data['page'], $data['tags'], $data['category'], $data['country']);
        $data['total_count'] = $this->PostModel->SearchRecordCountById($user_id);
        $this->front_showpage('job/jobList', $data);
    }

    public function post_detail($post_id, $client_id)
    {
        $data['post_id'] = $post_id;
        $this->load->model('job/PostModel');
        $data['post_detail'] = $this->PostModel->getPostDetailById($post_id);
        $data["featured_posts"] = $this->PostModel->getFeaturedPostsById($client_id, 5, 1);

        $this->load->model("UserModel");
        $data['client_info'] = $this->UserModel->getClientDetail($client_id, 'job');
        $this->front_showpage('job/postDetail', $data);
    }

    public function getAppliedUsers($post_id)
    {
        $this->load->model('job/PostModel');
        $data['appliedUserData'] = $this->PostModel->getAppliedUserData($post_id);
        $this->front_showpage('job/appliedCustomers', $data);
    }

    public function hire($applied_id, $applied_post_id)
    {
        $this->load->model('job/PostModel');
        $this->PostModel->hire($applied_id);
        redirect('job/post/getAppliedUsers/' . $applied_post_id);
    }

    public function decline($applied_id, $applied_post_id)
    {
        $this->load->model('job/PostModel');
        $this->PostModel->decline($applied_id);
        redirect('job/post/getAppliedUsers/' . $applied_post_id);
    }


    public function user_post_detail($post_id, $client_id, $customer_id = -1)
    {
        $data['post_id'] = $post_id;
        $this->load->model('job/PostModel');
        $data['post_detail'] = $this->PostModel->getPostDetailById($post_id, $customer_id);
        $data["featured_posts"] = $this->PostModel->getFeaturedPostsById($client_id, 5, 1);

        $this->load->model("UserModel");
        $data['client_info'] = $this->UserModel->getClientData($client_id);
        $this->front_showpage('job/userPostDetail', $data);
    }

    public function apply_job()
    {
        $target_dir = APPPATH . "../assets/front/resume/";
        $target_file = $target_dir . $_POST['modalpost_id'] . "_" . $_POST['modaluser_id'] . "." . $_POST['modalExt'];
        $this->load->model('job/PostModel');
        $this->PostModel->apply($_POST['modalpost_id'], $_POST['modalclient_id'], $_POST['modaluser_id'],
            $_POST['modalName'], $_POST['modalEmail'], $_POST['message'], $_POST['modalExt']);
        if ($_FILES['resume']["tmp_name"] != '') {
            move_uploaded_file($_FILES['resume']["tmp_name"], $target_file);
        }
        header("Location: " . $_POST['modalorigin_url']); // Redirect browser
        exit();
    }*/
}
