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

    <div class="location-col-wrapper">
        <div class="location-img-col-1">
            <?php legal_aspire_solicitors_post_thumbnail(); ?>
        </div>

        <div class="location-col-2">

            <div class="location-icon-wrapper">  
                <i class="fas fa-map-marker-alt location-icon"></i>
                <p class="location-address"><?php the_field('location_address'); ?></p>
            </div>  
            <div class="location-icon-wrapper">
                <i class="fas fa-phone-alt location-icon"></i> 
                <p class="locations-pg__contact-p"><a class="locations-pg__contact-link" href="tel:<?php the_field('location_telephone_number'); ?>"><?php the_field('location_telephone_number'); ?></a></p>
            </div>
            <div class="location-icon-wrapper">
                <i class="fas fa-envelope location-icon"></i>
                <p class="locations-pg__contact-p"><a class="locations-pg__contact-link" href="mailto:<?php the_field('location_email'); ?>"><?php the_field('location_email'); ?></a></p>
            </div>
            <div class="location-socials-wrapper">
                <a href="#" class="location__social-link"><i class="fab fa-twitter twitter-location"></i></a>
                <a href="#" class="location__social-link"><i class="fab fa-linkedin linkedin-location"></i></a>
            </div>
        </div>
    </div>

    <div class="location-main-content">
        <?php the_content(); ?>
    </div>

    </div><!-- .entry-content -->

    <div class="location-map">
        <?php the_field('location_map'); ?>
    </div>

    <div class="entry-content">

        <form class="location-form" action="/">
        <h1 class="location-contact-us">Contact Us</h1>
        <div class="location-form-info">
            <div class="location-input-wrapper">
                <label class="location-form-label" for="fname">First name:</label><br>
                <input class="location-form-input" type="text" id="fname" name="fname"><br>
            </div>

            <div class="location-input-wrapper">
                <label class="location-form-label" for="lname">Last name:</label><br>
                <input class="location-form-input" type="text" id="lname" name="lname"><br>
            </div>

            <div class="location-input-wrapper">
                <label class="location-form-label" for="email">Email:</label><br>
                <input class="location-form-input" type="text" name="name">
            </div>

            <div class="location-input-wrapper">
                <label class="location-form-label" for="email">Number:</label><br>
                <input class="location-form-input" type="text" name="name">
            </div>
        </div>

        <div class="location-input-wrapper location-input-message-wrapper">
            <p class="location-message-heading">Message:</p>
            <div class="location-textarea">
            <textarea rows="10"></textarea>
            </div>
        </div>

        <button class="location-form-submit-btn" type="submit" href="/">Send</button>
      </form>

    </div>

	<footer class="entry-footer-news-template">
		<?php legal_aspire_solicitors_entry_footer(); ?>
	</footer>
	<!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
