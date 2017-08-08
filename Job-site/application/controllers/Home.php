<?php



require_once APPPATH . "core/Front_Controller.php";
class Home extends Front_Controller {

    public $login_user_id;

    public function __construct() {
        parent::__construct();
//         $this->load->library('session');
    }

    public function index() {
        $this->load->model('Post/PostModel');
        $data['postData']=$this->PostModel->getAllPost();
        $this->front_showpage('home',$data);
    }

}
