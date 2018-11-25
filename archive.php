<?php get_header(); ?>


	<?php $img = get_field('background_image'); ?>

	<section class="bg-section-image generic-top-section" style="background-image:url('<?php echo $img['sizes']['small-header']; ?>')">
		<div class="max-width-container">
			<div class="generic-top-section__text-container">
				<h1><?php the_title(); ?></h1>
				<?php $subtitletext = get_field('subtitle');
                if( !empty($subtitletext) ) { ?>
                    <h3><?php the_field('subtitle'); ?></h3>
                <?php } else {} ?>

				<div class="generic-top-section__social-btns">
					<?php get_sidebar('header-share-btns'); ?>
				</div>
			</div>				
		</div>
	</section>


	


	<section class="generic-page-content light-bg">
        <div class="max-width-container">
        		
    		<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array( 'post_type' => 'post', 'posts_per_page' => 10, 'paged' => $paged );
			$wp_query = new WP_Query($args);
			while ( have_posts() ) : the_post(); ?>
			    <h2><?php the_title() ?></h2>
			<?php endwhile; ?>

			<!-- then the pagination links -->
			<?php next_posts_link( '&larr; Older posts', $wp_query ->max_num_pages); ?>
			<?php previous_posts_link( 'Newer posts &rarr;' ); ?>

        	
        </div>
    </section>





			

			



<?php get_footer(); ?>
