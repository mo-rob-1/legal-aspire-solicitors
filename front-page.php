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
			<div class="hero__container">
				<div class="hero__item-one">
					<img src="<?php echo $pictureone; ?>" alt="<?php echo $altone ?>" />
					<h5><?php the_field('subheading_one'); ?></h5>
					<h1><?php the_field('heading_one'); ?></h1>
					<p><?php the_field('description_one'); ?></p>
				</div>
				<div class="hero__item-two">
					<img src="<?php echo $picturetwo; ?>" alt="<?php echo $alttwo ?>" />
					<h5><?php the_field('subheading_two'); ?></h5>
					<h1><?php the_field('heading_two'); ?></h1>
					<p><?php the_field('description_two'); ?></p>
				</div>
				<div class="hero__item-three">
					<img src="<?php echo $picturethree; ?>" alt="<?php echo $altthree ?>" />
					<h5><?php the_field('subheading_three'); ?></h5>
					<h1><?php the_field('heading_three'); ?></h1>
					<p><?php the_field('description_three'); ?></p>
				</div>
				<div class="hero__item-four">
					<img src="<?php echo $picturefour; ?>" alt="<?php echo $altfour ?>" />
					<h5><?php the_field('subheading_four'); ?></h5>
					<h1><?php the_field('heading_four'); ?></h1>
					<p><?php the_field('description_four'); ?></p>
				</div>
			</div>
		</section>

	</main>
<?php

get_footer();
