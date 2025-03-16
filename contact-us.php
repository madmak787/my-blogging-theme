<?php
/**
 * Template Name: Contact Us
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mak_Blog
 */

get_header();
?>

<div id="wrapper">
	<div class="content">
		
		<?php require_once 'inc/templates/breadcrumbs.php' ?>
		
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="pr-subtitle prs_big">Details</div>
							<ul class="contacts-list fl-wrap">
								<li><span><i class="fal fa-map-marker"></i> Address :</span> <a href="#">USA 27TH Brooklyn NY</a></li>
								<li><span><i class="fal fa-phone"></i> Phone :</span> <a href="#">+7(123)987654</a></li>
								<li><span><i class="fal fa-envelope"></i> Mail :</span> <a href="#">gmagnews@domain.com</a></li>
							</ul>
							<div class="contact-social fl-wrap">
								<span class="cs-title">Find us on: </span>
								<ul>
									<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
									<li><a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
								</ul>
							</div>
							<!-- box-widget -->
							<div class="box-widget-content fl-wrap">
								<div class="banner-widget fl-wrap">
									<div class="bg-wrap bg-parallax-wrap-gradien">
										<div class="bg" data-bg="images/bg/1.jpg"></div>
									</div>
									<div class="banner-widget_content">
										<h5>Visit our awesome merch and souvenir online shop.</h5>
										<a href="#" class="btn float-btn color-bg small-btn">Our shop</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<div class="pad-con fl-wrap">
								<div class="pr-subtitle prs_big">Drop us a line</div>
								<p>Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus. In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida.</p>
								<div id="contact-form" style="margin-top: 20px;">
									<?php echo do_shortcode('[contact-form-7 id="ce9c354" title="Contact Form" html_class="custom-form"]')?>
									<!-- <div id="message"></div>
									<form  class="custom-form" action="php/contact.php" name="contactform" id="contactform">
										<fieldset>
											<input type="text" name="name" id="name" placeholder="Your Name *" value=""/>
											<input type="text"  name="email" id="email" placeholder="Email Address*" value=""/>
											<textarea name="comments"  id="comments" cols="40" rows="3" placeholder="Your Message:"></textarea>
										</fieldset>
										<button class="btn color-bg float-btn" id="submit">Send message <i class="fas fa-caret-right"></i></button>
									</form> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php
		endwhile;
		?>
	</div>
</div>

<?php
get_footer();
