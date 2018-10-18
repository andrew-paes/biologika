<?php
$page                    = get_page_by_path( 'contato' );
$horarios_de_atendimento = get_field( 'horarios_de_atendimento', $page->ID );
$endereco                = get_field( 'endereco', $page->ID );
$email                   = get_field( 'email', $page->ID );
$telefone                = get_field( 'telefone', $page->ID );
$redes_sociais           = get_field( 'redes_sociais', $page->ID );
$facebook                = $redes_sociais['facebook'];
$twitter                 = $redes_sociais['twitter'];
$instagram               = $redes_sociais['instagram'];
$linkedin                = $redes_sociais['linkedin'];
?>

<div class="header">
    <div class="navbar">
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
            <div class="top-header">
                <div class="content">
                    <div class="leftside">
						<?php if ( $endereco ): ?>
                            <div class="location-top">
                                <p>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    &nbsp; <?php echo $endereco['address'] ?>
                                </p>
                            </div>
						<?php endif; ?>

						<?php if ( $email ): ?>
                            <div class="location-top">
                                <p>
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    &nbsp; <?php echo $email ?>
                                </p>
                            </div>
						<?php endif; ?>

						<?php if ( $telefone ): ?>
                            <div class="location-top">
                                <p>
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                    &nbsp; <?php echo $telefone ?>
                                </p>
                            </div>
						<?php endif; ?>
                    </div>
                    <div class="rightside">
						<?php if ( $facebook ): ?>
                            <div class="social-items">
                                <p>
                                    <a href="<?php echo $facebook; ?>">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </p>
                            </div>
						<?php endif; ?>

						<?php if ( $twitter ): ?>
                            <div class="social-items">
                                <p>
                                    <a href="<?php echo $twitter; ?>">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </p>
                            </div>
						<?php endif; ?>

						<?php if ( $instagram ): ?>
                            <div class="social-items">
                                <p>
                                    <a href="<?php echo $instagram; ?>">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </p>
                            </div>
						<?php endif; ?>

						<?php if ( $linkedin ): ?>
                            <div class="social-items">
                                <p>
                                    <a href="<?php echo $linkedin; ?>">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                </p>
                            </div>
						<?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo home_url( '/' ); ?>">
                        <div class="logo-brand">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/img/master/logo.png" alt="">
                        </div>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo home_url( '/' ) ?>">HOME</a></li>
                        <!--<li><a href="sobre.html">SOBRE</a></li>-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">
                                SERVIÇOS <span class="caret-drop"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="divider-top"></li>
                                <li>
                                    <a href="<?php echo get_permalink( get_page_by_path( 'cirurgia', OBJECT, 'servicos' ) ) ?>">Cirurgia</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="<?php echo get_permalink( get_page_by_path( 'dentistica', OBJECT, 'servicos' ) ) ?>">Dentística</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="<?php echo get_permalink( get_page_by_path( 'endodontia', OBJECT, 'servicos' ) ) ?>">Endodontia</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="<?php echo get_permalink( get_page_by_path( 'ortodontia', OBJECT, 'servicos' ) ) ?>">Ortodontia</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="<?php echo get_permalink( get_page_by_path( 'periodontia', OBJECT, 'servicos' ) ) ?>">Periodontia</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="<?php echo get_permalink( get_page_by_path( 'proteses', OBJECT, 'servicos' ) ) ?>">Protéses</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo get_permalink( get_page_by_path( 'blog' ) ) ?>">BLOG</a>
                        </li>
                        <li>
                            <a href="<?php echo get_permalink( get_page_by_path( 'equipe' ) ) ?>">EQUIPE</a>
                        </li>
                        <li>
                            <a href="<?php echo get_permalink( get_page_by_path( 'contato' ) ) ?>">CONTATO</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

