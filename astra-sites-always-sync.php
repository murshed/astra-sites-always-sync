<?php
/**
 * Plugin Name: Astra Sites Always Sync
 * Description: Always sync the library without checking the checksums. 
 */

// Avoid gutenberg templates checksusms.
add_filter( 'ast_block_templates_checksums_status', function() {
    return 'yes';
});

// Avoid starter templates checksusms.
add_filter( 'astra_sites_checksums_status', function() {
    return 'yes';
});
