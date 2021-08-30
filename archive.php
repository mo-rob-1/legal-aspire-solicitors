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
		<section class="archive-pg">

			<div class="archive-pg__banner-image-background">
				<div class="archive-pg__banner-content">
					<h1 class="archive-pg__banner-title">
						<?php
							the_archive_title( '<h1 class="page-title-archive">', '</h1>' );
							the_archive_description( '<div class="archive-description">', '</div>' );
						?>
					</h1>
				</div>
			</div>

			<div class="archive-pg__container">
				<?php
				if ( have_posts() ) {
					while(have_posts()): the_post();
				?>
						<div class="archive-pg__container-item">
							<div class="archive-pg__img"><?php the_post_thumbnail(); ?></div>
							<div class="archive-pg__text-container">
								<h2 class="archive-pg__title"><?php the_title(); ?></h2>
								<div class="archive-pg__excerpt"><?php the_excerpt(); ?></div>
								<div class="archive-pg__permalink-container">
									<a class="archive-pg__permalink" href="<?php the_permalink(); ?>">Read more</a>
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
