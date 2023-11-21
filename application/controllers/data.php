<?php

    class data extends CI_Controller
    {
        public function index()
        {
            $this-> load -> database();

            $resultSet = $this -> db -> query("select * from contact");

            echo $resultSet -> num_rows(); //counts the number of rows the data is having

            //$data = $resultSet -> result(); print array of object  

            $data = $resultSet -> result_array(); // array of array

            $data =  $resultSet -> result_object(); // 


            echo "<per>";

            print_r($data); // to print all the records and they r shown in the array format             
        }
    }

?>