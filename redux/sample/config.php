<?php
/**
 * ReduxFramework Sample Config File
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Redux' ) ) {
	return;
}

// This is your option name where all the Redux data is stored.
$opt_name = 'jubayer_theme';  // YOU MUST CHANGE THIS.  DO NOT USE 'redux_demo' IN YOUR PROJECT!!!

// Uncomment to disable demo mode.
/* Redux::disable_demo(); */  // phpcs:ignore Squiz.PHP.CommentedOutCode

$dir = dirname( __FILE__ ) . DIRECTORY_SEPARATOR;

/*
 * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
 */

// Background Patterns Reader.
$sample_patterns_path = Redux_Core::$dir . '../sample/patterns/';
$sample_patterns_url  = Redux_Core::$url . '../sample/patterns/';
$sample_patterns      = array();

if ( is_dir( $sample_patterns_path ) ) {
	$sample_patterns_dir = opendir( $sample_patterns_path );

	if ( $sample_patterns_dir ) {

		// phpcs:ignore WordPress.CodeAnalysis.AssignmentInCondition
		while ( false !== ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) ) {
			if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
				$name              = explode( '.', $sample_patterns_file );
				$name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
				$sample_patterns[] = array(
					'alt' => $name,
					'img' => $sample_patterns_url . $sample_patterns_file,
				);
			}
		}
	}
}

// Used to except HTML tags in description arguments where esc_html would remove.
$kses_exceptions = array(
	'a'      => array(
		'href' => array(),
	),
	'strong' => array(),
	'br'     => array(),
	'code'   => array(),
);

/*
 * ---> BEGIN ARGUMENTS
 */

/**
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://devs.redux.io/core/arguments/
 */
$theme = wp_get_theme(); // For use with some settings. Not necessary.

// TYPICAL -> Change these values as you need/desire.
$args = array(
	// This is where your data is stored in the database and also becomes your global variable name.
	'opt_name'                  => $opt_name,

	// Name that appears at the top of your panel.
	'display_name'              => $theme->get( 'Name' ),

	// Version that appears at the top of your panel.
	'display_version'           => $theme->get( 'Version' ),

	// Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only).
	'menu_type'                 => 'menu',

	// Show the sections below the admin menu item or not.
	'allow_sub_menu'            => true,

	// The text to appear in the admin menu.
	'menu_title'                => esc_html__( 'Theme Options', 'your-textdomain-here' ),

	// The text to appear on the page title.
	'page_title'                => esc_html__( 'Theme Options', 'your-textdomain-here' ),

	// Disable to create your own Google fonts loader.
	'disable_google_fonts_link' => false,

	// Show the panel pages on the admin bar.
	'admin_bar'                 => true,

	// Icon for the admin bar menu.
	'admin_bar_icon'            => 'dashicons-portfolio',

	// Priority for the admin bar menu.
	'admin_bar_priority'        => 50,

	// Sets a different name for your global variable other than the opt_name.
	'global_variable'           => $opt_name,

	// Show the time the page took to load, etc. (forced on while on localhost or when WP_DEBUG is enabled).
	'dev_mode'                  => false,

	// Enable basic customizer support.
	'customizer'                => true,

	// Allow the panel to open expanded.
	'open_expanded'             => false,

	// Disable the save warning when a user changes a field.
	'disable_save_warn'         => false,

	// Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
	'page_priority'             => 50,

	// For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters.
	'page_parent'               => 'themes.php',

	// Permissions needed to access the options panel.
	'page_permissions'          => 'manage_options',

	// Specify a custom URL to an icon.
	'menu_icon'                 => '',

	// Force your panel to always open to a specific tab (by id).
	'last_tab'                  => '',

	// Icon displayed in the admin panel next to your menu_title.
	'page_icon'                 => 'icon-themes',

	// Page slug used to denote the panel, will be based off page title, then menu title, then opt_name if not provided.
	'page_slug'                 => $opt_name,

	// On load save the defaults to DB before user clicks save.
	'save_defaults'             => true,

	// Display the default value next to each field when not set to the default value.
	'default_show'              => false,

	// What to print by the field's title if the value shown is default.
	'default_mark'              => '*',

	// Shows the Import/Export panel when not used as a field.
	'show_import_export'        => true,

	// The time transients will expire when the 'database' arg is set.
	'transient_time'            => 60 * MINUTE_IN_SECONDS,

	// Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output.
	'output'                    => true,

	// Allows dynamic CSS to be generated for customizer and google fonts,
	// but stops the dynamic CSS from going to the page head.
	'output_tag'                => true,

	// Disable the footer credit of Redux. Please leave if you can help it.
	'footer_credit'             => '',

	// If you prefer not to use the CDN for ACE Editor.
	// You may download the Redux Vendor Support plugin to run locally or embed it in your code.
	'use_cdn'                   => true,

	// Set the theme of the option panel.  Use 'wp' to use a more modern style, default is classic.
	'admin_theme'               => 'wp',

	// Enable or disable flyout menus when hovering over a menu with submenus.
	'flyout_submenus'           => true,

	// Mode to display fonts (auto|block|swap|fallback|optional)
	// See: https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display.
	'font_display'              => 'swap',

	// HINTS.
	'hints'                     => array(
		'icon'          => 'el el-question-sign',
		'icon_position' => 'right',
		'icon_color'    => 'lightgray',
		'icon_size'     => 'normal',
		'tip_style'     => array(
			'color'   => 'red',
			'shadow'  => true,
			'rounded' => false,
			'style'   => '',
		),
		'tip_position'  => array(
			'my' => 'top left',
			'at' => 'bottom right',
		),
		'tip_effect'    => array(
			'show' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'mouseover',
			),
			'hide' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'click mouseleave',
			),
		),
	),

	// FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
	// possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
	'database'                  => '',
	'network_admin'             => true,
	'search'                    => true,
);


// ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
// PLEASE CHANGE THEME BEFORE RELEASING YOUR PRODUCT!!
// If these are left unchanged, they will not display in your panel!
$args['admin_bar_links'][] = array(
	'id'    => 'redux-docs',
	'href'  => '//devs.redux.io/',
	'title' => __( 'Documentation', 'your-textdomain-here' ),
);

$args['admin_bar_links'][] = array(
	'id'    => 'redux-support',
	'href'  => '//github.com/ReduxFramework/redux-framework/issues',
	'title' => __( 'Support', 'your-textdomain-here' ),
);

$args['admin_bar_links'][] = array(
	'id'    => 'redux-extensions',
	'href'  => 'redux.io/extensions',
	'title' => __( 'Extensions', 'your-textdomain-here' ),
);

// SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
// PLEASE CHANGE THEME BEFORE RELEASING YOUR PRODUCT!!
// If these are left unchanged, they will not display in your panel!
$args['share_icons'][] = array(
	'url'   => '//github.com/ReduxFramework/ReduxFramework',
	'title' => 'Visit us on GitHub',
	'icon'  => 'el el-github',
);
$args['share_icons'][] = array(
	'url'   => '//www.facebook.com/pages/Redux-Framework/243141545850368',
	'title' => 'Like us on Facebook',
	'icon'  => 'el el-facebook',
);
$args['share_icons'][] = array(
	'url'   => '//twitter.com/reduxframework',
	'title' => 'Follow us on Twitter',
	'icon'  => 'el el-twitter',
);
$args['share_icons'][] = array(
	'url'   => '//www.linkedin.com/company/redux-framework',
	'title' => 'Find us on LinkedIn',
	'icon'  => 'el el-linkedin',
);

// Panel Intro text -> before the form.
if ( ! isset( $args['global_variable'] ) || false !== $args['global_variable'] ) {
	if ( ! empty( $args['global_variable'] ) ) {
		$v = $args['global_variable'];
	} else {
		$v = str_replace( '-', '_', $args['opt_name'] );
	}

	// translators:  Panel opt_name.
	$args['intro_text'] = '<p>' . sprintf( esc_html__( 'Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: $%1$s', 'your-textdomain-here' ), '<strong>' . $v . '</strong>' ) . '<p>';
} else {
	$args['intro_text'] = '<p>' . esc_html__( 'This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.', 'your-textdomain-here' ) . '</p>';
}

// Add content after the form.
$args['footer_text'] = '<p>' . esc_html__( 'This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.', 'your-textdomain-here' ) . '</p>';

Redux::set_args( $opt_name, $args );

/*
 * ---> END ARGUMENTS
 */

/*
 * ---> START HELP TABS
 */
