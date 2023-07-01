<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_login extends CI_Model {
     
 
    function getDetail($username,$password){
 
        $sql    = "SELECT * from user_admin where username='$username' and password='$password'";
        $query  = $this->db->query($sql);
        if($query->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
}