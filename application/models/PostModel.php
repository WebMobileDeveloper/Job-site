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

    function getAllPost()
    {
        $this->db->select('*');
        $this->db->where('tbl_post.post_type', 'job');
        $this->db->from('tbl_post');
        $this->db->join('tbl_users_data', 'tbl_users_data.user_id = tbl_post.user_id and tbl_users_data.company_type=tbl_post.post_type');
        $this->db->order_by('tbl_post.posted_date desc');
        $this->db->limit(4);
        $result['job'] = $this->db->get()->result();

        $this->db->select('*');
        $this->db->where('tbl_post.post_type', 'education');
        $this->db->from('tbl_post');
        $this->db->join('tbl_users_data', 'tbl_users_data.user_id = tbl_post.user_id and tbl_users_data.company_type=tbl_post.post_type');
        $this->db->limit(4);
        $result['education'] = $this->db->get()->result();

        $this->db->select('*');
        $this->db->where('tbl_post.post_type', 'property');
        $this->db->from('tbl_post');
        $this->db->join('tbl_users_data', 'tbl_users_data.user_id = tbl_post.user_id and tbl_users_data.company_type=tbl_post.post_type');
        $this->db->limit(4);
        $result['property'] = $this->db->get()->result();
        return $result;
    }

    function getPostsInfo()
    {
        $query = $this->db->get('tbl_post');
        $data['post_count'] = $query->num_rows();
        $query = $this->db->get('tbl_users');
        $data['company_count'] = $query->num_rows();
        return $data;
    }


    function SearchJobsById($user_id, $per_page, $page, $tag = '', $category = '')
    {
        $result = array();

        if ($tag != '') $this->db->like('tags', $tag, 'both');
        if ($category != '') $this->db->where('category', $category);
        $this->db->join('tbl_users_data', 'tbl_users_data.user_id = tbl_post.user_id and tbl_users_data.company_type=tbl_post.post_type');
        $this->db->limit($per_page, ($page - 1) * $per_page);
        $this->db->order_by('posted_date desc');
        $rows = $this->db->get('tbl_post')->result();

        foreach ($rows as $row) {
            $this->db->where('applied_post_id', $row->post_id);
            $this->db->where('applied_user_id', $user_id);
            if (count($this->db->get("tbl_applied")->result()) > 0) {
                $row->applied = 1;
                $row->hired = $this->db->get("tbl_applied")->result()[0]->hired;
            } else {
                $row->applied = 0;
                $row->hired = -1;
            }
            $this->db->where('applied_post_id',$row->post_id);
            $this->db->where('applied_user_id',$user_id);
            if(count($this->db->get("tbl_applied")->result())>0){
                $row->applied=true;
            }else{
                $row->applied=false;
            }
            $result[] = $row;
        }
        return $result;
    }

    public function SearchRecordCountById($user_id, $tag = '', $category = '')
    {
        if ($tag != '') $this->db->like('tags', "%$tag%");
        if ($category != '') $this->db->where('category', $category);
        $this->db->from('tbl_post');
        $this->db->join('tbl_users_data', 'tbl_users_data.user_id = tbl_post.user_id and tbl_users_data.company_type=tbl_post.post_type');
        return count($this->db->get()->result());
    }


    function getPostDetailById($post_id, $customer_id = -1)
    {
        $this->db->where('post_id', $post_id);
        $this->db->from('tbl_post');
        $row = $this->db->get()->result()[0];

        $this->db->where('applied_post_id', $post_id);
        $this->db->where('applied_user_id', $customer_id);
        $result = $this->db->get("tbl_applied")->result();
        if (count($result) > 0) {
            $row->applied = 1;
            $row->hired = $result[0]->hired;;
        } else {
            $row->applied = 0;
            $row->hired = -1;
        }
        return $row;
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






    function getAppliedUserData($post_id)
    {
        $this->db->where('applied_post_id', $post_id);
        $this->db->from('tbl_applied');
        $this->db->join('tbl_users_data', 'tbl_users_data.user_id=tbl_applied.applied_user_id');
        return $this->db->get()->result();
    }

    function hire($id)
    {
        $this->db->where('applied_id', $id);
        $this->db->set('hired', 1);
        $this->db->update('tbl_applied');
    }

    function decline($id)
    {
        $this->db->where('applied_id', $id);
        $this->db->set('hired', 2);
        $this->db->update('tbl_applied');
    }

    function getAllResume($user_id)
    {
        $this->db->where('post_user_id', $user_id);
        $this->db->where('hired', 0);
        $this->db->where('tbl_post.post_type', 'job');
        $this->db->from('tbl_applied');
        $this->db->join('tbl_post', 'tbl_applied.applied_post_id=tbl_post.post_id');
        $this->db->join('tbl_users_data', 'tbl_applied.applied_user_id=tbl_users_data.user_id');
        return $this->db->get()->result();
    }

    function apply($post_id, $client_id, $user_id, $name, $email, $coverletter, $ext)
    {
        $this->db->set('applied_post_id', $post_id);
        $this->db->set('post_user_id', $client_id);
        $this->db->set('applied_user_id', $user_id);
        $this->db->set('resume', $post_id . "_" . $user_id . "." . $ext);
        $this->db->set('view_email', $email);
        $this->db->set('view_name', $name);
        $this->db->set('coverLetter', $coverletter);
        $this->db->insert('tbl_applied');
    }
}
