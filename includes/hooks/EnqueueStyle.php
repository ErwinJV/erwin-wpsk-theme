<?php 

namespace includes\hooks;

class EnqueueStyle {

    protected $styles;
     
    public function __construct($styles)
    {
        $this->styles = $styles;

       
    }
 

   function add_styles()
    {
        foreach($this->styles as $style){
             
            extract($style,EXTR_OVERWRITE);
            
            wp_enqueue_style($name,$path_uri,$deps,$version,$media);
        }
    }


    public function run()
    {
        add_action('wp_enqueue_scripts',[$this,'add_styles']);
    }

}