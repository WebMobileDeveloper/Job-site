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

    function insertPost($user_id, $title, $location, $category, $type, $experience, $tags, $details){
        $this->db->set('user_id',$user_id);
        $this->db->set('title',$title);
        $this->db->set('location',$location);
        $this->db->set('category',$category);
        $this->db->set('type',$type);
        $this->db->set('experience',$experience);
        $this->db->set('tags',$tags);
        $this->db->set('details',$details);
        $result=$this->db->insert('tbl_job');
        return $result;
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
