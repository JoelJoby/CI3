<?php

    class user extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();    
            if(!$this -> session -> has_userdata("login_true"))
            {
                redirect(base_url()."login");
            }      
        }
        
        public function index()
        {
            $this -> load -> view("header");

            $this -> load -> view("footer");
        }

        public function logout()
        {
            $array_items = array('unid','login_true','username');
            $this -> session -> unset_userdata($array_items);
            redirect(base_url()."login");
        }
    }

?>