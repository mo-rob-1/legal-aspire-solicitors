<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Legal_Aspire_Solicitors
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<div class="search-pg__banner-image-background">
					<div class="search-pg__banner-content">
						<h1 class="search-pg__banner-title">
						<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'legal-aspire-solicitors' ), '<span>' . get_search_query() . '</span>' );
						?>
						</h1>
					</div>
				</div>
			</header><!-- .page-header -->
			<div class="search-container-grid">

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content-search', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content-search', 'none' );

		endif;
		?>
		</div>
	</main><!-- #main -->

<?php
get_footer();
