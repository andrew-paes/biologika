<?php
$args = array( 'post_type' => 'servicos', 'orderby' => 'menu_order', 'order' => 'ASC', 'showposts' => - 1 );
query_posts( $args );
?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php
		$imagem                = get_field( 'icone' );
		$titulo                = get_field( 'titulo' );
		$descricao_de_servicos = get_field( 'descricao_de_servicos' );
		?>

		<?php $img = wp_get_attachment_image_src( $imagem, 'full' ); ?>
        <div class="col-sm-6 col-md-4">
            <a href="<?php the_permalink(); ?>">
                <div class="services">
                    <div class="icon">
                        <img src="<?php echo $img[0] ?>" alt="<?php the_title(); ?>">
                    </div>
                    <h5><?php echo $titulo ?></h5>
                    <p>
                        <?php echo $descricao_de_servicos ?>
                    </p>
                </div>
            </a>
        </div>
	<?php endwhile; ?>
<?php endif; ?>

<?php wp_reset_query(); ?>