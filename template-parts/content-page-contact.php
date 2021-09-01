<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Legal_Aspire_Solicitors
 */

?>

<section class="contact-pg" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="contact-pg__banner-image-background">
			<div class="contact-pg__banner-content">
				<h1 class="contact-pg__banner-title"><?php the_title(); ?></h1>
			</div>
		</div>
	
	<div class="contact-pg__container">
	<div class="contact-pg__item-1-wrapper">
		<div class="contact-pg__intro-wrapper">
			<h2 class="contact-pg__intro-title">We Are Here To Help</h2>
			<p class="contact-pg__intro-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
			Praesentium facere sit enim aliquid non reiciendis porro mollitia veniam soluta, 
			itaque dolores assumenda perspiciatis earum.</p>
			<div class="contact-pg__socials-wrapper">
				<a class="contact-pg__social-icon" href="#"><i class="fab fa-twitter"></i></a>
				<a class="contact-pg__social-icon" href="#"><i class="fab fa-instagram"></i></a>
				<a class="contact-pg__social-icon" href="#"><i class="fab fa-facebook-f"></i></a>
			</div>
		</div>

		<div class="contact-pg__2-col">
			<div class="contact-pg__form-wrapper">
				<form class="contact-pg__form" action="/">
					<div class="contact-pg__form-info">
						<div class="contact-pg__input-wrapper">
							<label class="contact-pg__form-label" for="fname">First name:</label><br>
							<input class="contact-pg__form-input" type="text" id="fname" name="fname"><br>
						</div>

						<div class="contact-pg__input-wrapper">
							<label class="contact-pg__form-label" for="lname">Last name:</label><br>
							<input class="contact-pg__form-input" type="text" id="lname" name="lname"><br>
						</div>

						<div class="contact-pg__input-wrapper">
							<label class="contact-pg__form-label" for="email">Email:</label><br>
							<input class="contact-pg__form-input" type="text" name="email">
						</div>
					</div>

					<div class="contact-pg__input-wrapper contact-pg__input-message-wrapper">
						<p class="contact-pg__message-heading">Message:</p>
						<div class="contact-pg__textarea">
						<textarea rows="10"></textarea>
						</div>
					</div>

					<button class="contact-pg__form-submit-btn" type="submit" href="/">Send Message</button>
				</form>
			</div>

			<div class="col-2-contact-container">
					<div class="col-2-item-wrapper">
						<div class="col-2-item-one">
						<i class="fas fa-map-marker-alt"></i>
						</div>
						<div class="col-2-item-two">
							<span class="col-2-item-span">Address</span>
							<p class="col-2-text col-2-text-address">64 Litigation Street, London, LE1 4NE</p>
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

	<div class="contact-pg__item-2-wrapper">
	<h2 class="contact-pg__item-2-heading">Our Offices</h2>
	<div class="contact-pg__line"></div>

	<div class="contact-pg__cards-container">
        <?php
            $args = array(
                'post_type' => 'location'
            );

            $post_query = new WP_Query($args);

            if($post_query->have_posts() ) {
                while($post_query->have_posts() ) {
                    $post_query->the_post();
                    ?>
                        <div class="contact-pg__card">
                            <a href="<?php the_permalink(); ?>"><div class="contact-pg__card-img-wrapper"><?php the_post_thumbnail(); ?></div></a>
                                <div class="contact-pg__card-text-wrapper">
									<div class="contact-pg__card-text-container">
									<a class="contact-pg__title-link" href="<?php the_permalink(); ?>"><h2 class="contact-pg__title"><?php the_title(); ?></h2></a>
									<div class="contact-pg__contact-info-wrapper">
										<i class="fas fa-map-marker-alt"></i>
										<p class="contact-pg__contact-address-p"><?php the_field('location_address'); ?></p>
									</div>
									<div class="contact-pg__contact-info-wrapper">
										<i class="fas fa-phone-alt"></i>
										<p class="contact-pg__contact-p"><a class="contact-pg__contact-link" href="tel:<?php the_field('location_telephone_number'); ?>"><?php the_field('location_telephone_number'); ?></a></p>
									</div>
									<div class="contact-pg__contact-info-wrapper">
										<i class="fas fa-envelope"></i>
										<p class="contact-pg__contact-p"><a class="contact-pg__contact-link" href="mailto:<?php the_field('location_email'); ?>"><?php the_field('location_email'); ?></a></p>
									</div>
									</div>
                                </div>
                        </div>
                    <?php
                        } wp_reset_postdata();
                    }
            ?>
        </div>
	</div>

	</div>
</section><!-- #post-<?php the_ID(); ?> -->
