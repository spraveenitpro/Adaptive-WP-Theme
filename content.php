<?php
/*************************************************************/
/* Template for standard Post */
/*************************************************************/


?>



							 <article <?php post_class('clearfix');   ?> id="post-<?php the_id();  ?>">
								
									<header>
										
										 
										<?php 
											//Display comments link if allowed and post isn't password protected
											if(comments_open() && !post_password_required()) {

												comments_popup_link('0','1','%','article-meta-comments' );
											}

										?>
										<p class="article-meta-categories"><?php the_category('&nbsp;/&nbsp;' ); ?></p>
										<h1><a href="<?php the_permalink();   ?>"> <?php the_title();  ?></a></h1>
										<p class="article-meta-extra"><?php the_date( get_option('date_format') );   ?> at <?php the_time(get_option('time_format'));  ?>, by <a href=""><?php  the_author_posts_link( );  ?></a></p>
										
									</header>
									
									<?php if(has_post_thumbnail( )) : ?>
										<figure class="article-preview-image">
											<a href="<?php the_permalink();   ?>"><?php the_post_thumbnail( );   ?></a>
										</figure>
									<?php endif ; ?>
									
									<?php the_content(__('Read More &raquo;','adaptive_framework'));  ?>
								
							</article>
							
							<hr class="fancy-hr" />