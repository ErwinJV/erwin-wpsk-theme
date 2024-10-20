<?php 

namespace includes\hooks;

use includes\hooks\Hook;

class Taxonomy implements Hook {
    private array $settings;
    public function __construct($settings)
    {
        $this->settings = $settings;

    }

    private function create_taxonomy():void
    {
        foreach($this->settings as $type => $data){
             $labels = array(
                'name'=>_x(ucfirst($type),'taxonomy general name'),
                'singular_name'=>_x(ucfirst($type),'taxonomy singular name'),
                'search_items'=>__("Search $type",'sushi'),
                'all_items'=>__("All",'sushi'),
                'parent_item'=>__("Main $type",'sushi'),
                'parent_item_colon'=>__("Main $type:"),
                'edit_item'=>__('Edit','sushi'),
                'update_item'=>__('Update','sushi'),
                'add_new_item'=>__('Add new','sushi'),
                'new_item_name'=>__('New name','sushi'),
                'menu_name'=>__(ucfirst($type),'sushi'),
             );

             $args = array(
               'labels'=>$labels,
                ...$data['args'],
             );

             register_taxonomy(
                       $type,
                       
                       array(...$data['object_type']),
                       $args
                    );

           
        }
    }

    #[\Override]
    public function run():void
    {
        add_action('init',$this->create_taxonomy(...));
    }
}