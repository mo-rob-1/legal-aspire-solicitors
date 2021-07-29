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
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>

			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-featured-image-wrapper">
			<?php legal_aspire_solicitors_post_thumbnail(); ?>
		</div>
	</div>

	<div class="entry-content">

				<div class="entry-meta-container">
					<div class="entry-meta">
					<i class="far fa-calendar-alt"></i>
						<?php
						legal_aspire_solicitors_posted_on();
						?>
					</div><!-- .entry-meta -->
					<div class="entry-meta">
					<i class="far fa-user"></i>	
						<?php
						legal_aspire_solicitors_posted_by();
						?>
					</div><!-- .entry-meta -->
				</div>
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
	</div><!-- .entry-content -->

	<footer class="entry-footer-news-template">
		<?php legal_aspire_solicitors_entry_footer(); ?>
	</footer>
	<!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
