<?php
//add theme support started
    function add_theme_setup(){    
        add_theme_support('title-tag');
		add_theme_support('custom-header');
		add_theme_support('custom-background');
		add_theme_support('post-thumbnails');	
		add_theme_support('post-formats',array('Audio','Video','Gallery'));
        add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'caption', 'style', 'script' ) );
    }
    add_action( "after_setup_theme",'add_theme_setup');
// add theme support ended 

//add nav menus started
    function register_theme_menus(){
        register_nav_menus(
            array(
                'top-Menu'      =>__('Top Menu','wptheme'),
                'header_menu'   =>__('Header Menu','wptheme'),
                'footer_menu'   =>__('Footer Menu','wptheme'),
                'category-menu'    =>__( 'Category Menu', 'wptheme' ),
            ));
    }
    add_action('init','register_theme_menus');
// nav menu menus  ended 

//add sideber register started
    function ragister_sidebar_footer_widgets(){
        register_sidebar(array(
            'id'=>'wp_theme',
            'name'=>'Wp Theme Sidebar',
            'before_widget'=>'<div class="sdb_holder">',
            'after_widget'=>'</div>',
            'before_title'=>'<h4>',
            'after_title'=>'</h4>',
        ));    
        register_sidebar(array(
            'id'=>'left_theme',
            'name'=>'Wp Theme Left Sidebar',
            'before_widget'=>'<div class="sdb_holder">',
            'after_widget'=>'</div>',
            'before_title'=>'<h4>',
            'after_title'=>'</h4>',
        ));  
    }
   add_action( 'widgets_init', 'ragister_sidebar_footer_widgets' ); 

function portfolio_register_type(){
    register_post_type('cat-portfolio',array(			  
        'labels'  => array(
            'name'    => __( 'Portfolio', 'wp_theme' ),
            'singular_name' => __( 'portfolio', 'wp_theme' ),
            'menu_name'           => __( 'portfolio', 'wp_theme' ),
            'parent_item_colon'   => __( 'Parent portfolio', 'wp_theme' ),
            'all_items'=>__('All Portfolio items','wp_theme'),
            'view_item'=>__('View Portfolio','wp_theme'),
            'add_items'=>__('Add Portfolio Items','wp_theme'),
            'add_new_item'=>__('Add Portfolio item','wp_theme'),
            'add_new'=>__('Add Portfolio New','wp_theme'),
            'edit_item'=>__('Edit Portfolio item','wp_theme'),
            'update_item'=>__('Update Portfolio item','wp_theme'),
            'search_items'=>__('search_items Portfolio item','wp_theme'),
            'not_found'           => __( 'Not Found', 'wp_theme' ),           
            'set_featured_image'=>__('Set Portfolio Featured Image','wp_theme'),
            'remove_featured_image'=>__('Remove Portfolio Featured Image','wp_theme'),
        ),
        'public'=>true,
        'has_archive'=>true,
        'menu_position' => 15,       
        'menu_icon'    =>'dashicons-portfolio',
        'rewrite'     => array( 'slug' => 'Portfolio' ),
        'supports'    =>array('title','excerpt','editor','author','thumbnail','trackbacks','revisions','custom-fields',),
        'hierarchical'        => false,      
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,     
        'can_export'          => true,        
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',

     ));     
         register_taxonomy('portfilio-cat','cat-portfolio',array(
            'hierarchical' => true,
            'labels'	   => array(
                'name' => _x( 'Cetagory', 'taxonomy general name' ),
                'singular_name' => _x( 'Cetagory', 'taxonomy singular name' ),
                'search_items' =>  __( 'Search Cetagory' ),
                'all_items' => __( 'All Cetagory' ),
                'parent_item' => __( 'Parent Cetagory' ),
                'parent_item_colon' => __( 'Parent Cetagory:' ),
                'edit_item' => __( 'Edit Cetagory' ), 
                'update_item' => __( 'Update Cetagory' ),
                'add_new_item' => __( 'Add New Cetagory' ),
                'new_item_name' => __( 'New Cetagory Name' ),
                'menu_name' => __( 'Cetagory' ),
                    ),   
            'show_ui' => true,
            'show_in_rest' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'Cetagory' ),  
         ));
         register_taxonomy('portfilio-tag','cat-portfolio',array(
            'hierarchical' => true,
            'labels'	   => array(
                'name' => _x( 'Tags', 'taxonomy general name' ),
                'singular_name' => _x( 'Tags', 'taxonomy singular name' ),
                'search_items' =>  __( 'Search Tags' ),
                'all_items' => __( 'All Tags' ),
                'parent_item' => __( 'Parent Tags' ),
                'parent_item_colon' => __( 'Parent Tags:' ),
                'edit_item' => __( 'Edit Tags' ), 
                'update_item' => __( 'Update Tags' ),
                'add_new_item' => __( 'Add New Tags' ),
                'new_item_name' => __( 'New Tags Name' ),
                'menu_name' => __( 'Tags' ),
                    ),   
            'show_ui' => true,
            'show_in_rest' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'Tags' ),  
         ));
 }
