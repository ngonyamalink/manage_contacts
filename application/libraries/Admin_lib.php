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
            $this->admin_id = $data['admin_id'];
            $this->username = $data['username'];
            $this->password = $data['password'];
            return TRUE;
        } else {

            return FALSE;
        }
    }

}
