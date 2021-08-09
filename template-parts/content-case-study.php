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

    <div class="case-study-review-container">
        <span class="case-study-span">Case</span>
        <h2 class="case-study-overview-heading">Overview</h2>
        <p class="case-study-overview"><?php the_field('case_study_overview'); ?></p>
        <div>
            <h3 class="case-study-solicitor-heading">Solicitor</h3>
            <p class="case-study-solicitor"><?php the_field('case_study_solicitor'); ?></p>
        </div>
        <div>
            <h3 class="case-study-category-heading">Category</h3>
            <p class="case-study-category"><?php the_field('case_study_category'); ?></p>
        </div>
        <div>
            <h3 class="case-study-time-heading">Time</h3>
            <p class="case-study-time"><?php the_field('case_study_time'); ?></p>
        </div>
        <div>
            <h3 class="case-study-result-heading">Result</h3>
            <p class="case-study-result"><?php the_field('case_study_result'); ?></p>
        </div>
        <div class="case-study-overview-img"><?php the_field('case_study_image') ?></div>
    </div>

    <div class="case-study-main-content">
        <?php the_content(); ?>
    </div>

    <?php
        $args = array(
            'post_type' => 'case-study',
            'posts_per_page' => 3
        );

        $post_query = new WP_Query($args);

        if($post_query->have_posts() ) {
            while($post_query->have_posts() ) {
                $post_query->the_post();
                ?>
                    <div class="case-study-card">
                        <div class="case-study-card-img-wrapper"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
                            <div class="case-study-card-text-wrapper">
                                <h2 class="case-study-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <p class="case-study-card-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 17); ?></p>
                                <p class="case-study-card-link-wrapper"><a class="case-study-card-link" href="<?php the_permalink(); ?>">Read more</a></p>
                            </div>
                    </div>
                <?php
                    } wp_reset_postdata();
                }
            ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer-news-template">
		<?php legal_aspire_solicitors_entry_footer(); ?>
	</footer>
	<!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
