<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
    <!-- MAIN CONTAINER -->
    <div class="wrapper">
        <?php echo get_template_part('partials/template', 'navigation'); ?>

        <?php
        $nome = get_field('nome');
        $imagem = get_field('foto');
        $img = wp_get_attachment_image_src($imagem, 'full');

        $imagem_do_parallax = get_field('imagem_do_parallax');
        $img_do_parallax = wp_get_attachment_image_src($imagem_do_parallax, 'full');

        $especialidade = get_field('especialidade');
        $redes_sociais = get_field('redes_sociais');
        $horarios_de_atendimento = get_field('horarios_de_atendimento');
        $breve_descricao = get_field('breve_descricao');
        $especialidades_de_medicina = get_field('especialidades_de_medicina');
        $educacao = get_field('educacao');
        $experiencia = get_field('experiencia');
        $informacoes = get_field('informacoes');
        ?>

        <div class="pages-header">
            <div class="section-heading">
                <div class="section">
                    <div class="span-title">
                        <h1><?php echo $nome; ?></h1>
                        <div class="page-map"><p>Home &nbsp;/&nbsp; <?php echo $nome; ?></p></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main">
            <div class="section">
                <div class="row">
                    <div class="col-md-4">
                        <div class="sidebar">
                            <div class="doctor-photo">
                                <img src="<?php echo $img[0] ?>" alt="<?php echo $nome; ?>" style="width:100%">
                                <div class="caption">
                                    <div class="doctor-socials" style="text-align: center; width: 200px;">
                                        <?php if ($redes_sociais['facebook']): ?>
                                            <a target="_blank"
                                               href="<?php echo $redes_sociais['facebook']; ?>"
                                               style="display: inline-block; vertical-align: middle;">
                                                <div class="icon-fa"><i class="fa fa-facebook" aria-hidden="true"></i>
                                                </div>
                                            </a>
                                        <?php endif; ?>

                                        <?php if ($redes_sociais['site']): ?>
                                            <a target="_blank"
                                               href="<?php echo $redes_sociais['site']; ?>"
                                               style="display: inline-block; vertical-align: middle;">
                                                <div class="icon-fa"><i class="fa fa-globe" aria-hidden="true"></i>
                                                </div>
                                            </a>
                                        <?php endif; ?>

                                        <?php if ($redes_sociais['linkedin']): ?>
                                            <a target="_blank"
                                               href="<?php echo $redes_sociais['linkedin']; ?>"
                                               style="display: inline-block; vertical-align: middle;">
                                                <div class="icon-fa"><i class="fa fa-linkedin" aria-hidden="true"></i>
                                                </div>
                                            </a>
                                        <?php endif; ?>

                                        <?php if ($redes_sociais['instagram']): ?>
                                            <a target="_blank"
                                               href="<?php echo $redes_sociais['instagram']; ?>"
                                               style="display: inline-block; vertical-align: middle;">
                                                <div class="icon-fa"><i class="fa fa-instagram" aria-hidden="true"></i>
                                                </div>
                                            </a>
                                        <?php endif; ?>

                                        <?php if ($redes_sociais['twitter']): ?>
                                            <a target="_blank"
                                               href="<?php echo $redes_sociais['twitter']; ?>"
                                               style="display: inline-block; vertical-align: middle;">
                                                <div class="icon-fa"><i class="fa fa-twitter" aria-hidden="true"></i>
                                                </div>
                                            </a>
                                        <?php endif; ?>

                                    </div>
                                </div>
                                <?php
                                if ($horarios_de_atendimento):
                                    $count = 0;
                                    $len = count($horarios_de_atendimento);
                                    ?>
                                    <div class="inner-sidebar doctor-schedule">
                                        <div class="inner-time-info">
                                            <div class="clock"><img src="img/images/clock.png" alt=""></div>
                                            <h6>Horários de atendimento</h6>
                                            <p>Veja que horas você pode marcar uma consulta.</p>
                                        </div>
                                        <div class="span-schedule">
                                            <ul class="list-group">
                                                <?php foreach ($horarios_de_atendimento as $item) : ?>
                                                    <li class="list-group-item">
                                                    <span class="badge">
                                                        <?php
                                                        $horario = $item['horario_de_inicio'];

                                                        if ($item['horario_de_fim']) {
                                                            $horario .= " - {$item['horario_de_fim']}";
                                                        }

                                                        echo $horario;
                                                        ?>
                                                    </span>
                                                        <?php echo $item['dias']; ?>
                                                    </li>

                                                    <?php if ($count < $len): ?>
                                                        <li class="divider-schedule"></li>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="doctor-information">
                            <h4><?php echo $nome; ?></h4>
                            <h6><?php echo $especialidade; ?></h6>
                            <hr>
                            <?php if ($breve_descricao): ?>
                                <p><?php echo $breve_descricao; ?></p>
                                <hr>
                            <?php endif; ?>

                            <?php if ($especialidades_de_medicina): ?>
                                <h5>
                                    <i class="fa fa-stethoscope" aria-hidden="true"></i>&nbsp;
                                    Especialidades
                                </h5>
                                <?php foreach ($especialidades_de_medicina as $item) : ?>
                                    <div class="specialities">
                                        <h6><?php echo $item['especialidade']; ?></h6>
                                        <p><?php echo $item['descricao']; ?></p>
                                    </div>
                                <?php endforeach; ?>
                                <hr>
                            <?php endif; ?>
                            <?php if ($educacao): ?>
                                <h5>
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp;
                                    Educação
                                </h5>
                                <?php foreach ($educacao as $item) : ?>
                                    <div class="specialities">
                                        <h6><?php echo $item['faculdade']; ?></h6>
                                        <p><?php echo $item['descricao']; ?></p>
                                    </div>
                                <?php endforeach; ?>
                                <hr>
                            <?php endif; ?>
                            <?php if ($experiencia): ?>
                                <h5>
                                    <i class="fa fa-medkit" aria-hidden="true"></i>&nbsp;
                                    Experiências anteriores
                                </h5>
                                <?php foreach ($experiencia as $item) : ?>
                                    <div class="specialities">
                                        <h6><?php echo $item['lugar']; ?></h6>
                                        <p><?php echo $item['descricao']; ?></p>
                                    </div>
                                <?php endforeach; ?>
                                <hr>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php if ($informacoes): ?>
            <div class="main parallax">
                <img src="<?php echo $img_do_parallax[0]; ?>" data-speed="-1.5"
                     class="img-parallax" alt="...">
                <div class="inner-counter">
                    <div class="row">
                        <?php if ($informacoes['consultorios']): ?>
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

                        <?php if ($informacoes['especialistas']): ?>
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

                        <?php if ($informacoes['atendimentos']): ?>
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

                        <?php if ($informacoes['clientes']): ?>
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
                    <?php $ID = get_option('page_on_front'); ?>
                    <h2><?php echo get_field('titulo_doutores', $ID) ?></h2>
                    <hr class="center">
                    <p>
                        <?php echo get_field('descricao_doutores', $ID) ?>
                    </p>
                </div>
                <div class="row">
                    <?php
                    $args = [
                        'post_type' => 'profissionais',
                        'order' => 'ASC',
                        'orderby' => 'rand',
                        'posts_per_page' => 5,
                        'post__not_in' => [$post->ID]
                    ];
                    query_posts($args);
                    ?>

                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <?php
                            $imagem = get_field('foto');
                            $img = wp_get_attachment_image_src($imagem, 'full');
                            $nome = get_field('nome');
                            $especialidade = get_field('especialidade');
                            $descricao = get_field('descricao');
                            $redes_sociais = get_field('redes_sociais');
                            ?>

                            <div class="col-sm-4 col-md-4">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="card">
                                        <img src="<?php echo $img[0] ?>" alt="<?php echo $nome; ?>" style="width:100%">
                                        <div class="box-card">
                                            <h4><b><?php echo $nome; ?></b></h4>
                                            <h6><?php echo $especialidade; ?></h6>
                                            <p>
                                                <?php echo $descricao; ?>
                                            </p>
                                            <div class="span-icons">
                                                <?php if ($redes_sociais['linkedin']): ?>
                                                    <div class="card-icons">
                                                        <a href="<?php echo $redes_sociais['linkedin']; ?>">
                                                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                <?php endif; ?>

                                                <?php if ($redes_sociais['site']): ?>
                                                    <div class="card-icons">
                                                        <a href="<?php echo $redes_sociais['site']; ?>">
                                                            <i class="fa fa-dribbble" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                <?php endif; ?>

                                                <?php if ($redes_sociais['twitter']): ?>
                                                    <div class="card-icons">
                                                        <a href="<?php echo $redes_sociais['twitter']; ?>">
                                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </div>

    </div>
    <!-- END MAIN CONTAINER -->
<?php endwhile; ?>

<?php echo get_template_part('partials/template', 'footer'); ?>

<?php get_footer(); ?>