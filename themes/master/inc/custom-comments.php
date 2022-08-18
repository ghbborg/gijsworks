<?php 

/**
 * Comment Form Placeholder Author, Email, URL
 */
add_filter( 'comment_form_default_fields', 'tu_adjust_comment_form_fields' );
function tu_adjust_comment_form_fields( $fields ) {
    return array(
        'author' => '<div class="flex flex-col pt-8 lg:gap-10 lg:grid lg:grid-cols-2"><input placeholder="' . esc_attr__( 'Naam', 'generatepress' ) . ' *" id="author" name="author" type="text" size="30" />',
        'email' => '<input class="mt-8 lg:mt-0" placeholder="' . esc_attr__( 'Email', 'generatepress' ) . ' *" id="email" name="email" type="email"  size="30" /></div>',
    );
}

add_filter( 'comment_form_defaults', function( $defaults ) {
    $defaults['comment_field'] = sprintf(
        '<p class="comment-form-comment"><textarea placeholder="Reactie *" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
        esc_html__( 'Comment', 'generatepress' )
    );

    return $defaults;
}, 20 );

add_filter('comment_form_defaults', 'set_my_comment_title', 20);
function set_my_comment_title( $defaults ){
  $defaults['title_reply'] = __('Plaats hier uw bericht', 'customizr-child');
  return $defaults;
}