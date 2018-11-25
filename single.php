<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<section class="bg-section-image generic-top-section" style="background-image:url('<?php echo $img['sizes']['small-header']; ?>')">
			<div class="max-width-container">
				<div class="generic-top-section__text-container">
					<h1><?php the_title(); ?></h1>
					<h3><?php the_field('subtitle'); ?></h3>

					<div class="generic-top-section__social-btns">
						<?php get_sidebar('header-share-btns'); ?>
					</div>
				</div>				
			</div>
		</section>



		<section class="blog-post">
            <div class="max-width-container">
            	<?php the_content(); ?>
            </div>
        </section>


		

	<?php endwhile; else : ?>
	<?php endif; ?>


<?php get_footer(); ?>


