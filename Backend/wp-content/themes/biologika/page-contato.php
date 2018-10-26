<?php get_header(); ?>

<?php
$horarios_de_atendimento = get_field('horarios_de_atendimento');
$endereco = get_field('endereco');
$banner = get_field('banner');
$imgBanner = wp_get_attachment_image_src($banner, 'full');

$titulo = get_field('titulo');
$subtitulo = get_field('subtitulo');
$email = get_field('email');
$telefone = get_field('telefone');
$redes_sociais = get_field('redes_sociais');
$facebook = $redes_sociais['facebook'];
$twitter = $redes_sociais['twitter'];
$instagram = $redes_sociais['instagram'];
$linkedin = $redes_sociais['linkedin'];
?>

    <!-- MAIN CONTAINER -->
    <div class="wrapper">
        <?php echo get_template_part('partials/template', 'navigation'); ?>

        <div class="pages-header" style="background-image: url(<?php echo $imgBanner[0]; ?>);">
            <div class="section-heading">
                <div class="section">
                    <div class="span-title">
                        <h1>Contato</h1>
                        <div class="page-map"><p>Home &nbsp;/&nbsp; <?php echo $titulo; ?></p></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main">
            <div class="section">
                <div class="section-title">
                    <h2><?php echo $titulo; ?></h2>
                    <hr class="center">
                    <p>
                        <?php echo $subtitulo; ?>
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="sidebar">
                            <div class="address-box">
                                <div class="icon-circle"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                <div class="address-info">
                                    <h6>Endereço</h6>
                                    <p><?php echo $endereco['address']; ?></p>
                                </div>
                            </div>

                            <div class="address-box">
                                <div class="icon-circle"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                <div class="address-info">
                                    <h6>Telefone</h6>
                                    <p><?php echo $telefone; ?></p>
                                </div>
                            </div>

                            <div class="address-box">
                                <div class="icon-circle"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                <div class="address-info">
                                    <h6>Email</h6>
                                    <p><?php echo $email; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form id="contact-form" method="post" action="/email/form_contato.php">
                            <div class="messages"></div>
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="form_name" type="text" name="name" class="form-control customize"
                                                   placeholder="Nome" required="required"
                                                   data-error="Nome é obrigatório.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="form_email" type="email" name="email"
                                                   class="form-control customize" placeholder="Email"
                                                   required="required" data-error="Email é obrigatório.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="form_phone" type="tel" name="phone"
                                                   class="form-control customize" placeholder="Telefone">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea id="form_message" name="message"
                                                      class="form-control customize"
                                                      placeholder="Mensagem" rows="6" required="required"
                                                      data-error="Deixe sua mensagem."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <p><input type="submit" class="btn btn-primary" value="Enviar"></p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- END MAIN CONTAINER -->

<?php echo get_template_part('partials/template', 'footer'); ?>

<?php get_footer(); ?>