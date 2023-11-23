<?php

    class Register extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();

            $this -> load -> helper("form");
            $this -> load -> library("form_validation");
        }

        public function index()
        {
            $this -> form_validation -> set_rules("uname","Name","required|min_length[3]");
            $this -> form_validation -> set_rules("email","Email","required|valid_email");
            $this -> form_validation -> set_rules("pwd","Password","required|min_length[6]");
            $this -> form_validation -> set_rules('cpwd','Confirm Password','required|matches[pwd]');
            $this -> form_validation -> set_rules('mobile','Mobile','required|exact_length[10]|numeric');

            if($this -> form_validation -> run() === true)
            {
                // $uname = $this -> input -> post("uname",TRUE);
                // $email = $this -> input -> post("email",TRUE); 
                // $gender = $this -> input -> post("gender",TRUE);
                // $mobile = $this -> input -> post("mobile",TRUE);
                // $pwd = $this -> input -> post("pwd",TRUE);

                $data = array(
                    "name" => $this -> input -> post("uname",TRUE),
                    "email" => $this -> input -> post("email",True),
                    "gender" => $this -> input -> post("gender",TRUE),
                    "mobile" => $this -> input -> post("mobile",TRUE),
                    "password" => password_hash($this -> input -> post("pwd",TRUE),PASSWORD_DEFAULT),
                    "unid" => md5(str_shuffle(time().$uname.$mobile."abcdefghijklmnpqrstuvwxyz"))  
                );
            }

            else
            {
                $this -> load -> view('Register_View');                
            }

            
        }
    }

?>