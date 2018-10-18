<?php
$args = array( 'post_type' => 'profissionais', 'orderby' => 'menu_order', 'order' => 'ASC', 'showposts' => - 1 );
query_posts( $args );
?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php
		$imagem        = get_field( 'foto' );
		$img           = wp_get_attachment_image_src( $imagem, 'full' );
		$nome          = get_field( 'nome' );
		$especialidade = get_field( 'especialidade' );
		$descricao     = get_field( 'descricao' );
		$redes_sociais = get_field( 'redes_sociais' );
		?>

        <div class="col-sm-4 col-md-4">
            <div class="card">
                <img src="<?php echo $img[0] ?>" alt="<?php echo $nome; ?>" style="width:100%">
                <div class="box-card">
                    <h4><b><?php echo $nome; ?></b></h4>
                    <h6><?php echo $especialidade; ?></h6>
                    <p>
						<?php echo $descricao; ?>
                    </p>
                    <div class="span-icons">
						<?php if ( $redes_sociais['linkedin'] ): ?>
                            <div class="card-icons">
                                <a href="<?php echo $redes_sociais['linkedin']; ?>">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
						<?php endif; ?>
                        
	                    <?php if ( $redes_sociais['site'] ): ?>
                        <div class="card-icons">
                            <a href="<?php echo $redes_sociais['site']; ?>">
                                <i class="fa fa-dribbble" aria-hidden="true"></i>
                            </a>
                        </div>
                        <?php endif; ?>

	                    <?php if ( $redes_sociais['twitter'] ): ?>
                        <div class="card-icons">
                            <a href="<?php echo $redes_sociais['twitter']; ?>">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
	<?php endwhile; ?>
<?php endif; ?>

<?php wp_reset_query(); ?>