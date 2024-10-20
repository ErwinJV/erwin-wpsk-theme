<?php 

namespace includes\hooks;

use includes\hooks\Hook;

class GenericCPT implements Hook{
      protected array $settings;

      public function __construct($settings)
      {
        $this->settings = $settings;
      }


      private function add_custom_post_types():void
      {
        foreach ( $this->settings as $type =>  $data ) {

			$labels = array(
				'name'                  => _x( ucfirst( $type ), 'Post Type General Name','sushi'),
				'singular_name'         => _x( ucfirst( $type ), 'Post Type Singular Name','sushi'),
				'menu_name'             => __( ucfirst( $data['plural'] ),'sushi' ),
				'name_admin_bar'        => __( ucfirst( $data['plural'] ), 'sushi'),
				'archives'              => __( 'Archive ' . $data['plural'], 'sushi' ),
				'attributes'            => __( 'Attributes ' . $type, 'sushi' ),
				'parent_item_colon'     => __( ucfirst( $data['plural'] ) . ' padre:', 'sushi' ),
				'all_items'             => __( 'All', 'sushi' ),
				'add_new_item'          => __( 'Add new', 'sushi' ),
				'add_new'               => __( 'Add', 'sushi' ),
				'new_item'              => __( 'New', 'sushi' ),
				'edit_item'             => __( 'Edit', 'sushi' ),
				'update_item'           => __( 'Update', 'sushi' ),
				'view_item'             => __( 'See ' . $type, 'sushi' ),
				'view_items'            => __( 'See ' . $data['plural'], 'sushi' ),
				'search_items'          => __( 'Search ' . $type, 'sushi' ),
				'insert_into_item'      => __( 'Insert ' . $type, 'sushi' ),
				'uploaded_to_this_item' => __( 'Upload ' . $type, 'sushi' ),
				'items_list'            => __( 'List ' . $type, 'sushi' ),
				'items_list_navigation' => __( 'Navigation ' . $data['plural'], 'sushi' ),
				'filter_items_list'     => __( 'Filter ' . $data['plural'], 'sushi' ),
				'not_found'=>__('No found','sushi'),
				'not_found_in_trash'=>__('Not found in trash','sushi')
			);

			$rewrite = array(
				'slug'       => $data['slug'] ?? $type,
				'with_front' => true,
				'pages'      => true,
				'feeds'      => true,
			);

			$supports = array(
				'title',        // Post title
				'editor',       // Post content
				'excerpt',      // Allows short description
				'author',       // Allows showing and choosing author
				'thumbnail',    // Allows feature images
				'comments',     // Enables comments
				'trackbacks',   // Supports trackbacks
				'revisions',    // Shows autosaved version of the posts
				'custom-fields' // Supports by custom fields
			);

			$args = array(
				'label'               => __( ucfirst($type), 'sushi' ),
				'description'         => __( 'Content of ' . $data['plural'], 'sushi' ),
				'labels'              => $labels,
				'supports'            => $supports,
				//'taxonomies'          => $data['taxonomies'] ?? [],
				'hierarchical'        => false,
				'public'              => true,
				'show_ui'             => true,
				'show_in_menu'        => true,
				'menu_position'       => 5,
				'menu_icon'           => $data['icon'],
				'show_in_admin_bar'   => true,
				'show_in_nav_menus'   => true,
				'can_export'          => true,
				'has_archive'         => true,
				'exclude_from_search' => false,
				'publicly_queryable'  => true,
				'rewrite'             => $rewrite,
				'capability_type'     => 'page',
				'show_in_rest'        => true,
				
				'rest_base'          => $type.'-api',
				'rest_controller_class' => 'WP_REST_Posts_Controller'
			);

			register_post_type( 'cpt-'.$type, $args );

			flush_rewrite_rules();
		}
		
	
      }

      #[\Override]
	  public function run():void
	  {
		add_action('init',$this->add_custom_post_types(...));
	  }
}