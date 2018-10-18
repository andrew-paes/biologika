<?php get_header(); ?>

    <!-- MAIN CONTAINER -->
    <div class="wrapper">
		<?php echo get_template_part( 'partials/template', 'navigation' ); ?>

        <div class="pages-header">
            <div class="section-heading">
                <div class="section">
                    <div class="span-title">
                        <h1>Blog Right Sidebar</h1>
                        <div class="page-map"><p>Home &nbsp;/&nbsp; Blog Right Sidebar</p></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main">
            <div class="section">
                <div class="row">
                    <div class="col-md-9">
						<?php
						// Run WP_Query
						// change posts_per_page value to limit the number of posts
						// set the "paged" parameter (use 'page' if the query is on a static front page)
						$paged = ( get_query_var( 'pagina' ) ) ? get_query_var( 'pagina' ) : 1;

						$args = [
							"post_type"      => "post",
							"page"           => $paged,
							"posts_per_page" => 1
						];

						if ( get_query_var( 'categoria' ) ) {
							$args['cat'] = get_query_var( 'categoria' );
						}

						$query = new WP_Query( $args );

						//begin loop
						if ( $query->have_posts() ):
							while ( $query->have_posts() ) : $query->the_post();
								$post     = $query->post;
								$banner   = get_field( 'banner', $query->ID );
								$img      = wp_get_attachment_image_src( $banner, 'full' );
								$date     = strtotime( $post->post_date );
								$constent = strip_tags( $post->post_content );
								$corpo    = strlen( $constent ) > 150 ? substr( $constent, 0, 150 ) . '...' : $constent;
								?>

                                <div class="post-preview">
                                    <div class="photo-preview">
                                        <img class="media-object" src="<?php echo $img[0]; ?>"
                                             alt="<?php the_title(); ?>">
                                    </div>
                                    <div class="post-details">
                                        <h5 class="post-title"><?php the_title(); ?></h5>
                                        <p class="post-text">
											<?php echo $corpo; ?>
                                        </p>
                                        <p class="author"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;
											<?php echo date( 'm, Y H:m', $date ) ?></p>
                                        <p>
                                            <a href="<?php the_permalink(); ?>" type="button" class="btn btn-primary">
                                                Ler mais
                                            </a>
                                        </p>
                                    </div>
                                </div>
								<?php if ( ( $query->current_post + 1 ) != ( $query->post_count ) ): ?>
                                    <hr class="line-post">
								<?php endif; ?>

							<?php endwhile;
						// end loop
						else:
							?>
                            <h2>Nenhuma notícia encontrada...</h2>
						<?php
						endif;
						?>
                    </div>
                    <div class="col-md-3">
						<?php echo get_template_part( 'partials/template', 'sidebar-blog' ); ?>
                    </div>
                    <div class="span-pagination">
                        
                        <nav aria-label="Page navigation">
                            <div class="pagination">
                                <a href="#">Prev</a>
                                <a class="active" href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#">4</a>
                                <a href="#">5</a>
                                <a href="#">Next</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- END MAIN CONTAINER -->

<?php echo get_template_part( 'partials/template', 'footer' ); ?>

<?php get_footer(); ?>