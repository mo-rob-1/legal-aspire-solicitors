<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Legal_Aspire_Solicitors
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="col-1">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content-sector', get_post_type() );

				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Prev:', 'legal-aspire-solicitors' ) . '</span> <span class="nav-title">%title</span>',
						'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'legal-aspire-solicitors' ) . '</span> <span class="nav-title">%title</span>',
					)
				);

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</div>
		<div class="col-2">
			<div class="col-2-list-container">
				<h2 class="col-2-title">Sectors</h2>
				<ul class="col-2-list">
					<a class="col-2-link" href="<?php echo site_url('/services/real-estate-law') ?>"><li class="col-2-list-item">Real Estate Law</li></a>
					<a class="col-2-link" href="<?php echo site_url('/services/recruitment-law') ?>"><li class="col-2-list-item">Recruitment Law</li></a>
					<a class="col-2-link" href="<?php echo site_url('/services/healthcare-law') ?>"><li class="col-2-list-item">Healthcare Law</li></a>
					<a class="col-2-link" href="<?php echo site_url('/services/technology-law') ?>"><li class="col-2-list-item">Technology Law</li></a>
					<a class="col-2-link" href="<?php echo site_url('/services/insurance-law') ?>"><li class="col-2-list-item">Insurance Law</li></a>
					<a class="col-2-link" href="<?php echo site_url('/services/retail-law') ?>"><li class="col-2-list-item">Retail Law</li></a>
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
		<section class="contact services-pg-contact">
			<div class="contact__container">
				<h2 class="contact__heading">Get a Free Counsultation for Your Case.</h2>
				<div class="contact__link-container">
					<a class="contact__link" href="#">Contact Us</a>
				</div>
			</div>
		</section>
	</main><!-- #main -->

<?php
get_footer();