$help_tabs = array(
	array(
		'id'      => 'redux-help-tab-1',
		'title'   => esc_html__( 'Theme Information 1', 'your-textdomain-here' ),
		'content' => '<p>' . esc_html__( 'This is the tab content, HTML is allowed.', 'your-textdomain-here' ) . '</p>',
	),
	array(
		'id'      => 'redux-help-tab-2',
		'title'   => esc_html__( 'Theme Information 2', 'your-textdomain-here' ),
		'content' => '<p>' . esc_html__( 'This is the tab content, HTML is allowed.', 'your-textdomain-here' ) . '</p>',
	),
);
Redux::set_help_tab( $opt_name, $help_tabs );

// Set the help sidebar.
$content = '<p>' . esc_html__( 'This is the sidebar content, HTML is allowed.', 'your-textdomain-here' ) . '</p>';

Redux::set_help_sidebar( $opt_name, $content );

/*
 * <--- END HELP TABS
 */

/*
 * ---> START SECTIONS
 */

// --------------------> START Basic Fields

//--------------------------->start custom redex code

//Dashboard main menu
Redux::set_section($opt_name,array(
		'id'		=>'theme-header',
		'title'		=>esc_html__( 'Theme Header', 'jubayer_theme' ),
		'subtitle'		=>esc_html__( 'Edit Theme Header', 'jubayer_theme' ),
		'icon'		=>'el el-cog',	 
));
//Dashboard sub menu
// top-header started
Redux::set_section($opt_name,array(
		'id'		=>'top-header',	
		'title'		=>esc_html__( 'Top Header', 'jubayer_theme' ),
		'subtitle'	=>esc_html__( 'Edit Top Header', 'jubayer_theme' ),		
		'subsection'=>true,	
		'fields'	=>array(array(
			'id'		=>'header-phone',
			'type'		=>'text',			
			'title'		=>esc_html__( 'Header Phone Number', 'jubayer_theme' ),
			'subtitle'		=>esc_html__( 'Edit Header Phone Number', 'jubayer_theme' ),
			'default'	=>'09611123123',

		),
		array(
			'id'		=>'header-email',
			'type'		=>'text',			
			'title'		=>esc_html__( 'Header mail Address', 'jubayer_theme' ),
			'subtitle'		=>esc_html__( 'Edit Header mail Address', 'jubayer_theme' ),
			'default'	=>'jubayerall@gmail.com',
		),
		array(
			'id'		=>'Topber-background-color',
			'type'		=>'color',			
			'title'		=>esc_html__( 'Topber Background Color', 'jubayer_theme' ),
			'subtitle'		=>esc_html__( 'Edit Topber Background Color', 'jubayer_theme' ),
			'default'	=>'#161C21',
		),
		array(
			'id'          =>'Topber-typography',
			'type'        =>'typography', 
			'title'		  =>esc_html__( 'Topber Typography', 'jubayer_theme' ),
			'subtitle'		  =>esc_html__( 'Edit Topber Typography', 'jubayer_theme' ),
			'google'      =>true, 
			'units'       =>'px', 
			'default'	=>array(
				'color'       => '#E6E7E7', 
				'font-style'  => '300', 
				'font-family' => 'Verdana, Geneva, sans-serif', 
				'google'      => true,
				'font-size'   => '12px', 
				'line-height' => '0'
			),
		),
		array(		
			'id'			=>'Serach',
			'type'			=>'button_set',
			'title'		  	=>esc_html__( 'Topber Serach Option', 'jubayer_theme' ),
			'subtitle'		=>esc_html__( 'Edit Topber Serach Option', 'jubayer_theme' ),
			'options'			=>array(
				 1         =>'Show',
				 2         =>'Hide',
				 ),
			'default'		=>1,
		  ),
	),		 	
));
// top-header ended
// main-header started
Redux::set_section($opt_name,array(
		'id'		=>'main-header',	
		'title'		=>esc_html__( 'Main Header', 'jubayer_theme' ),
		'subtitle'		=>esc_html__( 'Edit Main Header', 'jubayer_theme' ),		
		'subsection'=>true,	
		'fields'	=>array(
			array(
				'id'		=>'logo-text',
				'type'		=>'text',			
				'title'		=>esc_html__( 'Logo Text', 'jubayer_theme' ),
				'subtitle'		=>esc_html__( 'Edit Logo Text', 'jubayer_theme' ),
				'default'	=>'juabyer',
			),
			array(
				'id'		=>'logo-images',
				'type'		=>'media',			
				'title'		=>esc_html__( 'Logo images', 'jubayer_theme' ),
				'subtitle'		=>esc_html__( 'Edit Logo images', 'jubayer_theme' ),
				'url'		=>true,
				'default'	=>array(
					'url' =>get_template_directory_uri().'/images/images.png',
				),
			),
			array(
				'id'		=>'main-header-background-color',
				'type'		=>'color',			
				'title'		=>esc_html__( 'Main Header Background Color', 'jubayer_theme' ),
				'subtitle'		=>esc_html__( 'Edit Main Header Background Color', 'jubayer_theme' ),
				'default'	=>'#060708',
			),
			array(
				'id'          =>'main-header-typography',
				'type'        =>'typography', 
				'title'		  =>esc_html__( 'Main Header Typography', 'jubayer_theme' ),
				'subtitle'	  =>esc_html__( 'Edit Main Header  Typography', 'jubayer_theme' ),	
				'google'      =>true, 			
				'units'       =>'px', 
				'default'	=>array(
					'color'       => '#E6E7E7', 
					'font-style'  => '400', 
					'font-family' => 'Verdana, Geneva, sans-serif', 
					'google'      => true,
					'font-size'   => '14px', 
					'line-height' => '14'
				),
			),

		),
));
// main-header ended
// ---------Header ended

