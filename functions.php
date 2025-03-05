<?php 

function ___sr__set_excerpt_length($length){ return 20; }

add_filter('excerpt_length', '___sr__set_excerpt_length');

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');