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
					<p class="experience__desc">Consequat occaecat ullamco amet non eiusmod nostrud dolore irure incididunt est duis anim sunt officia. Fugiat velit proident aliquip nisi incididunt nostrud exercitation proident est nisi. Irure magna elit commodo anim ex veniam culpa eiusmod id nostrud sit cupidatat in veniam ad.</p>
				</div>
			</div>
		</section>

		<section class="counter">
			<div class="counter__container">
				<div class="counter__item-1">
					<p class="counter__number" counter="10000">0</p>
					<h5 class="counter__title">Counter</h5>
				</div>
				<div class="counter__item-2">
					<p class="counter__number" counter="500">0</p>
					<h5 class="counter__title">Counter</h5>
				</div>
				<div class="counter__item-3">
					<p class="counter__number" counter="3000">0</p>
					<h5 class="counter__title">Counter</h5>
				</div>
				<div class="counter__item-4">
					<p class="counter__number" counter="25">0</p>
					<h5 class="counter__title">Counter</h5>
				</div>
				<div class="counter__item-5">
					<p class="counter__number" counter="4000">0</p>
					<h5 class="counter__title">Counter</h5>
				</div>
				<div class="counter__item-6">
					<p class="counter__number" counter="5000">0</p>
					<h5 class="counter__title">Counter</h5>
				</div>
			</div>
		</section>

		<section class="testimonials">
			<div class="testimonials__container">
				<div class="testimonials__item-1">
					<h1>Item 1</h1>
				</div>
				<div class="testimonials__item-2">
					<h1>Item 2</h1>
				</div>
				<div class="testimonials__item-3">
					<h1>Item 3</h1>
				</div>
				<div class="testimonials__item-4">
					<h1>Item 4</h1>
				</div>
				<div class="testimonials__item-5">
					<h1>Item 5</h1>
				</div>
				<div class="testimonials__item-6">
					<h1>Item 6</h1>
				</div>
				<div class="testimonials__item-7">
					<h1>Item 7</h1>
				</div>
				<div class="testimonials__item-8">
					<h1>Item 8</h1>
				</div>
				<div class="testimonials__item-9">
					<h1>Item 9</h1>
				</div>
			</div>
		</section>

		<section class="news">
			<div class="news__container">

			</div>
		</section>
	</main>
<?php

get_footer();
