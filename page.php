
<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div class="max-width-outer">


			<div class="generic-page generic-page-bottom-padding">
				<section class="top-section">
					<div class="container-fluid">
						<div class="max-width-inner">

							<div class="top-section__content m-content-wrapper" style="text-align:center;">
								<h1>Under construction</h1>
							</div>

							
							<div class="search-results-section m-content-wrapper">
								

							</div>
						</div>				
					</div>
				</section>
			</div>

		</div>



	<?php endwhile; else : ?>
	<?php endif; ?>

	

<?php get_footer(); ?>