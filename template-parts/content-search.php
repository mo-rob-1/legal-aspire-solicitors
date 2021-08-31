<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Legal_Aspire_Solicitors
 */

?>

<article class="search-container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header-search">
			<?php the_title( sprintf( '<h2 class="entry-title-search"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

			<?php if ( 'post' === get_post_type() ) : ?>
			<?php endif; ?>
		</header><!-- .entry-header -->

		<?php legal_aspire_solicitors_post_thumbnail(); ?>

		<div class="entry-summary-search">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->

</article><!-- #post-<?php the_ID(); ?> -->
