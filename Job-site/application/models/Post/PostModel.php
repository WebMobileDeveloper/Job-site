<?php

/**
 * Created by PhpStorm.
 * User: Pro
 * Date: 8/1/2017
 * Time: 2:24 PM
 */
class PostModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function insertPost($user_id, $title, $date, $location,$city, $category, $type, $experience, $price, $tags, $details){
        $this->db->set('user_id',$user_id);
        $this->db->set('title',$title);
        $this->db->set('expire_date',$date);
        $this->db->set('location',$location);
        $this->db->set('city',$city);
        $this->db->set('category',$category);
        $this->db->set('type',$type);
        $this->db->set('experience',$experience);
        $this->db->set('price',$price);
        $this->db->set('tags',$tags);
        $this->db->set('details',$details);
        $result=$this->db->insert('tbl_job');
        return $result;
    }
    function getAllPost(){
        $this->db->select('*');
        $this->db->from('tbl_job');
        $this->db->join('users_job_client', 'users_job_client.id = tbl_job.user_id');
        $this->db->order_by('company_name,posted_date desc');
        $this->db->limit(4);
        $result['bycompany']=$this->db->get()->result();

        $this->db->select('*');
        $this->db->from('tbl_job');
        $this->db->join('users_job_client', 'users_job_client.id = tbl_job.user_id');
        $this->db->order_by('category,posted_date desc');
        $this->db->limit(4);
        $result['bycategory']=$this->db->get()->result();


        $this->db->select('*');
        $this->db->from('tbl_job');
        $this->db->join('users_job_client', 'users_job_client.id = tbl_job.user_id');
        $this->db->order_by('city,posted_date desc');
        $this->db->limit(4);
        $result['bycity']=$this->db->get()->result();

        $this->db->select('*');
        $this->db->from('tbl_job');
        $this->db->join('users_job_client', 'users_job_client.id = tbl_job.user_id');
        $this->db->order_by('type,posted_date desc');
        $this->db->limit(4);
        $result['bytype']=$this->db->get()->result();

        $this->db->select('*');
        $this->db->from('tbl_job');
        $this->db->join('users_job_client', 'users_job_client.id = tbl_job.user_id');
        $this->db->order_by('price,posted_date desc');
        $this->db->limit(4);
        $result['byprice']=$this->db->get()->result();

        return $result;
    }
    function getPostsInfo(){
        $query = $this->db->get('tbl_job');
        $data['post_count'] = $query->num_rows();
        $query = $this->db->get('users_job_client');
        $data['company_count'] = $query->num_rows();
        return $data;
    }
    function getMsg($limit = 10)
    {
        $sql = "SELECT * FROM messages ORDER BY id DESC LIMIT $limit";
        return $this->db->query($sql);
    }

    function insertMsg($name, $message, $current)
    {
        $sql = "INSERT INTO messages SET user='$name', msg='$message', time='$current'";
        return $this->db->query($sql);
    }
}
