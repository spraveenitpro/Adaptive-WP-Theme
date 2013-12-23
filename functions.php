<?php

/**************************************************/
/*Define Constants */
/**************************************************/

define('THEMEROOT',get_stylesheet_directory_uri());
define('IMAGES', THEMEROOT.'/images');


/**************************************************/
/*Define Menus */
/**************************************************/

function register_my_menuss() {

							register_nav_menus(array(

									'top-menu' => 'Top Menu',
									'main-menu' =>'Main Menu'

								));

						}


add_action('init','register_my_menuss' );


?>