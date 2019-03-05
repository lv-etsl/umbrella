<?php
// need some menu

// Register Navigation Menus
function custom_navigation_menus() {

	$locations = array(
		'header-menu' => __( 'menu en tete', 'text_domain' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'custom_navigation_menus' );


 ?>
