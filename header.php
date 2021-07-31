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
		<div class="header__wrapper-mobile">
        <div class="header__logo-wrapper">
          <!-- <a class="header__logo-link" href="#"><img class="header__logo" src="images/logo.svg" alt="Legal Aspire Solicitors" /></a> -->
		      <a class="header__logo-link" href="<?php echo home_url(); ?>">Legal Aspire Solicitors</a>
        </div>

        <div class="header__hamburger-wrapper">
          <button id="toggle_btn" class="hamburger hamburger--squeeze js-hamburger menu-icon" type="button">
              <span class="hamburger-box">
              <span class="hamburger-inner"></span>
              </span>
          </button>
        </div>
      </div>

      <!-- <div class="clk"><a href="javascript:void"><i class="fa fa-plus-circle"></i>some text</a><div> -->

        <nav class="header__nav show-nav">
          <ul class="header__nav-list">
            <li class="header__nav-list-item"><a class="header__nav-link" href="#">Home</a></li>
            <li class="header__nav-list-item"><a class="header__nav-link" href="#">About</a></li>
            <li class="header__nav-list-item clk" id="toggle_submenu"><div class="header__submenu-item-container"><div class="header__submenu-item header__services">Services</div> <div class="header__submenu-item"><i class="fas fa-chevron-down"></div></div></i>
              <ul class="header__submenu-dropdown header__nav-2 show-nav-2">
                  <li class="header__nav-list-item">
                    <a class="header__nav-link" href="#!">Personal Injury</a>
                  </li>
                  <li class="header__nav-list-item">
                    <a class="header__nav-link" href="#!">Medical Negligence</a>
                  </li>
                  <li class="header__nav-list-item">
                    <a class="header__nav-link" href="#!">Employment</a>
                  </li>
                  <li class="header__nav-list-item">
                    <a class="header__nav-link" href="#!">Property</a>
                  </li>
                  <li class="header__nav-list-item">
                    <a class="header__nav-link" href="#!">Family</a>
                  </li>
                  <li class="header__nav-list-item">
                    <a class="header__nav-link" href="#!">Immigration</a>
                  </li>
                  <li class="header__nav-list-item">
                    <a class="header__nav-link" href="#!">Pensions</a>
                  </li>
                  <li class="header__nav-list-item">
                    <a class="header__nav-link" href="#!">Real Estate</a>
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