// ---------landing paga started
Redux::set_section($opt_name,array(
	'id'		=>'landing-page',
	'title'		=>esc_html__( 'Landing page', 'jubayer_theme' ),
	'subtitle'	=>esc_html__( 'Edit Landing page', 'jubayer_theme' ),
	'icon'		=>'dashicons dashicons-admin-home',
));
// Banner area started
Redux::set_section($opt_name,array(
	'id'		=>'Banner',
	'title'		=>esc_html__( 'Banner Option', 'jubayer_theme' ),
	'desc'	=>esc_html__( 'Edit Banner / Section Number one Option', 'jubayer_theme' ),
	'subsection'=>true,
	'fields'=>array(
		array(
			'id'		=>'slider-show-or-hide',
			'type'		=>'button_set',
			'title'		  	=>esc_html__( 'Show Or Hide Banner Option ', 'jubayer_theme' ),
			'subtitle'		=>esc_html__( 'Edit Show Or Hide Banner Option', 'jubayer_theme' ),
			'options'		=>array(
				1		=>'Show',
				2		=>'Hide',
			),	
			'default'	=>1,
		),
		array(
			'id'		=>'banner-background-opacity',
			'type'		=>'color_rgba',			
			'title'		=>esc_html__( 'Banner Background Opacity', 'jubayer_theme' ),
			'subtitle'	=>esc_html__( 'Edit Banner Header Background Opacity', 'jubayer_theme' ),
			'default'   => array(
				'color'     => '#fdfdfd',
				'alpha'     => 1
			),						
		),
		array(
			'id'		=>'banner-background',
			'type'		=>'background',			
			'title'		=>esc_html__( 'Banner Background', 'jubayer_theme' ),
			'subtitle'	=>esc_html__( 'Edit Banner Header Background', 'jubayer_theme' ),
			'default'	=>array(
				'background-color' => '#762B2D',
				'background-image' => 'https://source.unsplash.com/1920x750/?business,metting',
				'background-repeat' => 'no-repeat',
				'background-size' => 'cover',
				'background-attachment' => 'scroll',				
				'background-position' => 'center center',
			),
		),
	
		array(
			'id'		=>'banner-title',
			'type'		=>'text',			
			'title'		=>esc_html__( 'Banner Heading', 'jubayer_theme' ),
			'subtitle'	=>esc_html__( 'Edit Banner Heading', 'jubayer_theme' ),
			'default'	=>'Dapibus ligula convallis',
		),
		array(
			'id'          =>'banner-title-typography',
			'type'        =>'typography', 
			'title'		  =>esc_html__( 'Banner Heading Typography', 'jubayer_theme' ),
			'subtitle'	  =>esc_html__( 'Edit Banner Heading  Typography', 'jubayer_theme' ),	
			'google'      =>true, 			
			'units'       =>'px', 
			'default'	=>array(
				'color'       => '#F5F0F0', 
				'font-style'  => '400', 
				'font-family' => 'Georgia, "Times New Roman", Times, serif', 
				'google'      => true,
				'font-size'   => '65px', 
				'line-height' => '0'
			),
		),
		array(
			'id'		=>'banner-description',
			'type'		=>'editor',			
			'title'		=>esc_html__( 'Banner Description', 'jubayer_theme' ),
			'subtitle'		=>esc_html__( 'Edit Banner Description', 'jubayer_theme' ),
			'default'	=>'A massa etiam augue nunc lectus duis eget libero non nisi lobortis suscipit praesent viverra nam dapibus orci non erat aliquam erat volutpat',
			'args'   => array(
				'teeny'            => true,
				'textarea_rows'    => 8,
			),
		),
		array(
			'id'          =>'banner-description-typography',
			'type'        =>'typography', 
			'title'		  =>esc_html__( 'Banner Description Typography', 'jubayer_theme' ),
			'subtitle'	  =>esc_html__( 'Edit Banner Description  Typography', 'jubayer_theme' ),	
			'google'      =>true, 			
			'units'       =>'px', 
			'default'	=>array(
				'color'       => '#F5F0F0', 
				'font-style'  => '400', 
				'font-family' => 'Verdana, Geneva, sans-serif', 
				'google'      => true,
				'font-size'   => '14px', 
				'line-height' => '25'
			),
		),
		array(
			'id'		=>'banner-button',
			'type'		=>'text',			
			'title'		=>esc_html__( 'Banner Button Text', 'jubayer_theme' ),
			'subtitle'		=>esc_html__( 'Edit Banner Button Text', 'jubayer_theme' ),
			'default'	=>'Read More',
		),
		array(
			'id'		=>'banner-button-link',
			'type'		=>'text',			
			'title'		=>esc_html__( 'Banner Button Link', 'jubayer_theme' ),
			'subtitle'		=>esc_html__( 'Edit Banner Button Link', 'jubayer_theme' ),
			'default'	=>'https://fiver.com/jubayer_dev',
		),
		array(
			'id'		=>'banner-button-background-color',
			'type'		=>'color',			
			'title'		=>esc_html__( 'Banner Button Background Color', 'jubayer_theme' ),
			'subtitle'	=>esc_html__( 'Edit Banner ButtonBackground Color', 'jubayer_theme' ),
			'default'	=>'#762B2D',
		),

		array(
			'id'          =>'banner-button-typography',
			'type'        =>'typography', 
			'title'		  =>esc_html__( 'Banner Button Typography', 'jubayer_theme' ),
			'subtitle'	  =>esc_html__( 'Edti Banner Button  Typography', 'jubayer_theme' ),	
			'google'      =>true, 			
			'units'       =>'px', 
			'default'	=>array(
				'color'       => '#F5F0F0', 
				'font-style'  => '400', 
				'font-family' => 'Verdana, Geneva, sans-serif', 
				'google'      => true,
				'font-size'   => '14px', 
				'line-height' => '0'
			),
		),
		
		
	),
));
//--------------->banner area ended
//--------------->intro area started
//>First Introductions Option

