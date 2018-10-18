<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <!-- MAIN CONTAINER -->
    <div class="wrapper">
		<?php echo get_template_part( 'partials/template', 'navigation' ); ?>

		<?php
		$titulo                = get_field( 'titulo_detalhe' );
		$descricao             = get_field( 'descricao' );
		$titulo_possibilidades = get_field( 'titulo_possibilidades' );
		$possibilidades        = get_field( 'possibilidades' );
		$imagem_detalhe        = get_field( 'imagem_de_destaque' );
		?>

        <div class="pages-header">
            <div class="section-heading">
                <div class="section">
                    <div class="span-title">
                        <h1><?php the_title(); ?></h1>
                        <div class="page-map"><p>Home &nbsp;/&nbsp; <?php echo $titulo; ?></p></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main">
            <div class="section">
                <div class="row">
                    <div class="col-md-8">
                        <div class="department-info">
							<?php if ( $imagem_detalhe ): ?>
								<?php $img = wp_get_attachment_image_src( $imagem_detalhe, 'full' ); ?>
                                <img src="<?php echo $img[0]; ?>" alt="" class="<?php the_title(); ?>" style="width: 100%;">
							<?php endif; ?>
                            <h5><?php echo $titulo; ?></h5>
                            <hr class="short">

							<?php echo $descricao ?>

							<?php if ( $possibilidades ): ?>
                                <h6>
									<?php echo $titulo_possibilidades; ?>
                                </h6>
                                <hr>
                                <div class="check-list">
									<?php foreach ( $possibilidades as $possibilidade ): ?>
                                        <p>
                                            <i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;
											<?php echo $possibilidade['possibilidade']; ?>
                                        </p>
									<?php endforeach; ?>
                                </div>
							<?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-4">
						<?php echo get_template_part( 'partials/template', 'sidebar' ); ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- END MAIN CONTAINER -->
<?php endwhile; ?>

<?php echo get_template_part( 'partials/template', 'footer' ); ?>

<?php get_footer(); ?>