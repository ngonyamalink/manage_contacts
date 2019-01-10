<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


//admin controller
class Admin extends CI_Controller {

    
    //constructor
    public function __construct() {
        parent::__construct();
       
        
        //loading libraries
        $this->load->library(array("admin_lib", "Session"));
        $this->load->library('user_agent');
         
        //loading helpers
        $this->load->helper(array("form", "url", "security"));
       
        //session variable
        $this->userdata = $this->session->all_userdata();

        $this->logged_in = false;
        if (isset($this->userdata['admin_id'])) {
            $this->admin_lib->get_admin($this->userdata['username'], $this->userdata['password']);
            $this->logged_in = true;
        } else {
            
        }
    }

    
    //login form loaded
    public function index() {
        $this->load->view("layout/header");
        $this->load->view("admin/login_form");
        $this->load->view("layout/footer");
    }

    
    //checking if username and password exists
    public function auth_admin() {
        $fdata = $this->input->post();
        $admin_data = $this->admin_lib->get_admin($fdata['username'], do_hash($fdata['password'], 'md5'));
        
       
        if ($admin_data == true) {
            $this->session->set_userdata(array("admin_id" => $this->admin_lib->admin_id, "username" => $this->admin_lib->username, "password" => $this->admin_lib->password));
            redirect("p_list");
        } else {
            die("Incorrect login details");
        }
    }

    
    //destroying the session and logging out
    public function logout() {
        $this->session->sess_destroy();
        redirect("admin/index");
    }

}
