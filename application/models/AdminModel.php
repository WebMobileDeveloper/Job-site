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

    function getPaymentData(){
        $data=array();
        $this->db->from('tbl_payment');
        $this->db->join('tbl_users', 'tbl_payment.user_id=tbl_users.id');
        $this->db->where('usertype','seller');
        //$this->db->where('id',$id);
        $result=$this->db->get()->result();
        foreach ($result as $row){
            $data[$row->payment_id]['account']=$row;
            $this->db->from('tbl_users_data');
            $this->db->where('user_id',$row->id);
            $companys=$this->db->get()->result();
            foreach ($companys as $company){
                $data[$row->payment_id][$company->company_type]=$company;
            }
        }
        return $data;
    }
    function getPaymentDataByID($payment_id){
        $data=array();
        $this->db->from('tbl_payment');
        $this->db->join('tbl_users', 'tbl_payment.user_id=tbl_users.id');
        $this->db->where('usertype','seller');
        $this->db->where('payment_id',$payment_id);
        //$this->db->where('id',$id);
        $result=$this->db->get()->result()[0];

        /*$data[$row->payment_id]['account']=$row;
        $this->db->from('tbl_users_data');
        $this->db->where('user_id',$row->id);
        $companys=$this->db->get()->result();
        foreach ($companys as $company){
            $data[$row->payment_id][$company->company_type]=$company;
        }*/

        return $result;
    }
    function getPaymentDataBySeller($seller_id=-1){
        $data=array();
        $this->db->from('tbl_users');
        $this->db->where('usertype','seller');
        if($seller_id!=-1)$this->db->where('id',$seller_id);
        $result=$this->db->get()->result();
        foreach ($result as $row){
            $data[$row->id]['account']=$row;
            $data[$row->id]['account']->last_paid='';
            $data[$row->id]['account']->charged_counts=0;
            $data[$row->id]['account']->charged_posts=0;
            $data[$row->id]['account']->paid_amount=0;

            $this->db->select('*');
            $this->db->where('user_id',$row->id);
            $data[$row->id]['account']->posts=$this->db->get('tbl_post')->num_rows();


            $this->db->from('tbl_users_data');
            $this->db->where('user_id',$row->id);
            $companys=$this->db->get()->result();
            foreach ($companys as $company){
                $data[$row->id][$company->company_type]=$company;
            }

            /* payment data*/
            $this->db->from('tbl_payment');
            $this->db->where('user_id',$row->id);
            $this->db->order_by('paid_date desc');
            $payments=$this->db->get()->result();

            $data[$row->id]['payment']=array();
            foreach ($payments as $payment){
                $data[$row->id]['payment'][]=$payment;
                if($data[$row->id]['account']->last_paid=='')$data[$row->id]['account']->last_paid=$payment->paid_date;
                $data[$row->id]['account']->charged_counts++;
                $data[$row->id]['account']->charged_posts+=$payment->charge_count;
                $data[$row->id]['account']->paid_amount+=$payment->paid_amount;
            }
        }
        return $data;
    }

    function savePayment($id, $payment_method,$bank,$package,$slip_name,$note,$paid_amount,$charge_count){
        $this->db->where('payment_id',$id);
        $this->db->set('payment_method',$payment_method);
        $this->db->set('bank',$bank);
        $this->db->set('package',$package);
        if($slip_name!='')$this->db->set('slip_name',$slip_name);
        $this->db->set('note',$note);
        $this->db->set('paid_amount',$paid_amount);
        $this->db->set('charge_count',$charge_count);
        $this->db->update('tbl_payment');
    }
    function addPayment($user_id,$payment_method,$bank,$package,$slip_name,$note,$paid_amount,$charge_count){

        $this->db->set('payment_method',$payment_method);
        $this->db->set('user_id',$user_id);
        $this->db->set('bank',$bank);
        $this->db->set('package',$package);

        $this->db->set('note',$note);
        $this->db->set('paid_amount',$paid_amount);
        $this->db->set('charge_count',$charge_count);
        $this->db->insert('tbl_payment');
        if($slip_name!='') {
            $insert_id = $this->db->insert_id();
            $slip_name=$insert_id . $slip_name;
            $this->db->where('payment_id', $insert_id);
            $this->db->set('slip_name', $insert_id . $slip_name);
            $this->db->update('tbl_payment');
        }
        return $slip_name;
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
