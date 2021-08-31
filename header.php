<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body>
<header class="header">
	<div class="header__container">
		<div class="header__banner">
			<a class="header__social-icon" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
			<a class="header__social-icon" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
			<a class="header__social-icon" href="https://en-gb.facebook.com/"><i class="fab fa-facebook-f"></i></a>
		</div>

    <div id="offcanvas-nav-primary" uk-offcanvas="overlay: true">
        <div class="uk-offcanvas-bar uk-flex uk-flex-column">

            <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
                <li class="uk-active"><a href="<?php echo home_url(); ?>">Home</a></li>
                <li class="uk-parent">
                    <a href="<?php echo site_url('/about-us') ?>">About Us</a>
                    <ul class="uk-nav-sub">
                        <li><a href="<?php echo site_url('/our-team') ?>">Our Team</a></li>
                        <li><a href="<?php echo site_url('/case-studies') ?>">Case Studies</a></li>
                        <li><a href="<?php echo site_url('/locations') ?>">Locations</a></li>
                    </ul>
                </li>
                <li class="uk-parent">
                    <a href="<?php echo site_url('/services') ?>">Services</a>
                </li>
                <li class="uk-parent">
                    <a href="<?php echo site_url('/sectors') ?>">Sectors</a>
                </li>
                <li class="uk-active"><a href="<?php echo site_url('/news') ?>">News</a></li>
                <li class="uk-active"><a href="<?php echo site_url('/contact') ?>">Contact</a></li>
            </ul>

        </div>
    </div>

		<div class="header__wrapper-mobile">
        <div class="header__logo-wrapper">
		      <a class="header__logo-link" href="<?php echo home_url(); ?>">Legal Aspire Solicitors</a>
        </div>

        <button class="uk-button uk-button-default uk-margin-small-right hamburger-icon-uikit" type="button" uk-toggle="target: #offcanvas-nav-primary" aria-label="Button"><i class="fas fa-bars"></i></button>

        <nav class="header__nav show-nav">
          <ul class="header__nav-list">
            <li class="header__nav-list-item"><a class="header__nav-link" href="<?php echo home_url(); ?>">Home</a></li>
            <li class="header__nav-list-item"><a class="header__nav-link" href="<?php echo site_url('/about-us') ?>">About Us</a></li>
            <li class="header__nav-list-item"><a class="header__nav-link" href="<?php echo site_url('/services') ?>">Services</a></li>
            <li class="header__nav-list-item"><a class="header__nav-link" href="<?php echo site_url('/sectors') ?>">Sectors</a></li>
            <li class="header__nav-list-item"><a class="header__nav-link" href="<?php echo site_url('/news') ?>">News</a></li>
            <li class="header__nav-list-item"><a class="header__nav-link" href="<?php echo site_url('/contact') ?>">Contact</a></li>
          </ul>
        </nav>
      </div>
	</div>
</header>	
