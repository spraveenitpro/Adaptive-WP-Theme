
<?php get_header( );?>




	<!-- MAIN CONTENT -->
	<div class="container">
	
		<div class="row">
		
			<div class="span12 article-container-fix">
				
				<div class="articles">
				
					<article class="clearfix">
						
						<header>
							
							<h1>  <?php _e('Page Not Found','adaptive-framework') ?> </h1>			
							
						</header>

						<hr class="image-replacement" />
						<p><?php _e('It seems you are looking for somthing not here, so may be look elsewhere !', 'adaptive-framework')   ?></p>
						
						<div class="search-form-404">
							<?php get_search_form(); ?>
						</div>
						
					</article>
					
				</div> <!-- end articles -->
				
			</div> <!-- end span9 -->
			 
			
		</div> <!-- end row -->
		
	</div> <!-- end container -->
	



<?php get_footer( ); ?>
