<?php
/**
 * Template Name: Front Page
 */
?>

<?php get_header(); ?>


<?php

// $terms_tax = get_terms(array(
//     'taxonomy'=> 'varieties',
//     'hide_empty'=>false
// ));

// foreach($terms_tax as $term){
//      var_dump($term->slug);
// }


// var_dump($terms_tax);`
 include_once DIR_PATH . '/views/partials/pages/index/site-title.php';
 include_once DIR_PATH . '/views/partials/pages/index/slider.php';
 include_once DIR_PATH . '/views/partials/pages/index/sushi-categories.php';
 
?>


<?php get_footer();?>