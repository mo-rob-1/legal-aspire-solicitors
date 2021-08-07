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
			<a class="header__social-icon" href="#"><i class="fab fa-twitter"></i></a>
			<a class="header__social-icon" href="#"><i class="fab fa-instagram"></i></a>
			<a class="header__social-icon" href="#"><i class="fab fa-facebook-f"></i></a>
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
                <!-- <ul class="uk-nav-sub">
                    <li><a href="<?php echo site_url('/services/personal-injury') ?>">Personal Injury</a></li>
                    <li><a href="<?php echo site_url('/services/medical-negligence') ?>">Medical Negligence</a></li>
                    <li><a href="<?php echo site_url('/services/employment') ?>">Employment</a></li>
                    <li><a href="<?php echo site_url('/services/property') ?>">Property</a></li>
                    <li><a href="<?php echo site_url('/services/family') ?>">Family</a></li>
                    <li><a href="<?php echo site_url('/services/immigration') ?>">Immigration</a></li>
                    <li><a href="<?php echo site_url('/services/pensions') ?>">Pensions</a></li>
                </ul> -->
            </li>
            <li class="uk-parent">
                <a href="<?php echo site_url('/services') ?>">Sectors</a>
                <!-- <ul class="uk-nav-sub">
                    <li><a href="<?php echo site_url('/sectors/real-estate-law') ?>">Real Estate Law</a></li>
                    <li><a href="<?php echo site_url('/sectors/recruitment-law') ?>">Recruitment Law</a></li>
                    <li><a href="<?php echo site_url('/sectors/healthcare-law') ?>">Healthcare Law</a></li>
                    <li><a href="<?php echo site_url('/sectors/technology-law') ?>">Technology Law</a></li>
                    <li><a href="<?php echo site_url('/sectors/insurance-law') ?>">Insurance Law</a></li>
                    <li><a href="<?php echo site_url('/sectors/retail-law') ?>">Retail Law</a></li>
                </ul> -->
            </li>
            <li class="uk-active"><a href="<?php echo site_url('/news') ?>">News</a></li>
            <li class="uk-active"><a href="<?php echo site_url('/contact') ?>">Contact</a></li>
        </ul>

    </div>
