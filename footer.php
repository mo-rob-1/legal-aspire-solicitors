<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Legal_Aspire_Solicitors
 */

?>

	<footer class="footer">
		<div class="footer__container">
			<div class="footer__col-1">
				<a class="footer__logo-link" href="#">Legal Aspire Solicitors</a>

				<div class="footer__contact-container">
					<div class="footer__contact-icon-wrapper">
						<i class="fas fa-map-marker-alt"></i>
					</div>
					<div class="footer__contact-text-wrapper">
						<p class="footer__address">64 Litigation Street <br>London<br> LE1 4NE</p>
					</div>
				</div>

				<div class="footer__number-container">
					<div class="footer__number-icon-wrapper">
						<i class="fas fa-phone-alt"></i>
					</div>
					<div class="footer__numver-text-wrapper">
						<a class="footer__number" href="tel:0800001234">0800 00 1234</a>
					</div>
				</div>

				<div class="footer__social-container">
					<a class="footer__social-icon" href="#"><i class="fab fa-twitter"></i></a>
					<a class="footer__social-icon" href="#"><i class="fab fa-instagram"></i></a>
					<a class="footer__social-icon" href="#"><i class="fab fa-facebook-f"></i></a>
				</div>
			</div>
			<div class="footer__col-2">
				<h3 class="footer__nav-title">Pages</h3>
				<nav class="footer__nav">
					<ul class="footer__nav-list">
						<li class="footer__nav-list-item"><a class="footer__nav-link" href="#">Home</a></li>
            			<li class="footer__nav-list-item"><a class="footer__nav-link" href="#">About</a></li>
						<li class="footer__nav-list-item"><a class="footer__nav-link" href="#">News</a></li>
						<li class="footer__nav-list-item"><a class="footer__nav-link" href="#">Contact</a></li>
					</ul>
				</nav>
			</div>
			<div class="footer__col-3">
			<h3 class="footer__nav-title">Services</h3>
				<nav class="footer__nav">
					<ul class="footer__nav-list">
						<li class="footer__nav-list-item"><a class="footer__nav-link" href="#">Personal Injury</a></li>
            			<li class="footer__nav-list-item"><a class="footer__nav-link" href="#">Medical Negligence</a></li>
						<li class="footer__nav-list-item"><a class="footer__nav-link" href="#">Employment</a></li>
						<li class="footer__nav-list-item"><a class="footer__nav-link" href="#">Family</a></li>
					</ul>
				</nav>
			</div>
			<div class="footer__col-4">
				<h3 class="footer__newsletter-title">Newsletter</h3>
				<p class="footer__newsletter-desc">Signup for our newsletter to get the latest news, updates and special offers in your inbox.</p>
				<form class="newsletter__form">
					<!-- <div class="footer__label-wrapper">
						<input class="footer__newsletter-input" type="email" id="emails" name="emails" multiple>
						<label class="footer__newsletter-label" for="name">Your Name</label>
					</div> -->
						<div class="foo">
							<input class="input" type="text" placeholder="Email">
							<label class="label">Email</label>
						</div>
					<input class="footer__newsletter-btn" type="submit">
				</form>
			</div>

		</div>
		<small class="footer__copyright">© 2021 Legal Aspire Solicitors</small>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
