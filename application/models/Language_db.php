<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

//language model
class Language_db extends CI_Model {

    //constructor
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    //function that returns all the languages that are in the database
    public function get_languages() {
        $sql = "select * from language";
        $query = $this->db->query($sql);
        return !empty($query) ? $query->result_array() : false;
    }

}
