<?php get_header(); ?>

    <!-- MAIN CONTAINER -->
    <div class="wrapper">
		<?php echo get_template_part( 'partials/template', 'navigation' ); ?>

        <div class="pages-header">
            <div class="section-heading">
                <div class="section">
                    <div class="span-title">
                        <h1><?php the_title() ?></h1>
                        <div class="page-map"><p>Home &nbsp;/&nbsp; <?php echo get_field( 'titulo' ); ?></p></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main">
            <div class="section">
                <div class="section-title">
                    <h2><?php echo get_field( 'titulo_doutores' ); ?></h2>
                    <hr class="center">

					<?php $subtitle = get_field( 'subtitulo_doutores' ); ?>

					<?php if ( $subtitle ): ?>
                        <p>
							<?php echo $subtitle; ?>
                        </p>
					<?php endif; ?>
                </div>
                <div class="row">
					<?php echo get_template_part( 'partials/template', 'profissionais' ); ?>
                </div>
            </div>
        </div>

        <div class="main">
            <div class="section">
                <div class="section-title">
                    <h2><?php echo get_field( 'titulo_noticias' ); ?></h2>
                    <hr class="center">
					<?php $subtitle = get_field( 'subtitulo_noticias' ); ?>

					<?php if ( $subtitle ): ?>
                        <p>
							<?php echo $subtitle; ?>
                        </p>
					<?php endif; ?>
                </div>
                <div class="row">
					<?php $posts = get_field( 'noticias' ); ?>
					<?php foreach ( $posts as $item ): ?>

						<?php
						$noticia = $item['noticia'];
						$date    = strtotime( $noticia->post_date );
						?>

						<?php var_dump( $item ); ?>

                        <div class="col-sm-6 col-md-4">
                            <div class="post-news">
                                <a href="#">
                                    <img src="http://placehold.it/800x500" alt="...">
                                </a>
                                <div class="post-date">
                                    <h3><?php echo date( 'd', $date ); ?></h3>
                                    <p><?php echo strtoupper( date( 'M', $date ) ); ?></p>
                                </div>
                                <div class="caption">
                                    <h5>Clareamento e Higieme</h5>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque
                                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
                                    <div class="post-preview-detail">
                                        <p>Por Vanessa Chazan &nbsp;&nbsp; <i class="fa fa-comments-o"
                                                                              aria-hidden="true"></i>
                                            &nbsp; 165 comentários
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
					<?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTAINER -->

<?php echo get_template_part( 'partials/template', 'footer' ); ?>

<?php get_footer(); ?>