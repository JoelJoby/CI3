<?php

    class HomePage extends CI_Controller
    {
        public function index()
        {
            $this -> load -> view("header");
            $this -> load -> view("HomePage_views");
            $this -> load -> view("footer");
        } 

        public function articles()
        {
            $this -> load -> view("header");
            $this -> load -> view("footer");
        }
    }

?>