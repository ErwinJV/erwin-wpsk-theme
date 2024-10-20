<?php

namespace includes\hooks;


class EnqueueScript {

    protected $scripts;
     
    public function __construct($scripts)
     {
         $this->scripts = $scripts;

         add_action('wp_enqueue_scripts', $this->add_scripts(...));
     }



     private function add_scripts()
     {
         foreach($this->scripts as $script)
         {
            extract($script,EXTR_OVERWRITE);
            wp_enqueue_script($name,$path_uri,$deps,$version,$args);
         }
     }



}