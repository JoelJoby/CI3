<?php

    class user extends CI_Controller
    {
        private $userid;

        public function __construct()
        {
            parent::__construct();   

            $this -> load -> database();
            
            $this -> load -> model("User_Model");            

            if(!$this -> session -> has_userdata("login_true"))
            {
                redirect(base_url()."login");
            }    
            
            $this -> userid = $this -> session -> userdata("unid");        
            
        }
        
        public function index()
        {           
            $data["userinfo"] = $this -> User_Model -> loggedinuserinfo($this -> userid);

            $this -> load -> view("header");

            $this -> load -> view("user_view",$data);

            $this -> load -> view("footer");
        }

        public function logout()
        {
            $array_items = array('unid','login_true','username');
            $this -> session -> unset_userdata($array_items);
            redirect(base_url()."login");
        }
    }

?>