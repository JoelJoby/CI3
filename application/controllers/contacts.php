<?php

    class contacts extends CI_Controller
    {
        public function index()
        {
            $this -> load -> model('Contacts_model');

            $data['records'] = $this -> Contacts_model -> getcontacts();

            $this -> load -> view('contacts_view',$data);
        }
    }

?>