<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Mak_Blog
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function mak_blog_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'mak_blog_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function mak_blog_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'mak_blog_pingback_header' );

function modify_content_with_image_classes($content) {
    // Counter for images
    $image_counter = 0;

    // Add mb_head class to headings
    $content = preg_replace_callback(
        '/<(h[1-6])(.*?)>/i',
        function ($matches) {
            if (strpos($matches[2], 'class=') !== false) {
                return '<' . $matches[1] . preg_replace('/class=["\']([^"\']*)["\']/', 'class="$1 mb_head"', $matches[2]) . '>';
            } else {
                return '<' . $matches[1] . $matches[2] . ' class="mb_head">';
            }
        },
        $content
    );

    // Wrap images in a div and add the float-right class to even images
    $content = preg_replace_callback(
        '/<img(.*?)>/i',
        function ($matches) use (&$image_counter) {
            $image_counter++; // Increment the counter for each image
            $float_class = ($image_counter % 2 === 0) ? 'fr-wrap' : '';

            // Add respimg class to img
            if (strpos($matches[1], 'class=') !== false) {
                $img_tag = '<img' . preg_replace('/class=["\']([^"\']*)["\']/', 'class="$1 respimg"', $matches[1]) . '>';
            } else {
                $img_tag = '<img' . $matches[1] . ' class="respimg">';
            }

            // Wrap the image in a div with the appropriate classes
            return '<div class="single-post-content_text_media fl-wrap ' . $float_class . '">' . $img_tag . '</div>';
        },
        $content
    );

    return $content;
}

// Apply the filter to the_content
add_filter('the_content', 'modify_content_with_image_classes');
