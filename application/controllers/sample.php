<?php

    class sample extends CI_Controller
    {
        public function index()
        {
            // $this -> load -> helper("url");

            $this -> load -> helper("html");

            $this -> load -> view("sample_view");
        }
    }

?>