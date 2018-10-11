<?php get_header(); ?>

    <!-- MAIN CONTAINER -->
    <div class="wrapper">
		<?php echo get_template_part( 'partials/template', 'navigation' ); ?>

        <div class="pages-header">
            <div class="section-heading">
                <div class="section">
                    <div class="span-title">
                        <h1>Doctor Profile</h1>
                        <div class="page-map"><p>Home &nbsp;/&nbsp; Doctor Profile</p></div>
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
                                <img src="http://placehold.it/800x900" alt="...">
                                <div class="caption">
                                    <div class="doctor-socials">
                                        <a href="#">
                                            <div class="icon-fa"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                        </a>
                                        <a href="#">
                                            <div class="icon-fa"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                        </a>
                                        <a href="#">
                                            <div class="icon-fa"><i class="fa fa-instagram" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="icon-fa"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="inner-sidebar doctor-schedule">
                                    <div class="inner-time-info">
                                        <div class="clock"><img src="img/images/clock.png" alt=""></div>
                                        <h6>Working hours</h6>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
                                    </div>
                                    <div class="span-schedule">
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <span class="badge">9:00 AM - 5:00 PM</span>
                                                Monday to Friday
                                            </li>
                                            <li class="divider-schedule"></li>
                                            <li class="list-group-item">
                                                <span class="badge">9:00 AM - 4:00 PM</span>
                                                Saturday
                                            </li>
                                            <li class="divider-schedule"></li>
                                            <li class="list-group-item">
                                                <span class="badge">9:00 AM - 1:00 PM</span>
                                                Sunday
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="doctor-information">
                            <h4>Dr. Sara Johnson</h4>
                            <h6>Dental Care Orthodontist Specialist</h6>
                            <hr>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <hr>

                            <h5><i class="fa fa-stethoscope" aria-hidden="true"></i>&nbsp; Medicine Specialties</h5>
                            <div class="specialities">
                                <h6>Endodontic Specialties:</h6>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                    voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                    occaecati cupiditate non provident.</p>
                            </div>
                            <div class="specialities">
                                <h6>Endodontic Specialties:</h6>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                    voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                    occaecati cupiditate non provident.</p>
                            </div>

                            <hr>
                            <h5><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp; Education</h5>
                            <div class="specialities">
                                <h6>North Carolina College:</h6>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                    voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                    occaecati cupiditate non provident.</p>
                            </div>

                            <hr>
                            <h5><i class="fa fa-medkit" aria-hidden="true"></i>&nbsp; Experience</h5>
                            <div class="specialities">
                                <h6>Medicalcare Hospital:</h6>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                    voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                    occaecati cupiditate non provident.</p>
                            </div>
                            <div class="specialities">
                                <h6>Hospiten Inc:</h6>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                    voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                    occaecati cupiditate non provident.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main parallax">
            <img src="http://placehold.it/1920x1920" data-speed="-1.5" class="img-parallax" alt="...">
            <div class="inner-counter">
                <div class="row">
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <circle-counter>
                            <div class="counter-icon">
                                <i class="fa fa-hospital-o" aria-hidden="true"></i>
                            </div>
                            <span class="counter circle">32</span>
                            <h5>DENTAL CLINICS</h5>
                        </circle-counter>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <circle-counter>
                            <div class="counter-icon">
                                <i class="fa fa-user-md" aria-hidden="true"></i>
                            </div>
                            <span class="counter circle">88</span>
                            <h5>SPECIALIST</h5>
                        </circle-counter>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <circle-counter>
                            <div class="counter-icon">
                                <i class="fa fa-medkit" aria-hidden="true"></i>
                            </div>
                            <span class="counter circle">1199</span>
                            <h5>EMERGENCY CASES</h5>
                        </circle-counter>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <circle-counter>
                            <div class="counter-icon">
                                <i class="fa fa-smile-o" aria-hidden="true"></i>
                            </div>
                            <span class="counter circle">6433</span>
                            <h5>CUSTOMERS</h5>
                        </circle-counter>
                    </div>
                </div>
            </div>
        </div>

        <div class="main">
            <div class="section">
                <div class="section-title">
                    <h2>OUR DOCTORS</h2>
                    <hr class="center">
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-md-4 card-col">
                        <div class="card">
                            <img src="http://placehold.it/800x750" alt="...">
                            <div class="box-card">
                                <h4><b>John Doe</b></h4>
                                <h6>Endodontist</h6>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form, by injected humour, or randomised words.</p>
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
                            <img src="http://placehold.it/800x750" alt="...">
                            <div class="box-card">
                                <h4><b>Lisa Doe</b></h4>
                                <h6>Orthodontist</h6>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form, by injected humour, or randomised words.</p>
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
                            <img src="http://placehold.it/800x750" alt="...">
                            <div class="box-card">
                                <h4><b>Sara Doe</b></h4>
                                <h6>Periodontist</h6>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form, by injected humour, or randomised words.</p>
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

    </div>
    <!-- END MAIN CONTAINER -->

<?php echo get_template_part( 'partials/template', 'footer' ); ?>

<?php get_footer(); ?>