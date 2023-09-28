<?php

    class MyForm_model extends CI_Model
    {
        public function save($name,$email)
        {
            echo "Welcome " . $name . ", Your Email is:" . $email;
        }
    }

?>