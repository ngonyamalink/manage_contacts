<?php

//language helper
if (!function_exists("get_languages")) {
    
    function get_languages() {
        $CI = &get_instance();
        $CI->load->model("language_db");
        return $CI->language_db->get_languages();
    }

}