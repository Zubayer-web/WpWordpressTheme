<?php 

$comments_arges_custom = array(    
    'title_reply' => __( '' ),
    'comment_notes_after' => '<p>Thinks for your opinion</p>',
    
);
comment_form( $comments_arges_custom );
echo '<h2 class="tm-color-primary tm-post-title">Comments</h2>
<hr class="tm-hr-primary tm-mb-45">';

$args_cpmment = array(
     'style'            => 'ol',
    'callback'          => 'mycomment_show_custom',    
    'reverse_top_level' => true,          
    'reverse_children'  => true, 
);

 wp_list_comments($args_cpmment);


 the_comments_pagination(
     array(        
        'echo'      => false,
        'end_size'  => 0,
        'mid_size'  => 0,
        'next_text' => __( 'Next Comments', 'twentytwenty' ) . ' <span aria-hidden="true"> &raquo; </span>',
        'prev_text' => '<span aria-hidden="true"> &laquo; </span> ' . __( 'previous Comments', 'twentytwenty' ),
     )
 );


?>