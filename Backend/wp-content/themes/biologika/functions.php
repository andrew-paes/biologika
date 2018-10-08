<?php
require_once(ABSPATH . 'wp-admin/includes/media.php');
require_once(ABSPATH . 'wp-admin/includes/file.php');

add_image_size('vitrine', '1920', '1080', true);
add_image_size('fullscreen', '1920', '', true);
add_image_size('equipe', '1170', '', true);
add_image_size('area', '264', '264', true);
add_image_size('banner', '370', '', true);


//Removi funções de Emoticons do WP
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
//Remove RSD
remove_action('wp_head', 'rsd_link');
//RTemove  Windows Live Writer Manifest Link
remove_action('wp_head', 'wlwmanifest_link');
//Remove Verson
remove_action('wp_head', 'wp_generator');

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more)
{
    global $post;
    return '...';
}

add_filter('excerpt_more', 'new_excerpt_more');

function custom_excerpt_length($length)
{
    return 13;
}

add_filter('excerpt_length', 'custom_excerpt_length', 999);

function my_function_admin_bar()
{
    return false;
}

add_filter("show_admin_bar", "my_function_admin_bar");

function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');

define('ACF_EARLY_ACCESS', '5');

function upload_image_as_attachment($image_url, $post_id, $title)
{
    $img_name = basename($image_url);
    $slug = $img_name . '-' . $post_id;

    $attachment_args = array(
        'posts_per_page' => 1,
        'post_type' => 'attachment',
        'name' => $slug
    );
    $attachment_check = new Wp_Query($attachment_args);

    if ($attachment_check->have_posts()) {
        while ($attachment_check->have_posts()) {
            $attachment_check->the_post();
            $id = get_the_ID();
        }
        wp_reset_query();
        return $id;
    } else {
        $src = media_sideload_image($image_url, $post_id, $slug, 'src');

        $id = attachment_url_to_postid($src);
        return $id;
    }
}
