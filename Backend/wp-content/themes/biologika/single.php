<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <!-- MAIN CONTAINER -->
    <div class="wrapper">
		<?php echo get_template_part( 'partials/template', 'navigation' ); ?>

		<?php
		$post_author = get_user_by( 'ID', $post->post_author );
		$date        = strtotime( $post->post_date );
		$banner      = get_field( 'banner' );
		?>

        <div class="pages-header">
            <div class="section-heading">
                <div class="section">
                    <div class="span-title">
                        <h1><?php the_title(); ?></h1>
                        <div class="page-map"><p>Home &nbsp;/&nbsp; <?php the_title(); ?></p></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main">
            <div class="section">
                <div class="row">
                    <div class="col-md-9">
                        <div class="post-content">
							<?php if ( $banner ): ?>
								<?php $img = wp_get_attachment_image_src( $banner, 'full' ); ?>
                                <div class="post-photo">
                                    <img src="<?php echo $img[0] ?>" alt="<?php the_title(); ?>">
                                </div>
							<?php endif; ?>
                            <div class="post-author">
                                <h6>
                                    Por <?php echo $post_author->data->display_name; ?>
                                    em <?php echo date( 'm, Y H:m', $date ) ?>
                                </h6>
                            </div>
                            <div class="post-title"><h1><?php the_title(); ?></h1></div>
                            <div class="post-content">
								<?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
	                    <?php echo get_template_part( 'partials/template', 'sidebar-blog' ); ?>
                    </div>
                </div>
                <div class="comments">
                    <div id="disqus_thread"></div>
                    <script>

                        /**
                         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                        /*
                         var disqus_config = function () {
                         this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                         this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                         };
                         */
                        (function () { // DON'T EDIT BELOW THIS LINE
                            var d = document,
                                s = d.createElement('script');
                            s.src = 'https://quickdevs-1.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments
                            powered by Disqus.</a></noscript>
                </div>
            </div>
        </div>

    </div>
    <!-- END MAIN CONTAINER -->
<?php endwhile; ?>

<?php echo get_template_part( 'partials/template', 'footer' ); ?>

<?php get_footer(); ?>