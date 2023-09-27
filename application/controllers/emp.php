<?php
    defined('BASEPATH') OR exit('No Direct Script access allowed');

    class emp extends CI_Controller
    {
        public function index()
        {
            $data['employees'] = array(
                array("id"=>1,"name"=>"ram","email"=>"ram@gmail.com"),
                array("id"=>2,"name"=>"joel","email"=>"joel@gmail.com"),
                array("id"=>1,"name"=>"ram","email"=>"ram@gmail.com"),
            );

            $data ['page_title'] ="All Employees";

            $data ['page_heading'] = "All Employee List";
            
            $this->load->view("emp",$data);

        }
    }


?>