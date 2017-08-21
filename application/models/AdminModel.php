<?php

/**
 * Created by PhpStorm.
 * User: Pro
 * Date: 8/1/2017
 * Time: 2:24 PM
 */
class AdminModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function getUserCount(){
        $data=array();
        $data['customer']=0;
        $data['seller']=0;
        $this->db->select('COUNT(id) as total,usertype');
        $this->db->group_by('usertype');
        $result=$this->db->get('tbl_users');
        foreach ($result->result() as $row){
            $data[$row->usertype]=$row->total;
        }
        return $data;
    }

    function getPostCount(){
        $data=array();
        $data['job']=0;
        $data['education']=0;
        $data['property']=0;
        $this->db->select('COUNT(post_id) as total,post_type');
        $this->db->group_by('post_type');
        $result=$this->db->get('tbl_post');
        foreach ($result->result() as $row){
            $data[$row->post_type]=$row->total;
        }
        return $data;
    }

    function getSellers(){
        $data=array();
        $this->db->from('tbl_users');
        $this->db->where('usertype','seller');
        $result=$this->db->get()->result();
        foreach ($result as $row){
            $data[$row->id]['account']=$row;
            $this->db->from('tbl_users_data');
            $this->db->where('user_id',$row->id);
            $companys=$this->db->get()->result();
            foreach ($companys as $company){
                $data[$row->id][$company->company_type]=$company;
            }
        }
        return $data;
    }

    function getCustomers(){
        $data=array();
        $this->db->from('tbl_users');
        $this->db->where('usertype','customer');
        $result=$this->db->get()->result();
        foreach ($result as $row){
            $data[$row->id]['account']=$row;
            $this->db->from('tbl_users_data');
            $this->db->where('user_id',$row->id);
            $companys=$this->db->get()->result();
            foreach ($companys as $company){
                $data[$row->id][$company->company_type]=$company;
            }
        }
        return $data;
    }

    function getPosts(){
        $this->db->from('tbl_post');
        $this->db->join('tbl_users_data', 'tbl_users_data.user_id = tbl_post.user_id AND tbl_users_data.company_type=tbl_post.post_type');
        $result=$this->db->get()->result();
        return $result;
    }

    function getFeaturedPosts(){
        $this->db->from('tbl_post');
        $this->db->where('featured',1);
        $this->db->join('tbl_users_data', 'tbl_users_data.user_id = tbl_post.user_id AND tbl_users_data.company_type=tbl_post.post_type');
        $result=$this->db->get()->result();
        return $result;
    }

    function getSellerData($id){
        $data=array();
        $this->db->from('tbl_users');
        $this->db->where('usertype','seller');
        $this->db->where('id',$id);
        $result=$this->db->get()->result()[0];
        return $result;
    }

    function getPaymentData($id){
        $data=array();
        $this->db->from('tbl_users');
        $this->db->where('usertype','seller');
        $this->db->where('id',$id);
        $result=$this->db->get()->result()[0];
        return $result;
    }

    function savePayment($id, $payment_method,$bank,$package,$slip_name,$note){
        $this->db->where('id',$id);
        $this->db->set('payment_method',$payment_method);
        $this->db->set('bank',$bank);
        $this->db->set('package',$package);
        $this->db->set('slip_name',$slip_name);
        $this->db->set('note',$note);
        $this->db->update('tbl_users');
    }


    function  approve($user_data_id,$value){
        $this->db->where('user_data_id',$user_data_id);
        $this->db->set('company_permit',$value);
        if($value=='Approved'){
            $this->db->set('approve_date',date('Y-m-d'));
        }else{
            $this->db->set('approve_date','');
        }
        $this->db->update('tbl_users_data');
        return "success";
    }

    function  feature($post_id,$value){
        $this->db->where('post_id',$post_id);
        $this->db->set('featured',$value);
        $this->db->update('tbl_post');
        return "success";
    }


}