Redux::set_section($opt_name,array(
	'id'		=>'Introductions',
	'title'		=>esc_html__( 'Introductions Option', 'jubayer_theme' ),
	'desc'	=>esc_html__( 'Edit Introductions / Section Number Two Option', 'jubayer_theme' ),
	'subsection'=>true,
	'fields'=>array(
		array(
			'id'=>'first-into-images',
			'type'=>'media',
			'url'=>true,
			'title'		=>esc_html__( 'First Introductions Images Option', 'jubayer_theme' ),
			'subtitle'	=>esc_html__( 'Edit First Introductions Images Option', 'jubayer_theme' ),
			'default' 	=>get_template_directory_uri().'/images/in1.jpg',
		),
		array(
			'id'		=>'first-into-title',
			'type'		=>'text',			
			'title'		=>esc_html__( 'First Into Heading', 'jubayer_theme' ),
			'subtitle'	=>esc_html__( 'Edit First Into Heading', 'jubayer_theme' ),
			'default'	=>'Dapibus ligula convallis',
		),
		array(
			'id'          =>'first-into-title-typography',
			'type'        =>'typography', 
			'title'		  =>esc_html__( 'First Into Heading Typography', 'jubayer_theme' ),
			'subtitle'	  =>esc_html__( 'Edit First Into Heading  Typography', 'jubayer_theme' ),	
			'google'      =>true, 			
			'units'       =>'px', 
			'default'	=>array(
				'color'       => '#F5F0F0', 
				'font-style'  => '400', 
				'font-family' => 'Georgia, "Times New Roman", Times, serif', 
				'google'      => true,
				'font-size'   => '20px', 
				'line-height' => '0'
			),
		),
		array(
			'id'		=>'first-into-description',
			'type'		=>'editor',			
			'title'		=>esc_html__( 'First Into Description', 'jubayer_theme' ),
			'subtitle'		=>esc_html__( 'Edit First Into Description', 'jubayer_theme' ),
			'default'	=>'A massa etiam augue nunc lectus duis eget libero non nisi lobortis suscipit praesent viverra nam dapibus orci non erat aliquam erat volutpat',
			'args'   => array(
				'teeny'            => true,
				'textarea_rows'    => 8,
			),
		),
		array(
			'id'          =>'first-into-description-typography',
			'type'        =>'typography', 
			'title'		  =>esc_html__( 'First Into Description Typography', 'jubayer_theme' ),
			'subtitle'	  =>esc_html__( 'Edit First Into Description  Typography', 'jubayer_theme' ),	
			'google'      =>true, 			
			'units'       =>'px', 
			'default'	=>array(
				'color'       => '#F5F0F0', 
				'font-style'  => '400', 
				'font-family' => 'Verdana, Geneva, sans-serif', 
				'google'      => true,
				'font-size'   => '14px', 
				'line-height' => '22'
			),
		),
		array(
			'id'		=>'first-into-opacity',
			'type'		=>'color_rgba',			
			'title'		=>esc_html__( 'First Into Opacity', 'jubayer_theme' ),
			'subtitle'	=>esc_html__( 'Edit First Into Opacity', 'jubayer_theme' ),
			'default'   => array(
				'color'     => '#763C70',
				'alpha'     => 1
			),						
		),
//>second Introductions Option
		array(
			'id'=>'second-into-images',
			'type'=>'media',
			'url'=>true,
			'title'		=>esc_html__( 'Second Introductions Images Option', 'jubayer_theme' ),
			'subtitle'	=>esc_html__( 'Edit Second Introductions Images Option', 'jubayer_theme' ),
			'default' 	=>get_template_directory_uri().'/images/in2.jpg',
		),
		array(
			'id'		=>'second-into-title',
			'type'		=>'text',			
			'title'		=>esc_html__( 'Second Into Heading', 'jubayer_theme' ),
			'subtitle'	=>esc_html__( 'Edit Second Into Heading', 'jubayer_theme' ),
			'default'	=>'Dapibus ligula convallis',
		),
		array(
			'id'          =>'second-into-title-typography',
			'type'        =>'typography', 
			'title'		  =>esc_html__( 'Second Into Heading Typography', 'jubayer_theme' ),
			'subtitle'	  =>esc_html__( 'Edit Second Into Heading  Typography', 'jubayer_theme' ),	
			'google'      =>true, 			
			'units'       =>'px', 
			'default'	=>array(
				'color'       => '#F5F0F0', 
				'font-style'  => '400', 
				'font-family' => 'Georgia, "Times New Roman", Times, serif', 
				'google'      => true,
				'font-size'   => '20px', 
				'line-height' => '0'
			),
		),
		array(
			'id'		=>'second-into-description',
			'type'		=>'editor',			
			'title'		=>esc_html__( 'Second Into Description', 'jubayer_theme' ),
			'subtitle'		=>esc_html__( 'Edit Second Into Description', 'jubayer_theme' ),
			'default'	=>'A massa etiam augue nunc lectus duis eget libero non nisi lobortis suscipit praesent viverra nam dapibus orci non erat aliquam erat volutpat',
			'args'   => array(
				'teeny'            => true,
				'textarea_rows'    => 8,
			),
		),
		array(
			'id'          =>'second-into-description-typography',
			'type'        =>'typography', 
			'title'		  =>esc_html__( 'Second Into Description Typography', 'jubayer_theme' ),
			'subtitle'	  =>esc_html__( 'Edit Second Into Description  Typography', 'jubayer_theme' ),	
			'google'      =>true, 			
			'units'       =>'px', 
			'default'	=>array(
				'color'       => '#F5F0F0', 
				'font-style'  => '400', 
				'font-family' => 'Verdana, Geneva, sans-serif', 
				'google'      => true,
				'font-size'   => '14px', 
				'line-height' => '25'
			),
		),
		array(
			'id'		=>'second-into-opacity',
			'type'		=>'color_rgba',			
			'title'		=>esc_html__( 'Second Into Opacity', 'jubayer_theme' ),
			'subtitle'	=>esc_html__( 'Edit Second Into Opacity', 'jubayer_theme' ),
			'default'   => array(
				'color'     => '#fdfdfd',
				'alpha'     => 1
			),						
		),
		//>third Introductions Option
		array(
			'id'=>'third-into-images',
			'type'=>'media',
			'url'=>true,
			'title'		=>esc_html__( 'Third Introductions Images Option', 'jubayer_theme' ),
			'subtitle'	=>esc_html__( 'Edit Third Introductions Images Option', 'jubayer_theme' ),
			'default' 	=>get_template_directory_uri().'/images/in3.jpg',
		),
		array(
			'id'		=>'third-into-title',
			'type'		=>'text',			
			'title'		=>esc_html__( 'Third Into Heading', 'jubayer_theme' ),
			'subtitle'	=>esc_html__( 'Edit Third Into Heading', 'jubayer_theme' ),
			'default'	=>'Dapibus ligula convallis',
		),
		array(
			'id'          =>'third-into-title-typography',
			'type'        =>'typography', 
			'title'		  =>esc_html__( 'Third Into Heading Typography', 'jubayer_theme' ),
			'subtitle'	  =>esc_html__( 'Edit Third Into Heading  Typography', 'jubayer_theme' ),	
			'google'      =>true, 			
			'units'       =>'px', 
			'default'	=>array(
				'color'       => '#F5F0F0', 
				'font-style'  => '400', 
				'font-family' => 'Georgia, "Times New Roman", Times, serif', 
				'google'      => true,
				'font-size'   => '20px', 
				'line-height' => '0'
			),
		),
		array(
			'id'		=>'third-into-description',
			'type'		=>'editor',			
			'title'		=>esc_html__( 'Third Into Description', 'jubayer_theme' ),
			'subtitle'		=>esc_html__( 'Edit Third Into Description', 'jubayer_theme' ),
			'default'	=>'A massa etiam augue nunc lectus duis eget libero non nisi lobortis suscipit praesent viverra nam dapibus orci non erat aliquam erat volutpat',
			'args'   => array(
				'teeny'            => true,
				'textarea_rows'    => 8,
			),
		),
		array(
			'id'          =>'third-into-description-typography',
			'type'        =>'typography', 
			'title'		  =>esc_html__( 'Third Into Description Typography', 'jubayer_theme' ),
			'subtitle'	  =>esc_html__( 'Edit Third Into Description  Typography', 'jubayer_theme' ),	
			'google'      =>true, 			
			'units'       =>'px', 
			'default'	=>array(
				'color'       => '#111', 
				'font-style'  => '400', 
				'font-family' => 'Verdana, Geneva, sans-serif', 
				'google'      => true,
				'font-size'   => '14px', 
				'line-height' => '25'
			),
		),
		array(
			'id'		=>'third-into-opacity',
			'type'		=>'color_rgba',			
			'title'		=>esc_html__( 'Third Into Opacity', 'jubayer_theme' ),
			'subtitle'	=>esc_html__( 'Edit Third Into Opacity', 'jubayer_theme' ),
			'default'   => array(
				'color'     => '#fdfdfd',
				'alpha'     => 1
			),						
		),
	),
));
Redux::set_section($opt_name,array(
	'id'		=>'LService',
	'title'		=>esc_html__( 'Services Option', 'jubayer_theme' ),
	'desc'	=>esc_html__( 'Edit Services / Section Number three Option', 'jubayer_theme' ),
	'subsection'=>true,
	'fields' =>array(
		array(
			'id'=>'Services-image',
			'type'=>'media',
			'url'=>true,
			'title'		=>esc_html__( 'Services Image Option', 'jubayer_theme' ),
			'subtitle'	=>esc_html__( 'Edit Services Image Opacity', 'jubayer_theme' ),
			'default'	=> get_template_directory_uri(  ).'/images/sv.jpg',
		),
		//frist service area
	array(
		'id'		=>'frist-srrvice-title',
		'type'		=>'text',			
		'title'		=>esc_html__( 'First Servie Heading', 'jubayer_theme' ),
		'subtitle'	=>esc_html__( 'Edit First Servie Heading', 'jubayer_theme' ),
		'default'	=>'Dapibus ligula convallis',
	),
	array(
		'id'          =>'frist-srrvice-title-typography',
		'type'        =>'typography', 
		'title'		  =>esc_html__( 'First Servie Typography', 'jubayer_theme' ),
		'subtitle'	  =>esc_html__( 'Edit First Servie Heading  Typography', 'jubayer_theme' ),	
		'google'      =>true, 			
		'units'       =>'px', 
		'default'	=>array(
			'color'       => '#763c70', 
			'font-style'  => '400', 
			'font-family' => 'Georgia, "Times New Roman", Times, serif', 
			'google'      => true,
			'font-size'   => '20px', 
			'line-height' => '0'
		),
	),
	array(
		'id'		=>'frist-srrvice-description',
		'type'		=>'editor',			
		'title'		=>esc_html__( 'First Servie Description', 'jubayer_theme' ),
		'subtitle'		=>esc_html__( 'Edit First Servie Description', 'jubayer_theme' ),
		'default'	=>'A massa etiam augue nunc lectus duis eget libero non nisi lobortis suscipit praesent viverra nam dapibus orci non erat aliquam erat volutpat',
		'args'   => array(
			'teeny'            => true,
			'textarea_rows'    => 8,
		),
	),
	array(
		'id'          =>'frist-srrvice-description-typography',
		'type'        =>'typography', 
		'title'		  =>esc_html__( 'First Servie Description Typography', 'jubayer_theme' ),
		'subtitle'	  =>esc_html__( 'Edit First Servie Description  Typography', 'jubayer_theme' ),	
		'google'      =>true, 			
		'units'       =>'px', 
		'default'	=>array(
			'color'       => '#A6A6A6', 
			'font-style'  => '400', 
			'font-family' => 'Verdana, Geneva, sans-serif', 
			'google'      => true,
			'font-size'   => '14px', 
			'line-height' => '25'
		),
	),

//second service area
array(
	'id'		=>'second-srrvice-title',
	'type'		=>'text',			
	'title'		=>esc_html__( 'Second Servie Heading', 'jubayer_theme' ),
	'subtitle'	=>esc_html__( 'Edit Second Servie Heading', 'jubayer_theme' ),
	'default'	=>'Dapibus ligula convallis',
),
array(
	'id'          =>'second-srrvice-title-typography',
	'type'        =>'typography', 
	'title'		  =>esc_html__( 'Second Servie Typography', 'jubayer_theme' ),
	'subtitle'	  =>esc_html__( 'Edit Second Servie Heading  Typography', 'jubayer_theme' ),	
	'google'      =>true, 			
	'units'       =>'px', 
	'default'	=>array(
		'color'       => '#F5F0F0', 
		'font-style'  => '400', 
		'font-family' => 'Georgia, "Times New Roman", Times, serif', 
		'google'      => true,
		'font-size'   => '20px', 
		'line-height' => '0'
	),
),
array(
	'id'		=>'second-srrvice-description',
	'type'		=>'editor',			
	'title'		=>esc_html__( 'Second Servie Description', 'jubayer_theme' ),
	'subtitle'		=>esc_html__( 'Edit Second Servie Description', 'jubayer_theme' ),
	'default'	=>'A massa etiam augue nunc lectus duis eget libero non nisi lobortis suscipit praesent viverra nam dapibus orci non erat aliquam erat volutpat',
	'args'   => array(
		'teeny'            => true,
		'textarea_rows'    => 8,
	),
),
array(
	'id'          =>'second-srrvice-description-typography',
	'type'        =>'typography', 
	'title'		  =>esc_html__( 'Second Servie Description Typography', 'jubayer_theme' ),
	'subtitle'	  =>esc_html__( 'Edit Second Servie Description  Typography', 'jubayer_theme' ),	
	'google'      =>true, 			
	'units'       =>'px', 
	'default'	=>array(
		'color'       => '#A6A6A6', 
		'font-style'  => '400', 
		'font-family' => 'Verdana, Geneva, sans-serif', 
		'google'      => true,
		'font-size'   => '14px', 
		'line-height' => '22'
	),
),


//third scrvice area
array(
	'id'		=>'third-srrvice-title',
	'type'		=>'text',			
	'title'		=>esc_html__( 'Third Servie Heading', 'jubayer_theme' ),
	'subtitle'	=>esc_html__( 'Edit Third Servie Heading', 'jubayer_theme' ),
	'default'	=>'Dapibus ligula convallis',
),
array(
	'id'          =>'third-srrvice-title-typography',
	'type'        =>'typography', 
	'title'		  =>esc_html__( 'Third Servie Typography', 'jubayer_theme' ),
	'subtitle'	  =>esc_html__( 'Edit Third Servie Heading  Typography', 'jubayer_theme' ),	
	'google'      =>true, 			
	'units'       =>'px', 
	'default'	=>array(
		'color'       => '#F5F0F0', 
		'font-style'  => '400', 
		'font-family' => 'Georgia, "Times New Roman", Times, serif', 
		'google'      => true,
		'font-size'   => '20px', 
		'line-height' => '0'
	),
),
array(
	'id'		=>'third-srrvice-description',
	'type'		=>'editor',			
	'title'		=>esc_html__( 'Third Servie Description', 'jubayer_theme' ),
	'subtitle'		=>esc_html__( 'Edit Third Servie Description', 'jubayer_theme' ),
	'default'	=>'A massa etiam augue nunc lectus duis eget libero non nisi lobortis suscipit praesent viverra nam dapibus orci non erat aliquam erat volutpat',
	'args'   => array(
		'teeny'            => true,
		'textarea_rows'    => 8,
	),
),
array(
	'id'          =>'third-srrvice-description-typography',
	'type'        =>'typography', 
	'title'		  =>esc_html__( 'Third Servie Description Typography', 'jubayer_theme' ),
	'subtitle'	  =>esc_html__( 'Edit Third Servie Description Typography', 'jubayer_theme' ),	
	'google'      =>true, 			
	'units'       =>'px', 
	'default'	=>array(
		'color'       => '#A6A6A6', 
		'font-style'  => '400', 
		'font-family' => 'Verdana, Geneva, sans-serif', 
		'google'      => true,
		'font-size'   => '14px', 
		'line-height' => '22'
	),
),

//forth service area
array(
	'id'		=>'forth-srrvice-title',
	'type'		=>'text',			
	'title'		=>esc_html__( 'Forth Servie Heading', 'jubayer_theme' ),
	'subtitle'	=>esc_html__( 'Edit Forth Servie Heading', 'jubayer_theme' ),
	'default'	=>'Dapibus ligula convallis',
),
array(
	'id'          =>'forth-srrvice-title-typography',
	'type'        =>'typography', 
	'title'		  =>esc_html__( 'Forth Servie Heading Typography', 'jubayer_theme' ),
	'subtitle'	  =>esc_html__( 'Edit Forth Servie Heading Typography', 'jubayer_theme' ),	
	'google'      =>true, 			
	'units'       =>'px', 
	'default'	=>array(
		'color'       => '#F5F0F0', 
		'font-style'  => '400', 
		'font-family' => 'Georgia, "Times New Roman", Times, serif', 
		'google'      => true,
		'font-size'   => '20px', 
		'line-height' => '0'
	),
),
array(
	'id'		=>'forth-srrvice-description',
	'type'		=>'editor',			
	'title'		=>esc_html__( 'Forth Servie Description', 'jubayer_theme' ),
	'subtitle'		=>esc_html__( 'Edit Forth Servie Description', 'jubayer_theme' ),
	'default'	=>'A massa etiam augue nunc lectus duis eget libero non nisi lobortis suscipit praesent viverra nam dapibus orci non erat aliquam erat volutpat',
	'args'   => array(
		'teeny'            => true,
		'textarea_rows'    => 8,
	),
),
array(
	'id'          =>'forth-srrvice-description-typography',
	'type'        =>'typography', 
	'title'		  =>esc_html__( 'Forth Servie Description Typography', 'jubayer_theme' ),
	'subtitle'	  =>esc_html__( 'Edit Forth Servie Description Typography', 'jubayer_theme' ),	
	'google'      =>true, 			
	'units'       =>'px', 
	'default'	=>array(
		'color'       => '#A6A6A6', 
		'font-style'  => '400', 
		'font-family' => 'Verdana, Geneva, sans-serif', 
		'google'      => true,
		'font-size'   => '14px', 
		'line-height' => '22'
	),
),
),
));

