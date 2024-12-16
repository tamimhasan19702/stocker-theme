<?php

/**
 * Class Stocker_Custom_Walker_Nav_Menu
 *
 * This custom walker class is used to output a Bootstrap 5-compatible navigation menu.
 * It extends the Walker_Nav_Menu class to add additional classes and attributes to the
 * menu items and dropdowns.
 *
 * @package Stocker
 * @since 1.0.0
 * @author HTML Codex
 */
class Stocker_Custom_Walker_Nav_Menu extends Walker_Nav_Menu
{
    /**
     * Start Level (Dropdown Menu)
     *
     * This method is called at the start of a nested (dropdown) menu.
     * It adds the necessary classes for the dropdown menu and opens the <ul> tag.
     *
     * @param string   $output
     * @param int      $depth
     * @param stdClass $args
     */
    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth); // Indentation for nested levels
        $classes = 'dropdown-menu m-0'; // Add necessary classes for dropdown menu
        $output .= "\n$indent<ul class=\"$classes\">\n"; // Open dropdown menu
    }

    /**
     * Start Element (Menu Item)
     *
     * This method is called at the start of a menu item.
     * It adds the necessary classes and attributes for the menu item and its link.
     *
     * @param string   $output
     * @param stdClass $item
     * @param int      $depth
     * @param stdClass $args
     * @param int      $id
     */
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $is_dropdown = in_array('menu-item-has-children', $classes); // Check if item has children

        // Add appropriate classes for <li>
        $li_classes = $is_dropdown ? 'nav-item dropdown' : 'nav-item';
        if ($depth === 0) {
            // Only apply classes for top-level menu items
            $li_class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
            $li_class_names = esc_attr(trim("$li_classes $li_class_names"));
            $output .= "<li class=\"$li_class_names\">";
        } else {
            // No classes for dropdown <li> elements
            $output .= "<li>";
        }

        // Build attributes for <a> tag
        $attributes  = !empty($item->url) ? ' href="' . esc_url($item->url) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';

        // Add classes for top-level and dropdown items
        if ($depth === 0) {
            // Top-level menu item
            $attributes .= $is_dropdown ? ' class="nav-link" data-bs-toggle="dropdown"' : ' class="nav-link"';
        } else {
            // Dropdown menu item
            $attributes .= ' class="dropdown-item"';
        }

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;

        // Add dropdown toggle span for parent items with children
        if ($is_dropdown) {
            $item_output .= '<span class="dropdown-toggle"></span>';
        }

        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    /**
     * End Level (Close Dropdown Menu)
     *
     * This method is called at the end of a nested (dropdown) menu.
     * It closes the <ul> tag.
     *
     * @param string   $output
     * @param int      $depth
     * @param stdClass $args
     */
    function end_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth); // Indentation for nested levels
        $output .= "$indent</ul>\n"; // Close dropdown menu
    }

    /**
     * End Element (Close Menu Item)
     *
     * This method is called at the end of a menu item.
     * It closes the <li> tag.
     *
     * @param string   $output
     * @param stdClass $item
     * @param int      $depth
     * @param stdClass $args
     */
    function end_el(&$output, $item, $depth = 0, $args = null)
    {
        $output .= "</li>\n"; // Close <li> tag
    }
}