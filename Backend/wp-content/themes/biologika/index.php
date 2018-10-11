<?php get_header(); ?>

<!-- MAIN CONTAINER -->
<div class="wrapper">
	<?php echo get_template_part( 'partials/template', 'navigation' ); ?>

	<?php echo get_template_part( 'partials/template', 'vitrine' ); ?>

    <div class="main">
        <div class="section">
            <div class="row">
                <div class="col-md-8">
                    <div class="about-us">
                        <h2>SORRISO
                            <title-color>LINDO E NATURAL</title-color>
                        </h2>
                        <hr class="short">
                        <h5>A vida começa melhor com um sorriso bonito</h5>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                            cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
                        <a class="btn btn-primary" href="blog-detalhe.html" role="button">SAIBA MAIS</a>
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
                                <p style="color: #000">At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
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

    <div class="main parallax">
		<?php $informacoes = get_field( 'informacoes' ); ?>

        <img src="<?php bloginfo( 'template_directory' ); ?>/img/images/medical2.jpg" data-speed="-1.5" class="img-parallax" alt="...">
        <div class="inner-counter">
            <div class="row">
				<?php if ( $informacoes['consultorios'] ): ?>
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <circle-counter>
                            <div class="counter-icon">
                                <i class="fa fa-hospital-o" aria-hidden="true"></i>
                            </div>
                            <span class="counter circle">
                                <?php echo $informacoes['consultorios']; ?>
                            </span>
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
                            <span class="counter circle">
                                <?php echo $informacoes['especialistas']; ?>
                            </span>
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
                            <span class="counter circle">
                                <?php echo $informacoes['atendimentos']; ?>
                            </span>
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
                        <span class="counter circle">
                                <?php echo $informacoes['clientes']; ?>
                            </span>
                        <h5>CLIENTES</h5>
                    </circle-counter>
                </div>
	            <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="main">
        <div class="section">
            <div class="section-title">
                <h2>NOSSOS DOUTORES</h2>
                <hr class="center">
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
            </div>
            <div class="row">
	            <?php echo get_template_part( 'partials/template', 'profissionais' ); ?>
            </div>
        </div>
    </div>

    <div class="main">
        <div class="about">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel-left"></div>
                </div>
                <div class="col-md-6">
                    <div class="panel-right">
                        <h4>Conquistando um sorriso lindo através de bons costumes</h4>
                        <hr class="short">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
                        <div class="checklist">
                            <p><i class="fa fa-check" aria-hidden="true"></i>&nbsp; Escovar os dentes depois de cada
                                refeição.</p>
                            <p><i class="fa fa-check" aria-hidden="true"></i>&nbsp; Trocando a escova de dentes.</p>
                            <p><i class="fa fa-check" aria-hidden="true"></i>&nbsp; Escolha suas bebidas com sabedoria.
                            </p>
                            <p><i class="fa fa-check" aria-hidden="true"></i>&nbsp; Escove cuidadosamente.</p>
                            <p><i class="fa fa-check" aria-hidden="true"></i>&nbsp; Fio dental sempre.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main">
        <div class="section">
            <div class="section-title">
                <h2>GALERIA</h2>
                <hr class="center">
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
            </div>
            <nav class="nav">
                <a href="#" class="nav-item active" data-rel="project">Todas</a>
                <a href="#" class="nav-item" data-rel="option-1">ENDODONTIA</a>
                <a href="#" class="nav-item" data-rel="option-2">PERIODONTIA</a>
                <a href="#" class="nav-item" data-rel="option-3">DENTÍSTICA</a>
            </nav>
            <ul class="portfolio">
                <li class="project option-1">
                    <div class="project-image"><img
                                src="<?php bloginfo( 'template_directory' ); ?>/img/images/service1.jpg" alt=""></div>
                    <div class="project-info">
                        <h3 class="project-info-title">Endodontia</h3>
                        <a class="btn btn-default" href="http://www.themesquality.com/templates/dentalcare/#"
                           role="button">SAIBA MAIS</a>
                    </div>
                </li>
                <li class="project option-3">
                    <div class="project-image"><img
                                src="<?php bloginfo( 'template_directory' ); ?>/img/images/service10.jpg" alt=""></div>
                    <div class="project-info">
                        <h3 class="project-info-title">Dentística</h3>
                        <a class="btn btn-default" href="http://www.themesquality.com/templates/dentalcare/#"
                           role="button">SAIBA MAIS</a>
                    </div>
                </li>
                <li class="project option-2">
                    <div class="project-image"><img
                                src="<?php bloginfo( 'template_directory' ); ?>/img/images/service7.jpg" alt=""></div>
                    <div class="project-info">
                        <h3 class="project-info-title">Periodontia</h3>
                        <a class="btn btn-default" href="http://www.themesquality.com/templates/dentalcare/#"
                           role="button">SAIBA MAIS</a>
                    </div>
                </li>
                <li class="project option-3">
                    <div class="project-image"><img
                                src="<?php bloginfo( 'template_directory' ); ?>/img/images/service11.jpg" alt=""></div>
                    <div class="project-info">
                        <h3 class="project-info-title">Dentística</h3>
                        <a class="btn btn-default" href="http://www.themesquality.com/templates/dentalcare/#"
                           role="button">SAIBA MAIS</a>
                    </div>
                </li>
                <li class="project option-1">
                    <div class="project-image"><img
                                src="<?php bloginfo( 'template_directory' ); ?>/img/images/service2.jpg" alt=""></div>
                    <div class="project-info">
                        <h3 class="project-info-title">Endodontia</h3>
                        <a class="btn btn-default" href="http://www.themesquality.com/templates/dentalcare/#"
                           role="button">SAIBA MAIS</a>
                    </div>
                </li>
                <li class="project option-1">
                    <div class="project-image"><img
                                src="<?php bloginfo( 'template_directory' ); ?>/img/images/service3.jpg" alt=""></div>
                    <div class="project-info">
                        <h3 class="project-info-title">Endodontia</h3>
                        <a class="btn btn-default" href="http://www.themesquality.com/templates/dentalcare/#"
                           role="button">SAIBA MAIS</a>
                    </div>
                </li>
                <li class="project option-2">
                    <div class="project-image"><img
                                src="<?php bloginfo( 'template_directory' ); ?>/img/images/service8.jpg" alt=""></div>
                    <div class="project-info">
                        <h3 class="project-info-title">Periodontia</h3>
                        <a class="btn btn-default" href="http://www.themesquality.com/templates/dentalcare/#"
                           role="button">SAIBA MAIS</a>
                    </div>
                </li>
                <li class="project option-3">
                    <div class="project-image"><img
                                src="<?php bloginfo( 'template_directory' ); ?>/img/images/service12.jpg" alt=""></div>
                    <div class="project-info">
                        <h3 class="project-info-title">Dentística</h3>
                        <a class="btn btn-default" href="http://www.themesquality.com/templates/dentalcare/#"
                           role="button">SAIBA MAIS</a>
                    </div>
                </li>
                <li class="project option-1">
                    <div class="project-image"><img
                                src="<?php bloginfo( 'template_directory' ); ?>/img/images/service4.jpg" alt=""></div>
                    <div class="project-info">
                        <h3 class="project-info-title">Endodontia</h3>
                        <a class="btn btn-default" href="http://www.themesquality.com/templates/dentalcare/#"
                           role="button">SAIBA MAIS</a>
                    </div>
                </li>
                <li class="project option-2">
                    <div class="project-image"><img
                                src="<?php bloginfo( 'template_directory' ); ?>/img/images/service9.jpg" alt=""></div>
                    <div class="project-info">
                        <h3 class="project-info-title">Periodontia</h3>
                        <a class="btn btn-default" href="http://www.themesquality.com/templates/dentalcare/#"
                           role="button">SAIBA MAIS</a>
                    </div>
                </li>
                <li class="project option-1">
                    <div class="project-image"><img
                                src="<?php bloginfo( 'template_directory' ); ?>/img/images/service5.jpg" alt=""></div>
                    <div class="project-info">
                        <h3 class="project-info-title">Endodontia</h3>
                        <a class="btn btn-default" href="http://www.themesquality.com/templates/dentalcare/#"
                           role="button">SAIBA MAIS</a>
                    </div>
                </li>
                <li class="project option-1">
                    <div class="project-image"><img
                                src="<?php bloginfo( 'template_directory' ); ?>/img/images/service6.jpg" alt=""></div>
                    <div class="project-info">
                        <h3 class="project-info-title">Endodontia</h3>
                        <a class="btn btn-default" href="http://www.themesquality.com/templates/dentalcare/#"
                           role="button">SAIBA MAIS</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- END MAIN CONTAINER -->

<?php echo get_template_part( 'partials/template', 'footer' ); ?>

<?php get_footer(); ?>
