<?php
/**
 * The template for displaying front page
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
        
        <?php require_once 'inc/templates/hero-slider.php' ?>
        
        <?php require_once 'inc/templates/latest-news.php' ?>
        
        <?php require_once 'inc/templates/featured-videos.php' ?>
        
        <?php require_once 'inc/templates/best-categories.php' ?>
        
        <?php require_once 'inc/templates/trending.php' ?>
        
        <?php require_once 'inc/templates/banner.php' ?>

    </div>

<?php
get_footer();
