<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mak_Blog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="main">
	<a class="skip-link screen-reader-text" href="#wrapper"><?php esc_html_e( 'Skip to content', 'mak-blog' ); ?></a>
	<div class="progress-bar-wrap">
		<div class="progress-bar color-bg"></div>
	</div>
	<header class="main-header">
		<?php require_once 'inc/header/top-bar.php'; ?>
		<div class="header-inner fl-wrap">
			<div class="container">
				<a href="index.html" class="logo-holder"><img src="<?=get_template_directory_uri()?>/assets/images/logo.png" alt=""></a>
				
				<?php require_once 'inc/header/search.php'; ?>

				<?php require_once 'inc/header/mini-cart.php'; ?>
				
				<div class="nav-button-wrap">
					<div class="nav-button">
						<span></span><span></span><span></span>
					</div>
				</div>
				
				<?php
				// require_once 'inc/header/menu.php';
				?>
				
				<div class="nav-holder main-menu">
					<nav>
						<?php
						wp_nav_menu(array(
							'theme_location' => 'primary',
							'container'      => false,
							'menu_class'     => '',
							'walker'         => new Custom_Nav_Walker(),
						));
						?>
					</nav>
				</div>
			</div>
		</div>
	</header>
