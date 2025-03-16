<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mak_Blog
 */

?>

		<footer class="fl-wrap main-footer">
			<div class="container">
				<div class="footer-widget-wrap fl-wrap">
					<div class="row">
						<div class="col-md-4">
							<div class="footer-widget">
								<div class="footer-widget-content">
									<a href="index.html" class="footer-logo"><img src="<?=get_template_directory_uri()?>/assets/images/logo2.png" alt=""></a>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eaque ipsa quae ab illo inventore veritatis et quasi architecto. </p>
									<div class="footer-social fl-wrap">
										<ul>
											<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
											<li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
											<li><a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2">
							<div class="footer-widget">
								<div class="footer-widget-title">Categories </div>
								<div class="footer-widget-content">
									<div class="footer-list footer-box fl-wrap">
										<ul>
											<li> <a href="#">Politics</a></li>
											<li> <a href="#">Technology</a></li>
											<li> <a href="#">Business</a></li>
											<li> <a href="#">Sports</a></li>
											<li> <a href="#">Science</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2">
							<div class="footer-widget">
								<div class="footer-widget-title">Links</div>
								<div class="footer-widget-content">
									<div class="footer-list footer-box fl-wrap">
										<ul>
											<li> <a href="#">Home</a></li>
											<li> <a href="#">About</a></li>
											<li> <a href="#">Contacts</a></li>
											<li> <a href="#">News</a></li>
											<li> <a href="#">Shop</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="footer-widget">
								<div class="footer-widget-title">Subscribe</div>
								<div class="footer-widget-content">
									<div class="subcribe-form fl-wrap">
										<p>Want to be notified when we launch a new template or an udpate. Just sign up and we'll send you a notification by email.</p>
										<form id="subscribe" class="fl-wrap">
											<input class="enteremail" name="email" id="subscribe-email" placeholder="Your Email" spellcheck="false" type="text">
											<button type="submit" id="subscribe-button" class="subscribe-button color-bg">Send </button>
											<label for="subscribe-email" class="subscribe-message"></label>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<?php require_once 'inc/footer/bottom.php'; ?>

		</footer>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
