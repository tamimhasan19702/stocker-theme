<?php


class Stocker_Custom_Walker_Nav_Menu extends Walker_Nav_Menu
{
    // Start the element output
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        // Add classes to the list item
        $class_names = 'nav-item'; // Add nav-item class
        if (in_array('current-menu-item', $item->classes)) {
            $class_names .= ' active'; // Add active class if it's the current menu item
        }
        $class_names = ' class="' . esc_attr($class_names) . '"';

        // Start the list item
        $output .= $indent . '<li' . $class_names . '>';

        // Prepare the link
        $link_class = 'nav-link'; // Add nav-link class
        $attributes = ' class="' . esc_attr($link_class) . '"';
        $attributes .= ' href="' . esc_url($item->url) . '"';

        // Add the link
        $item_output = '<a' . $attributes . '>';
        $item_output .= apply_filters('the_title', $item->title, $item->ID);
        $item_output .= '</a>';

        // If the item has children, add the dropdown structure
        if (in_array('menu-item-has-children', $item->classes)) {
            $output .= $item_output; // Output the parent link
            $output .= '<div class="nav-item dropdown">';
            $output .= '<a href="#" class="nav-link" data-bs-toggle="dropdown">';
            $output .= '<span class="dropdown-toggle">' . esc_html($item->title) . '</span>';
            $output .= '</a>';
            $output .= '<div class="dropdown-menu m-0">';
        } else {
            $output .= $item_output; // Output the item
        }
    }

    // Start the level output (for dropdowns)
    function start_lvl(&$output, $depth = 0, $args = array())
    {
        // No need to add anything here since we handle it in start_el
    }

    // End the level output
    function end_lvl(&$output, $depth = 0, $args = array())
    {
        $output .= '</div>'; // Close the dropdown menu
    }

    // End the element output
    function end_el(&$output, $item, $depth = 0, $args = array())
    {
        $output .= '</li>'; // Close the list item
    }
}