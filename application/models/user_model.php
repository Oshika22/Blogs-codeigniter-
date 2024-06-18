<?php
class user_model extends CI_model{
    function dologin($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query = $this->db->get('admin');
        echo $this->db->last_query();
        $admin = $query -> row_array();
        return $admin;
    }
} 
?>