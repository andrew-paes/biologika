<?php get_header(); ?>

<!-- MAIN CONTAINER -->
<div class="wrapper">
	<?php echo get_template_part( 'partials/template', 'navigation' ); ?>

	<?php wp_reset_query(); ?>

	<?php echo get_template_part( 'partials/template', 'vitrine' ); ?>

	<?php wp_reset_query(); ?>

    <div class="main">
        <div class="section">
            <div class="row">
                <div class="col-md-8">
                    <div class="about-us">
                        <h2>
							<?php echo get_field( 'titulo_-_parte_1' ); ?>
                            <title-color><?php echo get_field( 'titulo_-_parte_2' ); ?></title-color>
                        </h2>
                        <hr class="short">
                        <h5>
							<?php echo get_field( 'subtitulo' ); ?>
                        </h5>
						<?php echo get_field( 'descricao_sessao' ); ?>

						<?php $link = get_field( 'link_sessao' ); ?>

						<?php if ( $link ): ?>
                            <a class="btn btn-primary" href="<?php echo $link['url']; ?>" role="button"
                               target="<?php echo $link['target'] ? $link['target'] : '_self'; ?>">
                                SAIBA MAIS
                            </a>
						<?php endif; ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="inner-sidebar shedule-front">
                            <div class="inner-time-info">
                                <div class="clock"><img
                                            src="<?php bloginfo( 'template_directory' ); ?>/img/images/clock.png"
                                            alt=""></div>
                                <h6>Horário</h6>
                                <p style="color: #000">At vero eos et accusamus et iusto odio dignissimos
                                    ducimus.</p>
                            </div>
                            <div class="span-schedule">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <span class="badge">9:00 - 18:00</span>
                                        Segunda a Sexta
                                    </li>
                                    <li class="divider-schedule"></li>
                                    <li class="list-group-item">
                                        <span class="badge">9:00 - 13:00</span>
                                        Sábados
                                    </li>
                                    <li class="divider-schedule"></li>
                                    <li class="list-group-item">
                                        <span class="badge">Emergências</span>
                                        Domingo
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<?php $servicos = get_field( 'servicos' ); ?>
	<?php if ( $servicos ): ?>
        <div class="main colored">
            <div class="section">
                <div class="section-title">
                    <h2>SERVIÇOS</h2>
                    <hr class="center">
					<?php $descricao_de_servicos = get_field( 'descricao_de_servicos' ); ?>
					<?php if ( $descricao_de_servicos ): ?>
                        <p><?php echo $descricao_de_servicos; ?></p>
					<?php endif ?>
                </div>
                <div class="row">
					<?php foreach ( $servicos as $key => $item ): ?>
						<?php $img = wp_get_attachment_image_src( $item['icone'], 'full' ); ?>
                        <div class="col-sm-6 col-md-4">
                            <div class="services">
                                <div class="icon">
                                    <img src="<?php echo $img[0] ?>" alt="<?php the_title(); ?>">
                                </div>
                                <h5><?php echo $item['titulo'] ?></h5>
                                <p>
									<?php echo $item['descricao'] ?>
                                </p>
                            </div>
                        </div>
					<?php endforeach; ?>
                </div>
            </div>
        </div>
	<?php endif; ?>

	<?php wp_reset_query(); ?>

	<?php $clientes = get_field( 'clientes' ); ?>
	<?php if ( $clientes ): ?>
        <div class="main">
            <div class="section">
                <div class="section-title">
                    <h2>NOSSOS CLIENTES</h2>
                    <hr class="center">
                </div>
                <div class="main-gallery">
					<?php foreach ( $clientes as $key => $item ): ?>
						<?php $img = wp_get_attachment_image_src( $item['foto'], 'full' ); ?>

                        <div class="gallery-cell">
                            <div class="testimonial-section">
                                <div class="avatar">
                                    <img src="<?php echo $img[0] ?>" alt="<?php the_title(); ?>">
                                </div>
                                <div class="testimonial-quote">
									<?php echo $item['comentario']; ?>
                                </div>
                                <div class="autor">
                                    <h5><?php echo $item['nome']; ?></h5>
                                </div>
                            </div>
                        </div>
					<?php endforeach; ?>
                </div>
            </div>
        </div>
	<?php endif; ?>

	<?php wp_reset_query(); ?>

	<?php $informacoes = get_field( 'informacoes' ); ?>

	<?php if ( $informacoes ): ?>
        <div class="main parallax">
            <img src="<?php bloginfo( 'template_directory' ); ?>/img/images/medical2.jpg" data-speed="-1.5"
                 class="img-parallax" alt="...">
            <div class="inner-counter">
                <div class="row">
					<?php if ( $informacoes['consultorios'] ): ?>
                        <div class="col-xs-6 col-sm-3 col-md-3">
                            <circle-counter>
                                <div class="counter-icon">
                                    <i class="fa fa-hospital-o" aria-hidden="true"></i>
                                </div>
                                <span class="counter circle"><?php echo $informacoes['consultorios']; ?></span>
                                <h5>CONSULTÒRIOS</h5>
                            </circle-counter>
                        </div>
					<?php endif; ?>

					<?php if ( $informacoes['especialistas'] ): ?>
                        <div class="col-xs-6 col-sm-3 col-md-3">
                            <circle-counter>
                                <div class="counter-icon">
                                    <i class="fa fa-user-md" aria-hidden="true"></i>
                                </div>
                                <span class="counter circle"><?php echo $informacoes['especialistas']; ?></span>
                                <h5>ESPECIALISTAS</h5>
                            </circle-counter>
                        </div>
					<?php endif; ?>

					<?php if ( $informacoes['atendimentos'] ): ?>
                        <div class="col-xs-6 col-sm-3 col-md-3">
                            <circle-counter>
                                <div class="counter-icon">
                                    <i class="fa fa-medkit" aria-hidden="true"></i>
                                </div>
                                <span class="counter circle"><?php echo $informacoes['atendimentos']; ?></span>
                                <h5>ATENDIMENTOS</h5>
                            </circle-counter>
                        </div>
					<?php endif; ?>

					<?php if ( $informacoes['clientes'] ): ?>
                        <div class="col-xs-6 col-sm-3 col-md-3">
                            <circle-counter>
                                <div class="counter-icon">
                                    <i class="fa fa-smile-o" aria-hidden="true"></i>
                                </div>
                                <span class="counter circle"><?php echo $informacoes['clientes']; ?></span>
                                <h5>CLIENTES</h5>
                            </circle-counter>
                        </div>
					<?php endif; ?>
                </div>
            </div>
        </div>
	<?php endif; ?>

    <div class="main">
        <div class="section">
            <div class="section-title">
                <h2><?php echo get_field( 'titulo_doutores' ) ?></h2>
                <hr class="center">
                <p>
					<?php echo get_field( 'descricao_doutores' ) ?>
                </p>
            </div>
            <div class="row">
				<?php echo get_template_part( 'partials/template', 'profissionais' ); ?>
            </div>
        </div>
    </div>

	<?php wp_reset_query(); ?>

    <div class="main">
        <div class="about">
            <div class="row">
                <div class="col-md-6">
					<?php
					$imagem_call    = get_field( 'imagem_call' );
					$possibilidades = get_field( 'possibilidades' );
					$titulo_call    = get_field( 'titulo_call' );
					$descricao_call = get_field( 'descricao_call' );
					$img            = wp_get_attachment_image_src( $imagem_call, 'full' );
					?>
                    <div class="panel-left" style="background-image: url(<?php echo $img[0]; ?>);"></div>
                </div>
                <div class="col-md-6">
                    <div class="panel-right">
						<?php if ( $titulo_call ): ?>
                            <h4>
								<?php echo $titulo_call; ?>
                            </h4>
						<?php endif; ?>
                        <hr class="short">
						<?php if ( $descricao_call ): ?>
                            <p>
								<?php echo $descricao_call; ?>
                            </p>
						<?php endif; ?>
                        <div class="checklist">
							<?php foreach ( $possibilidades as $possibilidade ): ?>
                                <p>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    &nbsp; <?php echo $possibilidade['opcao']; ?>
                                </p>
							<?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<?php $galeria = get_field( 'galeria' ); ?>

	<?php $tax_imagens = get_terms( array(
		'taxonomy'   => 'imagens',
		'hide_empty' => false,
	) ); ?>

	<?php if ( $galeria ): ?>

        <div class="main">
            <div class="section">
                <div class="section-title">
                    <h2>GALERIA</h2>
                    <hr class="center">
					<?php $descricao_galeria = get_field( 'descricao_galeria' ); ?>
					<?php if ( $descricao_galeria ): ?>
                        <p><?php echo $descricao_galeria ?></p>
					<?php endif; ?>
                </div>
                <nav class="nav">
                    <a href="#" class="nav-item active" data-rel="all">Todas</a>

					<?php foreach ( $tax_imagens as $tax_imagem ) : ?>
                        <a href="#" class="nav-item"
                           data-rel="<?php echo sanitize_title( $tax_imagem->name ); ?>">
							<?php echo $tax_imagem->name; ?>
                        </a>
					<?php endforeach; ?>
                </nav>
                <ul class="portfolio">
					<?php foreach ( $galeria as $item ) : ?>
						<?php $img = wp_get_attachment_image_src( $item['imagem'], 'galeria' ); ?>
						<?php $series = get_terms( array(
							'taxonomy'   => 'imagens',
							'include'    => $item['categoria'],
							'hide_empty' => false,
						) );

						$terms_tax = array_map( function ( $obj ) {
							return sanitize_title( $obj->name );
						}, $series );
						?>

                        <li class="project all <?php echo implode( ' ', $terms_tax ) ?>">
                            <div class="project-image">
                                <img src="<?php echo $img[0]; ?>" alt="<?php echo $item['título'] ?>">
                            </div>
                            <div class="project-info">
                                <h3 class="project-info-title">
									<?php echo $item['titulo'] ?>
                                </h3>
                                <a class="btn btn-default" href="<?php echo $item['link']['url']; ?>" role="button"
                                   target="<?php echo $item['link']['target'] ? $item['link']['target'] : '_self'; ?>">
                                    SAIBA MAIS
                                </a>
                            </div>
                        </li>
					<?php endforeach; ?>
                </ul>
            </div>
        </div>

	<?php endif; ?>

	<?php wp_reset_query(); ?>
</div>
<!-- END MAIN CONTAINER -->

<?php echo get_template_part( 'partials/template', 'footer' ); ?>

<?php get_footer(); ?>
