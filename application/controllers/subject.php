<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class subject extends CI_Controller
    {
        public function index()
        {
            $data['subjects'] = ["html","css","javascript","bootstrap","php"];
            
            $this->load->view("subject",$data);
        }
    }


?>