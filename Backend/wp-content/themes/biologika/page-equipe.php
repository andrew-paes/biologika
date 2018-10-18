<?php get_header(); ?>

    <!-- MAIN CONTAINER -->
    <div class="wrapper">
		<?php echo get_template_part( 'partials/template', 'navigation' ); ?>

        <div class="pages-header">
            <div class="section-heading">
                <div class="section">
                    <div class="span-title">
                        <h1><?php the_title() ?></h1>
                        <div class="page-map"><p>Home &nbsp;/&nbsp; Equipe</p></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main">
            <div class="section">
                <div class="section-title">
                    <h2>NOSSOS DOUTORES</h2>
                    <hr class="center">

					<?php $subtitle = get_field( 'sub-titulo' ); ?>

					<?php if ( $subtitle ): ?>
                        <p>
							<?php echo $subtitle; ?>
                        </p>
					<?php endif; ?>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-md-4">
                        <div class="card">
                            <img src="img/images/staff.jpg" alt="Avatar" style="width:100%">
                            <div class="box-card">
                                <h4><b>Vanessa Chazan</b></h4>
                                <h6>Prótese</h6>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
                                <div class="span-icons">
                                    <div class="card-icons"><a href="#"><i class="fa fa-linkedin"
                                                                           aria-hidden="true"></i></a></div>
                                    <div class="card-icons"><a href="#"><i class="fa fa-dribbble"
                                                                           aria-hidden="true"></i></a></div>
                                    <div class="card-icons"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="card">
                            <img src="img/images/staff2.jpg" alt="Avatar" style="width:100%">
                            <div class="box-card">
                                <h4><b>Maurício Anastacio</b></h4>
                                <h6>Periodontia</h6>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
                                <div class="span-icons">
                                    <div class="card-icons"><a href="#"><i class="fa fa-linkedin"
                                                                           aria-hidden="true"></i></a></div>
                                    <div class="card-icons"><a href="#"><i class="fa fa-dribbble"
                                                                           aria-hidden="true"></i></a></div>
                                    <div class="card-icons"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="card">
                            <img src="img/images/staff3.jpg" alt="Avatar" style="width:100%">
                            <div class="box-card">
                                <h4><b>Fernanda Kruger Bidese</b></h4>
                                <h6>Ortodontia</h6>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
                                <div class="span-icons">
                                    <div class="card-icons"><a href="#"><i class="fa fa-linkedin"
                                                                           aria-hidden="true"></i></a></div>
                                    <div class="card-icons"><a href="#"><i class="fa fa-dribbble"
                                                                           aria-hidden="true"></i></a></div>
                                    <div class="card-icons"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-4">
                        <div class="card">
                            <img src="img/images/staff.jpg" alt="Avatar" style="width:100%">
                            <div class="box-card">
                                <h4><b>Andressa Gasparetto Moreira</b></h4>
                                <h6>Exodontia</h6>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
                                <div class="span-icons">
                                    <div class="card-icons"><a href="#"><i class="fa fa-linkedin"
                                                                           aria-hidden="true"></i></a></div>
                                    <div class="card-icons"><a href="#"><i class="fa fa-dribbble"
                                                                           aria-hidden="true"></i></a></div>
                                    <div class="card-icons"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main">
            <div class="section">
                <div class="section-title">
                    <h2>NOTÍCIAS</h2>
                    <hr class="center">
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="post-news">
                            <a href="#"><img src="http://placehold.it/800x500" alt="..."></a>
                            <div class="post-date">
                                <h3>11</h3>
                                <p>JAN</p>
                            </div>
                            <div class="caption">
                                <h5>Clareamento e Higieme</h5>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
                                <div class="post-preview-detail"><p>Por Vanessa Chazan &nbsp;&nbsp; <i
                                                class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 165 comentários
                                    </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="post-news">
                            <a href="#"><img src="http://placehold.it/800x500" alt="..."></a>
                            <div class="post-date">
                                <h3>23</h3>
                                <p>DEZ</p>
                            </div>
                            <div class="caption">
                                <h5>Tratamentos Curtos</h5>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
                                <div class="post-preview-detail"><p>Por Maurício &nbsp;&nbsp; <i
                                                class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 235 comentários
                                    </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="post-news">
                            <a href="#"><img src="http://placehold.it/800x500" alt="..."></a>
                            <div class="post-date">
                                <h3>18</h3>
                                <p>DEZ</p>
                            </div>
                            <div class="caption">
                                <h5>Aparelhos Ortodônticos</h5>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
                                <div class="post-preview-detail"><p>Por Andressa &nbsp;&nbsp; <i
                                                class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; 165 comentários
                                    </p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTAINER -->

<?php echo get_template_part( 'partials/template', 'footer' ); ?>

<?php get_footer(); ?>