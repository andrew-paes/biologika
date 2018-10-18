<?php
$page                    = get_page_by_path( 'contato' );
$horarios_de_atendimento = get_field( 'horarios_de_atendimento', $page->ID );
$redes_sociais           = get_field( 'redes_sociais', $page->ID );
$facebook                = $redes_sociais['facebook'];
$twitter                 = $redes_sociais['twitter'];
$instagram               = $redes_sociais['instagram'];
$linkedin                = $redes_sociais['linkedin'];
?>

<div class="footer">
    <div class="main">
        <div class="row">
            <div class="col-md-7 footer-info">
                <div class="about-footer">
                    <div class="logo-brand">
                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/master/logo.png" alt="Biologica">
                    </div>

					<?php echo get_field( 'descricao', $page->ID ) ?>

                    <div class="footer-location">
                        <div class="inner-location">
                            <div class="fa-address"><i class="fa fa-location-arrow" aria-hidden="true"></i></div>
                            <div class="text-address">
                                <h6>Endereço</h6>
								<?php $endereco = get_field( 'endereco', $page->ID ); ?>
                                <p><?php echo $endereco['address']; ?></p>
                            </div>
                        </div>
                        <div class="inner-location">
                            <div class="fa-address"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                            <div class="text-address">
                                <h6>Horários</h6>
								<?php
								$counter = 0;
								$total   = count( $horarios_de_atendimento ) - 1;
								foreach ( $horarios_de_atendimento as $item ):
									?>
                                    <p style="padding-left: 35px; <?php echo $counter < $total ? 'margin-bottom: 5px;' : '' ?>">
										<?php echo $item['dias']; ?>
                                        <color-text>
											<?php
											$horario = $item['horario_de_inicio'];

											if ( $item['horario_de_fim'] ) {
												$horario .= " - {$item['horario_de_fim']}";
											}

											echo $horario;
											?>
                                        </color-text>
                                    </p>
									<?php
									$counter ++;
								endforeach;
								?>
                            </div>
                        </div>
                        <div class="inner-location">
                            <div class="fa-address"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                            <div class="text-address">
                                <h6>Email</h6>
                                <p><?php echo get_field( 'email', $page->ID ) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5 footer-maps">
                <div class="maps">
                    <div id="map"></div>
                    <script>
                        'use strict';

                        function initMap() {
                            // Styles a map in night mode.
                            var map = new google.maps.Map(document.getElementById('map'), {
                                center: {
                                    lat: -30.102396,
                                    lng: -51.231118
                                },
                                zoom  : 16,
                                styles: [
                                    {
                                        'featureType': 'all',
                                        'elementType': 'geometry.fill',
                                        'stylers'    : [
                                            {
                                                'weight': '2.00'
                                            }
                                        ]
                                    },
                                    {
                                        'featureType': 'all',
                                        'elementType': 'geometry.stroke',
                                        'stylers'    : [
                                            {
                                                'color': '#9c9c9c'
                                            }
                                        ]
                                    },
                                    {
                                        'featureType': 'all',
                                        'elementType': 'labels.text',
                                        'stylers'    : [
                                            {
                                                'visibility': 'on'
                                            }
                                        ]
                                    },
                                    {
                                        'featureType': 'landscape',
                                        'elementType': 'all',
                                        'stylers'    : [
                                            {
                                                'color': '#f2f2f2'
                                            }
                                        ]
                                    },
                                    {
                                        'featureType': 'landscape',
                                        'elementType': 'geometry.fill',
                                        'stylers'    : [
                                            {
                                                'color': '#ffffff'
                                            }
                                        ]
                                    },
                                    {
                                        'featureType': 'landscape.man_made',
                                        'elementType': 'geometry.fill',
                                        'stylers'    : [
                                            {
                                                'color': '#ffffff'
                                            }
                                        ]
                                    },
                                    {
                                        'featureType': 'poi',
                                        'elementType': 'all',
                                        'stylers'    : [
                                            {
                                                'visibility': 'off'
                                            }
                                        ]
                                    },
                                    {
                                        'featureType': 'road',
                                        'elementType': 'all',
                                        'stylers'    : [
                                            {
                                                'saturation': -100
                                            },
                                            {
                                                'lightness': 45
                                            }
                                        ]
                                    },
                                    {
                                        'featureType': 'road',
                                        'elementType': 'geometry.fill',
                                        'stylers'    : [
                                            {
                                                'color': '#eeeeee'
                                            }
                                        ]
                                    },
                                    {
                                        'featureType': 'road',
                                        'elementType': 'labels.text.fill',
                                        'stylers'    : [
                                            {
                                                'color': '#7b7b7b'
                                            }
                                        ]
                                    },
                                    {
                                        'featureType': 'road',
                                        'elementType': 'labels.text.stroke',
                                        'stylers'    : [
                                            {
                                                'color': '#ffffff'
                                            }
                                        ]
                                    },
                                    {
                                        'featureType': 'road.highway',
                                        'elementType': 'all',
                                        'stylers'    : [
                                            {
                                                'visibility': 'simplified'
                                            }
                                        ]
                                    },
                                    {
                                        'featureType': 'road.arterial',
                                        'elementType': 'labels.icon',
                                        'stylers'    : [
                                            {
                                                'visibility': 'off'
                                            }
                                        ]
                                    },
                                    {
                                        'featureType': 'transit',
                                        'elementType': 'all',
                                        'stylers'    : [
                                            {
                                                'visibility': 'off'
                                            }
                                        ]
                                    },
                                    {
                                        'featureType': 'water',
                                        'elementType': 'all',
                                        'stylers'    : [
                                            {
                                                'color': '#46bcec'
                                            },
                                            {
                                                'visibility': 'on'
                                            }
                                        ]
                                    },
                                    {
                                        'featureType': 'water',
                                        'elementType': 'geometry.fill',
                                        'stylers'    : [
                                            {
                                                'color': '#c8d7d4'
                                            }
                                        ]
                                    },
                                    {
                                        'featureType': 'water',
                                        'elementType': 'labels.text.fill',
                                        'stylers'    : [
                                            {
                                                'color': '#070707'
                                            }
                                        ]
                                    },
                                    {
                                        'featureType': 'water',
                                        'elementType': 'labels.text.stroke',
                                        'stylers'    : [
                                            {
                                                'color': '#ffffff'
                                            }
                                        ]
                                    }
                                ]
                            });

                            var marker = new google.maps.Marker({
                                position: {
                                    lat: <?php echo $endereco['lat']; ?>,
                                    lng: <?php echo $endereco['lng']; ?>
                                },
                                map     : map,
                                title   : 'Biologika'
                            });
                        }
                    </script>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKEb1AlchTdpu9dLzLVo8I8BNxYPlEldY&callback=initMap"
                            async defer></script>
                </div>
            </div>
        </div>

        <div class="bottom-footer">
            <div class="main">
                <div class="section">
                    <div class="column-left">
                        <p>© 2018 Direitos Reservados, Biologika</p>
                    </div>
                    <div class="column-right">
                        <div class="social-network">
	                        <?php if ( $facebook ): ?>
                                <a href="<?php echo $facebook; ?>">
                                    <div class="icon-fa">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </div>
                                </a>
	                        <?php endif; ?>

	                        <?php if ( $twitter ): ?>
                                <a href="<?php echo $twitter; ?>">
                                    <div class="icon-fa">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </div>
                                </a>
	                        <?php endif; ?>

	                        <?php if ( $instagram ): ?>
                                <a href="<?php echo $instagram; ?>">
                                    <div class="icon-fa">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </div>
                                </a>
	                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
