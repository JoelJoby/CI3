<?php

    class help extends CI_Controller
    {
        public function index()
        {
            $this -> load -> helper("array");

            $quotes = array(
                "I find that the harder I work, the more luck I seem to have. - Thomas Jefferson",
                "Don't stay in bed, unless you can make money in bed. - George Burns",
                "We didn't lose the game; we just ran out of time. - Vince Lombardi",
                "If everything seems under control, you're not going fast enough. - Mario Andretti",
                "Reality is merely an illusion, albeit a very persistent one. - Albert Einstein",
                "Chance favors the prepared mind - Louis Pasteur"
            );
        
            $data['quote'] = random_element($quotes);

            $this -> load -> view("help_view",$data);
        }
    }

?>