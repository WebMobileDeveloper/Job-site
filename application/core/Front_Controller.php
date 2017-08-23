<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Front Controller
 *
 * This class provides a common place to handle any tasks that need to
 * be done for all public-facing controllers.
 */
class Front_Controller extends CI_Controller
{
    public $countries = array("","Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
    public $categories = array("Transporation", "Restaurant, Food, Hotels", "Art, Design & Multimedia", "Healthcare & Medicine", "Laravel", "Sofware", "Information Technology", "Accounting & Finance", "Education & Academia", "Construction, Engineering", "Software & Development");
    public $job_types = array("Full Time", "Part Time", "Remote", "Freelancer");
    public $experiences = array('Fresher', 'More than 1 years', 'More than 2 years', 'More than 3 years', 'More than 4 years', 'More than 5 years', 'More than 6+ years');
    public $login_user_id = '';
    public $login_user_name = '';
    public $login_user_email = '';
    public $login_user_type = '';
    public $login_user_job_permit = '';
    public $login_user_education_permit = '';
    public $login_user_property_permit = '';
    public $login_user_customer_permit = '';
    public $login_user_fullname = '';


    public function __construct()
    {
        parent::__construct();
        define('WEB_ROOT', base_url());
        define('ASSETS_ROOT', WEB_ROOT . 'assets/front/');
        $this->Front = &get_instance();
        $this->load->model('UserModel');

        if($this->session->userdata('login_user_id')) {
            $result = $this->UserModel->updateUserData($this->session->userdata('login_user_email'));
            if ($result) {
                $newdata = array(
                    'login_user_id' => $result->id,
                    'login_user_name' => $result->fullname,
                    'login_user_email' => $result->email_address,
                    'login_user_type' => $result->usertype,
                    'login_user_job_permit' => $result->job_permit,
                    'login_user_education_permit' => $result->education_permit,
                    'login_user_property_permit' => $result->property_permit,
                    'login_user_customer_permit' => $result->customer_permit,
                    'login_user_fullname' => $result->fullname
                );
                $this->session->set_userdata($newdata);
            }
        }

        $this->login_user_id = $this->session->userdata('login_user_id');
        $this->login_user_name = $this->session->userdata('login_user_name');
        $this->login_user_email = $this->session->userdata('login_user_email');
        $this->login_user_type = $this->session->userdata('login_user_type');
        $this->login_user_job_permit = $this->session->userdata('login_user_job_permit');
        $this->login_user_education_permit = $this->session->userdata('login_user_education_permit');
        $this->login_user_property_permit = $this->session->userdata('login_user_property_permit');
        $this->login_user_customer_permit = $this->session->userdata('login_user_customer_permit');
        $this->login_user_fullname = $this->session->userdata('login_user_fullname');
    }


    public function front_showpage($view, $data = false)
    {
        $this->load->view("front_common/top_menu", $data);
        $this->load->view($view, $data);
        $this->load->view("front_common/footer", $data);
    }
    public function seller_showpage($view, $data = false)
    {
        $this->load->view("front_common/seller_top_menu", $data);
        $this->load->view($view, $data);
        $this->load->view("front_common/seller_footer", $data);
    }

    public function set_session($type, $user_id)
    {
        $this->session->set_userdata($type, $user_id);
        return true;
    }

    public function unset_session($type, $user_id)
    {
        $this->session->unset_userdata($type);
    }
    //--------------------------------------------------------------------


}

/* End of file Front_Controller.php */
/* Location: ./application/core/Front_Controller.php */