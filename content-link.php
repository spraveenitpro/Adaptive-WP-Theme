<?php
/*************************************************************/
/* Template for Link Post */
/*************************************************************/


?>



					<article <?php post_class('clearfix');   ?> id="post-<?php the_id();  ?>">
						
						<header>
							
							<span class="post-format-url"></span>
							<p class="article-meta-categories"><?php the_category('&nbsp;/&nbsp;' ); ?></p>
							<p class="article-meta-extra"><?php the_date( get_option('date_format') );   ?> at <?php the_time(get_option('time_format'));  ?>, by <a href=""><?php  the_author_posts_link( );  ?></a></p>
							
						</header>
						
						<div class="url-container">
								
								<p><?php the_title( ); ?></p>
								<span><?php the_content( ); ?></span>
							
						</div> <!-- end quote-container -->
						
					</article>
					
					
							
					<hr class="fancy-hr" />