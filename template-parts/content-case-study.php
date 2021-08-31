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
				the_title( '<h1 class="entry-title-case-study heading-background-color">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title-case-study heading-background-color"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>

			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-featured-image-wrapper">
			<?php legal_aspire_solicitors_post_thumbnail(); ?>
		</div>
	</div>

	<div class="entry-content-case-study">

    <div class="case-study-review-container">
        <div class="case-study-intro-col-1">
        <span class="case-study-span">Case</span>
        <h2 class="case-study-overview-heading">Overview</h2>
        <p class="case-study-overview"><?php the_field('case_study_overview'); ?></p>
        <div class="case-study-overview-main-icon-wrapper">
        <div class="case-study-overview-icon-wrapper">
            <div class="case-study-icon-wrapper">
				<img class="case-study-icon" src="http://legal-aspire-solicitors.local/wp-content/uploads/2021/08/user.png" alt="Icon" />
			</div>
            <div class="case-study-text-info-wrapper">
                <h4 class="case-study-solicitor-heading">Solicitor:</h4>
                <p class="case-study-solicitor"><?php the_field('case_study_solicitor'); ?></p>
            </div>
        </div>
        <div class="case-study-overview-icon-wrapper">
            <div class="case-study-icon-wrapper">
				<img class="case-study-icon" src="http://legal-aspire-solicitors.local/wp-content/uploads/2021/08/list.png" alt="Icon" />
			</div>
            <div class="case-study-text-info-wrapper">
                <h4 class="case-study-category-heading">Category:</h4>
                <p class="case-study-category"><?php the_field('case_study_category'); ?></p>
            </div>
        </div>
        <div class="case-study-overview-icon-wrapper">
            <div class="case-study-icon-wrapper">
				<img class="case-study-icon" src="http://legal-aspire-solicitors.local/wp-content/uploads/2021/08/time-left.png" alt="Icon" />
			</div>
            <div class="case-study-text-info-wrapper">
                <h4 class="case-study-time-heading">Time:</h4>
                <p class="case-study-time"><?php the_field('case_study_time'); ?></p>
            </div>
        </div>
        <div class="case-study-overview-icon-wrapper">
            <div class="case-study-icon-wrapper">
				<img class="case-study-icon" src="http://legal-aspire-solicitors.local/wp-content/uploads/2021/08/money.png" alt="Icon" />
			</div>
            <div class="case-study-text-info-wrapper">
                <h4 class="case-study-result-heading">Result:</h4>
                <p class="case-study-result"><?php the_field('case_study_result'); ?></p>
            </div>
        </div>
        </div>
        </div>
        <div class="case-study-overview-img"><?php the_field('case_study_image') ?></div>
    </div>

    <div class="case-study-main-content">
        <?php the_content(); ?>
    </div>

    <div class="case-study-more-cards-container">
        <h2 class="case-study-card-title-main">Other Case Studies</h2>
        <div class="case-study-line"></div>
        <div class="case-study-3-col-wrapper">
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
            </div>
        </div>

	</div><!-- .entry-content -->

	<footer class="entry-footer-news-template">
		<?php legal_aspire_solicitors_entry_footer(); ?>
	</footer>
	<!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
