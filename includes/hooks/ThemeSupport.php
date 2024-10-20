<?php 

namespace includes\hooks;

use includes\hooks\Hook;

class ThemeSupport implements Hook{
     
     private array $settings;

     public function __construct(array $settings)
     {
        $this->settings = $settings;
     }

    #[\Override]
    public function run():void
    {
      foreach($this->settings as $setting){
           if(is_array($setting)){
               add_theme_support(...$setting);  
           }else{
               add_theme_support($setting);
           }
           
      }   
    }
    
}

