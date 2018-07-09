<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

//person model
class Person_db extends CI_Model {

    //constructor
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    //add persn record
    public function add_person($data) {
        $this->db->insert("person", $data);
    }

    //get all person records using admin id
    public function get_people_by_admin_id($admin_id) {
        $sql = "select person.person_id,person.firstname,person.surname,person.mobile,person.dateofbirth,person.email,person.language_id,language.language_name  from person left join language on (language.language_id=person.language_id )  where person.admin_id=$admin_id";
        $query = $this->db->query($sql);
        return !empty($query) ? $query->result_array() : false;
    }

    //update person record
    public function update_person($where, $data) {
        $this->db->where($where)->update("person", $data);
    }

    //get person record by person id and admin id
    public function get_person_by_person_id_admin_id($person_id, $admin_id) {
        $sql = "select person.person_id,person.firstname,person.surname,person.mobile,person.dateofbirth,person.email,person.language_id,language.language_name from person  left join language on (language.language_id=person.language_id )  where (person.person_id=$person_id and person.admin_id=$admin_id)";
        $query = $this->db->query($sql);
        return !empty($query) ? $query->row_array() : false;
    }
}