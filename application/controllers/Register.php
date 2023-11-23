<?php

    class Register extends CI_Controller
    {
        public function index()
        {
            $this -> load -> helper("form");

            $this -> load -> library("form_validation");

            $this -> form_validation -> set_rules("uname","Name","required|min_length[3]");
            $this -> form_validation -> set_rules("email","Email","required|valid_email");
            $this -> form_validation -> set_rules("pwd","Password","required|min_length[6]");
            $this -> form_validation -> set_rules('cpwd','Confirm Password','required|matches[pwd]');
            $this -> form_validation -> set_rules('mobile','Mobile','required|exact_length[10]|numeric');

            if($this -> form_validation -> run() === true)
            {
                echo "Registration Completed";

            }

            else
            {
                $this -> load -> view('Register_View');                
            }

            
        }
    }

?>