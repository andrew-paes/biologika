<div class="header">
    <div class="navbar">
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
            <div class="top-header">
                <div class="content">
                    <div class="leftside">
                        <div class="location-top"><p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; 2975
                                Avenida Cavalhada, Porto Alegre</p></div>
                        <div class="location-top"><p><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;
                                info@biologika.com.br</p></div>
                        <div class="location-top"><p><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp; +55 51
                                3242-5561</p></div>
                    </div>
                    <div class="rightside">
                        <div class="social-items"><p><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </p></div>
                        <div class="social-items"><p><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </p></div>
                        <div class="social-items"><p><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </p></div>
                        <div class="social-items"><p><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </p></div>
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
                        <li><a href="<?php echo home_url('/') ?>">HOME</a></li>
                        <!--<li><a href="sobre.html">SOBRE</a></li>-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                SERVIÇOS <span class="caret-drop"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="divider-top"></li>
                                <li>
                                    <a href="<?php echo get_permalink( get_page_by_path( 'cirurgia' ) ) ?>">Cirurgia</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="<?php echo get_permalink( get_page_by_path( 'dentistica' ) ) ?>">Dentística</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="<?php echo get_permalink( get_page_by_path( 'endodontia' ) ) ?>">Endodontia</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="<?php echo get_permalink( get_page_by_path( 'ortodontia' ) ) ?>">Ortodontia</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="<?php echo get_permalink( get_page_by_path( 'periodontia' ) ) ?>">Periodontia</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="<?php echo get_permalink( get_page_by_path( 'proteses' ) ) ?>">Protéses</a>
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