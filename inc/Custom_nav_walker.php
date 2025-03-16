<?php
class Custom_Nav_Walker extends Walker_Nav_Menu {

    // Start Level: Outputs opening <ul> for submenu
    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul>\n";
    }

    // End Level: Outputs closing </ul> for submenu
    public function end_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    // Start Element: Outputs the opening <li> and the link for a menu item
    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        // Build class attribute for <li>
        $classes = empty( $item->classes ) ? [] : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
        if ( in_array( 'menu-item-has-children', $classes ) ) {
            $classes[] = 'has-children';
        }
        $class_names = join( ' ', array_filter( $classes ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        // Build id attribute for <li>
        $id = 'menu-item-' . $item->ID;
        $id = ' id="' . esc_attr( $id ) . '"';

        $output .= $indent . '<li' . $id . $class_names . '>';

        // Build <a> attributes
        $atts = [];
        $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel']    = !empty($item->xfn) ? $item->xfn : '';
        $atts['href']   = !empty($item->url) ? $item->url : '';

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $attributes .= ' ' . $attr . '="' . esc_attr( $value ) . '"';
            }
        }

        // Add active link class if the item is current or ancestor
        $link_class = '';
        if ( in_array( 'current-menu-item', $classes ) || in_array( 'current-menu-ancestor', $classes ) || in_array( 'current-menu-parent', $classes ) ) {
            $link_class = 'act-link';
        }
        $link_class = $link_class ? ' class="' . esc_attr( $link_class ) . '"' : '';

        // Build the link
        $item_output  = $args->before ?? '';
        $item_output .= '<a' . $attributes . $link_class . '>';
        $item_output .= $args->link_before ?? '';
        $item_output .= apply_filters( 'the_title', $item->title, $item->ID );
        $item_output .= $args->link_after ?? '';

        // Add caret for menu items with children
        if ( in_array( 'menu-item-has-children', $classes ) ) {
            $item_output .= ' <i class="fas fa-caret-down"></i>';
        }

        $item_output .= '</a>';
        $item_output .= $args->after ?? '';

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

    // End Element: Outputs closing </li>
    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= "</li>\n";
    }
}
