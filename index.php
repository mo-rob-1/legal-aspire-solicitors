<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Legal_Aspire_Solicitors
 */

get_header();
?>
	<main id="primary" class="site-main">
	<section class="news-pg">
	
	<div class="news-pg__banner-image-background">
        <div class="news-pg__banner-content">
            <h1 class="news-pg__banner-title">News</h1>
        </div>
    </div>


	<div>

	<div class="news-pg__column-wrapper">
		<div class="news-pg__column-one">
		<div class="news-pg__container">
			<?php
			if ( have_posts() ) {
				while(have_posts()): the_post();
			?>

		
					<div class="news-pg__container-item">
						<div class="news-pg__thumbnail"><?php legal_aspire_solicitors_post_thumbnail(); ?></div>
						<p class="news-pg__date"><?php legal_aspire_solicitors_posted_on(); ?></p>
						<h2 class="news-pg__title"><?php the_title(); ?></h2>
						<div class="news-pg__excerpt"><?php the_excerpt(); ?></div>
						<a class="news-pg__permalink" href="<?php the_permalink(); ?>">Read more</a>
					</div>
			

			<?php endwhile; } ?>
			</div>

			<nav class="news-pg__pagination"><?php echo paginate_links(); ?></nav>
			</div>

		<div class="news-pg__column-two">
			<?php get_sidebar(); ?>
		</div>

		</div>

		</section>
	</main>

<?php
get_footer();
