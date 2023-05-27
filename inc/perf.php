<?php
/**
 * SG Optimizer Compatibility
*/
add_filter( 'sgo_javascript_combine_exclude', 'cfturnstile_sg_js_combine_exclude' );
add_filter( 'sgo_javascript_combine_excluded_external_paths', 'cfturnstile_sg_js_combine_exclude' );
function cfturnstile_sg_js_combine_exclude( $exclude_list ) {
    $exclude_list[] = 'turnstile';
    $exclude_list[] = 'cfturnstile';
    return $exclude_list;
}