<?php 

namespace includes\hooks;

use includes\hooks\Hook;

class AddMenu implements Hook {

    protected array $settings;

    public function __construct($settings)
    {
        $this->settings = $settings;
    }

    private function add_menu():void
    {
       register_nav_menus($this->settings);  
    }

    #[\Override]
    public function run():void
    {
     add_action('init',$this->add_menu(...));    
    }


}