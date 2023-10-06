<?php

    class emailcont extends CI_Controller
    {
        public function index()
        {
            $this -> load -> library("email");

            $config = array (
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.gmail.com',
                'smtp_timeout' => 30,
                'smtp_port' => 465,
                'smtp_user' => 'joeljoby28430@gmail.com',
                'smtp_pass' => '*******',
                'charset' => 'utf-8',
                'mailtype' => 'html',
                'newline' => '\r\n'
            );

            $this -> email -> initialize($config);

            $this -> email -> to("joeljoby369@gmail.com");

            $this -> email -> from("joeljoby28430@gmail.com");

            $this -> email -> subject("Test Email Library");

            $this -> email -> message("Helo this is to test email function");

            if($this -> email -> send())
            {
                echo "Email is send successfully";
            }

            else 
            {
                echo " Sorry error occured";
                print_r($this -> email -> print_debugger());
            }

        }
    }

?>