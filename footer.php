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
$mmb = get_option('mmb');
?>

		<footer class="fl-wrap main-footer">
			<div class="container">
				<div class="footer-widget-wrap fl-wrap">
					<div class="row">
						<div class="col-md-4">
							<div class="footer-widget">
								<div class="footer-widget-content">
									<a href="<?=home_url('/')?>" class="footer-logo"><img src="<?=@$mmb['footer_logo']?>" alt="<?=bloginfo('name')?> logo in footer" /></a>
									<p><?=@$mmb['bio']?></p>
									<div class="footer-social fl-wrap">
										<ul>
											<?= !empty($mmb['facebook']) ? '<li><a href="' . $mmb['facebook'] . '" target="_blank"><i class="fab fa-facebook-f"></i></a></li>' : '' ?>
											<?= !empty($mmb['twitter']) ? '<li><a href="' . $mmb['twitter'] . '" target="_blank"><i class="fab fa-twitter"></i></a></li>' : '' ?>
											<?= !empty($mmb['instagram']) ? '<li><a href="' . $mmb['instagram'] . '" target="_blank"><i class="fab fa-instagram"></i></a></li>' : '' ?>
											<?= !empty($mmb['linkedin']) ? '<li><a href="' . $mmb['linkedin'] . '" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>' : '' ?>
											<?= !empty($mmb['pinterest']) ? '<li><a href="' . $mmb['pinterest'] . '" target="_blank"><i class="fab fa-pinterest"></i></a></li>' : '' ?>
											<?= !empty($mmb['youtube']) ? '<li><a href="' . $mmb['youtube'] . '" target="_blank"><i class="fab fa-youtube"></i></a></li>' : '' ?>
											<?= !empty($mmb['tiktok']) ? '<li><a href="' . $mmb['tiktok'] . '" target="_blank"><i class="fab fa-tiktok"></i></a></li>' : '' ?>
											<?= !empty($mmb['reddit']) ? '<li><a href="' . $mmb['reddit'] . '" target="_blank"><i class="fab fa-reddit-alien"></i></a></li>' : '' ?>
											<?= !empty($mmb['tumblr']) ? '<li><a href="' . $mmb['tumblr'] . '" target="_blank"><i class="fab fa-tumblr"></i></a></li>' : '' ?>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2">
							<div class="footer-widget">
								<div class="footer-widget-title"><?=isset(get_nav_menu_locations()['footer_1']) ? wp_get_nav_menu_object(get_nav_menu_locations()['footer_1'])->name : '&nbsp;'?></div>
								<div class="footer-widget-content">
									<div class="footer-list footer-box fl-wrap">
										<?php
										wp_nav_menu(array(
											'theme_location' => 'footer_1',
											'container'      => false,
											'menu_class'     => '',
										));
										?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2">
							<div class="footer-widget">
								<div class="footer-widget-title"><?=isset(get_nav_menu_locations()['footer_2']) ? wp_get_nav_menu_object(get_nav_menu_locations()['footer_2'])->name : '&nbsp;'?></div>
								<div class="footer-widget-content">
									<div class="footer-list footer-box fl-wrap">
										<?php
										wp_nav_menu(array(
											'theme_location' => 'footer_2',
											'container'      => false,
											'menu_class'     => '',
										));
										?>
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
