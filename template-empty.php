<?php
// Template Name: Empty

header('Access-Control-Allow-Origin: *');  
header('Content-Type: application/json');

global $post;
echo do_shortcode($post->post_content);
/*echo '<pre>'; 
print_r($post->post_content);
echo '</pre>'; */
