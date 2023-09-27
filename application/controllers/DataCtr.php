<?php

    class DataCtr extends CI_Controller
    {
        public function index()
        {
            $this->load->model("DataModel");

            $blogs['articles'] = $this-> DataModel ->getallblocks();

            $this -> load ->view("BlogView",$blogs);

           
        }
    }

?>