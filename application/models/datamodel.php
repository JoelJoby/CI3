<?php

    class DataModel extends CI_Model
    {
           public function getallblocks()
           {
                $datas = array(
                    array("title"=>"title will goes here"),
                    array("title"=>"Title will goes here 1"),
                    array("title"=>"Title will goes here 2")
                );
                return $datas;

           }
    }

?>