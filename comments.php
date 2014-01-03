<?php


//Prevent Direct loading of the page
//
if(!empty($_SERVER['SCRIPT-FILENAME']) && basename($_SERVER['SCRIPT-FILENAME']) == 'comments.php') {
	die(__('You can not access this file Directly','adaptive-framework'));
}


//Check if the post is password protected

if (post_password_required( )) : ?>

	<p> 
			<?php _e('This post is password Protected','adaptive-framework' );?>
			<?php return; ?>
	</p>

<?php endif; 

if(have_comments()) : ?>

		<a href="#respond" class="article-add-comments">+</a>
		<h3><?php comments_number(__('No Comments','adaptive-framework'),__('One Comments','adaptive-framework'),__('% Comments','adaptive-framework') ); ?></h3>

		<ol class="commentslist">
			<?php wp_list_comments('callback=adaptive_comments' ); ?>
		</ol>

		<?php if(get_comment_pages_count() > 1 && get_option('page_comments' )) : ?>

			<div class="comments-nav-section clearfix">
							
				<p class="fl"><?php previous_comments_link(__('&larr; Older Comments','adaptive-framework') ); ?></p>
				<p class="fr"><?php next_comments_link(__('Newer Comments &rarr;','adaptive-framework')  );?></p>
							
			</div> <!-- end comments-nav-section -->

		<?php endif; ?>
					


<?php elseif (!comments_open() && !is_page() && post_type_supports(get_post_type(), 'comments')) : ?>

		<p><?php _e('Comments Are closed','adaptive-framework' );?></p>
	
<?php endif ;

//Display Comment form

comment_form();


?>