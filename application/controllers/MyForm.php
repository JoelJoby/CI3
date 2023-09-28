<?php

    class MyForm extends CI_Controller
    {
        public function index()
        {
            $this -> load -> view("MyForm_view");

            if(isset($_POST['submit']))
            {
                $name = $_POST['uname'];
                $email = $_POST['email'];

                $this -> load -> model("MyForm_model");

                $this -> MyForm_model -> save($name,$email);

            }
        }
    }

?>