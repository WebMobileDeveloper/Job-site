<?php
require_once APPPATH . "core/Front_Controller.php";

class Sellerhome extends Front_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("UserModel");
        $this->load->model('PostModel');

        $this->data['top_menu'] = 'Dashboard';
    }

    public function index() {
        $user_id = -1;
        if ($this->login_user_id) {
            if ($this->login_user_type == 'customer') {
                $user_id = $this->login_user_id;
            }
        }
        //$data['postData']=$this->PostModel->getAllPost();
        $this->sellerDashboard();
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

        $data['result'] = $this->PostModel->SearchJobsById($user_id, $data['per_page'], $data['page'], $data['tags'], $data['category']);
        $data['total_count'] = $this->PostModel->SearchRecordCountById($user_id, $data['tags'], $data['category']);
        $this->front_showpage('front_common/jobList', $data);
    }

    public function user_post_detail($post_id, $client_id, $customer_id = -1)
    {
        $data['post_id'] = $post_id;
        $data['post_detail'] = $this->PostModel->getPostDetailById($post_id, $customer_id);
        $data["featured_posts"] = $this->PostModel->getFeaturedPostsById($client_id, 5, 1);

        $data['client_info'] = $this->UserModel->getClientDetail($client_id,'education');
        $this->front_showpage('front_common/userPostDetail', $data);
    }





    public function sellerDashboard($selectedMenu=''){
        $this->data['client_info'] = $this->UserModel->getClientData($this->login_user_id);
        switch ($selectedMenu){
            case '':  //dashboard
                $this->data['title'] = 'Your Account Infomation';
                $this->data['selected_menu'] = 'Dashboard';
                break;
            case 'edit':
                $this->data['selected_menu'] = 'Edit Profile';
                $this->data['title'] = 'Edit Your Profile';
                break;
            case 'resume':
                $this->data['selected_menu'] = 'Resume';
                $this->data['title'] = 'The Resumes You Got';
                break;
        }
        $this->seller_showpage('front_common/sellerDashboard', $this->data);
    }

    public function save_seller_profile()
    {
        $this->UserModel->setClientData($_POST['user_id'], $_POST['fullname'], $_POST['phone'], $_POST['city'], $_POST['address']);
        $this->save_image("logo_image", $this->login_user_id);
        redirect('sellerhome/sellerDashboard/edit');
    }

    public function save_image($type, $id)
    {
        $target_dir = APPPATH . "../assets/front/profile image/client/" . $type . "/";
        $target_file = $target_dir . $id . ".jpg";
        if ($_FILES[$type]["tmp_name"] != '') {
            move_uploaded_file($_FILES[$type]["tmp_name"], $target_file);
        }
    }

    /*public function run(){
        $this->db->select('country_id, region_id');
        $this->db->group_by('region_id');
        $radios=$this->db->get('radios')->result();
        foreach ($radios as $rad){
            $this->db->where('id',$rad->region_id);
            $this->db->set('country_id',$rad->country_id);
            $this->db->update('regions');
        }
    }*/
}
