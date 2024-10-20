<?php 

namespace includes\hooks;

use includes\hooks\Hook;

class AddSideBar implements Hook {

   private array $settings;

   public function __construct(array $settings)
   {
      $this->settings = $settings;
   }

   private function add_sidebars()
   {
     foreach($this->settings as $setting){
          
        register_sidebar($setting);

     }
   }


    #[\Override]
    public function run():void
    {
        add_action('widgets_init',$this->add_sidebars(...));
    }
     
}