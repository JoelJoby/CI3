<?php

    class Register_model extends CI_Model
    {
        public function save_data($data)
        {
            $this -> db->insert("users",$data);
            if($this -> db -> affected_rows() ==1)
            {
                return true;
            }
            else 
            {
                return false;
            }
        }
    }

?>