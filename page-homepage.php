<?php
/*
 Template Name: Homepage
 *
*/
?>

<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<section class="m-hero m-hero--large u-bg-cover u-bg-cen" style="background-image:url('<?php echo get_template_directory_uri(); ?>/library/images/homepage/hp-header-img@2x.jpg');">
			<div class="max-width-inner __inner u-parallax-box">
				<h2>welcome to</h2>
				<div class="c-line"></div>
				<h1>TITAN MARINE NETWORKS</h1>
			</div>

			<div class="l-scroll-line-wrapper">
				<div class="l-section-top">
				  <div class="c-scrolldown">
				    <div class="c-scroll-line"></div>
				  </div>
				</div>
			</div>
		</section>


		<section class="m-block u-bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/library/images/Homepage/hp-about-grey-bg@2x.jpg');">
			<div class="max-width-inner __inner">
				<div class="m-block__left">
					<h3>ABOUT US</h3>
					<div class="c-line c-line--red"></div>
					<h4>SUPERYACHT COMMUNICATION SPECIALISTS</h4>
					<p>Established in 2011, Titan Marine Networks design, install and support broadband communication systems for the world’s most technologically advanced superyachts.</p>
					<a href="" class="c-btn c-btn--tc-1">LEARN More</a>
				</div>

				<div class="m-block__right">
					<img src="<?php echo get_template_directory_uri(); ?>/library/images/Homepage/hp-about-img@2x.png" class="m-block__right-image">
				</div>
			</div>
		</section>



		<section class="m-block m-block--tc-light u-bg-cover u-bg-cen" style="background-image: url('<?php echo get_template_directory_uri(); ?>/library/images/Homepage/hp-services-bg@2x.jpg');">
			<div class="max-width-inner __inner">
				<div class="m-block__left">
					<h3>WHAT WE offer</h3>
					<div class="c-line"></div>
					<h4>fully bespoke services</h4>
					<p>At Titan Marine Networks, we design each system with performance as our primary objective. Following an initial site survey, we engineer your system with antenna placement, cable type, maintainability and flexibility in mind. This tailored approach minimises downtime, and guarantees consistent optimum performance.</p>
					<a href="" class="c-btn c-btn--tc-2">LEARN More</a>
				</div>

				<div class="m-block__right">
					<img src="<?php echo get_template_directory_uri(); ?>/library/images/Homepage/hp-services-img@2x.png" class="m-block__right-image">
				</div>
			</div>
		</section>



		<!-- Projects -->
		<section class="m-block u-bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/library/images/Homepage/hp-projects-grey-bg@2x.jpg');">
			<div class="max-width-inner __inner">
				<div class="m-block__left">
					<h3>our projects</h3>
					<div class="c-line c-line--red"></div>
					<h4>keeping you connected</h4>
				</div>

				<div class="m-block__right">
					<a href="" class="c-btn c-btn--tc-1">all projects</a>
				</div>
			</div>


			<div class="max-width-inner">
				<div class="m-block-carousel">
					<div>
						<div class="m-block-carousel__indiv">
							<div class="m-block-carousel__img-1">
								<img src="<?php echo get_template_directory_uri(); ?>/library/images/Homepage/hp-projects-img-1@2x.jpg">
							</div>
							<div class="m-block-carousel__spacer"></div>


							<div class="m-block-carousel__text">
								<h3>156m my dilbar</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							</div>
							<div class="m-block-carousel__nav">
								<div><img class="js-left-arrow" src="<?php echo get_template_directory_uri(); ?>/library/images/Icons/Homepage/red-arrow-left@2x.png"></div>
								<div><img class="js-right-arrow" src="<?php echo get_template_directory_uri(); ?>/library/images/Icons/Homepage/red-arrow-right@2x.png"></div>
							</div>
							<div class="m-block-carousel__img-2">
								<div><img src="<?php echo get_template_directory_uri(); ?>/library/images/Homepage/hp-projects-img-2@2x.jpg"></div>
							</div>
							<div class="m-block-carousel__img-3">
								<div><img src="<?php echo get_template_directory_uri(); ?>/library/images/Homepage/hp-projects-img-2@2x.jpg"></div>
							</div>
						</div>
					</div>

					<div>
						<div class="m-block-carousel__indiv">
							<div class="m-block-carousel__img-1">
								<img src="<?php echo get_template_directory_uri(); ?>/library/images/Homepage/hp-projects-img-1@2x.jpg">
							</div>
							<div class="m-block-carousel__spacer"></div>


							<div class="m-block-carousel__text">
								<h3>second option</h3>
								<p>Lorem iamet, consectetur adipisicing elit.</p>
							</div>
							<div class="m-block-carousel__nav">
								<div><img class="js-left-arrow" src="<?php echo get_template_directory_uri(); ?>/library/images/Icons/Homepage/red-arrow-left@2x.png"></div>
								<div><img class="js-right-arrow" src="<?php echo get_template_directory_uri(); ?>/library/images/Icons/Homepage/red-arrow-right@2x.png"></div>
							</div>
							<div class="m-block-carousel__img-2">
								<div><img src="<?php echo get_template_directory_uri(); ?>/library/images/Homepage/hp-projects-img-2@2x.jpg"></div>
							</div>
							<div class="m-block-carousel__img-3">
								<div><img src="<?php echo get_template_directory_uri(); ?>/library/images/Homepage/hp-projects-img-2@2x.jpg"></div>
							</div>
						</div>
					</div>
					
					<div>
						<div class="m-block-carousel__indiv">
						<div class="m-block-carousel__img-1">
							<img src="<?php echo get_template_directory_uri(); ?>/library/images/Homepage/hp-projects-img-1@2x.jpg">
						</div>
						<div class="m-block-carousel__spacer"></div>


						<div class="m-block-carousel__text">
							<h3>third dilbar</h3>
							<p>Lorem ipsum dolor sit amet, consectetursafas asfaf elit.</p>
						</div>
						<div class="m-block-carousel__nav">
							<div><img class="js-left-arrow" src="<?php echo get_template_directory_uri(); ?>/library/images/Icons/Homepage/red-arrow-left@2x.png"></div>
								<div><img class="js-right-arrow" src="<?php echo get_template_directory_uri(); ?>/library/images/Icons/Homepage/red-arrow-right@2x.png"></div>
						</div>
						<div class="m-block-carousel__img-2">
							<div><img src="<?php echo get_template_directory_uri(); ?>/library/images/Homepage/hp-projects-img-2@2x.jpg"></div>
						</div>
						<div class="m-block-carousel__img-3">
							<div><img src="<?php echo get_template_directory_uri(); ?>/library/images/Homepage/hp-projects-img-2@2x.jpg"></div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</section>




		<!-- Insta block -->
		<section class="m-block m-block--tc-light u-bg-cover u-bg-cen l-insta-gallery" style="background-image: url('<?php echo get_template_directory_uri(); ?>/library/images/Homepage/hp-instagram-bg@2x.jpg');">
			<div class="max-width-inner __inner">
				<div class="m-block__left">
					<h3>
						<img class="l-insta-gallery__icon" src="<?php echo get_template_directory_uri(); ?>/library/images/Icons/Homepage/hp-instagram_icon@2x.png">
						Join our community
					</h3>
					<div class="c-line"></div>
					<h4>instagram gallery</h4>
				</div>

				<div class="m-block__right">
					<a href="https://www.instagram.com/titan.marine.networks/" target="_blank" class="c-btn c-btn--tc-2">follow us</a>
				</div>
			</div>

			<div>
				<?php echo do_shortcode('[instagram-feed user="titan.marine.networks"]'); ?>
			</div>
		</section>




		<section class="m-contact-strip">
			<div class="max-width-inner">
				<div class="__inner">
					<div class="__text"><span>get in touch</span> work with titan</div>
					<a href="" class="c-btn-large">
						contact us
						<div><img src="<?php echo get_template_directory_uri(); ?>/library/images/Icons/Homepage/red-arrow-right@2x.png"></div>
					</a>
				</div>
			</div>
		</section>

				

	<?php endwhile; else : ?>
	<?php endif; ?>


	

<?php get_footer(); ?>