add_action( 'init','portfolio_register_type' );

  
 
 



//add style & script files started
    function add_theme_styles_scripts(){
    //add css files
    wp_enqueue_style( 'wp-bootstrap', get_template_directory_uri().'/layout/styles/bootstrap.min.css' );
    wp_enqueue_style( 'wp-templatemo', get_template_directory_uri().'/layout/styles/templatemo-xtra-blog.css' );
    wp_enqueue_style( 'wp-styles', get_template_directory_uri().'/layout/styles/layout.css' );
    wp_enqueue_style('wp-maincss',get_stylesheet_uri());

    //add js files
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'wp-jquery-bootstrap', get_template_directory_uri().'/layout/scripts/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'wp-jquery-jquerymin', get_template_directory_uri().'/layout/scripts/jquery.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'wp-jquery-templatemo', get_template_directory_uri().'/layout/scripts/templatemo-script.js', array('jquery'), '', true );
    wp_enqueue_script( 'wp-jquery-backtotop', get_template_directory_uri().'/layout/scripts/jquery.backtotop.js', array('jquery'), '', true );
    wp_enqueue_script( 'wp-jquery-mobilemenu', get_template_directory_uri().'/layout/scripts/jquery.mobilemenu.js', array('jquery'), '', true );
}
add_action('wp_enqueue_scripts', 'add_theme_styles_scripts');
// nav style & script files ended


// //working files for redux framework
require_once ("CMB2-develop/init.php");
require_once ("CMB2-develop/config.php");
//working files for redux framework

// //working files for cmb2
require_once ("redux/redux-core/framework.php");
require_once ("redux/sample/config.php");
//working files for cmb2

// Comment Field Order add my i best distrpbton
function mo_comment_fields_custom_order( $fields ) {
    $comment_field = $fields['comment'];
    $author_field = $fields['author'];
    $title_field = $fields['title'];
    $email_field = $fields['email'];

    unset( $fields['comment'] );
    unset( $fields['author'] );
    unset( $fields['title'] );
    unset( $fields['email'] );

    $fields['author'] = $author_field;   
    $fields['email'] = $email_field;
    $fields['title'] = $title_field;
    // $fields['url'] = $url_field;
    $fields['comment'] = $comment_field;
    return $fields;
}
add_filter( 'comment_form_fields', 'mo_comment_fields_custom_order' );

add_filter('comment_form_field_url', '__return_false');
add_filter('comment_form_field_cookies', '__return_false');


function wpsites_modify_comment_form_text_area($arg) {
    // $comment_field = '<div class="mb-4"><label for="description">Comment Descriptions</label><textarea class="form-control form-control_cus" id="description" name="message" cols="30"  rows="8"></textarea></div>';


    $arg['comment_field'] = '<p class="comment-form-comment"><label for="comment">' . _x( 'Your Feedback Is Appreciated', 'noun' ) . '</label><textarea id="comment" name="comment" cols="45" rows="1" aria-required="true"></textarea></p>';
    return $arg;
}


//remove for notis fileds
// add_filter('comment_form_defaults', 'wpsites_modify_comment_form_text_area');
add_filter( 'comment_form_defaults', 'afn_custom_comment_form' );
function afn_custom_comment_form($fields) {
	$fields['comment_notes_before'] = ''; // Removes comment before notes
	$fields['comment_notes_after'] = ''; // Removes comment after notes
    return $fields;
}



function filter_comment_form_submit_button( $submit_button ) {
    // make filter magic happen here...
    $submit_before = '<div class="text-right">';
    $submit_button = '<button class="tm-btn tm-btn-primary tm-btn-small">Submit</button>';
    $submit_after = '</div>';
    return $submit_before . $submit_button . $submit_after;
};
// add the filter
add_filter( 'comment_form_submit_button', 'filter_comment_form_submit_button', 10, 2 );
///////
add_filter( 'comment_form_defaults', 'wpsites_comment_form_defaults' );
function wpsites_comment_form_defaults( $defaults ) {
 
	$defaults['title_reply'] = __( 'Add Your Story' );
	$defaults['label_submit'] = __( 'Submit Story', 'custom' );
	return $defaults;
}
/**
 * @author    Brad Dalton
 * @example   http://wpsites.net/web-design/add-remove-change-order-of-comment-form-default-fields/
 * @copyright 2014 WP Sites
 */

add_filter( 'genesis_title_comments', 'wpsites_title_comments' );
function wpsites_title_comments() {
	$title = '<h3>Your Stories</h3>';
	return $title;
}

