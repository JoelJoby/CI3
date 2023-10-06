<?php

    class newyear extends CI_Controller
    {
        public function index($y = null ,$m = null)
        {

            $prefs = array(
                'start_day'    => 'saturday',
                'month_type'   => 'long',
                'day_type'     => 'short',
                'show_next_prev' => true
            );

            $this -> load -> library("calendar",$prefs);

        

            $data = array(
                3  => 'http://example.com/news/article/2006/06/03/',
                7  => 'http://example.com/news/article/2006/06/07/',
                13 => 'http://example.com/news/article/2006/06/13/',
                26 => 'http://example.com/news/article/2006/06/26/'
            );
        

            echo $this ->calendar-> generate($y,$m,$data);
        }
    }

?>