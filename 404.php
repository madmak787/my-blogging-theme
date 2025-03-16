<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Mak_Blog
 */

get_header();
?>

<div id="wrapper">
	<div class="content">
		<section class="hero-section error-section">
			<div class="bg-wrap hero-section_bg">
				<div class="bg" data-bg="<?=get_template_directory_uri()?>/assets/images/404.webp"></div>
			</div>
			<div class="container">
				<div class="error-wrap">
					<h2><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'mak-blog' ); ?></h2>
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'mak-blog' ); ?></p>
					<div class="clearfix"></div>
					<div class="header-search-wrap not-found-search">
						<div class="widget-inner">
							<form action="<?= home_url( '/' ) ?>">
								<input name="s" id="se" type="text" class="search" placeholder="Search..." value="<?= $_GET['s'] ?? '' ?>" />
								<button type="submit" class="search-submit" id="submit_btn"><i class="fa fa-search transition"></i> </button>
							</form>
						</div>
					</div>
					<div class="clearfix"></div>
					<p>Or</p>
					<a href="<?= home_url( '/' ) ?>" class="btn color-btn flat-btn"> <span>Back to Home Page</span> <i class="fas fa-caret-right"></i></a>
				</div>
			</div>
		</section>
	</div>
</div>

<?php
get_footer();
