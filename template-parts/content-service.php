<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Legal_Aspire_Solicitors
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-top-wrapper">
		<header class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title-custom">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title-custom"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>

			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-featured-image-wrapper">
			<?php legal_aspire_solicitors_post_thumbnail(); ?>
		</div>
	</div>

	<div class="entry-content entry-content-service">
		<div class="entry-content-service-left">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'legal-aspire-solicitors' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'legal-aspire-solicitors' ),
				'after'  => '</div>',
			)
		);
		?>
		</div>

		<div class="col-2-service">
			<div class="col-2-list-container">
				<h2 class="col-2-title">Services</h2>
				<ul class="col-2-list">
					<a class="col-2-link" href="<?php echo site_url('/services/pensions') ?>"><li class="col-2-list-item">Pensions</li></a>
					<a class="col-2-link" href="<?php echo site_url('/services/immigration') ?>"><li class="col-2-list-item">Immigration</li></a>
					<a class="col-2-link" href="<?php echo site_url('/services/family') ?>"><li class="col-2-list-item">Family</li></a>
					<a class="col-2-link" href="<?php echo site_url('/services/property') ?>"><li class="col-2-list-item">Property</li></a>
					<a class="col-2-link" href="<?php echo site_url('/services/medical-negligence') ?>"><li class="col-2-list-item">Medical Negligence</li></a>
					<a class="col-2-link" href="<?php echo site_url('/services/personal-injury') ?>"><li class="col-2-list-item">Personal Injury</li></a>
					<a class="col-2-link" href="<?php echo site_url('/services/employment') ?>"><li class="col-2-list-item">Employment</li></a>
				</ul>
			</div>
			<div class="col-2-container">
				<h2 class="col-2-title">Contact</h2>
				<div class="col-2-contact-container">
					<div class="col-2-item-wrapper">
						<div class="col-2-item-one">
						<i class="fas fa-map-marker-alt"></i>
						</div>
						<div class="col-2-item-two">
							<span class="col-2-item-span">Address</span>
							<p class="col-2-text">64 Litigation Street, London, LE1 4NE</p>
						</div>
					</div>

					<div class="col-2-item-wrapper">
						<div class="col-2-item-one">
						<i class="fas fa-phone-alt"></i>
						</div>
						<div class="col-2-item-two">
							<span class="col-2-item-span">Phone</span>
							<a class="col-2-text col-2-link" href="tel:0800001234">0800 00 1234</a>
						</div>
					</div>

					<div class="col-2-item-wrapper">
						<div class="col-2-item-one">
						<i class="fas fa-envelope"></i>
						</div>
						<div class="col-2-item-two">
							<span class="col-2-item-span">Email</span>
							<a class="col-2-text col-2-link" href="mailto:info@Legalaspiresolicitors.com">info@legalaspiresolicitors.com</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer-news-template">
		<?php legal_aspire_solicitors_entry_footer(); ?>
	</footer>
	<!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
