<div class="footer">
    <div class="main">
        <div class="row">
            <div class="col-md-7 footer-info">
                <div class="about-footer">
                    <div class="logo-brand">
                        <img src="<?php bloginfo( 'template_directory' ); ?>/img/master/logo.png" alt="Biologica">
                    </div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore.</p>

                    <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                        making this the first true generator.</p>

                    <div class="footer-location">
                        <div class="inner-location">
                            <div class="fa-address"><i class="fa fa-location-arrow" aria-hidden="true"></i></div>
                            <div class="text-address">
                                <h6>Endereço</h6>
                                <p>2975 Avenida Cavalhada, Porto Alegre</p>
                            </div>
                        </div>
                        <div class="inner-location">
                            <div class="fa-address"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                            <div class="text-address">
                                <h6>Horários</h6>
                                <p>Segunda a Sexta
                                    <color-text>9:00 - 18:00</color-text>
                                </p>
                            </div>
                        </div>
                        <div class="inner-location">
                            <div class="fa-address"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                            <div class="text-address">
                                <h6>Email</h6>
                                <p>info@biologika.com.br</p>
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
                                    lat: -30.102396,
                                    lng: -51.231118
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
                            <a href="#">
                                <div class="icon-fa"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                            </a>
                            <a href="#">
                                <div class="icon-fa"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                            </a>
                            <a href="#">
                                <div class="icon-fa"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
