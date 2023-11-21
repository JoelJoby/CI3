<?php

    class Contacts_model extends CI_Model
    {
        public function getcontacts()
        {
           $this -> load -> database();

           $result = $this -> db -> query("select * from sample");

           if($result -> num_rows() > 0)
           {
            return $result -> result();

           }
           else
           {
            return false;
           }

        }
    }

?>