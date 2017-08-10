<?php

/**
 * Created by PhpStorm.
 * User: Pro
 * Date: 8/1/2017
 * Time: 2:24 PM
 */
class UserModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function loginCheck($email,$password){
        $this->db->select("*");
        $this->db->where('email_address', $email);
        $this->db->where('password', $password);
        $this->db->from('tbl_users');
        $result= $this->db->get()->row();
        if($result){
            $this->db->where('id', $result->id);
            $this->db->update('tbl_users', array('logined_date' => date('Y-m-d H:i:s')));
            $result->job_permit='';
            $result->education_permit='';
            $result->property_permit='';
            $result->customer_permit='';
            $result->fullname='';
            if($result->usertype=='seller'){
                $this->db->where('user_id',$result->id);
                $this->db->where('company_type','job');
                $result->job_permit=$this->db->get('tbl_users_data')->row()->company_permit;
                $this->db->where('user_id',$result->id);
                $this->db->where('company_type','education');
                $result->education_permit=$this->db->get('tbl_users_data')->row()->company_permit;
                $this->db->where('user_id',$result->id);
                $this->db->where('company_type','property');
                $result->property_permit=$this->db->get('tbl_users_data')->row()->company_permit;
            }else{
                $this->db->where('user_id',$result->id);
                $row=$this->db->get('tbl_users_data')->row();
                $result->customer_permit=$row->company_permit;
                $result->fullname=$row->firstName."  ".$row->lastName;
            }
            return $result;
        }else{
            return false;
        }
    }
    function updateUserData($email){
        $this->db->select("*");
        $this->db->where('email_address', $email);
        $this->db->from('tbl_users');
        $result= $this->db->get()->row();
        if($result){
            $result->job_permit='';
            $result->education_permit='';
            $result->property_permit='';
            $result->customer_permit='';
            $result->fullname='';
            if($result->usertype=='seller'){
                $this->db->where('user_id',$result->id);
                $this->db->where('company_type','job');
                $result->job_permit=$this->db->get('tbl_users_data')->row()->company_permit;
                $this->db->where('user_id',$result->id);
                $this->db->where('company_type','education');
                $result->education_permit=$this->db->get('tbl_users_data')->row()->company_permit;
                $this->db->where('user_id',$result->id);
                $this->db->where('company_type','property');
                $result->property_permit=$this->db->get('tbl_users_data')->row()->company_permit;
            }else{
                $this->db->where('user_id',$result->id);
                $row=$this->db->get('tbl_users_data')->row();
                $result->customer_permit=$row->company_permit;
                $result->fullname=$row->firstName."  ".$row->lastName;
            }
            return $result;
        }else{
            return false;
        }
    }
    function checkEmail($email){
        $this->db->select("*");
        $this->db->where('email_address', $email);
        $this->db->from('tbl_users');
        return $this->db->get()->row();
    }

    function signUp($data){

        $result = $this->db->insert('tbl_users', $data);
        if($result){
            $user_id=$this->db->insert_id();
            $this->db->where('id', $user_id);
            $this->db->update('tbl_users', array('logined_date' => date('Y-m-d H:i:s')));

            if($data['usertype']=='seller'){
                $this->db->set('user_id',$user_id);
                $this->db->set('company_type','job');
                $this->db->insert('tbl_users_data');
                $this->db->set('user_id',$user_id);
                $this->db->set('company_type','education');
                $this->db->insert('tbl_users_data');
                $this->db->set('user_id',$user_id);
                $this->db->set('company_type','property');
                $this->db->insert('tbl_users_data');
            }else{
                $this->db->set('user_id',$user_id);
                $this->db->set('company_type','customer');
                $this->db->insert('tbl_users_data');
            }
            return $user_id;
        }else{
            return false;
        }
    }

    function getUserData($id){
        $this->db->where('id',$id);
        $this->db->join('tbl_users_data','tbl_users.id=tbl_users_data.user_id');
        $result=$this->db->get('tbl_users')->result();
        return $result[0];
    }

    function getClientData($id){
        $this->db->where('id',$id);
        $result=$this->db->get('tbl_users')->result()[0];
        $this->db->where('user_id',$result->id);
        $this->db->where('company_type','job');
        $result->job_permit=$this->db->get('tbl_users_data')->row()->company_permit;
        $this->db->where('user_id',$result->id);
        $this->db->where('company_type','education');
        $result->education_permit=$this->db->get('tbl_users_data')->row()->company_permit;
        $this->db->where('user_id',$result->id);
        $this->db->where('company_type','property');
        $result->property_permit=$this->db->get('tbl_users_data')->row()->company_permit;
        return $result;
    }

    function setClientData($id,$fullname,$phone,$city,$address){
        $this->db->where('id',$id);
        $this->db->set('fullname',$fullname);
        $this->db->set('accountPhone',$phone);
        $this->db->set('accountCity',$city);
        $this->db->set('accountAddress',$address);
        $result=$this->db->update('tbl_users');
        return $result;
    }

    function getClientDetail($id,$company_type){
        $this->db->from('tbl_users');
        $this->db->join('tbl_users_data','tbl_users.id=tbl_users_data.user_id');
        $this->db->where('id',$id);
        $this->db->where('company_type',$company_type);
        $result=$this->db->get()->result()[0];
        return $result;
    }

    function setCompanyData($id,$industry,$bussiness_type,$established_date,$employees,$phone,$city,$company_name,$address,$about_company,$contact_email){
        $this->db->where('user_data_id',$id);
        $this->db->set('industry',$industry);
        $this->db->set('bussiness_type',$bussiness_type);
        $this->db->set('established_date',$established_date);
        $this->db->set('employees',$employees);
        $this->db->set('phone',$phone);
        $this->db->set('city',$city);
        $this->db->set('company_name',$company_name);
        $this->db->set('address',$address);
        $this->db->set('about_company',$about_company);
        $this->db->set('contact_email',$contact_email);
        $result=$this->db->update('tbl_users_data');
        return $result;
    }

    function setUserData($id,$firstName,$lastName,$company_name,$established_date,$phone,$city,$address,$bussiness_type,$about_company,$skills){
        $this->db->where('user_id',$id);
        $this->db->set('firstName',$firstName);
        $this->db->set('lastName',$lastName);
        $this->db->set('company_name',$company_name);
        $this->db->set('established_date',$established_date);
        $this->db->set('phone',$phone);
        $this->db->set('city',$city);
        $this->db->set('address',$address);
        $this->db->set('bussiness_type',$bussiness_type);
        $this->db->set('about_company',$about_company);
        $this->db->set('skills',$skills);
        $result=$this->db->update('tbl_users_data');
        return $result;
    }


}
