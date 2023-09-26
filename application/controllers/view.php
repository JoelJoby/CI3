<?php

defined('BASEPATH') OR exit('No direct script access allowed'); //will not allow the direct access to this file using the folder path

    class view extends CI_Controller
    {
        public function index()
        {    
            $this->load->view("sample");     
            $this->load->view("mysample");     

        }
    }


?>