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
        $sql = "select admin_id,username,password from admin where (username='$u' and  password='$p')";
        $query = $this->db->query($sql);
        return !empty($query) ? $query->row_array() : false;
    }

}
