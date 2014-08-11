<?php 

/*
Author: Terry Sutton

All custom, non-Bones functions go here
*/


// BrowserSync likes relative urls. 
// This turns all links into relative links.
// Disable in production.

$relative_url_filters = array(
        'script_loader_src', //js
        'style_loader_src', //css
        'post_link',       // Normal post link
        'post_type_link',  // Custom post type link
        'page_link',       // Page link
        'attachment_link', // Attachment link
        'get_shortlink',   // Shortlink
        'post_type_archive_link',    // Post type archive link
        'get_pagenum_link',          // Paginated link
        'get_comments_pagenum_link', // Paginated comment link
        'term_link',   // Term link, including category, tag
        'search_link', // Search link
        'day_link',   // Date archive link
        'month_link',
        'year_link'
        );

foreach ( $relative_url_filters as $relative_url_filters ) {
    add_filter( $relative_url_filters, 'wp_make_link_relative' );
}