//into area ended
//Portfolio area stared
Redux::set_section($opt_name, array(
	'title'		  =>esc_html__( 'Portfolio Option', 'jubayer_theme' ),
	'desc'	  	  =>esc_html__( 'Edit Portfolio Option', 'jubayer_theme' ),	
	 'subsection' =>true,
	 'fields'=>array(
		array(
			'id'		=>'portfolio-background',
			'type'		=>'background',			
			'title'		=>esc_html__( 'Portfolio Background', 'jubayer_theme' ),
			'subtitle'	=>esc_html__( 'Edit Portfolio Header Background', 'jubayer_theme' ),
			'default'	=>array(
				'background-color' => '#762B2D',
				'background-image' => 'https://source.unsplash.com/1920x750/?business,metting',
				'background-repeat' => 'no-repeat',
				'background-size' => 'cover',
				'background-attachment' => 'scroll',				
				'background-position' => 'center center',
			),
		),
		array(
			'id'		=>'Portfolio-subtitle',
			'type'		=>'text',			
			'title'		=>esc_html__( 'Portfolio Sub Heading Option', 'jubayer_theme' ),
			'subtitle'	=>esc_html__( 'Edit Portfolio Sub Heading Option', 'jubayer_theme' ),
			'default'	=>'Dapibus ligula convallis',
		),
		array(
			'id'          =>'Portfolio-subtitle-typography',
			'type'        =>'typography', 
			'title'		  =>esc_html__( 'Portfolio Sub Heading Typography', 'jubayer_theme' ),
			'subtitle'	  =>esc_html__( 'Edit Portfolio Sub Heading Heading Typography', 'jubayer_theme' ),	
			'google'      =>true, 			
			'units'       =>'px', 
			'default'	=>array(
				'color'       => '#F5F0F0', 
				'font-style'  => '400', 
				'font-family' => 'Georgia, "Times New Roman", Times, serif', 
				'google'      => true,
				'font-size'   => '20px', 
				'line-height' => '0'
			),
		),
		array(
			'id'		=>'portfolio-title',
			'type'		=>'text',			
			'title'		=>esc_html__( 'Portfolio Heading Option', 'jubayer_theme' ),
			'subtitle'	=>esc_html__( 'Edit Portfolio Heading Option', 'jubayer_theme' ),
			'default'	=>'Dapibus ligula convallis',
		),
		array(
			'id'          =>'portfolio-title-typography',
			'type'        =>'typography', 
			'title'		  =>esc_html__( 'Portfolio Heading Typography Option', 'jubayer_theme' ),
			'subtitle'	  =>esc_html__( 'Edit  Portfolio Heading Typography Option', 'jubayer_theme' ),	
			'google'      =>true, 			
			'units'       =>'px', 
			'default'	=>array(
				'color'       => '#F5F0F0', 
				'font-style'  => '400', 
				'font-family' => 'Georgia, "Times New Roman", Times, serif', 
				'google'      => true,
				'font-size'   => '20px', 
				'line-height' => '0',
			),
		),
	),
));

