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
		<section class="sectors-pg">

			<div class="sectors-pg__banner-image-background">
				<div class="sectors-pg__banner-content">
					<h1 class="sectors-pg__banner-title">Sectors</h1>
				</div>
			</div>

			<div class="sectors-pg__text-container">
				<div class="sectors-pg__text-col-1">
					<p class="sectors-pg__intro-title">Sectors</p>
					<h1 class="sectors-pg__intro-heading">We Bring Sector Knowledge and Insight to Our Clients</h1>
				</div>
				<div class="sectors-pg__text-col-2">
					<p class="sectors-pg__intro-desc">Sale vivendum senserit an eum, ubique noster ex pro, at vel accommodare ullamcorper. Cu duo minim vocibus menandri, at omittam voluptatum usu. 
					Fabulas docendi iracundia. Lorem ipsum dolor sit amet, ut eius periculis eos, eu mea. Nullam faucibus sodales mi.
					Vivamus nisl lorem, vulputate id pellentesque non, tristique ac leo. Pro id vocent recteque intellegat, pri verear principes incorrupte.</p>
				</div>
			</div>

			<div class="sectors-pg__container">
				<?php
				if ( have_posts() ) {
					while(have_posts()): the_post();
				?>
						<div class="sectors-pg__container-item">
							<div class="sectors-pg__icon"><?php the_field('sectors_icon'); ?></div>
							<h2 class="sectors-pg__title"><?php the_title(); ?></h2>
							<div class="sectors-pg__excerpt"><?php the_excerpt(); ?></div>
							<div class="sectors-pg__permalink-container">
								<a class="sectors-pg__permalink" href="<?php the_permalink(); ?>">Read more</a>
							</div>
						</div>
				<?php endwhile; } ?>
			</div>
		</sectiion>
		<section class="contact sectors-pg-contact">
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
