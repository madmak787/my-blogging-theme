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
						<div class="<?= has_post_thumbnail() ? 'col-md-5' : 'col-md-12' ?>">
							<div class="section-title sect_dec">
								<h2><?= the_title() ?></h2>
								<!-- <h4>Who we are</h4> -->
							</div>
							<div class="about-wrap">
								<?= the_content() ?>
							</div>
						</div>
						<?php
						if ( has_post_thumbnail() ) {
							?>
							<div class="col-md-1"></div>
							<div class="col-md-6">
								<div class="about-img fl-wrap">
									<img src="<?= the_post_thumbnail_url() ?>" class="respimg" alt="">
								</div>
							</div>
							<?php
						}
						?>
					</div>
				</div>
				<div class="sec-dec"></div>
			</section>
			<?php
		endwhile;
		?>
	</div>
</div>

<?php
get_footer();
