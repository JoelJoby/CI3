<?php

    class User_Model extends CI_Model
    {
        public function loggedinuserinfo($userid)
        {
            $this -> db -> where("unid",$userid);

            $result = $this -> db -> get("users");

            if($result -> num_rows() > 0)
            {
                return $result->row();
            }

            else
            {
                return false;
            }

        }
    }

?>