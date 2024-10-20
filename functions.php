<?php 

// use includes\hooks\AddMenu; 
use includes\hooks\EnqueueScript;
use includes\hooks\EnqueueStyle;
// use includes\hooks\GenericCPT;
// use includes\hooks\Taxonomy;
use includes\hooks\ThemeSupport;
// use includes\hooks\AddSideBar;
// use includes\hooks\AddWidget;
// use includes\widgets\SushiVarieties;

$dir_path = get_template_directory();
$dir_uri = get_template_directory_uri();
$site_name = get_bloginfo();

define('DIR_PATH',$dir_path);
define('DIR_URI',$dir_uri);
define('SITE_NAME',$site_name);


spl_autoload_register(function(string $className){
      $path = str_replace('\\','/',$className);
      $classPath = DIR_PATH . "/$path" . ".php";
       if(file_exists($classPath)){
        require $classPath;
       }   
});


//----Add Custom Post Types-----

// $cpt_args = [
// 	"sushi" => [
// 		"plural" => "sushis",
// 		"icon"   => "dashicons-food",       
// 	],
	
// ];

// $cpt = new GenericCPT($cpt_args);
// $cpt->run();


//--------Add Taxonomies---------


// $taxonomies_args = [

//    'varieties'=>[
//         'object_type'=>['cpt-sushi'],
//         'args'=>[
//             'hierarchical'=>true,
//             'show_ui'=>true,
//             'show_admin_column'=>true,
//             'query_var'=>true,
//             'rewrite'=>array('slug'=>'varieties'),
//             'show_in_rest'=>true,
//             'rest_base'=> 'varieties',
//             'rest_controller_class'=>'WP_REST_Terms_Controller',   
//         ]
//     ]
// ];
// $taxonomy = new Taxonomy($taxonomies_args);
// $taxonomy->run();


//--------Enqueue scripts--------


$scripts_args = [
    [
      'name'=>'swiper-js',
      'path_uri'=> DIR_URI . '/dist/js/swiper.min.js',
      'deps'=>[],
      'version'=> '1.0',
      'args'=> ['strategy'=>'defer']
    ],
    [
       'name'=> 'all-js',
       'path_uri'=> DIR_URI . '/dist/js/all.min.js',
       'deps'=> ['swiper-js'],
       'version'=> '1.0',
       'args'=> ['strategy'=>'defer']
    ],
    [
       'name'=> 'alpine-js', 
       'path_uri'=> DIR_URI . '/dist/js/alpinejs.min.js',
       'deps'=> ['all-js'],
       'version'=> '3.x.x',
       'args'=> ['strategy'=>'defer']
    ],
    [
       'name'=> 'fontawesome-js',
       'path_uri'=> DIR_URI .'/dist/js/fontawesome.min.js',
       'deps'=> [],
       'version'=> '6.6.0',
       'args'=> null
    ]

 ];
$enqueue_scripts = new EnqueueScript($scripts_args);


//--------Enqueue styles----------


$styles_args = array(
    [
       'name'=>'tailwind-css',
       'path_uri'=> DIR_URI.'/dist/css/output.min.css',
       'deps'=> [],
       'version'=> '3.4.10',
       'media'=>'all'
    ],
    [
       'name'=> 'fontawesome-css',
       'path_uri'=> DIR_URI . '/dist/css/fontawesome.min.css',
       'deps'=> [],
       'version'=> '6.6.0',
       'media'=> 'all'
    ],
    [
       'name'=> 'swiper-css',
       'path_uri' => DIR_URI . '/dist/css/swiper.min.css',
       'deps' => [],
       'version'=> '11.1.12',
       'media' => 'all'
    ]
);


$enqueue_styles = new EnqueueStyle($styles_args);
$enqueue_styles->run();

// Add theme support

$custom_logo = [
   'flex-width'=>true,
   'flex-height'=>true,
   'header-text'=>array(SITE_NAME,ucfirst(SITE_NAME) . ' logo')
];

$theme_support_args = [
   'post-thumbnails',
   'widgets',
   ['custom-logo',$custom_logo],

];

$theme_support = new ThemeSupport($theme_support_args);
$theme_support->run();














