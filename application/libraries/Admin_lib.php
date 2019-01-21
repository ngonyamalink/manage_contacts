<?php


//admin library
class Admin_lib {

    
    //variables declared
    public $admin_id;
    public $username;
    public $password;

    
    //function to get admin data
    public function get_admin($u, $p) {

        $CI = &get_instance();
        $CI->load->model("admin_db");
        $data = $CI->admin_db->get_admin($u, $p);

        if ($data) {
            $this->admin_id = $data['member_id'];
            $this->username = $data['member_email'];
            $this->password = $data['member_password'];
            return TRUE;
        } else {

            return FALSE;
        }
    }
    
    
     public function get_admin_by_authkey($authstring) {
        $CI = &get_instance();
        $CI->load->model("admin_db");
        $data = $CI->admin_db->get_admin_by_authkey($authstring);

        if ($data) {
            $this->admin_id = $data['member_id'];
            $this->username = $data['member_email'];
            $this->password = $data['member_password'];
            return TRUE;
        } else {
            return FALSE;
        }
    }
    

}
