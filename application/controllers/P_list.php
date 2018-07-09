<?php

//person list controler
class P_list extends CI_Controller {

    public function __construct() {
        parent::__construct();

        //admin libbrary and session library loaded
        $this->load->library(array("admin_lib", "Session"));
        $this->load->library('user_agent');

        //loading form, language and url helpers
        $this->load->helper(array("form", "url", "language"));

        //loading persn model
        $this->load->model("person_db");


        $this->userdata = $this->session->all_userdata();

        $this->logged_in = false;
        if (isset($this->userdata['admin_id']) && $this->userdata['admin_id'] > 0) {
            $this->admin_lib->get_admin($this->userdata['username'], $this->userdata['password']);
            $this->logged_in = true;
        } else {

            die("session expired");
        }
    }

    //loading a view to display people that are in the database
    public function index() {
        $data['person_list'] = $this->person_db->get_people_by_admin_id($this->admin_lib->admin_id);
        $data['admin_id'] = $this->admin_lib->admin_id;
        $this->load->view("layout/header", $data);
        $this->load->view("p_list/index", $data);
        $this->load->view("layout/footer");
    }

    public function add_person_form() {
        $data['admin_id'] = $this->admin_lib->admin_id;
        $this->load->view("layout/header", $data);
        $this->load->view("p_list/add_person_form");
        $this->load->view("layout/footer");
    }

    //adding a person
    public function add_person() {
        $fdata = $this->input->post();
        unset($fdata['submit']);
        $fdata['admin_id'] = $this->admin_lib->admin_id;
        $this->person_db->add_person($fdata);
        redirect("p_list/index");
    }

    //loading a form to update existing person
    public function update_person_form($person_id) {
        $data['person_id'] = $person_id;
        $data['admin_id'] = $this->admin_lib->admin_id;
        $data['person'] = $this->person_db->get_person_by_person_id_admin_id($person_id, $this->admin_lib->admin_id);
        $this->load->view("layout/header", $data);
        $this->load->view("p_list/update_person_form", $data);
        $this->load->view("layout/footer");
    }

    //updating a person record
    public function update_person() {
        $fdata = $this->input->post();
        unset($fdata['submit']);
        $where = array("admin_id" => $this->admin_lib->admin_id, "person_id" => $fdata['person_id']);
        $this->person_db->update_person($where, $fdata);
        redirect("p_list/index");
    }

}
