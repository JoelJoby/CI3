<?php

    class users extends CI_Controller
    {
        public function index()
        {
            $this -> load -> database();

            // $this -> db -> where("id",'1');
            // $this -> db -> where(array("id" => 1,"name"=>"ramu"));

            $this -> db -> order_by("name");
            $data = $this -> db -> get("sample"); // this i s a qurey builder class

            print_r($data);

            echo "<pre>";

            print_r($data -> result());     
            
        }
    }

?>