<?php



require_once APPPATH . "core/Front_Controller.php";
class Home extends Front_Controller {

    public $login_user_id;

    public function __construct() {
        parent::__construct();
//         $this->load->library('session');
    }

    public function index() {
        /*$login_user_id = $this->session->userdata('login_user_id');

        if ($login_user_id == "") {
            redirect("auth");
        } else {
            $this->load->view('home');
        }*/
        $this->front_showpage('home');
    }

}
