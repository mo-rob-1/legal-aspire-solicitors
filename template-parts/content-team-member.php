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

		<div class="entry-bg-color">
			
		</div>
	</div>

	<div class="team-member-entry-content">

    <div class="team-member-main-profile-overview-wrapper">
        <div class="team-member-profile-img">
        <?php legal_aspire_solicitors_post_thumbnail(); ?>
        </div>
        
        <p class="team-member-profile-overview-desc"><?php the_field('profile_overview'); ?></p>
    </div>

    <div class="team-member-main-content">
        <?php the_content(); ?>
    </div>

    <div class="team-member-icon-wrapper">
        <div class="team-member-icon-item">
            <img class="team-member-icon-img" src="http://legal-aspire-solicitors.local/wp-content/uploads/2021/08/home.png" alt="Building Icon" />
            <h3 class="team-member-icon-heading">Head Office</h3>
            <p class="team-member-icon-text"><?php the_field('profile_overview_address'); ?></p>
        </div>
        <div class="team-member-icon-item">
            <img class="team-member-icon-img" src="http://legal-aspire-solicitors.local/wp-content/uploads/2021/08/letter.png" alt="Letter Icon" />
            <h3 class="team-member-icon-heading">Email</h3>
            <a class="team-member-icon-text" href="mailto:<?php the_field('profile_overview_email'); ?>"><?php the_field('profile_overview_email'); ?></a> 
        </div>
        <div class="team-member-icon-item">
            <img class="team-member-icon-img" src="http://legal-aspire-solicitors.local/wp-content/uploads/2021/08/phone-call.png" alt="Phone Icon" />
            <h3 class="team-member-icon-heading">Phone</h3>
            <a class="team-member-icon-text" href="<?php the_field('profile_overview_contact_number'); ?>"><?php the_field('profile_overview_contact_number'); ?></a>
        </div>
        <div class="team-member-icon-item">
            <img class="team-member-icon-img" src="http://legal-aspire-solicitors.local/wp-content/uploads/2021/08/clock.png" alt="Clock Icon" />
            <h3 class="team-member-icon-heading">Opening Hours</h3>
            <p class="team-member-icon-text">Monday - Friday<br>9am to 5pm</p>
        </div>      
    </div>

    <form class="team-member-form" action="/">
        <h1 class="team-member-contact-us">Contact <?php the_title(); ?></h1>
        <div class="team-member-form-info">
            <div class="team-member-input-wrapper">
                <label class="team-member-form-label" for="fname">First name:</label><br>
                <input class="team-member-form-input" type="text" id="fname" name="fname"><br>
            </div>

            <div class="team-member-input-wrapper">
                <label class="team-member-form-label" for="lname">Last name:</label><br>
                <input class="team-member-form-input" type="text" id="lname" name="lname"><br>
            </div>

            <div class="team-member-input-wrapper">
                <label class="team-member-form-label" for="email">Email:</label><br>
                <input class="team-member-form-input" type="text" name="name">
            </div>

            <div class="team-member-input-wrapper">
                <label class="team-member-form-label" for="email">Number:</label><br>
                <input class="team-member-form-input" type="text" name="name">
            </div>
        </div>

        <div class="team-member-input-wrapper team-member-input-message-wrapper">
            <p class="team-member-message-heading">Message:</p>
            <div class="team-member-textarea">
            <textarea rows="10"></textarea>
            </div>
        </div>

        <button class="team-member-form-submit-btn" type="submit" href="/">Send</button>
      </form>

	</div><!-- .entry-content -->

	<footer class="entry-footer-news-template">
		<?php legal_aspire_solicitors_entry_footer(); ?>
	</footer>
	<!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
