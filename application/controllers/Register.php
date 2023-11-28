<?php

    class Register extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();

            $this -> load -> helper("form");
            $this -> load -> library(array("form_validation","session"));
            $this -> load -> database();
            $this -> load -> model("Register_model");
        }

        public function index()
        {
            $this -> load -> view("header");

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

                $name = $this -> input -> post("uname",TRUE);

                $data = array(
                    "uname" => $name,
                    "email" => $this -> input -> post("email",True),
                    "gender" => $this -> input -> post("gender",TRUE),
                    "mobile" => $this -> input -> post("mobile",TRUE),
                    "password" => password_hash($this -> input -> post("pwd",TRUE),PASSWORD_DEFAULT),
                    "unid" => md5(str_shuffle(time(). $name."abcdefghijklmnpqrstuvwxyz"))  
                );

                $status = $this -> Register_model -> save_data($data); 

                if($status === true)
                { 
                    $this -> session -> set_tempdata("success","Account Created Successfully",3);
                    redirect(current_url());

                    // $subject = "Account Activation Link";
                    // $message = "Hi" . $name . "<br><br> Thanks for creating an account with us." . "Please click the below link to activate your account.<fbr><br>";
                }

                else
                {
                    $this -> session -> set_tempdata("error","Sorry! Unable to create an account",3);
                    redirect(current_url());
                    
                }
            }

            else
            {
                $this -> load -> view('Register_View');                
            }

            $this -> load -> view("footer");
        }
    }

?>