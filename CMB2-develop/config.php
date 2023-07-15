<?php 
 function extra_field_add_portfolio(){
    $portfolio_extra_box = new_cmb2_box(
        array(
            'id'                =>'extra_portfolio_box',
            'title'             => esc_html__( 'Portfolio Box', 'wp_theme' ),
            'object_types'      => array('cat-portfolio'),
        )        
    );
        $portfolio_extra_box->add_field( array(
            'name' => 'ADD Gallery Picture',
            'desc' => 'Add four images for standrad for this portfolio page',
            'id'   => 'portfolio_gallery',
            'type' => 'file_list',
            'preview_size' => array( 200, 200 ),
            'text' => array(
                'add_upload_files_text' => 'Add Gallery Pictures', 
                'remove_image_text' => 'Remove Gallery Pictures',
                'file_text' => 'File', 
                'file_download_text' => 'Downlood File',
                'remove_text' => 'Remove',
            ),
        ) );
 }
 add_action( 'cmb2_admin_init','extra_field_add_portfolio' );
?>
