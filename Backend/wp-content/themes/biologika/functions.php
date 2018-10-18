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


function wpb_most_commented_posts() {
// start output buffering
	ob_start();
	?>
    <div class="recent-posts">
		<?php
		// Run WP_Query
		// change posts_per_page value to limit the number of posts
		$query = new WP_Query( 'orderby=comment_count&posts_per_page=10' );

		//begin loop
		while ( $query->have_posts() ) : $query->the_post();
			$post   = $query->post;
			$banner = get_field( 'banner', $post->ID );
			$img    = wp_get_attachment_image_src( $banner, 'banner' );
			$date   = strtotime( $post->post_date );
			?>

            <div class="media">
                <div class="media-left">
                    <a href="<?php the_permalink(); ?>">
                        <img class="media-object" src="<?php echo $img[0]; ?>" alt="<?php the_title(); ?>">
                    </a>
                </div>
                <div class="media-body">
                    <h5 class="media-heading"><?php the_title(); ?></h5>
                    <p>
                        <i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp; <?php echo date( 'd M Y', $date ) ?>
                    </p>
                    <p>
                        <i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp;
						<?php echo $query->count; ?> comentários
                    </p>
                </div>
            </div>
			<?php if ( ( $query->current_post + 1 ) != ( $query->post_count ) ): ?>
                <hr>
			<?php endif; ?>

		<?php endwhile;
		// end loop
		?>
    </div>
	<?php

// Turn off output buffering
	$output = ob_get_clean();

//Return output
	return $output;
}

function custom_pagination( $pages = 40, $range = 2 ) {
	$showitems = ( $range * 2 ) + 1;

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
		echo "<div class='pagination'>";
		if ( $paged > 2 && $paged > $range + 1 && $showitems < $pages ) {
			echo "<a href='" . get_pagenum_link( 1 ) . "'>&laquo;</a>";
		}
		if ( $paged > 1 && $showitems < $pages ) {
			echo "<a href='" . get_pagenum_link( $paged - 1 ) . "'>&lsaquo;</a>";
		}

		for ( $i = 1; $i <= $pages; $i ++ ) {
			if ( 1 != $pages && ( ! ( $i >= $paged + $range + 1 || $i <= $paged - $range - 1 ) || $pages <= $showitems ) ) {
				echo ( $paged == $i ) ? "<span class='current'>" . $i . "</span>" : "<a href='" . get_pagenum_link( $i ) . "' class='inactive' >" . $i . "</a>";
			}
		}

		if ( $paged < $pages && $showitems < $pages ) {
			echo "<a href='" . get_pagenum_link( $paged + 1 ) . "'>&rsaquo;</a>";
		}
		if ( $paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages ) {
			echo "<a href='" . get_pagenum_link( $pages ) . "'>&raquo;</a>";
		}
		echo "</div>\n";
	}
}

// Create shortcode
add_shortcode( 'custom_pagination', 'custom_pagination_posts' );
add_shortcode( 'wpb_most_commented', 'wpb_most_commented_posts' );

//Enable shortcode execution in text widgets
add_filter( 'widget_text', 'do_shortcode' );
