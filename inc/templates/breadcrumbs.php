<div class="breadcrumbs-header fl-wrap">
    <div class="container">
        <div class="breadcrumbs-header_url">
            <?php
            // Breadcrumb function
            function custom_breadcrumbs() {
                // Home link
                echo '<a href="' . esc_url( home_url() ) . '">Home</a>';
                if (is_single() && get_post_type() === 'post') {
                    echo isset(get_the_category()[0]) ? '<a href="'.home_url('category/').get_the_category()[0]->slug.'">'.get_the_category()[0]->name.'</a>' : '';
                }
                echo '<span>';
                if ( is_category() || is_single() ) {
                    // If it's a category or single post
                    if( is_category() ) {
                        echo get_the_category()[0]->name;
                    }
                    
                    if ( is_single() ) {
                        the_title();
                    }
                } elseif ( is_page() && !is_front_page() ) {
                    // If it's a regular page
                    the_title();
                } elseif ( is_search() ) {
                    // If it's a search results page
                    echo 'Search results for: ' . get_search_query();
                } elseif ( is_404() ) {
                    // If it's a 404 page
                    echo '404 - Page Not Found';
                } elseif ( is_archive() ) {
                    // If it's an archive page
                    if (is_author()) {
                        // Modify author archive title
                        echo get_the_author();
                    } elseif (is_category()) {
                        // Modify category archive title
                        echo single_cat_title('', false);
                    } elseif (is_tag()) {
                        // Modify tag archive title
                        echo '#' . single_tag_title('', false);
                    } elseif (is_tax()) {
                        // Modify custom taxonomy archive title
                        echo single_term_title('', false);
                    }
                }
                echo '</span>';
            }

            // Call the breadcrumbs function
            custom_breadcrumbs();
            ?>
        </div>
        <div class="scroll-down-wrap">
            <div class="mousey">
                <div class="scroller"></div>
            </div>
            <span>Scroll Down To Discover</span>
        </div>
    </div>
    <div class="pwh_bg"></div>
</div>
