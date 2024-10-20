<?php
use includes\helpers\Comment;

/**
 *  The template for displaying comments
 */
if(post_password_required()){
     return;
}

$comment = new Comment();

?>
<div id="comments" class="flex flex-col">
   <?php if(have_comments()): ?>
    <h2 class="text-2xl mb-3">
      <?php echo __('Posts comments','sushi'); ?>
    </h2>

    <ol class="bg-white w-[90%]">
       <?php wp_list_comments(
         array(
            'type'=>'comment',
             'callback'=> [$comment,'view_comments']

         )
       ); ?>
    </ol>
   <?php endif; ?>


</div>



