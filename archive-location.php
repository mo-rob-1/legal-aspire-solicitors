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
		<section class="locations-pg">

			<div class="locations-pg__banner-image-background">
				<div class="locations-pg__banner-content">
					<h1 class="locations-pg__banner-title">Locations</h1>
				</div>
			</div>

			<div class="locations-pg__text-container">
				<div class="locations-pg__text-col-1">
					<p class="locations-pg__intro-title">Legal Aspire Solicitors</p>
					<h1 class="locations-pg__intro-heading">We are based all over the UK</h1>
				</div>
				<div class="locations-pg__text-col-2">
					<p class="locations-pg__intro-desc">Sale vivendum senserit an eum, ubique noster ex pro, at vel accommodare ullamcorper. Cu duo minim vocibus menandri, at omittam voluptatum usu. 
					Fabulas docendi iracundia. Lorem ipsum dolor sit amet, ut eius periculis eos, eu mea. Nullam faucibus sodales mi.
					Vivamus nisl lorem, vulputate id pellentesque non, tristique ac leo. Pro id vocent recteque intellegat, pri verear principes incorrupte.</p>
				</div>
			</div>

			<div class="locations-pg__container">
				<?php
				if ( have_posts() ) {
					while(have_posts()): the_post();
				?>
						<div class="locations-pg__container-item">
                            <div class="locations-pg__thumbnail"><?php legal_aspire_solicitors_post_thumbnail(); ?></div>
							<div class="locations-pg__card-text-container">
								<h2 class="locations-pg__title"><?php the_title(); ?></h2>
                                <div class="locations-pg__contact-info-wrapper">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <p class="locations-pg__contact-address-p"><?php the_field('location_address'); ?></p>
                                </div>
                                <div class="locations-pg__contact-info-wrapper">
                                    <i class="fas fa-phone-alt"></i>
                                    <p class="locations-pg__contact-p"><a class="locations-pg__contact-link" href="tel:<?php the_field('location_telephone_number'); ?>"><?php the_field('location_telephone_number'); ?></a></p>
                                </div>
                                <div class="locations-pg__contact-info-wrapper">
                                    <i class="fas fa-envelope"></i>
                                    <p class="locations-pg__contact-p"><a class="locations-pg__contact-link" href="mailto:<?php the_field('location_email'); ?>"><?php the_field('location_email'); ?></a></p>
                                </div>
								<div class="locations-pg__permalink-container">
									<a class="locations-pg__permalink" href="<?php the_permalink(); ?>">View Details</a>
								</div>
							</div>
						</div>
				<?php endwhile; } ?>
			</div>
		</sectiion>
		<section class="contact services-pg-contact">
			<div class="contact__container">
				<h2 class="contact__heading">Get a Free Counsultation for Your Case.</h2>
				<div class="contact__link-container">
					<a class="contact__link" href="<?php echo site_url('/contact') ?>">Contact Us</a>
				</div>
			</div>
		</section>
	</main>
<?php

get_footer();
