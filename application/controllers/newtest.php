<?php

    class newtest extends CI_Controller
    {
        public function index()
        {
            $this -> load -> helper("form");
            $this -> load -> view("newtest_view");
            $this -> load -> helper("html");
            // $this -> load -> helper(array("form","html","url"));

        }
    }

?>