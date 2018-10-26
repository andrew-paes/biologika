<?php get_header(); ?>

    <!-- MAIN CONTAINER -->
    <div class="wrapper">
        <?php echo get_template_part('partials/template', 'navigation'); ?>

        <div class="pages-header">
            <div class="section-heading">
                <div class="section">
                    <div class="span-title">
                        <h1><?php the_title() ?></h1>
                        <div class="page-map"><p>Home &nbsp;/&nbsp; <?php echo get_field('titulo'); ?></p></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main">
            <div class="section">
                <div class="section-title">
                    <h2><?php echo get_field('titulo_doutores'); ?></h2>
                    <hr class="center">

                    <?php $subtitle = get_field('subtitulo_doutores'); ?>

                    <?php if ($subtitle): ?>
                        <p>
                            <?php echo $subtitle; ?>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <?php echo get_template_part('partials/template', 'profissionais'); ?>
                </div>
            </div>
        </div>

        <div class="main">
            <div class="section">
                <div class="section-title">
                    <h2><?php echo get_field('titulo_noticias'); ?></h2>
                    <hr class="center">
                    <?php $subtitle = get_field('subtitulo_noticias'); ?>

                    <?php if ($subtitle): ?>
                        <p>
                            <?php echo $subtitle; ?>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <?php $posts = get_field('noticias'); ?>
                    <?php if ($posts): ?>
                        <?php foreach ($posts as $item): ?>

                            <?php
                            $noticia = $item['noticia'];
                            $date = strtotime($noticia->post_date);
                            $titulo = $noticia->post_title;
                            $banner = get_field('banner', $noticia->ID);
                            $constent = strip_tags($noticia->post_content);
                            $corpo = strlen($constent) > 150 ? substr($constent, 0, 150) . '...' : $constent;
                            $post_author_id = get_user_by('ID', $noticia->post_author);
                            ?>

                            <div class="col-sm-6 col-md-4">
                                <div class="post-news">
                                    <?php if ($banner): ?>
                                        <?php $img = wp_get_attachment_image_src($banner, 'full'); ?>
                                        <a href="<?php echo get_post_permalink($noticia->ID); ?>">
                                            <img src="<?php echo $img[0] ?>" alt="<?php echo $titulo; ?>">
                                        </a>
                                    <?php endif; ?>


                                    <div class="post-date">
                                        <h3><?php echo date('d', $date); ?></h3>
                                        <p><?php echo strtoupper(date('M', $date)); ?></p>
                                    </div>
                                    <div class="caption">
                                        <h5><?php echo $titulo ?></h5>
                                        <p>
                                            <?php echo $corpo; ?>
                                        </p>
                                        <div class="post-preview-detail">
                                            <p>Por <?php echo $post_author_id->data->display_name; ?>
                                                <?php if ($noticia->comment_count > 0): ?>
                                                    &nbsp;&nbsp;
                                                    <i class="fa fa-comments-o" aria-hidden="true"></i>
                                                    &nbsp; <?php echo $noticia->comment_count ?> comentários
                                                <?php endif ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTAINER -->

<?php echo get_template_part('partials/template', 'footer'); ?>

<?php get_footer(); ?>