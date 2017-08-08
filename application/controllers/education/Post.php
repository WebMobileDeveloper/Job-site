<?php

require_once APPPATH . "core/Front_Controller.php";

class Post extends Front_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if (!$this->login_user_id) {
            redirect("auth");
        }
        $this->front_showpage('education/post');
        $this->load->view('education/postjs');
    }

    public function save()
    {
        $this->load->model('education/PostModel');
        $user_id = $this->login_user_id;
        $category = implode(",", $_POST['category']);
        $result = $this->PostModel->insertPost($user_id, $_POST['title'], $_POST['date'], $category, $_POST['job_type'], $_POST['experience'], $_POST['price'], $_POST['tags'], $_POST['description'],
            $_POST['specification'], $_POST['technical_guidance'], $_POST['vacancies']);
        echo json_encode($result);
    }

    public function post_detail($post_id, $client_id)
    {
        $data['post_id'] = $post_id;
        $this->load->model('education/PostModel');
        $data['post_detail'] = $this->PostModel->getPostDetailById($post_id);
        $data["featured_posts"] = $this->PostModel->getFeaturedPostsById($client_id, 5, 1);

        $this->load->model("UserModel");
        $data['client_info'] = $this->UserModel->getClientDetail($client_id, 'education');
        $this->front_showpage('education/postDetail', $data);
    }

    public function getAppliedUsers($post_id)
    {
        $this->load->model('education/PostModel');
        $data['appliedUserData'] = $this->PostModel->getAppliedUserData($post_id);
        $this->front_showpage('education/appliedCustomers', $data);
    }

    public function hire($applied_id, $applied_post_id)
    {
        $this->load->model('education/PostModel');
        $this->PostModel->hire($applied_id);
        redirect('education/post/getAppliedUsers/' . $applied_post_id);
    }

    public function decline($applied_id, $applied_post_id)
    {
        $this->load->model('education/PostModel');
        $this->PostModel->decline($applied_id);
        redirect('education/post/getAppliedUsers/' . $applied_post_id);
    }


    public function apply_post()
    {
        $target_dir = APPPATH . "../assets/front/resume/";
        $target_file = $target_dir . $_POST['modalpost_id'] . "_" . $_POST['modaluser_id'] . "." . $_POST['modalExt'];
        $this->load->model('education/PostModel');
        $this->PostModel->apply($_POST['modalpost_id'], $_POST['modalclient_id'], $_POST['modaluser_id'],
            $_POST['modalName'], $_POST['modalEmail'], $_POST['message'], $_POST['modalExt']);
        if ($_FILES['resume']["tmp_name"] != '') {
            move_uploaded_file($_FILES['resume']["tmp_name"], $target_file);
        }
        header("Location: " . $_POST['modalorigin_url']); //Redirect browser
        exit();
    }

    /*public function user_post_detail($post_id, $client_id, $customer_id = -1)
    {
        $data['post_id'] = $post_id;
        $this->load->model('job/PostModel');
        $data['post_detail'] = $this->PostModel->getPostDetailById($post_id, $customer_id);
        $data["featured_posts"] = $this->PostModel->getFeaturedPostsById($client_id, 5, 1);

        $this->load->model("UserModel");
        $data['client_info'] = $this->UserModel->getClientData($client_id);
        $this->front_showpage('job/userPostDetail', $data);
    }*/
}
