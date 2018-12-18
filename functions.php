<?php 
function wpb_custom_new_menu() {
    register_nav_menus(
      array(
        'custom-menu-1' => __( 'header_menu' ),
        'custom-menu-2' => __( 'pages_menu' )
      )
    );
  }
  add_action( 'init', 'wpb_custom_new_menu' );
// Wordpress lifecycle; actions/filters WORDPRESS -- default wp functionality
// wordpress action list; Actions Run during a typical request

// function wpb_custom_new_menu() {
//     register_nav_menu('custom-menu-1',__( 'header_menu' ));
//   }

  //add_action 
  add_action( 'init', 'wpb_custom_new_menu' );

  //add_action(ACTION, FUNCTION)
?>