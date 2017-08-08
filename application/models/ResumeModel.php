<?php

/**
 * Created by PhpStorm.
 * User: Pro
 * Date: 8/1/2017
 * Time: 2:24 PM
 */
class ResumeModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getCustomerResumes($customer_id){
        $this->db->where('resume_user_id',$customer_id);
        return $this->db->get('customer_resume')->result();
    }
    function saveResume($user_id,$title,$ext){
        $this->db->set('resume_user_id',$user_id);
        $this->db->set('resume_title',$title);
        $this->db->insert('customer_resume');
        $insert_id= $this->db->insert_id();
        $this->db->where('resume_id',$insert_id);
        $this->db->set('resume_file',$insert_id.'.'.$ext);
        $this->db->update('customer_resume');
        return $insert_id;
    }
    function deleteResume($id){
        $this->db->where('resume_id',$id);
        $this->db->delete('customer_resume');
    }
}
