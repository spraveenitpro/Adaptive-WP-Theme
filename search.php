<?php get_header(); ?>


	<!-- MAIN CONTENT -->
	<div class="container">
	
		<div class="row">
		
			<div class="span9 article-container-fix">
				
				<div class="articles">

					<?php if(have_posts()) : ?>

						<div class="additional-content">
							
							<h4><?php _e('Search Results for ', 'adaptive_framework'); ?><?php echo get_search_query();  ?></h4>


						</div>
						<hr class="fancy-hr" />

						<?php while (have_posts()) : the_post();    ?>

									 
									<?php get_template_part('content' , get_post_format( ));    ?>

								

						<?php endwhile; else:   ?>
						<h1><?php _e('No Results found matching your query', 'adaptive_framework');   ?></h1>

						<?php endif; ?>			
							
							<div class="articles-nav clearfix">
								
								<p class="articles-nav-prev"><a href=""><?php next_posts_link(__('&larr; Older Posts','adaptive_framework' )); ?></a></p
		>						<p class="articles-nav-next"><a href=""><?php previous_posts_link(__(' Newer Posts &rarr;','adaptive_framework' )); ?></a></p>
								
							</div> <!-- end articles-nav -->
							
						</div> <!-- end articles -->
						
					</div> <!-- end span9 -->
					
					<aside class="span3 main-sidebar">
						
						<?php get_sidebar( ); ?>

					</aside>
					
				</div> <!-- end row -->
				
			</div> <!-- end container -->
			
		<?php get_footer(); ?>

