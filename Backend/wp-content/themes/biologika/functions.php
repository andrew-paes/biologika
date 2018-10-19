<?php
require_once( ABSPATH . 'wp-admin/includes/media.php' );
require_once( ABSPATH . 'wp-admin/includes/file.php' );

add_image_size( 'vitrine', '1920', '1080', true );
add_image_size( 'fullscreen', '1920', '', true );
add_image_size( 'equipe', '1170', '', true );
add_image_size( 'area', '264', '264', true );
add_image_size( 'banner', '370', '', true );
add_image_size( 'thumb', '100', '100', true );
add_image_size( 'galeria', '300', '', true );


//Removi funções de Emoticons do WP
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
//Remove RSD
remove_action( 'wp_head', 'rsd_link' );
//RTemove  Windows Live Writer Manifest Link
remove_action( 'wp_head', 'wlwmanifest_link' );
//Remove Verson
remove_action( 'wp_head', 'wp_generator' );

// Replaces the excerpt "more" text by a link
function new_excerpt_more( $more ) {
	global $post;

	return '...';
}

add_filter( 'excerpt_more', 'new_excerpt_more' );

function custom_excerpt_length( $length ) {
	return 13;
}

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function my_function_admin_bar() {
	return false;
}

add_filter( "show_admin_bar", "my_function_admin_bar" );

function cc_mime_types( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';

	return $mimes;
}

add_filter( 'upload_mimes', 'cc_mime_types' );

define( 'ACF_EARLY_ACCESS', '5' );

function upload_image_as_attachment( $image_url, $post_id, $title ) {
	$img_name = basename( $image_url );
	$slug     = $img_name . '-' . $post_id;

	$attachment_args  = array(
		'posts_per_page' => 1,
		'post_type'      => 'attachment',
		'name'           => $slug
	);
	$attachment_check = new Wp_Query( $attachment_args );

	if ( $attachment_check->have_posts() ) {
		while ( $attachment_check->have_posts() ) {
			$attachment_check->the_post();
			$id = get_the_ID();
		}
		wp_reset_query();

		return $id;
	} else {
		$src = media_sideload_image( $image_url, $post_id, $slug, 'src' );

		$id = attachment_url_to_postid( $src );

		return $id;
	}
}

function my_acf_google_map_api( $api ) {
	$api['key'] = 'AIzaSyBKEb1AlchTdpu9dLzLVo8I8BNxYPlEldY';

	return $api;
}

add_filter( 'acf/fields/google_map/api', 'my_acf_google_map_api' );


function custom_pagination( $pages = '', $range = 2 ) {
	$showitems = ( ( $range || 3 ) * 2 ) + 1;
	
	global $paged;

	if ( empty( $paged ) ) {
		$paged = 1;
	}

	if ( $pages == '' ) {
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if ( ! $pages ) {
			$pages = 1;
		}
	}
	
	if ( 1 != $pages ) {
		echo "<nav aria-label=\"Page navigation\"><div class=\"pagination\">";
		if ( $paged > 2 && $paged > $range + 1 && $showitems < $pages ) {
			echo "<a href='" . get_pagenum_link( 1 ) . "'>&laquo;</a>";
		}

		if ( $paged > 1 && $showitems < $pages ) {
			echo "<a href='" . get_pagenum_link( $paged - 1 ) . "'>&lsaquo;</a>";
		}

		for ( $i = 1; $i <= $pages; $i ++ ) {
			if ( 1 != $pages && ( ! ( $i >= $paged + $range + 1 || $i <= $paged - $range - 1 ) || $pages <= $showitems ) ) {
				echo ( $paged == $i ) ? "<a class='active'>" . $i . "</a>" : "<a href='" . get_pagenum_link( $i ) . "'>" . $i . "</a>";
			}
		}

		if ( $paged < $pages && $showitems < $pages ) {
			echo "<a href='" . get_pagenum_link( $paged + 1 ) . "'>&rsaquo;</a>";
		}
		if ( $paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages ) {
			echo "<a href='" . get_pagenum_link( $pages ) . "'>&raquo;</a>";
		}
		echo "</div></nav>\n";
	}
}

function wpb_rand_posts() {
	$string = '<div class="recent-posts">';
	$args   = array(
		'post_type'      => 'post',
		'orderby'        => 'rand',
		'posts_per_page' => 5,
	);

	$the_query = new WP_Query( $args );

	if ( $the_query->have_posts() ):
		while ( $the_query->have_posts() ) : $the_query->the_post();
			$post      = $the_query->post;
			$banner    = get_field( 'banner', $post->ID );
			$img       = wp_get_attachment_image_src( $banner, 'banner' );
			$date      = strtotime( $post->post_date );
			$dateF     = date( 'd M Y', $date );
			$permalink = get_the_permalink();
			$title     = get_the_title();

			$string .= "<div class=\"media\"><div class=\"media-left\"><a href=\"{$permalink}\"><img class=\"media-object\" src=\"{$img[0]}\" alt=\"{$title}\"></a></div><div class=\"media-body\"><h5 class=\"media-heading\">{$title}</h5><p><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>&nbsp; {$dateF}</p></div></div>";

			if ( ( $the_query->current_post + 1 ) != ( $the_query->post_count ) ):
				$string .= "<hr>";
			endif;

		endwhile;

		wp_reset_query();
	endif;

	$string .= '</div>';

	return $string;
}

add_shortcode( 'custom_pagination_posts', 'custom_pagination' );
add_shortcode( 'wpb-random-posts', 'wpb_rand_posts' );
add_filter( 'widget_text', 'do_shortcode' );