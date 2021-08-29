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
		<section class="team-pg">

			<div class="team-pg__banner-image-background">
				<div class="team-pg__banner-content">
					<h1 class="team-pg__banner-title">Our Team</h1>
				</div>
			</div>

			<div class="team-pg__text-container">
				<div class="team-pg__text-col-1">
					<p class="team-pg__intro-title">The Legal Team</p>
					<h1 class="team-pg__intro-heading">Our legal experts will provide the best available advice and representation</h1>
				</div>
				<div class="team-pg__text-col-2">
					<p class="team-pg__intro-desc">Sale vivendum senserit an eum, ubique noster ex pro, at vel accommodare ullamcorper. Cu duo minim vocibus menandri, at omittam voluptatum usu. 
					Fabulas docendi iracundia. Lorem ipsum dolor sit amet, ut eius periculis eos, eu mea. Nullam faucibus sodales mi.
					Vivamus nisl lorem, vulputate id pellentesque non, tristique ac leo. Pro id vocent recteque intellegat, pri verear principes incorrupte.</p>
				</div>
			</div>

			<div class="team-pg__container">
				<?php
				if ( have_posts() ) {
					while(have_posts()): the_post();
				?>
						<div class="team-pg__container-item">
                            <div class="team-pg__thumbnail"><?php legal_aspire_solicitors_post_thumbnail(); ?></div>
							<div class="team-pg__card-text-container">
								<p class="team-pg__expertise"><?php the_field('area_of_expertise'); ?></p>
								<h2 class="team-pg__title"><?php the_title(); ?></h2>
								<p class="team-pg__job-role"><?php the_field('job_title'); ?></p>
								<div class="team-pg__socials-container">
									<div class="team-pg__socials-item-one">
										<a href="<?php the_field('linkedin_profile'); ?>" class="team-pg__social-link"><i class="fab fa-linkedin linkedin-profile"></i></a>
									</div>
									<div class="team-pg__socials-item-one">
										<a href="<?php the_field('twitter_profile'); ?>" class="team-pg__social-link"><i class="fab fa-twitter twitter-profile"></i></a>
									</div>
								</div>
								<div class="team-pg__permalink-container">
									<a class="team-pg__permalink" href="<?php the_permalink(); ?>">View Profile</a>
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
					<a class="contact__link" href="#">Contact Us</a>
				</div>
			</div>
		</section>
	</main>
<?php

get_footer();
