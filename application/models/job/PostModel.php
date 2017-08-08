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

    function insertPost($user_id, $title, $date, $category, $type, $experience, $price, $tags, $description, $specification, $technical_guidance,$vacancies){
        $this->db->set('user_id',$user_id);
        $this->db->set('title',$title);
        $this->db->set('expire_date',$date);
        $this->db->set('category',$category);
        $this->db->set('type',$type);
        $this->db->set('experience',$experience);
        $this->db->set('price',$price);
        $this->db->set('tags',$tags);
        $this->db->set('description',$description);
        $this->db->set('specification',$specification);
        $this->db->set('technical_guidance',$technical_guidance);
        $this->db->set('vacancies',$vacancies);
        $this->db->set('post_type','job');
        $result=$this->db->insert('tbl_post');
        return $result;
    }

    function getActivePostsById($user_id,$per_page, $page)
    {
        $this->db->from('tbl_post');
        $this->db->join('tbl_users_data', 'tbl_users_data.user_id = tbl_post.user_id AND tbl_users_data.company_type=tbl_post.post_type');
        $this->db->where('tbl_post.user_id',$user_id);
        $this->db->where('state','active');
        $this->db->where('tbl_users_data.company_type','job');
        $this->db->limit($per_page, ($page-1)*$per_page);
        $this->db->order_by('posted_date desc');
        return $this->db->get()->result();
    }

    public function ActiveRecordCountById($user_id) {
        $this->db->where('user_id',$user_id);
        $this->db->where('state','active');
        return count($this->db->get("tbl_post")->result());
    }


    function getFeaturedPostsById($user_id,$per_page, $page)
    {
        $this->db->from('tbl_post');
        $this->db->join('tbl_users_data', 'tbl_users_data.user_id = tbl_post.user_id AND tbl_users_data.company_type=tbl_post.post_type');
        if($user_id!=0)$this->db->where('tbl_post.user_id',$user_id);
        $this->db->where('featured',1);
        $this->db->where('tbl_users_data.company_type','job');
        $this->db->limit($per_page, ($page-1)*$per_page);
        $this->db->order_by('posted_date desc');
        return $this->db->get()->result();
    }

    public function FeaturedRecordCountById($user_id,$type) {
        if($user_id!=0)$this->db->where('user_id',$user_id);
        $this->db->where('featured',1);
        $this->db->where('post_type',$type);
        return count($this->db->get("tbl_post")->result());
    }


    function getAppliedPostsById($user_id,$per_page, $page)
    {
        $this->db->from('tbl_applied');
        $this->db->join('tbl_post', 'tbl_post.post_id = tbl_applied.applied_post_id');
        $this->db->join('tbl_users_data', 'tbl_users_data.user_id = tbl_post.user_id AND tbl_users_data.company_type=tbl_post.post_type');
        $this->db->where('applied_user_id',$user_id);
        $this->db->where('tbl_users_data.company_type','job');
        $this->db->limit($per_page, ($page-1)*$per_page);
        $this->db->order_by('applied_id desc');
        return $this->db->get()->result();
    }

    public function AppliedRecordCountById($user_id,$type) {
        $this->db->from("tbl_applied");
        $this->db->join('tbl_post', 'tbl_post.post_id = tbl_applied.applied_post_id');
        $this->db->where('applied_user_id',$user_id);
        $this->db->where('tbl_post.post_type',$type);
        return count($this->db->get()->result());
    }

    function getPostDetailById($post_id,$customer_id=-1)
    {
        $this->db->where('post_id',$post_id);
        $this->db->from('tbl_post');
        $row= $this->db->get()->result()[0];

        $this->db->where('applied_post_id',$post_id);
        $this->db->where('applied_user_id',$customer_id);
        $result=$this->db->get("tbl_applied")->result();
        if(count($result)>0){
            $row->applied=1;
            $row->hired=$result[0]->hired;;
        }else{
            $row->applied=0;
            $row->hired=-1;
        }
        return $row;
    }

    function getAppliedUserData($post_id)
    {
        $this->db->where('applied_post_id',$post_id);
        $this->db->from('tbl_applied');
        $this->db->join('tbl_users_data','tbl_users_data.user_id=tbl_applied.applied_user_id');
        return $this->db->get()->result();
    }

    function hire($id){
        $this->db->where('applied_id',$id);
        $this->db->set('hired',1);
        $this->db->update('tbl_applied');
    }

    function decline($id){
        $this->db->where('applied_id',$id);
        $this->db->set('hired',2);
        $this->db->update('tbl_applied');
    }

    function getAllResume($user_id)
    {
        $this->db->where('post_user_id',$user_id);
        $this->db->where('resume!=','');
        $this->db->where('tbl_post.post_type','job');
        $this->db->from('tbl_applied');
        $this->db->join('tbl_post','tbl_applied.applied_post_id=tbl_post.post_id');
        $this->db->join('tbl_users_data','tbl_applied.applied_user_id=tbl_users_data.user_id');
        return $this->db->get()->result();
    }
    function deleteResume($id){
        $this->db->where('applied_id',$id);
        $this->db->set('resume','');
        $this->db->update('tbl_applied');
    }

    function apply($post_id,$client_id,$user_id,$name,$email,$coverletter,$ext){
        $this->db->set('applied_post_id',$post_id);
        $this->db->set('post_user_id',$client_id);
        $this->db->set('applied_user_id',$user_id);
        $this->db->set('resume',$post_id."_".$user_id.".".$ext);
        $this->db->set('view_email',$email);
        $this->db->set('view_name',$name);
        $this->db->set('coverLetter',$coverletter);
        $this->db->insert('tbl_applied');
    }
}
