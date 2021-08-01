<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Legal_Aspire_Solicitors
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section class="services-pg">

			<div class="services-pg__banner-image-background">
				<div class="services-pg__banner-content">
					<h1 class="services-pg__banner-title">Services</h1>
				</div>
			</div>

			<div class="services-pg__text-container">
				<div class="services-pg__text-col-1">
					<p class="services-pg__intro-title">Legal Services</p>
					<h1 class="services-pg__intro-heading">We can help you in the following practice areas.</h1>
				</div>
				<div class="services-pg__text-col-2">
					<p class="services-pg__intro-desc">Sale vivendum senserit an eum, ubique noster ex pro, at vel accommodare ullamcorper. Cu duo minim vocibus menandri, at omittam voluptatum usu. 
					Fabulas docendi iracundia. Lorem ipsum dolor sit amet, ut eius periculis eos, eu mea. Nullam faucibus sodales mi.
					Vivamus nisl lorem, vulputate id pellentesque non, tristique ac leo. Pro id vocent recteque intellegat, pri verear principes incorrupte.</p>
				</div>
			</div>

			<div class="services-pg__container">
				<?php
				if ( have_posts() ) {
					while(have_posts()): the_post();
				?>
						<div class="services-pg__container-item">
							<div class="services-pg__icon"><?php the_field('services_icon'); ?></div>
							<h2 class="services-pg__title"><?php the_title(); ?></h2>
							<div class="services-pg__excerpt"><?php the_excerpt(); ?></div>
							<div class="services-pg__permalink-container">
								<a class="services-pg__permalink" href="<?php the_permalink(); ?>">Read more</a>
							</div>
						</div>
				<?php endwhile; } ?>
			</div>
		</sectiion>
		<section class="contact services-pg-contact">
			<div class="contact__container">
				<h2 class="contact__heading">Get a Free Counsultation for Your Case.</h2>
				<div class="contact__link-container">
					<a class="contact__link" href="#">Contact Us</a>
				</div>
			</div>
		</section>
	</main>
<?php

get_footer();