add_filter( 'comment_form_default_fields', 'wpsites_comment_form_fields' );

function wpsites_comment_form_fields( $fields ) {
    $req   = get_option( 'require_name_email' );
         
		$fields['title'] = '<div class="mb-4">' . '<label for="title">' . __( 'Comment Title' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
		            '<input id="title" name="title" type="text" value="' . esc_attr( $commenter['comment_title'] ) . '" size="30"' . $aria_req . ' /></div>';

		$fields['author'] = '<div class="mb-4 cus_label me-4">' . '<label for="author">' . __( 'Your Name' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
		            '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>';
					
		$fields['email']  = '<div class="mb-4 cus_label"><label for="email">' . __( 'Your Email' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
		            '<input id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>';

	return $fields;
}


//////
//* Save Custom Comment Form Field Meta Data
add_action( 'comment_post', 'save_custom_comment_field_data', 10, 1 );
function save_custom_comment_field_data( $comment_id ) {

  if ( ( isset( $_POST['title'] ) ) && ( $_POST['title'] != '') )
  $title = wp_filter_nohtml_kses($_POST['title']);
  add_comment_meta( $comment_id, 'title', $title );

}

//* Add Custom Meta Boxes On Edit Comment Screen
add_action( 'add_meta_boxes_comment', 'wpsites_add_custom_comment_field_meta_boxes' );
function wpsites_add_custom_comment_field_meta_boxes() {
    add_meta_box( 'title', __( 'Title' ), 'wpsites_custom_comment_title_field_meta_box', 'comment', 'normal', 'high' );	
}

function wpsites_custom_comment_title_field_meta_box( $comment ) {
    $title = get_comment_meta( $comment->comment_ID, 'wpsites_title_comment_field_data', true );
    wp_nonce_field( 'update_comment_title', 'update_comment_title', false );
    ?>
<p>
    <label for="title"><?php _e( 'Title' ); ?></label>
    <input type="text" name="title" value="<?php echo esc_attr( $title ); ?>" class="widefat" />
</p>
<?php
}

add_action( 'edit_comment', 'update_edit_comment' );
function update_edit_comment( $comment_id ) {
    if( ! isset( $_POST['update_comment_title'] ) || ! wp_verify_nonce( $_POST['update_comment_title'], 'update_comment_title' ) ) return;
    if( isset( $_POST['title'] ) )
	    update_comment_meta( $comment_id, 'title', esc_attr( $_POST['title'] ) );

}

add_action('load-edit-comments.php', 'add_custom_fields_to_edit_comment_screen');
function add_custom_fields_to_edit_comment_screen() {
    $screen = get_current_screen();

    add_filter("manage_{$screen->id}_columns", 'add_custom_comment_columns');
}

function add_custom_comment_columns($cols) {
    // $cols['industry'] = __('Industry', 'wpsites');
	$cols['title'] = __('Title', 'wpsites');
    return $cols;
}

add_action( 'manage_comments_custom_column', 'custom_title_column', 10, 2 );
function custom_title_column($col, $comment_id) {
   
    switch($col) {
        case 'title':
            if($tit = get_comment_meta($comment_id, 'title', true)){
                echo esc_html($tit);
            } else {
                esc_html_e('No Title Submitted', 'wpsites');
            }
    }
}
//* Output Custom Comment Field Data On Comment Form Front End
add_filter( 'comment_text', 'output_title_field_data_comment_form');
function output_title_field_data_comment_form( $text ){


  if( $title = get_comment_meta( get_comment_ID(), 'title', true ) ) {
    $title = '<strong>' . esc_attr( $title ) . '</strong><br/>';
    $text = $title . $text;
    return $text;
	}
  }
 
  ?>




<?php
  function mycomment_show_custom($comment, $args, $depth){
    $GLOBALS['comment'] = $comment;
      ?>
<div class="tm-comment tm-mb-45">
    <figure class="tm-comment-figure">
        <span
            class="mb-4 rounded-circle"><?php echo get_avatar( $comment, $size='30', 'https://source.unsplash.com/80x60/?business,metting'); ?></span>
        <figcaption class="tm-color-primary text-center mt-3">
            <?php printf(__('<h5>%s</h5>'), get_comment_author_link()); ?>
        </figcaption>
    </figure>
    <div>
        <p>
            <?php  comment_text(); ?>
        </p>
        <div class="d-flex justify-content-between">
            <span class="tm-color-primary"><?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?></span>
            <span
                class="tm-color-primary"><?php printf(/* translators: 1: date and time(s). */ esc_html__('%1$s at %2$s' , '5balloons_theme'), get_comment_date(),  get_comment_time()); ?></span>
        </div>
    </div>
</div>
<?php }; ?>
