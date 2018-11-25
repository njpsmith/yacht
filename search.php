<?php get_header(); ?>

	<section class="bg-section-image generic-top-section">
			<div class="max-width-container">
				<div class="generic-top-section__text-container">
					<h1><span><?php _e( 'Search Results for:', 'bonestheme' ); ?></span> <?php echo esc_attr(get_search_query()); ?></h1>
				</div>				
			</div>
		</section>


		<section class="generic-page-content light-bg search-results">
            <div class="max-width-container">
            	<div class="max-width-text text-container larger-helv-text">
        			
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">

							<header class="entry-header article-header">

								<h3 class="search-title entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

              						<!-- <p class="byline entry-meta vcard">
                						Posted on <?php echo get_the_time(get_option('date_format')) ?>
              						</p> -->

							</header>

							<section class="entry-content">
									<?php the_excerpt( '<span class="read-more">' . __( 'Read more &raquo;', 'bonestheme' ) . '</span>' ); ?>
							</section>

							<!-- <footer class="article-footer">

								<?php if(get_the_category_list(', ') != ''): ?>
              					<?php printf( __( 'Filed under: %1$s', 'bonestheme' ), get_the_category_list(', ') ); ?>
              					<?php endif; ?>

             					<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

							</footer> --> <!-- end article footer -->

						</article>

						<hr/>

					<?php endwhile; ?>

						<?php bones_page_navi(); ?>

					<?php else : ?>

							<article id="post-not-found" class="hentry cf">
								<header class="article-header">
									<h1><?php _e( 'Sorry, No Results.', 'bonestheme' ); ?></h1>
								</header>
								<section class="entry-content">
									<p><?php _e( 'Try your search again.', 'bonestheme' ); ?></p>
								</section>

								<form role="search" method="get" id="search-form" class="" action="<?php echo get_site_url(); ?>">
		                            <input type="text" placeholder="Search..." name="s" class="search-page-input" onkeyup="buttonUp();" required>
		                            <!-- <input type="submit" class="searchbox-submit" value=""> -->
		                        </form>

								<!-- <footer class="article-footer">
										<p><?php _e( 'This is the error message in the search.php template.', 'bonestheme' ); ?></p>
								</footer> -->
							</article>

					<?php endif; ?>


            	</div>    	
            </div>
        </section>


												

<?php get_footer(); ?>
