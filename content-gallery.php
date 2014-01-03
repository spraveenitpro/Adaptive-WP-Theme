<?php
/*************************************************************/
/* Template for Gallery Post */
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
									
									<?php

										$gallery_atts = array (

												'post_parent' => $post->ID,
												'post_mime_type' => 'image'
											);
										$gallery_images =  get_children($gallery_atts );

										if(!empty($gallery_images)) {

											$gallery_count = count($gallery_images);
											$first_image = array_shift($gallery_images);
											$display_first_image = wp_get_attachment_image($first_image->ID );
									?>
											<figure class="article-preview-image">
												<a href="<?php the_permalink();   ?>"><?php echo $display_first_image; ?></a>
											</figure>

											<p><strong><?php printf( _n('This Gallery Contains %s Photo','This Gallery Contains %s photos',$gallery_count,'adaptive_framework'), $gallery_count); ?></strong></p>


										<?php }

									?>

									
								
							</article>
							
							<hr class="fancy-hr" />