<?php

defined('BASEPATH') OR exit('No direct script access allowed'); //will not allow the direct access to this file using the folder path

    class Test extends CI_Controller
    {
        public function index()
        {
            echo "This is index";
        }

        // public function _remap($method)
        // {
        //     if($method == "greetings")
        //     {
        //         $this -> greetings();
        //     }
        //     else if ($method == "welcome")
        //     {
        //         $this -> welcome();
        //     }
        //     // else if ($method == "edit")
        //     // {
        //     //     $this -> edit($id);
        //     // }
        //     else 
        //     {
        //         $this -> defaultmethod();
        //     }
        // }

        private function myfun()
        {
            echo "This is my function";
        }

        public function _joel() // giving underscore makes the function private
        {
            echo "i am joel";
        }

        public function welcome()
        {
            echo "welcome to Codeigniter";
        }

        public function greetings()
        {
            echo "u are using CodeIgniter 3";
        }

        function edit($id)
        {
            echo $id;
        }

        function defaultmethod()
        {
            echo "The request was not able to process";
        }
       
    }

?>
