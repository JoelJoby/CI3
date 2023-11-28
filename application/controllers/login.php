<?php

    class login extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this -> load -> helper("form");
            
        }
        public function index()
        {
            $this -> load -> view('header');
            $this -> load -> view('login_view');
            $this -> load -> view('footer');
        }
    }


?>