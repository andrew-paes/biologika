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
						$noticia        = $item['noticia'];
						$date           = strtotime( $noticia->post_date );
						$titulo         = $noticia->post_title;
						$constent       = strip_tags( $noticia->post_content );
						$corpo          = strlen( $constent ) > 150 ? substr( $constent, 0, 150 ) . '...' : $constent;
						$post_author_id = get_user_by( 'ID', $noticia->post_author );
						?>

						<?php var_dump( $item ); ?>

                        <div class="col-sm-6 col-md-4">
                            <div class="post-news">
                                <a href="<?php echo get_post_permalink( $noticia->ID ); ?>">
                                    <img src="http://placehold.it/800x500" alt="...">
                                </a>
                                <div class="post-date">
                                    <h3><?php echo date( 'd', $date ); ?></h3>
                                    <p><?php echo strtoupper( date( 'M', $date ) ); ?></p>
                                </div>
                                <div class="caption">
                                    <h5><?php echo $titulo ?></h5>
                                    <p>
										<?php echo $corpo; ?>
                                    </p>
                                    <div class="post-preview-detail">
                                        <p>Por <?php echo $post_author_id->data->display_name; ?>
                                            &nbsp;&nbsp;
                                            <i class="fa fa-comments-o" aria-hidden="true"></i>
											<?php if ( $noticia->comment_count > 0 ): ?>
                                                &nbsp; <?php echo $noticia->comment_count ?> comentários
											<?php endif ?>
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