<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

//admin model
class Admin_db extends CI_Model {

    //constructor
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    //function that queries admin db record
    public function get_admin($u, $p) {
        $sql = "select member_id,member_email,member_password from member where (member_email='$u' and  member_password='$p')";
        $query = $this->db->query($sql);
        return !empty($query) ? $query->row_array() : false;
    }
    
       public function get_admin_by_authkey($AuthKey) {
        $sql = "select member_id,member_email,member_password from member where (authstring='$AuthKey')";
        $query = $this->db->query($sql);
        return !empty($query) ? $query->row_array() : false;
    }

}
