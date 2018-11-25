
<?php get_header(); ?>

		
		<section class="bg-section-image generic-top-section">
			<div class="max-width-container">
				<div class="generic-top-section__text-container">
					<h1>Oops... Page not found! <?php the_title(); ?></h1>
					<h3>The page you were looking for was not found. <br/>Please try searching:</h3>
					
					<form role="search" method="get" id="search-form-search-page" action="<?php echo get_site_url(); ?>">
						<span class="input-holder">
							<input type="text" id="s" name="s" placeholder="Search the site..." tabindex="1" autocomplete="off">
						</span>
						<span class="search-submit">
							<button type="submit" id="search_submit" tabindex="2">
								<i class="fa fa-search"></i>
							</button>
						</span>
					</form>

				</div>				
			</div>
		</section>


		

	

<?php get_footer(); ?>