//ponser section started
Redux::set_section($opt_name,array(
	'title'		  =>esc_html__( 'Ponser Option', 'jubayer_theme' ),
	'desc'	  	  =>esc_html__( 'Edit Ponser Option', 'jubayer_theme' ),	
	 'subsection' =>true,
	 'fields'			  =>array(
		array(
			'id'		=>'ponser-subtitle',
			'type'		=>'text',			
			'title'		=>esc_html__( 'Ponser Sub Heading Option', 'jubayer_theme' ),
			'subtitle'	=>esc_html__( 'Edit Ponser Sub Heading Option', 'jubayer_theme' ),
			'default'	=>'Dapibus ligula convallis',
		),
		array(
			'id'          =>'ponser-subtitle-typography',
			'type'        =>'typography', 
			'title'		  =>esc_html__( 'Ponser Sub Heading Typography', 'jubayer_theme' ),
			'subtitle'	  =>esc_html__( 'Edit Ponser Sub Heading Heading Typography', 'jubayer_theme' ),	
			'google'      =>true, 			
			'units'       =>'px', 
			'default'	=>array(
				'color'       => '#141214', 
				'font-style'  => '400', 
				'font-family' => 'Georgia, "Times New Roman", Times, serif', 
				'google'      => true,
				'font-size'   => '20px', 
				'line-height' => '0'
			),
		),
		array(
			'id'		=>'ponser-title',
			'type'		=>'text',			
			'title'		=>esc_html__( 'Ponser Heading Option', 'jubayer_theme' ),
			'subtitle'	=>esc_html__( 'Edit Ponser Heading Option', 'jubayer_theme' ),
			'default'	=>'Dapibus ligula convallis',
		),
		array(
			'id'          =>'ponser-title-typography',
			'type'        =>'typography', 
			'title'		  =>esc_html__( 'Ponser Heading Typography Option', 'jubayer_theme' ),
			'subtitle'	  =>esc_html__( 'Edit  Ponser Heading Typography Option', 'jubayer_theme' ),	
			'google'      =>true, 			
			'units'       =>'px', 
			'default'	=>array(
				'color'       => '#141214', 
				'font-style'  => '400', 
				'font-family' => 'Georgia, "Times New Roman", Times, serif', 
				'google'      => true,
				'font-size'   => '20px', 
				'line-height' => '0',
			),
		),
		array(
			'id'		=>'ponser-image1',
			'type'        =>'media', 
			'url'        =>true, 
			'title'		  =>esc_html__( 'Ponser Image One Option', 'jubayer_theme' ),
			'subtitle'	  =>esc_html__( 'Edit  Ponser Image One Option', 'jubayer_theme' ),	
			'default'	  =>get_template_directory_uri(  ).'/images/p1.jpeg',	
		),
		array(
			'id'		=>'ponser-image2',
			'type'        =>'media', 
			'url'        =>true, 
			'title'		  =>esc_html__( 'Ponser Image Two Option', 'jubayer_theme' ),
			'subtitle'	  =>esc_html__( 'Edit  Ponser Image Two Option', 'jubayer_theme' ),	
			'default'	  => get_template_directory_uri(  ).'/images/p2.jpeg',
		),
		array(
			'id'		=>'ponser-image3',
			'type'        =>'media', 
			'url'        =>true, 
			'title'		  =>esc_html__( 'Ponser Image Three Option', 'jubayer_theme' ),
			'subtitle'	  =>esc_html__( 'Edit  Ponser Image Three Option', 'jubayer_theme' ),	
			'default'	  =>get_template_directory_uri(  ).'/images/p3.jpeg',	
		),
		array(
			'id'		=>'ponser-image4',
			'type'        =>'media', 
			'url'        =>true, 
			'title'		  =>esc_html__( 'Ponser Image four Option', 'jubayer_theme' ),
			'subtitle'	  =>esc_html__( 'Edit  Ponser Image four Option', 'jubayer_theme' ),	
			'default'	  =>get_template_directory_uri(  ).'/images/p4.jpeg',	
		),
		array(
			'id'		=>'ponser-image5',
			'type'        =>'media', 
			'url'        =>true, 
			'title'		  =>esc_html__( 'Ponser Image Five Option', 'jubayer_theme' ),
			'subtitle'	  =>esc_html__( 'Edit Ponser Image Five Option', 'jubayer_theme' ),	
			'default'	  =>get_template_directory_uri(  ).'/images/p5.jpeg',	
		),
		array(
			'id'		=>'ponser-image6',
			'type'        =>'media', 
			'url'        =>true, 
			'title'		  =>esc_html__( 'Ponser Image Six Option', 'jubayer_theme' ),
			'subtitle'	  =>esc_html__( 'Edit Ponser Image Six Option', 'jubayer_theme' ),	
			'default'	  =>get_template_directory_uri(  ).'/images/p6.jpeg',	
		),
		array(
			'id'		=>'ponser-image7',
			'type'        =>'media', 
			'url'        =>true, 
			'title'		  =>esc_html__( 'Ponser Image Siven Option', 'jubayer_theme' ),
			'subtitle'	  =>esc_html__( 'Edit Ponser Image Siven Option', 'jubayer_theme' ),	
			'default'	  =>get_template_directory_uri(  ).'/images/p6.jpeg',	
		),
		array(
			'id'		=>'ponser-image8',
			'type'        =>'media', 
			'url'        =>true, 
			'title'		  =>esc_html__( 'Ponser Image Eight Option', 'jubayer_theme' ),
			'subtitle'	  =>esc_html__( 'Edit Ponser Image Eight Option', 'jubayer_theme' ),	
			'default'	  =>get_template_directory_uri(  ).'/images/p6.jpeg',	
		),

	 ),
));		

//customar testimonial section started
Redux::set_section($opt_name,array(
	'title'		  =>esc_html__( 'Customar Testimonial Option', 'jubayer_theme' ),
	'desc'	  	  =>esc_html__( 'Edit Customar Testimonial Option', 'jubayer_theme' ),	
	 'subsection' =>true,
	 'fields'			  =>array(
		array(
			'id'		=>'customar-testimonial-subtitle',
			'type'		=>'text',			
			'title'		=>esc_html__( 'Customar Testimonial Sub Heading Option', 'jubayer_theme' ),
			'subtitle'	=>esc_html__( 'Edit Customar Testimonial Sub Heading Option', 'jubayer_theme' ),
			'default'	=>'Dapibus ligula convallis',
		),
		array(
			'id'          =>'customar-testimonial-subtitle-typography',
			'type'        =>'typography', 
			'title'		  =>esc_html__( 'Customar Testimonial Sub Heading Typography', 'jubayer_theme' ),
			'subtitle'	  =>esc_html__( 'Edit Customar Testimonial Sub Heading Heading Typography', 'jubayer_theme' ),	
			'google'      =>true, 			
			'units'       =>'px', 
			'default'	=>array(
				'color'       => '#141214', 
				'font-style'  => '400', 
				'font-family' => 'Georgia, "Times New Roman", Times, serif', 
				'google'      => true,
				'font-size'   => '20px', 
				'line-height' => '25'
			),
		),
		array(
			'id'		=>'customar-testimonial-title',
			'type'		=>'text',			
			'title'		=>esc_html__( 'Customar Testimonial Heading Option', 'jubayer_theme' ),
			'subtitle'	=>esc_html__( 'Edit Customar Testimonial Heading Option', 'jubayer_theme' ),
			'default'	=>'Dapibus ligula convallis',
		),
		array(
			'id'          =>'customar-testimonial-title-typography',
			'type'        =>'typography', 
			'title'		  =>esc_html__( 'Customar Testimonial Heading Typography Option', 'jubayer_theme' ),
			'subtitle'	  =>esc_html__( 'Edit  Customar Testimonial Heading Typography Option', 'jubayer_theme' ),	
			'google'      =>true, 			
			'units'       =>'px', 
			'default'	=>array(
				'color'       => '#141214', 
				'font-style'  => '400', 
				'font-family' => 'Georgia, "Times New Roman", Times, serif', 
				'google'      => true,
				'font-size'   => '50px', 
				'line-height' => '40',
			),
		),
	),
));
//team mumber section started
Redux::set_section($opt_name,array(
	'title'		  =>esc_html__( 'Team Mumber Option', 'jubayer_theme' ),
	'desc'	  	  =>esc_html__( 'Edit Team Mumber Option', 'jubayer_theme' ),	
	 'subsection' =>true,
	 'fields'			  =>array(
		array(
			'id'		=>'team-mumber-subtitle',
			'type'		=>'text',			
			'title'		=>esc_html__( 'Team Mumber Sub Heading Option', 'jubayer_theme' ),
			'subtitle'	=>esc_html__( 'Edit Team Mumber Sub Heading Option', 'jubayer_theme' ),
			'default'	=>'Dapibus ligula convallis',
		),
		array(
			'id'          =>'team-mumber-subtitle-typography',
			'type'        =>'typography', 
			'title'		  =>esc_html__( 'Team Mumber Sub Heading Typography', 'jubayer_theme' ),
			'subtitle'	  =>esc_html__( 'Edit Team Mumber Sub Heading Heading Typography', 'jubayer_theme' ),	
			'google'      =>true, 			
			'units'       =>'px', 
			'default'	=>array(
				'color'       => '#F5F0F1', 
				'font-style'  => '400', 
				'font-family' => 'Georgia, "Times New Roman", Times, serif', 
				'google'      => true,
				'font-size'   => '20px', 
				'line-height' => '25'
			),
		),
		array(
			'id'		=>'team-mumber-title',
			'type'		=>'text',			
			'title'		=>esc_html__( 'Team Mumber Heading Option', 'jubayer_theme' ),
			'subtitle'	=>esc_html__( 'Edit Team Mumber Heading Option', 'jubayer_theme' ),
			'default'	=>'Dapibus ligula convallis',
		),
		array(
			'id'          =>'team-mumber-title-typography',
			'type'        =>'typography', 
			'title'		  =>esc_html__( 'Team Mumber Heading Typography Option', 'jubayer_theme' ),
			'subtitle'	  =>esc_html__( 'Edit Team Mumber Heading Typography Option', 'jubayer_theme' ),	
			'google'      =>true, 			
			'units'       =>'px', 
			'default'	=>array(
				'color'       => '#F5F0F0', 
				'font-style'  => '400', 
				'font-family' => 'Georgia, "Times New Roman", Times, serif', 
				'google'      => true,
				'font-size'   => '50px', 
				'line-height' => '40',
			),
		),
		array(
			'id'		=>'team-mumber-button',
			'type'		=>'text',			
			'title'		=>esc_html__( 'Team Mumber Heading Option', 'jubayer_theme' ),
			'subtitle'	=>esc_html__( 'Edit Team Mumber Heading Option', 'jubayer_theme' ),
			'default'	=>'More Testimonials',
		),
	),
));

