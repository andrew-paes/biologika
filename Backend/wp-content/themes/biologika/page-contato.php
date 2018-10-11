<?php get_header(); ?>

    <!-- MAIN CONTAINER -->
    <div class="wrapper">
		<?php echo get_template_part( 'partials/template', 'navigation' ); ?>

        <div class="pages-header">
            <div class="section-heading">
                <div class="section">
                    <div class="span-title">
                        <h1>Contact Us</h1>
                        <div class="page-map"><p>Home &nbsp;/&nbsp; Contact Us</p></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main">
            <div class="section">
                <div class="section-title">
                    <h2>GET IN TOUCH</h2>
                    <hr class="center">
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="sidebar">
                            <div class="address-box">
                                <div class="icon-circle"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                <div class="address-info">
                                    <h6>Address</h6>
                                    <p>1415 Woodlawn Ave. Buffalo New York, USA 10451.</p>
                                </div>
                            </div>

                            <div class="address-box">
                                <div class="icon-circle"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                <div class="address-info">
                                    <h6>Phone</h6>
                                    <p>212-869-3323</p>
                                </div>
                            </div>

                            <div class="address-box">
                                <div class="icon-circle"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                <div class="address-info">
                                    <h6>Email</h6>
                                    <p>info@dentalcare.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form id="contact-form" method="post" action="contact.php">
                            <div class="messages"></div>
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="form_name" type="text" name="name" class="form-control customize"
                                                   placeholder="Name" required="required"
                                                   data-error="Firstname is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="form_email" type="email" name="email"
                                                   class="form-control customize" placeholder="Email address"
                                                   required="required" data-error="Valid email is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="form_phone" type="tel" name="phone"
                                                   class="form-control customize" placeholder="Please enter your phone">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea id="form_message" name="message" class="form-control customize"
                                                      placeholder="Your message" rows="6" required="required"
                                                      data-error="Please,leave us a message."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <p><input type="submit" class="btn btn-primary" value="Send message"></p>
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

<?php echo get_template_part( 'partials/template', 'footer' ); ?>

<?php get_footer(); ?>