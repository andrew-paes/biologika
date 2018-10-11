<?php
$args = array( 'post_type' => 'vitrines', 'orderby' => 'menu_order', 'order' => 'ASC', 'showposts' => - 1 );
query_posts( $args );
?>

<?php $vitrine = get_field( 'vitrine' ); ?>
<?php if ( $vitrine ): ?>

<?php endif; ?>

<?php if ( have_posts() ) : ?>
	<?php
	$vitrine = [];
	$counter = 0;
	?>
    <div class="main-slider">
        <div class="slider" id="slider">
            <ul class="slider__container">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php
					$imagem = get_field( 'fundo' );
					$img    = wp_get_attachment_image_src( $imagem, 'full' );
					$titulo = get_field( 'titulo' );

					array_push( $vitrine, [
						'imagem' => $imagem,
						'titulo' => $titulo
					] );

					?>

                    <li class="slider-item <?php echo ( $counter === 0 ) ? 'is-active' : '' ?>">
                        <figure class="slider-image"
                                style="background-image:url(<?php echo $img[0]; ?>)"
                                title="<?php echo $titulo; ?>"></figure>
                        <div class="slider-text">
                            <h2 class="slider-title"><?php echo $titulo ?></h2>
                        </div>
                    </li>
					<?php
					$counter ++;
				endwhile;
				?>
            </ul>
            <div class="slider-prev">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="32" viewBox="-1 -1 12 32">
                    <path d="M 10,0 0,15 10,30" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="slider-next is-active">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="32" viewBox="-1 -1 12 32">
                    <path d="M0 0l10 15L0 30" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
            </div>
            <ul class="navThumbs">
				<?php foreach ( $vitrine as $key => $item ): ?>
					<?php $img = wp_get_attachment_image_src( $item['imagem'], 'thumb' ); ?>
                    <li class="slider-thumbs <?php echo ( $key === 0 ) ? 'is-active' : '' ?>"
                        style="background-image:url(<?php echo $img[0]; ?>);"></li>
				<?php endforeach; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>
