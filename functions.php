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

 
/*************************************************************/
/*  Register Sidebar*/
/*************************************************************/


if(function_exists('register_sidebar')) {


	register_sidebar(
		array(

							'name' =>__('Main Sidebar','adaptive_framework'),
							'id'   =>'main-sidebar',
							'description' =>__('The Main sidebar area', 'adaptive-framework'),
							'before_widget' => '<div class="sidebar-widget">',
							'after_widget' => '</div> <!-- End sidebar Widget -->',
							'before_title' => '<h4>',
							'after_title' => '</h4>'


		) );	

	register_sidebar(
		array(

							'name' =>__('Left Footer','adaptive_framework'),
							'id'   =>'left-footer',
							'description' =>__('The Left Footer area', 'adaptive-framework'),
							'before_widget' => '<div class="footer-sidebar-widget">',
							'after_widget' => '</div> <!-- End footer sidebar Widget -->',
							'before_title' => '<h4>',
							'after_title' => '</h4>'


		) );	

	register_sidebar(
		array(

							'name' =>__('Right Footer','adaptive_framework'),
							'id'   =>'right-footer',
							'description' =>__('The Right Footer area', 'adaptive-framework'),
							'before_widget' => '<div class="footer-sidebar-widget">',
							'after_widget' => '</div> <!-- End footer sidebar Widget -->',
							'before_title' => '<h4>',
							'after_title' => '</h4>'


		) );	
}


 
/*************************************************************/
/* Theme Support for Featured Images, Post Formats */
/*************************************************************/


 if(function_exists('add_theme_support')) {

 	add_theme_support('post-formats', array('link','quote','gallery') );
 	add_theme_support('post-thumbnails',array('post') );
 }




 /*************************************************************/
 /*  */
 /*************************************************************/
 
 
  function adaptive_comments($comment, $args, $depth) {

  	$GLOBALS['comment'] = $comment;

  		if(get_comment_type() == 'pingback' || get_comment_type() == 'trackback') : ?>

  			<li class="pingback" id="comment-<?php comment_ID(); ?>">
				<article <?php comment_class(); ?>>
					<header>
						<h5><?php _e('Pingback','adaptive-framework'); ?></h5>
						<p><?php edit_comment_link(); ?></p>
					</header>
					<p><?php comment_author_link( ); ?></p>
					
				</article>							
			</li>

		<?php elseif (get_comment_type() == 'comment'): ?>

			<li id="<?php comment_ID();   ?>">
				<article <?php comment_class('clearfix');  ?>>
					<header>
						<h5><?php comment_author_link(); ?></h5>
						<p><span><?php comment_date( ); ?> at <?php comment_time( );  ?> - </span><?php comment_reply_link( array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth'])));   ?></p>
					</header>
					
					<figure class="comment-avatar">
						<?php 

							$avatar_size = 80;
							if ($comment->comment_parent != 0) {

								$avatar_size = 64;
							}
							echo get_avatar($comment, $avatar_size);


						 ?>
					</figure>

					<?php if($comment->comment_approved == '0') : ?>
					
						<p class="awaiting-moderation"><?php _e('Your comment is awaiting moderation.','adaptive-framework'); ?></p>

					<?php endif; ?>
					
					<?php comment_text( ); ?>
				</article>							
			

		<?php endif;
  	
  }


  /*************************************************************/
  /* Custom Comment Form */
  /*************************************************************/
 
  function adaptive_custom_comment_form($defaults) {
  	$defaults['comment_notes_before'] = '';
  	$defaults['id_forms'] = 'comment-form';
  	$defaults['comment_fields'] =  '<p><textarea name="comment" id="comment" cols="30" rows="10"></textarea></p>';


  	return $defaults;

  }


  add_filter('comment_form_defaults', 'adaptive_custom_comment_form');



  function adaptive_custom_comment_fields() {
	$commenter = wp_get_current_commenter();
	$req = get_option('require_name_email');
	$aria_req = ($req ? " aria-required='true'" : '');
	
	$fields = array(
		'author' => '<p>' . 
						'<input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" ' . $aria_req . ' />' .
						'<label for="author">' . __('Name', 'adaptive-framework') . '' . ($req ? __(' (required)', 'adaptive-framework') : '') . '</label>' .
		            '</p>',
		'email' => '<p>' . 
						'<input id="email" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) . '" ' . $aria_req . ' />' .
						'<label for="email">' . __('Email', 'adaptive-framework') . '' . ($req ? __(' (required) (will not be published)', 'adaptive-framework') : '') . '</label>' .
		            '</p>',
		'url' => '<p>' . 
						'<input id="url" name="url" type="text" value="' . esc_attr($commenter['comment_author_url']) . '" />' .
						'<label for="url">' . __('Website', 'adaptive-framework') . '</label>' .
		            '</p>'
	);

	return $fields;
}

add_filter('comment_form_default_fields', 'adaptive_custom_comment_fields');


  
 /*************************************************************/
 /*  Load Custom Widgets */
 /*************************************************************/
 

 require_once('functions/widget-ad-260.php');
 //require_once('functions/shortcodes.php');
 
  

?>