</div>

		<div class="header__wrapper-mobile">
        <div class="header__logo-wrapper">
          <!-- <a class="header__logo-link" href="#"><img class="header__logo" src="images/logo.svg" alt="Legal Aspire Solicitors" /></a> -->
		      <a class="header__logo-link" href="<?php echo home_url(); ?>">Legal Aspire Solicitors</a>
        </div>

        <!-- <div class="header__hamburger-wrapper">
          <button id="toggle_btn" class="hamburger hamburger--squeeze js-hamburger menu-icon" type="button">
              <span class="hamburger-box">
              <span class="hamburger-inner"></span>
              </span>
          </button>
        </div> -->

        <button class="uk-button uk-button-default uk-margin-small-right hamburger-icon-uikit" type="button" uk-toggle="target: #offcanvas-nav-primary"><i class="fas fa-bars"></i></button>
      </div>

      <!-- <div class="clk"><a href="javascript:void"><i class="fa fa-plus-circle"></i>some text</a><div> -->

        <nav class="header__nav show-nav">
          <ul class="header__nav-list">
            <li class="header__nav-list-item"><a class="header__nav-link" href="#">Home</a></li>
            <li class="header__nav-list-item clk" id="toggle_submenu-three"><div class="header__submenu-item-container"><div class="header__submenu-item header__services"><a class="header__nav-link" href="<?php echo site_url('/about-us') ?>">About Us</a></div> <div class="header__submenu-item"><i class="fas fa-chevron-down"></div></div></i>
              <ul class="header__submenu-dropdown header__nav-4 show-nav-4">
                  <li class="header__nav-list-item">
                    <a class="header__nav-link" href="<?php echo site_url('/our-team') ?>">Our Team</a>
                  </li>
                  <li class="header__nav-list-item">
                    <a class="header__nav-link" href="<?php echo site_url('/case-studies') ?>">Case Studies</a>
                  </li>
                  <li class="header__nav-list-item">
                    <a class="header__nav-link" href="<?php echo site_url('/locations') ?>">Locations</a>
                  </li>
                </ul>
			      </li>
            <li class="header__nav-list-item clk" id="toggle_submenu"><div class="header__submenu-item-container"><div class="header__submenu-item header__services"><a class="header__nav-link" href="<?php echo site_url('/services') ?>">Services</a></div> <div class="header__submenu-item"><i class="fas fa-chevron-down"></div></div></i>
              <ul class="header__submenu-dropdown header__nav-2 show-nav-2">
                  <li class="header__nav-list-item">
                    <a class="header__nav-link" href="<?php echo site_url('/services/personal-injury') ?>">Personal Injury</a>
                  </li>
                  <li class="header__nav-list-item">
                    <a class="header__nav-link" href="<?php echo site_url('/services/medical-negligence') ?>">Medical Negligence</a>
                  </li>
                  <li class="header__nav-list-item">
                    <a class="header__nav-link" href="<?php echo site_url('/services/employment') ?>">Employment</a>
                  </li>
                  <li class="header__nav-list-item">
                    <a class="header__nav-link" href="<?php echo site_url('/services/property') ?>">Property</a>
                  </li>
                  <li class="header__nav-list-item">
                    <a class="header__nav-link" href="<?php echo site_url('/services/family') ?>">Family</a>
                  </li>
                  <li class="header__nav-list-item">
                    <a class="header__nav-link" href="<?php echo site_url('/services/immigration') ?>">Immigration</a>
                  </li>
                  <li class="header__nav-list-item">
                    <a class="header__nav-link" href="<?php echo site_url('/services/pensions') ?>">Pensions</a>
                  </li>
                </ul>
			      </li>
            <li class="header__nav-list-item clk" id="toggle_submenu-two"><div class="header__submenu-item-container"><div class="header__submenu-item header__services"><a class="header__nav-link" href="<?php echo site_url('/sectors') ?>">Sectors</a></div> <div class="header__submenu-item"><i class="fas fa-chevron-down"></div></div></i>
              <ul class="header__submenu-dropdown header__nav-3 show-nav-3">
                  <li class="header__nav-list-item">
                    <a class="header__nav-link" href="<?php echo site_url('/sectors/real-estate-law') ?>">Real Estate Law</a>
                  </li>
                  <li class="header__nav-list-item">
                    <a class="header__nav-link" href="<?php echo site_url('/sectors/recruitment-law') ?>">Recruitment Law</a>
                  </li>
                  <li class="header__nav-list-item">
                    <a class="header__nav-link" href="<?php echo site_url('/sectors/healthcare-law') ?>">Healthcare Law</a>
                  </li>
                  <li class="header__nav-list-item">
                    <a class="header__nav-link" href="<?php echo site_url('/sectors/technology-law') ?>">Technology Law</a>
                  </li>
                  <li class="header__nav-list-item">
                    <a class="header__nav-link" href="<?php echo site_url('/sectors/insurance-law') ?>">Insurance Law</a>
                  </li>
                  <li class="header__nav-list-item">
                    <a class="header__nav-link" href="<?php echo site_url('/sectors/retail-law') ?>">Retail Law</a>
                  </li>
                </ul>
			      </li>
            <li class="header__nav-list-item"><a class="header__nav-link" href="<?php echo site_url('/news') ?>">News</a></li>
            <li class="header__nav-list-item"><a class="header__nav-link" href="#">Contact</a></li>
          </ul>
        </nav>
        <div class="header__number-wrapper">
        	<a class="header__number" href="tel:0800000000">0800 00 0000</a>
        </div>
	</div>
</header>	
