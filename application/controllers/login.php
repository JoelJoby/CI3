<?php

    class login extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this -> load -> helper("form");
            $this -> load -> library(array("form_validation"));
            $this -> load -> database();
            $this -> load -> model("login_model");
        }

        public function index()
        {
            $this -> load -> view('header');

            $this -> form_validation -> set_rules("email","Email","required|valid_email");
            $this -> form_validation -> set_rules("pwd","password","required");

            if($this -> form_validation -> run() == true)
            {            
                $email = $this -> input -> post("email",true);
                $pwd = $this -> input -> post("pwd",true);

                $info = $this -> login_model -> verifyEmail($email);

                if(!empty($info))
                {
                    if(password_verify($pwd, $info -> password))
                    {
                        // $this -> session -> set_userdata("login_true",$info->uniid);
                        // redirect(base_url()."user");

                        // $this -> session -> set_userdata("login_true",array("unid"=> $info->unid,"uname"=>$info->uname));

                        $this -> session -> set_userdata(array("unid"=>$info->unid,
                        "uname"=>$info->uname,
                        "login_true"=>true));
                        redirect(base_url()."user");
                    }
                    
                    else
                    {

                        $this -> session -> set_tempdata("error","Sorry! The password is Wrong",3);
                        redirect(current_url());
                    }

                }
                else
                {
                    $this -> session -> set_tempdata("error","Sorry! Unable to find the email",3);
                    redirect(current_url());
                }
            }

            else
            {
                $this -> load -> view("login_view");
            }

            $this -> load -> view("footer");

            
        }
    }


?>