//Landing Blog section started
Redux::set_section($opt_name,array(
	'title'		  =>esc_html__( 'Landing Blog Option', 'jubayer_theme' ),
	'desc'	  	  =>esc_html__( 'Edit Landing Blog Option', 'jubayer_theme' ),	
	 'subsection' =>true,
	 'fields'			  =>array(
		array(
			'id'		=>'landing-blog-subtitle',
			'type'		=>'text',			
			'title'		=>esc_html__( 'Landing Blog Sub Heading Option', 'jubayer_theme' ),
			'subtitle'	=>esc_html__( 'Edit Landing Blog Sub Heading Option', 'jubayer_theme' ),
			'default'	=>'Dapibus ligula convallis',
		),
		array(
			'id'          =>'landing-blog-subtitle-typography',
			'type'        =>'typography', 
			'title'		  =>esc_html__( 'Landing Blog Sub Heading Typography', 'jubayer_theme' ),
			'subtitle'	  =>esc_html__( 'Edit Landing Blog Sub Heading Heading Typography', 'jubayer_theme' ),	
			'google'      =>true, 			
			'units'       =>'px', 
			'default'	=>array(
				'color'       => '#141214', 
				'font-style'  => '400', 
				'font-family' => 'Georgia, "Times New Roman", Times, serif', 
				'google'      => true,
				'font-size'   => '20px', 
				'line-height' => '25'
			),
		),
		array(
			'id'		=>'landing-blog-title',
			'type'		=>'text',			
			'title'		=>esc_html__( 'Landing Blog Heading Option', 'jubayer_theme' ),
			'subtitle'	=>esc_html__( 'Edit Landing Blog Heading Option', 'jubayer_theme' ),
			'default'	=>'Dapibus ligula convallis',
		),
		array(
			'id'          =>'landing-blog-title-typography',
			'type'        =>'typography', 
			'title'		  =>esc_html__( 'Landing Blog Heading Typography Option', 'jubayer_theme' ),
			'subtitle'	  =>esc_html__( 'Edit Landing Blog Heading Typography Option', 'jubayer_theme' ),	
			'google'      =>true, 			
			'units'       =>'px', 
			'default'	=>array(
				'color'       => '#141214', 
				'font-style'  => '400', 
				'font-family' => 'Georgia, "Times New Roman", Times, serif', 
				'google'      => true,
				'font-size'   => '50px', 
				'line-height' => '40',
			),
		),
	),
));
//Portfolio area ended
// -----------landing paga ended
// -----------portfolio text paga started
Redux::set_section($opt_name,array(
	'id'		=>'Portlolio-page',
	'title'		=>esc_html__( 'Portlolio page', 'jubayer_theme' ),
	'subtitle'	=>esc_html__( 'Edit Portlolio page', 'jubayer_theme' ),
	'icon'		=>'dashicons dashicons-admin-home',
));
Redux::set_section($opt_name,array(
	'title'		  =>esc_html__( 'Portlolio Blog Option', 'jubayer_theme' ),
	'desc'	  	  =>esc_html__( 'Edit Portlolio Blog Option', 'jubayer_theme' ),	
	 'subsection' =>true,
	'fields'	=>array(
		array(
			'id'=>'portfolio-gradient',
			'type'=>'color_gradient',
			'title'		  =>esc_html__( 'Portlolio Background Color Option', 'jubayer_theme' ),
			'subtitle'	  	  =>esc_html__( 'Edit Portlolio Background Color Option', 'jubayer_theme' ),	
			'default'			  =>array(
				'form'			=>'#1e73be',
				'to'			=>'#1e73be',
			),
		),
		array(
			'id'          => 'opt-date',
			'type'        => 'date',
			'title'       => __('Date Option', 'redux-framework-demo'), 
			'subtitle'    => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc'        => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'placeholder' => 'Click to enter a date'
		),
		array(
			'id'       => 'opt_dimensions',
			'type'     => 'dimensions',
			'units'    => array('em','px','%'),
			'title'    => __('Dimensions (Width/Height) Option', 'redux-framework-demo'),
			'subtitle' => __('Allow your users to choose width, height, and/or unit.', 'redux-framework-demo'),
			'desc'     => __('Enable or disable any piece of this field. Width, Height, or Units.', 'redux-framework-demo'),
			'default'  => array(
				'Width'   => '200', 
				'Height'  => '100',
				'units'  => '%',
			),
		),
		array(
			'id'       => 'paddding_dimensions',
			'type'     => 'dimensions',
			'units'    => array('em','px','%'),
			'title'    => __('paddding_dimensions (Width/Height) Option', 'redux-framework-demo'),
			'subtitle' => __('Allow your users to choose width, height, and/or unit.', 'redux-framework-demo'),
			'desc'     => __('Enable or disable any piece of this field. Width, Height, or Units.', 'redux-framework-demo'),
			'default'  => array(
				'Width'   => '200', 
				'Height'  => '100',
				'units'  => '%',
			),
		),
		array(
			'id'       => 'margin_dimensions',
			'type'     => 'dimensions',
			'units'    => array('em','px','%'),
			'title'    => __('margin_dimensions (Width/Height) Option', 'redux-framework-demo'),
			'subtitle' => __('Allow your users to choose width, height, and/or unit.', 'redux-framework-demo'),
			'desc'     => __('Enable or disable any piece of this field. Width, Height, or Units.', 'redux-framework-demo'),
			'default'  => array(
				'Width'   => '200', 
				'Height'  => '100',
				'units'  => '%',
			),
		),
		array(
			'id'       => 'opt-gallery',
			'type'     => 'gallery',
			'title'    => __('Add/Edit Gallery', 'redux-framework-demo'),
			'subtitle' => __('Create a new Gallery by selecting existing or uploading new images using the WordPress native uploader', 'redux-framework-demo'),
			'desc'     => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
		),
		array(
			'id'       => 'opt-layout',
			'type'     => 'image_select',
			'title'    => __('Main Layout', 'redux-framework-demo'), 
			'subtitle' => __('Select main content and sidebar alignment. Choose between 1, 2 or 3 column layout.', 'redux-framework-demo'),
			'options'  => array(
				1      => array(
					'alt'   => '1 Column', 
					'img'   => ReduxFramework::$_url.'assets/img/1col.png'
				),
				2      => array(
					'alt'   => '2 Column Left', 
					'img'   => ReduxFramework::$_url.'assets/img/2cl.png'
				),
				3      => array(
					'alt'   => '2 Column Right', 
					'img'  => ReduxFramework::$_url.'assets/img/2cr.png'
				),
				4      => array(
					'alt'   => '3 Column Middle', 
					'img'   => ReduxFramework::$_url.'assets/img/3cm.png'
				),
				5      => array(
					'alt'   => '3 Column Left', 
					'img'   => ReduxFramework::$_url.'assets/img/3cl.png'
				),
				6      => array(
					'alt'  => '3 Column Right', 
					'img'  => ReduxFramework::$_url.'assets/img/3cr.png'
				)
			),
			'default' => 1		
		),
		array(
			'id'          =>'landing-blog-title-typography',
			'type'        =>'typography', 
			'title'		  =>esc_html__( 'Landing Blog Heading Typography Option', 'jubayer_theme' ),
			'subtitle'	  =>esc_html__( 'Edit Landing Blog Heading Typography Option', 'jubayer_theme' ),	
			'subsets'      =>false, 			
			'word-spacing'      =>true, 			
			'letter-spacing'      =>true, 			
			'text-transform'      =>true, 			
			'letter-spacing'      =>true,
			'units'       =>'px', 
			'default'	=>array(
				'color'       => '#141214', 
				'font-style'  => '400', 
				'font-family' => 'Georgia, "Times New Roman", Times, serif', 
				'google'      => true,
				'font-size'   => '50px', 
				'line-height' => '40',
			),
		),
	),
));
// -----------portfolio text paga ended


