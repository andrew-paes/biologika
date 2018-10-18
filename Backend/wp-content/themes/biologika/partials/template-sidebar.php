<?php
$args = [
	'post_type' => 'servicos',
	'fields'    => 'ids'
];
$q    = get_posts( $args );
$id   = get_the_ID();
?>
<div class="sidebar">
    <div class="inner-sidebar">
        <h5>Serviços</h5>
        <div class="list-group">
			<?php foreach ( $q as $post ): ?>
				<?php
				var_dump($post);
				var_dump($id == $post);
				var_dump($post);
                setup_postdata( $post );

				?>
				<?php $classActive = $id == $post ? 'active' : ''; ?>
                <a class="list-group-item <?php echo $classActive; ?>"
                   href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			<?php endforeach; ?>

			<?php wp_reset_postdata(); ?>
        </div>
    </div>
    <div class="inner-sidebar shedule-front">
        <div class="inner-time-info">
            <div class="clock"><img src="img/images/clock.png" alt=""></div>
            <h6>Opening hours</h6>
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