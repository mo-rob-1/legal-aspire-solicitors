<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Legal_Aspire_Solicitors
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section class="case-studies-pg">

			<div class="case-studies-pg__banner-image-background">
				<div class="case-studies-pg__banner-content">
					<h1 class="case-studies-pg__banner-title">Case Studies</h1>
				</div>
			</div>

			<div class="case-studies-pg__text-container">
				<div class="case-studies-pg__text-col-1">
					<p class="case-studies-pg__intro-title">Our Recent Case Studies</p>
					<h1 class="case-studies-pg__intro-heading">We can help you in the following practice areas.</h1>
				</div>
				<div class="case-studies-pg__text-col-2">
					<p class="case-studies-pg__intro-desc">Check out some of our recent projects. Professionals with exceptional legal background and years of law expertise.Impressive number of successful law cases in our portfolio is a confirmation of our quality.</p>
				</div>
			</div>

			<div class="case-studies-pg__container">
            <div uk-filter="target: .js-filter">

<ul class="uk-subnav uk-subnav-pill">
    <li class="uk-active" uk-filter-control><a href="#">All</a></li>
    <li uk-filter-control="[data-color='business']"><a href="#">Business</a></li>
    <li uk-filter-control="[data-color='finance']"><a href="#">Finance</a></li>
    <li uk-filter-control="[data-color='injury']"><a href="#">Injury</a></li>
</ul>

<ul class="js-filter uk-child-width-1-2 uk-child-width-1-3@m uk-text-center" uk-grid>
    <li data-color="injury">
        <div class="case-studies-pg__container-item">
            <div class="case-studies-pg__thumbnail"><?php echo get_the_post_thumbnail(171); ?></div>
            <div class="case-studies-pg__card-text-container">
            <h2 class="case-studies-pg__title"><?php echo get_the_title( 171 ); ?></h2>
            <div class="case-studies-pg__excerpt"><?php echo get_the_excerpt(171); ?></div>
            <div class="case-studies-pg__permalink-container">
            <a class="case-studies-pg__permalink" href="<?php echo get_the_permalink(171); ?>">Read more</a>
            </div>
			</div>
		</div>
    </li>
    <li data-color="business">
    <div class="case-studies-pg__container-item">
            <div class="case-studies-pg__thumbnail"><?php echo get_the_post_thumbnail(172); ?></div>
            <div class="case-studies-pg__card-text-container">
            <h2 class="case-studies-pg__title"><?php echo get_the_title( 172 ); ?></h2>
            <div class="case-studies-pg__excerpt"><?php echo get_the_excerpt(172); ?></div>
            <div class="case-studies-pg__permalink-container">
            <a class="case-studies-pg__permalink" href="<?php echo get_the_permalink(172); ?>">Read more</a>
            </div>
			</div>
		</div>
    </li>
    <li data-color="finance">
    <div class="case-studies-pg__container-item">
            <div class="case-studies-pg__thumbnail"><?php echo get_the_post_thumbnail(173); ?></div>
            <div class="case-studies-pg__card-text-container">
            <h2 class="case-studies-pg__title"><?php echo get_the_title( 173 ); ?></h2>
            <div class="case-studies-pg__excerpt"><?php echo get_the_excerpt(173); ?></div>
            <div class="case-studies-pg__permalink-container">
            <a class="case-studies-pg__permalink" href="<?php echo get_the_permalink(173); ?>">Read more</a>
            </div>
			</div>
		</div>
    </li>
    <li data-color="finance">
    <div class="case-studies-pg__container-item">
            <div class="case-studies-pg__thumbnail"><?php echo get_the_post_thumbnail(174); ?></div>
            <div class="case-studies-pg__card-text-container">
            <h2 class="case-studies-pg__title"><?php echo get_the_title( 174 ); ?></h2>
            <div class="case-studies-pg__excerpt"><?php echo get_the_excerpt(174); ?></div>
            <div class="case-studies-pg__permalink-container">
            <a class="case-studies-pg__permalink" href="<?php echo get_the_permalink(171); ?>">Read more</a>
            </div>
			</div>
		</div>
    </li>
</ul>

</div>
			</div>
		</sectiion>
		<section class="contact services-pg-contact">
			<div class="contact__container">
				<h2 class="contact__heading">Get a Free Counsultation for Your Case.</h2>
				<div class="contact__link-container">
					<a class="contact__link" href="#">Contact Us</a>
				</div>
			</div>
		</section>
	</main>
<?php

get_footer();
