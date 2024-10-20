<?php 

$commenter = wp_get_current_commenter();
$fields = [
    'author'=> '<div class="flex flex-col lg:flex-row my-4">
                <div class="flex flex-col  mb-2 md:mb-0 me-0 md:me-2">
                   <label class="py-2 font-bold" for="author">'.__("Author",SITE_NAME).'</label>
                   <input type="text" id="author" name="author" class="py-2 indent-1" placeholder="'.__("Author",SITE_NAME).'" value="'.$commenter['comment_author'].'" />
                </div>',
   'email'=>'<div class="flex flex-col mb-2 md:mb-0 me-0 md:me-2">
                 <label class="py-2 font-bold" for="email">'.__("Email",SITE_NAME).'</label>
                 <input type="email" id="email" name="email" class="py-2 indent-1" placeholder="'.__("Email",SITE_NAME).'" value="'.$commenter['comment_author_email'].'" />
             </div>',
   'url'=> '<div class="flex flex-col mb-2 md:mb-0 me-0 md:me-2">
                 <label class="py-2 font-bold" for="url">'.__("Url",SITE_NAME).'</label>
                 <input type="text" id="url" name="url" class="py-2 indent-1" placeholder="'.__("Url",SITE_NAME).'" value="'.$commenter['comment_author_url'].'" />
            </div>
            </div>
            ',

];
 $args =  [
    'id_form'           => 'commentForm',
    'class_form'      => 'flex flex-col w-[90%] mt-8',
    'id_submit'         => 'submitComment',
    'class_submit'      => 'p-2 rounded bg-slate-300 cursor-pointer my-2',
    'name_submit'       => 'submit',
    'title_reply'       => __( 'Leave a Reply', SITE_NAME ),
    'title_reply_to'    => __( 'Leave a Reply to %s',SITE_NAME ),
    'cancel_reply_link' => __( 'Cancel Reply',SITE_NAME ),
    'label_submit'      => __( 'Post Comment',SITE_NAME ),
    'format'            => 'xhtml',


    'comment_field' =>  '<div class="flex flex-col  me-2">
                           <label for="comment" class="py-2 font-bold">' . _x( 'Comment', 'noun' ) .'</label>
                           <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" class="form-control">' .
                           '</textarea>
                        </div>',


    'must_log_in' => '<p class="must-log-in">' .
      sprintf(
        __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
        wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
      ) . '</p>',


    'logged_in_as' => '<p class="logged-in-as">' .
      sprintf(
      __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ),
        admin_url( 'profile.php' ),
        get_current_user(),
        wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
      ) . '</p>',


    'comment_notes_before' => '<p class="comment-notes">' .
      __( 'Your email address will not be published.' ) .
      '</p>',


    // 'comment_notes_after' => '<p class="form-allowed-tags">' .
    //   sprintf(
    //     __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s' ),
    //     ' <code>' . allowed_tags() . '</code>'
    //   ) . '</p>',
      
      'fields' => apply_filters('comments_form_default_fields', $fields)
];


comment_form($args); 

?>



