<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Legal_Aspire_Solicitors
 */

$imageone = get_field('image_one');
$pictureone = $imageone['sizes']['large'];
$altone = $imageone['alt'];

$imagetwo = get_field('image_two');
$picturetwo = $imagetwo['sizes']['large'];
$alttwo = $imagetwo['alt'];

$imagethree = get_field('image_three');
$picturethree = $imagethree['sizes']['large'];
$altthree = $imagethree['alt'];

$imagefour = get_field('image_four');
$picturefour = $imagefour['sizes']['large'];
$altfour = $imagefour['alt'];

get_header();
?>
	<main>
		<section class="hero">
			<div class="hero__container carousel" data-flickity='{"autoPlay": true, "wrapAround": true}'>
				<div class="hero__item-one carousel-cell">
					<h5 class="hero__item-subheading"><?php the_field('subheading_one'); ?></h5>
					<h1 class="hero__item-heading"><?php the_field('heading_one'); ?></h1>
					<p class="hero__item-desc"><?php the_field('description_one'); ?></p>
					<div class="hero__item-link-container">
						<a href="<?php the_field('link__url_one'); ?>" class="hero__item-link"><?php the_field('link_name_one'); ?></a>
					</div>
				</div>
				<div class="hero__item-two carousel-cell">
					<h5 class="hero__item-subheading"><?php the_field('subheading_two'); ?></h5>
					<h1 class="hero__item-heading"><?php the_field('heading_two'); ?></h1>
					<p class="hero__item-desc"><?php the_field('description_two'); ?></p>
					<div class="hero__item-link-container">
						<a href="<?php the_field('link__url_two'); ?>" class="hero__item-link"><?php the_field('link_name_two'); ?></a>
					</div>
				</div>
				<div class="hero__item-three carousel-cell">
					<h5 class="hero__item-subheading"><?php the_field('subheading_three'); ?></h5>
					<h1 class="hero__item-heading"><?php the_field('heading_three'); ?></h1>
					<p class="hero__item-desc"><?php the_field('description_three'); ?></p>
					<div class="hero__item-link-container">
						<a href="<?php the_field('link__url_three'); ?>" class="hero__item-link"><?php the_field('link_name_three'); ?></a>
					</div>
				</div>
				<div class="hero__item-four carousel-cell">
					<h5 class="hero__item-subheading"><?php the_field('subheading_four'); ?></h5>
					<h1 class="hero__item-heading"><?php the_field('heading_four'); ?></h1>
					<p class="hero__item-desc"><?php the_field('description_four'); ?></p>
					<div class="hero__item-link-container">
						<a href="<?php the_field('link__url_four'); ?>" class="hero__item-link"><?php the_field('link_name_four'); ?></a>
					</div>
				</div>
			</div>
		</section>

		<section class="contact">
			<div class="contact__container">
				<h2 class="contact__heading">Get a Free Counsultation for Your Case.</h2>
				<div class="contact__link-container">
					<a class="contact__link" href="#">Contact Us</a>
				</div>
			</div>
		</section>

		<section class="services">
			<div class="services__container">

			<div class="services__text-container">
				<div class="services__text-col-1">
					<h5 class="services__title">Our Services</h5>
					<h1 class="services__heading">Reputation. Respect. Result.</h1>
					<div class="services__line"></div>
				</div>
				<div class="services__text-col-2">
					<p class="services__desc">We offer the best legal services in the world. We are a small team of highly qualified professionals who are dedicated to providing the best legal advice and services to our clients. Consequat occaecat ullamco amet non eiusmod nostrud dolore irure incididunt est duis anim sunt officia. Fugiat velit proident aliquip nisi incididunt nostrud exercitation proident est nisi. Irure magna elit commodo anim ex veniam culpa eiusmod id nostrud sit cupidatat in veniam ad.</p>
				</div>
			</div>

			<div class="services__item-container">
				<div class="services__item-1">
					<div class="services__item-image-wrapper">
						<img class="services__item-image" src="http://legal-aspire-solicitors.local/wp-content/uploads/2021/07/pexels-sora-shimazaki-5668473.jpg" alt="Image" />
					</div>
					<div class="services__item-text-content">
						<h3 class="services__item-title">Personal Injury</h3>
					</div>
				</div>
				<div class="services__item-2">
					<div class="services__item-image-wrapper">
						<img class="services__item-image" src="http://legal-aspire-solicitors.local/wp-content/uploads/2021/07/pexels-sora-shimazaki-5668473.jpg" alt="Image" />
					</div>
					<div class="services__item-text-content">
						<h3 class="services__item-title">Medical Negligence</h3>
					</div>
				</div>					
				<div class="services__item-3">
					<div class="services__item-image-wrapper">
						<img class="services__item-image" src="http://legal-aspire-solicitors.local/wp-content/uploads/2021/07/pexels-sora-shimazaki-5668473.jpg" alt="Image" />
					</div>
					<div class="services__item-text-content">
						<h3 class="services__item-title">Employment</h3>
					</div>
				</div>
				<div class="services__item-4">
					<div class="services__item-image-wrapper">
						<img class="services__item-image" src="http://legal-aspire-solicitors.local/wp-content/uploads/2021/07/pexels-sora-shimazaki-5668473.jpg" alt="Image" />
					</div>
					<div class="services__item-text-content">
						<h3 class="services__item-title">Property</h3>
					</div>
				</div>
				<div class="services__item-5">
					<div class="services__item-image-wrapper">
						<img class="services__item-image" src="http://legal-aspire-solicitors.local/wp-content/uploads/2021/07/pexels-sora-shimazaki-5668473.jpg" alt="Image" />
					</div>
					<div class="services__item-text-content">
						<h3 class="services__item-title">Family</h3>
					</div>
				</div>
				<div class="services__item-6">
					<div class="services__item-image-wrapper">
						<img class="services__item-image" src="http://legal-aspire-solicitors.local/wp-content/uploads/2021/07/pexels-sora-shimazaki-5668473.jpg" alt="Image" />
					</div>
					<div class="services__item-text-content">
						<h3 class="services__item-title">Immigration</h3>
					</div>
				</div>
			</div>

			</div>
		</section>

		<section class="experience">
			<div class="experience__container">	
				<div class="experience__img-container">
					<img class="experience__img" src="http://legal-aspire-solicitors.local/wp-content/uploads/2021/07/pexels-sora-shimazaki-5668473.jpg" alt="Image" />
				</div>
				<div class="experience__text-container">
					<h5 class="experience__title">Why Choose Us</h5>
					<h1 class="experience__heading">15 Years of Experience</h1>
					<div class="experience__line"></div>
					<p class="experience__desc">Consequat occaecat ullamco amet non eiusmod nostrud dolore irure incididunt est duis anim sunt officia. Fugiat velit proident aliquip nisi incididunt nostrud exercitation proident est nisi. Irure magna elit commodo anim ex veniam culpa eiusmod id nostrud sit cupidatat in veniam ad.</p>
				</div>
			</div>
		</section>

		<section class="counter">
			<div class="counter__container">
				<!-- <div class="counter__item-1">
					<p class="counter__number">500+</p>
					<h5 class="counter__title">Happy Clients</h5>
				</div>
				<div class="counter__item-2">
					<p class="counter__number">$2.5m</p>
					<h5 class="counter__title">Won Cases</h5>
				</div> -->
				<div class="counter__item-3">
					<p class="counter__number">20</p>
					<h5 class="counter__title">Years in Business</h5>
				</div>
				<div class="counter__item-4">
					<p class="counter__number">5th</p>
					<h5 class="counter__title">Top UK Law Firm</h5>
				</div>
				<div class="counter__item-5">
					<p class="counter__number">9</p>
					<h5 class="counter__title">Attorneys</h5>
				</div>
				<div class="counter__item-6">
					<p class="counter__number">8</p>
					<h5 class="counter__title">Locations</h5>
				</div>
			</div>
		</section>
		
		<section class="solicitors">
			<div class="solicitors__container">
			<div class="solicitors__heading-wrapper">
				<h5 class="solicitors__intro-heading">Meet Our Experts</h5>
				<h1 class="solicitors__main-heading">Our Solicitors</h1>
				<div class="solicitors__line-wrapper">
					<div class="solicitors__line"></div>
				</div>
			</div>
			<div class="solicitors__card-container">
				<?php
					$args = array(
						'post_type' => 'our-team',
						'posts_per_page' => 4
					);

					$post_query = new WP_Query($args);

					if($post_query->have_posts() ) {
						while($post_query->have_posts() ) {
							$post_query->the_post();
							?>
								<div class="solicitors__card">
									<div class="solicitors__card-img"><?php the_post_thumbnail(); ?></div>
										<div class="solicitors__name-info-wrapper">
											<h3 class="solicitors__card-name"><a class="solicitors__card-name-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
											<p class="solicitors__card-title"><?php the_field('job_title'); ?></p>
										</div>
								</div>
							<?php
								} wp_reset_postdata();
							}
				?>
			</div>
			<div class="solicitors__btn-wrapper">
				<a class="solicitors__btn" href="<?php echo site_url('/our-team') ?>">View All Solicitors</a>
			</div>
			</div>
		</section>

		<!-- <section class="testimonials">
			<h1 class="testimonials__heading">Testimonials</h1>
			<div class="testimonials__line-container">
				<div class="testimonials__line"></div>
			</div>
						<span class="span"><i class="fas fa-chevron-left"></i></span>
						<span class="span"><i class="fas fa-chevron-right"></i></span>
			<div class="testimonials__container">
				<div class="testimonials__item-1 testimonials__item">
					<h3 class="testimonials__summary"><?php the_field('summary_one'); ?></h3>
					<i class="fas fa-quote-left"></i>
					<p class="testimonials__review"><?php the_field('review_one'); ?></p>
					<h4 class="testimonials__name"><?php the_field('name_one'); ?></h4>
				</div>
				<div class="testimonials__item-2 testimonials__item">
					<h3 class="testimonials__summary"><?php the_field('summary_two'); ?></h3>
					<i class="fas fa-quote-left"></i>
					<p class="testimonials__review"><?php the_field('review_two'); ?></p>
					<h4 class="testimonials__name"><?php the_field('name_two'); ?></h4>
				</div>
				<div class="testimonials__item-3 testimonials__item">
					<h3 class="testimonials__summary"><?php the_field('summary_three'); ?></h3>
					<i class="fas fa-quote-left"></i>
					<p class="testimonials__review"><?php the_field('review_three'); ?></p>
					<h4 class="testimonials__name"><?php the_field('name_three'); ?></h4>
				</div>
				<div class="testimonials__item-4 testimonials__item">
					<h3 class="testimonials__summary"><?php the_field('summary_four'); ?></h3>
					<i class="fas fa-quote-left"></i>
					<p class="testimonials__review"><?php the_field('review_four'); ?></p>
					<h4 class="testimonials__name"><?php the_field('name_four'); ?></h4>
				</div>
				<div class="testimonials__item-5 testimonials__item">
					<h3 class="testimonials__summary"><?php the_field('summary_five'); ?></h3>
					<i class="fas fa-quote-left"></i>
					<p class="testimonials__review"><?php the_field('review_five'); ?></p>
					<h4 class="testimonials__name"><?php the_field('name_five'); ?></h4>
				</div>
				<div class="testimonials__item-6 testimonials__item">
					<h3 class="testimonials__summary"><?php the_field('summary_six'); ?></h3>
					<i class="fas fa-quote-left"></i>
					<p class="testimonials__review"><?php the_field('review_six'); ?></p>
					<h4 class="testimonials__name"><?php the_field('name_six'); ?></h4>
				</div>
				<div class="testimonials__item-6 testimonials__item">
					<h3 class="testimonials__summary"><?php the_field('summary_six'); ?></h3>
					<i class="fas fa-quote-left"></i>
					<p class="testimonials__review"><?php the_field('review_six'); ?></p>
					<h4 class="testimonials__name"><?php the_field('name_six'); ?></h4>
				</div>
				<div class="testimonials__item-6 testimonials__item">
					<h3 class="testimonials__summary"><?php the_field('summary_six'); ?></h3>
					<i class="fas fa-quote-left"></i>
					<p class="testimonials__review"><?php the_field('review_six'); ?></p>
					<h4 class="testimonials__name"><?php the_field('name_six'); ?></h4>
				</div>
				<div class="testimonials__item-6 testimonials__item">
					<h3 class="testimonials__summary"><?php the_field('summary_six'); ?></h3>
					<i class="fas fa-quote-left"></i>
					<p class="testimonials__review"><?php the_field('review_six'); ?></p>
					<h4 class="testimonials__name"><?php the_field('name_six'); ?></h4>
				</div>
				<div class="testimonials__item-6 testimonials__item">
					<h3 class="testimonials__summary"><?php the_field('summary_six'); ?></h3>
					<i class="fas fa-quote-left"></i>
					<p class="testimonials__review"><?php the_field('review_six'); ?></p>
					<h4 class="testimonials__name"><?php the_field('name_six'); ?></h4>
				</div>
				<div class="testimonials__item-6 testimonials__item">
					<h3 class="testimonials__summary"><?php the_field('summary_six'); ?></h3>
					<i class="fas fa-quote-left"></i>
					<p class="testimonials__review"><?php the_field('review_six'); ?></p>
					<h4 class="testimonials__name"><?php the_field('name_six'); ?></h4>
				</div>
				<div class="testimonials__item-6 testimonials__item">
					<h3 class="testimonials__summary"><?php the_field('summary_six'); ?></h3>
					<i class="fas fa-quote-left"></i>
					<p class="testimonials__review"><?php the_field('review_six'); ?></p>
					<h4 class="testimonials__name"><?php the_field('name_six'); ?></h4>
				</div>
			</div>
		</section> -->

		<section class="news">
		
		<h1 class="news__heading">Latest News</h1>
			<div class="news__line-container">
				<div class="news__line"></div>
			</div>

			<div class="news__container">
	
	<?php
    $args = array(
        'post_type' => 'post',
		'posts_per_page' => '3',
    );

    $post_query = new WP_Query($args);

    if($post_query->have_posts() ) {
        while($post_query->have_posts() ) {
            $post_query->the_post();
            ?>
			<div class="news__card">
				<div class="news__date-wrapper">
					<div class="news__day"><?php echo get_the_date('d'); ?></div>
					<div class="news__month"><?php echo get_the_date('M'); ?></div>
				</div>
				<div class="news__featured-img"><?php the_post_thumbnail(); ?></div>
				<div class="news__text-container">
					<p class="news__author">By <?php the_author(); ?></p>
					<h2 class="news__title"><?php the_title(); ?></h2>
					<div class="news__excerpt"><?php the_excerpt(); ?></div>
					<a class="news__link" href="<?php the_permalink(); ?>">Read more</a>
				</div>
			</div>
            <?php
            }
        }
	?>
			</div>
		</section>
	</main>
<?php

get_footer();
