<?php

require_once APPPATH . "core/Front_Controller.php";

class CustomerDashboard extends Front_Controller
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
        $this->data['client_info'] = $this->UserModel->getUserData($this->login_user_id);
    }

    public function index()
    {
        $this->data['selected_menu'] = 'Dashboard';
        $this->front_showpage('customer/user_dashboard', $this->data);
    }

    public function edit_profile()
    {
        $this->data['selected_menu'] = 'Edit Profile';
        $this->data['title'] = 'Edit Your Profile';
        $this->front_showpage('customer/user_dashboard', $this->data);
    }

    public function resume($customer_id)
    {
        $this->data['selected_menu'] = 'Resume';
        $this->data['title'] = 'My Resumes';
        $this->load->model('ResumeModel');
        $this->data['allResume']= $this->ResumeModel->getCustomerResumes($customer_id);

        $this->front_showpage('customer/user_dashboard', $this->data);
    }


    public function save_resume()
    {
        $this->load->model('ResumeModel');
        $resume_id=$this->ResumeModel->saveResume($_POST['user_id'],$_POST['title'],$_POST['modalExt1']);

        $target_dir = APPPATH . "../assets/front/user_resume/";
        $target_file = $target_dir . $resume_id . "." . $_POST['modalExt1'];
        if ($_FILES['resume1']["tmp_name"] != '') {
            move_uploaded_file($_FILES['resume1']["tmp_name"], $target_file);
        }
        header("Location: " . site_url('customer/customerDashboard/resume/'.$_POST['user_id'])); //Redirect browser
        exit();
    }
    public function delete_resume($user_id,$id,$file_name)
    {
        $this->load->model('ResumeModel');
        $this->ResumeModel->deleteResume($id);

        $target_dir = APPPATH . "../assets/front/user_resume/";
        $target_file = $target_dir .  $file_name;
        unlink($target_file);
        header("Location: " . site_url('customer/customerDashboard/resume/'.$user_id)); //Redirect browser
        exit();
    }


    public function save_image($type, $id)
    {
        $target_dir = APPPATH . "../assets/front/profile image/client/" . $type . "/";
        $target_file = $target_dir . $id . ".jpg";
        if ($_FILES[$type]["tmp_name"] != '') {
            move_uploaded_file($_FILES[$type]["tmp_name"], $target_file);
        }
    }

    public function save_profile()
    {
        $this->UserModel->setUserData($_POST['user_id'], $_POST['firstName'],$_POST['lastName'], $_POST['company_name'], $_POST['established_date'], $_POST['phone'],
            $_POST['country'], $_POST['city'], $_POST['address'],$_POST['bussiness_type'], $_POST['about_company'],$_POST['skills']);
        $this->save_image("logo_image", $this->login_user_id);  /* $this->save_image("profile_image", $_POST['user_id']);*/
        redirect('customer/customerDashboard/edit_profile');
    }

    /*public function resume()
    {
        $this->data['selected_menu'] = 'Resume';
        $this->data['title'] = 'The Resumes You Got';
        $this->front_showpage('customer/user_dashboard', $this->data);
    }*/

    /*public function applied_posts()
    {
        $per_page = 5;
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 1;
        $this->data["active_posts"] = $this->PostModel->getAppliedPostsById($this->login_user_id, $per_page, $page);
        $this->data['total_count'] = $this->PostModel->AppliedRecordCountById($this->login_user_id);
        $this->data['per_page']=$per_page;
        $this->data['page']=$page;

        $this->data['selected_menu'] = 'Applied Jobs';
        $this->data['title'] = 'Applied Jobs';
        $this->front_showpage('customer/user_dashboard', $this->data);
    }*/

    /*public function featured_posts()
    {
        $per_page = 5;
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 1;
        $this->data["featured_posts"] = $this->PostModel->getFeaturedPostsById(0, $per_page, $page);
        $this->data['total_count'] = $this->PostModel->FeaturedRecordCountById(0);


        $this->data['per_page']=$per_page;
        $this->data['page']=$page;

        $this->data['selected_menu'] = 'Featured Jobs';
        $this->data['title'] = 'Featured Jobs';
        $this->front_showpage('customer/user_dashboard', $this->data);
    }*/

    /*public function followers()
    {
        $this->data['selected_menu'] = 'Followers';
        $this->data['title'] = 'Company Followers';
        $this->front_showpage('customer/user_dashboard', $this->data);
    }*/


}
