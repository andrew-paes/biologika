<?php
$args  = [
	'post_type' => 'servicos',
	'fields'    => 'ids'
];
$query = new WP_Query( $args );
?>
<div class="sidebar">
	<?php if ( $query->have_posts() ): ?>
        <div class="inner-sidebar">
            <h5>Serviços</h5>
            <div class="list-group">
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<?php if ( is_single( get_the_ID() ) ): ?>
                        <a class="list-group-item active"><?php the_title(); ?></a>
					<?php else: ?>
                        <a class="list-group-item" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					<?php endif; ?>
				<?php endwhile; ?>

				<?php wp_reset_query(); ?>
            </div>
        </div>
	<?php endif; ?>

	<?php
	$page                    = get_page_by_path( 'contato' );
	$horarios_de_atendimento = get_field( 'horarios_de_atendimento', $page->ID );
	?>

    <div class="inner-sidebar shedule-front">
        <div class="inner-time-info">
            <div class="clock"><img src="img/images/clock.png" alt=""></div>
            <h6>Horários de atendimento</h6>
        </div>
        <div class="span-schedule">
            <ul class="list-group">
				<?php foreach ( $horarios_de_atendimento as $item ): ?>
                    <li class="list-group-item">
                        <span class="badge">
                            <?php
                            $horario = $item['horario_de_inicio'];

                            if ( $item['horario_de_fim'] ) {
	                            $horario .= " - {$item['horario_de_fim']}";
                            }

                            echo $horario;
                            ?>
                        </span>
						<?php echo $item['dias']; ?>
                    </li>
				<?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>