//--------------------------->end custom redex code













//START Pro Fields.
if ( class_exists( 'Redux_Pro' ) ) {
	Redux::set_section(
		$opt_name,
		array(
			'title' => esc_html__( 'Redux Pro Fields', 'your-textdomain-here' ),
			'id'    => 'redux-pro-fields',
			'icon'  => 'el el-redux',
			'class' => 'pro_highlight',
			'desc'  => esc_html__( 'For full documentation on this field, visit: ', 'your-textdomain-here' ) . '<a href="https://devs.redux.io/premium/" target="_blank">https://devs.redux.io/premium/</a>',
		)
	);

	require_once Redux_Core::$dir . '../sample/sections/pro-fields/accordion.php';
	require_once Redux_Core::$dir . '../sample/sections/pro-fields/color-scheme.php';
	require_once Redux_Core::$dir . '../sample/sections/pro-fields/custom-fonts.php';
	require_once Redux_Core::$dir . '../sample/sections/pro-fields/date-time-picker.php';
	require_once Redux_Core::$dir . '../sample/sections/pro-fields/google-maps.php';
	require_once Redux_Core::$dir . '../sample/sections/pro-fields/icon-select.php';
	require_once Redux_Core::$dir . '../sample/sections/pro-fields/js-button.php';
	require_once Redux_Core::$dir . '../sample/sections/pro-fields/multi-media.php';
	require_once Redux_Core::$dir . '../sample/sections/pro-fields/social-profiles.php';
	require_once Redux_Core::$dir . '../sample/sections/pro-fields/taxonomy.php';
	require_once Redux_Core::$dir . '../sample/sections/pro-fields/users.php';
	require_once Redux_Core::$dir . '../sample/sections/pro-fields/widget-areas.php';
}

/**
 * Metaboxes
 */
require_once Redux_Core::$dir . '../sample/metaboxes.php';

/**
 * Raw README
 */
if ( file_exists( $dir . '/../README.md' ) ) {
	$section = array(
		'icon'   => 'el el-list-alt',
		'title'  => esc_html__( 'Documentation', 'your-textdomain-here' ),
		'fields' => array(
			array(
				'id'           => 'opt-raw-documentation',
				'type'         => 'raw',
				'markdown'     => true,
				'content_path' => dirname( __FILE__ ) . '/../README.md', // FULL PATH, not relative please.
			),
		),
	);

	Redux::set_section( $opt_name, $section );
}

Redux::set_section(
	$opt_name,
	array(
		'icon'            => 'el el-list-alt',
		'title'           => esc_html__( 'Customizer Only', 'your-textdomain-here' ),
		'desc'            => '<p class="description">' . esc_html__( 'This Section should be visible only in Customizer', 'your-textdomain-here' ) . '</p>',
		'customizer_only' => true,
		'fields'          => array(
			array(
				'id'              => 'opt-customizer-only',
				'type'            => 'select',
				'title'           => esc_html__( 'Customizer Only Option', 'your-textdomain-here' ),
				'subtitle'        => esc_html__( 'The subtitle is NOT visible in customizer', 'your-textdomain-here' ),
				'desc'            => esc_html__( 'The field desc is NOT visible in customizer.', 'your-textdomain-here' ),
				'customizer_only' => true,
				'options'         => array(
					'1' => esc_html__( 'Opt 1', 'your-textdomain-here' ),
					'2' => esc_html__( 'Opt 2', 'your-textdomain-here' ),
					'3' => esc_html__( 'Opt 3', 'your-textdomain-here' ),
				),
				'default'         => '2',
			),
		),
	)
);

/*
 * <--- END SECTIONS
 */

/*
 * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR OTHER CONFIGS MAY OVERRIDE YOUR CODE.
 */

/*
 * --> Action hook examples.
 */

// Function to test the compiler hook and demo CSS output.
// Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
// add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);
//
// Change the arguments after they've been declared, but before the panel is created.
// add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );
//
// Change the default value of a field after it's been set, but before it's been used.
// add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );
//
// Dynamically add a section. Can be also used to modify sections/fields.
// add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');
// .
if ( ! function_exists( 'compiler_action' ) ) {
	/**
	 * This is a test function that will let you see when the compiler hook occurs.
	 * It only runs if a field's value has changed and compiler=>true is set.
	 *
	 * @param array  $options        Options values.
	 * @param string $css            Compiler selector CSS values  compiler => array( CSS SELECTORS ).
	 * @param array  $changed_values Any values changed since last save.
	 */
	function compiler_action( array $options, string $css, array $changed_values ) {
		echo '<h1>The compiler hook has run!</h1>';
		echo '<pre>';
		// phpcs:ignore WordPress.PHP.DevelopmentFunctions
		print_r( $changed_values ); // Values that have changed since the last save.
		// echo '<br/>';
		// print_r($options); //Option values.
		// echo '<br/>';
		// print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS ).
		echo '</pre>';
	}
}

if ( ! function_exists( 'redux_validate_callback_function' ) ) {
	/**
	 * Custom function for the callback validation referenced above
	 *
	 * @param array $field          Field array.
	 * @param mixed $value          New value.
	 * @param mixed $existing_value Existing value.
	 *
	 * @return array
	 */
	function redux_validate_callback_function( array $field, $value, $existing_value ): array {
		$error   = false;
		$warning = false;

		// Do your validation.
		if ( 1 === (int) $value ) {
			$error = true;
			$value = $existing_value;
		} elseif ( 2 === (int) $value ) {
			$warning = true;
			$value   = $existing_value;
		}

		$return['value'] = $value;

		if ( true === $error ) {
			$field['msg']    = 'your custom error message';
			$return['error'] = $field;
		}

		if ( true === $warning ) {
			$field['msg']      = 'your custom warning message';
			$return['warning'] = $field;
		}

		return $return;
	}
}


if ( ! function_exists( 'dynamic_section' ) ) {
	/**
	 * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
	 * Simply include this function in the child themes functions.php file.
	 * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
	 * so you must use get_template_directory_uri() if you want to use any of the built-in icons.
	 *
	 * @param array $sections Section array.
	 *
	 * @return array
	 */
	function dynamic_section( array $sections ): array {
		$sections[] = array(
			'title'  => esc_html__( 'Section via hook', 'your-textdomain-here' ),
			'desc'   => '<p class="description">' . esc_html__( 'This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.', 'your-textdomain-here' ) . '</p>',
			'icon'   => 'el el-paper-clip',

			// Leave this as a blank section, no options just some intro text set above.
			'fields' => array(),
		);

		return $sections;
	}
}

if ( ! function_exists( 'change_arguments' ) ) {
	/**
	 * Filter hook for filtering the args.
	 * Good for child themes to override or add to the args array. Can also be used in other functions.
	 *
	 * @param array $args Global arguments array.
	 *
	 * @return array
	 */
	function change_arguments( array $args ): array {
		$args['dev_mode'] = true;

		return $args;
	}
}

if ( ! function_exists( 'change_defaults' ) ) {
	/**
	 * Filter hook for filtering the default value of any given field. Very useful in development mode.
	 *
	 * @param array $defaults Default value array.
	 *
	 * @return array
	 */
	function change_defaults( array $defaults ): array {
		$defaults['str_replace'] = esc_html__( 'Testing filter hook!', 'your-textdomain-here' );

		return $defaults;
	}
}

if ( ! function_exists( 'redux_custom_sanitize' ) ) {
	/**
	 * Function to be used if the field sanitize argument.
	 * Return value MUST be the formatted or cleaned text to display.
	 *
	 * @param string $value Value to evaluate or clean.  Required.
	 *
	 * @return string
	 */
	function redux_custom_sanitize( string $value ): string {
		$return = '';

		foreach ( explode( ' ', $value ) as $w ) {
			foreach ( str_split( $w ) as $k => $v ) {
				if ( ( $k + 1 ) % 2 !== 0 && ctype_alpha( $v ) ) {
					$return .= mb_strtoupper( $v );
				} else {
					$return .= $v;
				}
			}

			$return .= ' ';
		}

		return $return;
	}
}