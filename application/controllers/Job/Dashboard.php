<?php

require_once APPPATH . "core/Front_Controller.php";

class Dashboard extends Front_Controller
{

    public $data = array();

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('login_user_id') == '') {
            redirect("auth");
        }
        $this->load->model("UserModel");
        $this->load->model('job/PostModel');
        $this->data['client_info'] = $this->UserModel->getClientDetail($this->login_user_id,'job');
    }

    public function index()
    {
        $this->data['selected_menu'] = 'Dashboard';
        $this->front_showpage('job/dashboard', $this->data);
    }

    public function edit_profile()
    {
        $this->data['selected_menu'] = 'Edit Profile';
        $this->data['title'] = 'Edit Profile of Job Company';
        $this->front_showpage('job/dashboard', $this->data);
        //$this->front_showpage('job/edit_profile',$this->data);
    }


    public function resume()
    {
        $this->data['selected_menu'] = 'Resume';
        $this->data['title'] = 'The Resumes You Got';
        $this->load->model('job/PostModel');

        $this->data['allResume']=$this->PostModel->getAllResume($this->login_user_id);
        $this->front_showpage('job/dashboard', $this->data);
    }
    public function deleteResume($id,$file_name)
    {
        $this->load->model('property/PostModel');
        $this->PostModel->deleteResume($id);

        $target_file = APPPATH . "../assets/front/resume/" . $file_name;
        unlink($target_file);
        redirect(site_url('job/dashboard/resume'));
    }

    public function active_posts()
    {
        $per_page = 5;
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 1;
        $this->data["active_posts"] = $this->PostModel->getActivePostsById($this->login_user_id, $per_page, $page);
        $this->data['total_count'] = $this->PostModel->ActiveRecordCountById($this->login_user_id);
        $this->data['per_page']=$per_page;
        $this->data['page']=$page;

        $this->data['selected_menu'] = 'Active Jobs';
        $this->data['title'] = 'Active Jobs';
        $this->front_showpage('job/dashboard', $this->data);
    }

    public function featured_posts()
    {
        $per_page = 5;
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 1;
        $this->data["featured_posts"] = $this->PostModel->getFeaturedPostsById($this->login_user_id, $per_page, $page);
        $this->data['total_count'] = $this->PostModel->FeaturedRecordCountById($this->login_user_id,'job');
        $this->data['per_page']=$per_page;
        $this->data['page']=$page;

        $this->data['selected_menu'] = 'Featured Jobs';
        $this->data['title'] = 'Featured Jobs';
        $this->front_showpage('job/dashboard', $this->data);
    }

    public function save_image($type, $id)
    {
        $target_dir = APPPATH . "../assets/front/profile image/client/" . $type . "/";
        $target_file = $target_dir . $id . "_job.jpg";
        if ($_FILES[$type]["tmp_name"] != '') {
            move_uploaded_file($_FILES[$type]["tmp_name"], $target_file);
        }
    }

    public function save_profile()
    {
        $this->UserModel->setCompanyData($_POST['user_id'], $_POST['industry'], $_POST['bussiness_type'], $_POST['established_date'], $_POST['employees'], $_POST['phone'],
            $_POST['country'], $_POST['city'], $_POST['company_name'], $_POST['address'], $_POST['about_company'],$_POST['contact_email']);
        $this->save_image("profile_image", $this->login_user_id);
        $this->save_image("logo_image", $this->login_user_id);
        redirect('job/dashboard/edit_profile');
    }

    public function decline($applied_id, $applied_post_id){
        $this->load->model('job/PostModel');
        $this->PostModel->decline($applied_id);
        redirect('job/dashboard/resume');
    }

}
