<?php

    class Contact extends CI_Controller 
    {
        public function index()
        {
            $this -> load -> helper("form");

            $this -> load -> library("form_validation");


            $this -> form_validation -> set_rules("name","Name","required|min_length[3]|alpha");
            $this -> form_validation -> set_rules("email","Email","required|valid_email", array('required' => 'Email required','valid_email' => 'Email Required'));
            $this -> form_validation -> set_rules("mobile","Mobile","required|numeric|exact_length[10]");


            if($this -> form_validation -> run() === TRUE )
            {
                echo "The Values R ok";
            }
            else
            {
                $this -> load -> view('contact_view');
            }

           
        }

    }

?>