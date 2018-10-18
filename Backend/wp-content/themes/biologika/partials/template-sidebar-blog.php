<div class="sidebar">
    <div class="inner-sidebar">
        <div class="search-box">
            <form class="search-container">
                <div class="form-group" style="display:inline;">
                    <div class="input-group">
                        <input type="text" placeholder="Buscar" class="form-control">
                        <span class="input-group-addon">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </span>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="inner-sidebar">
        <div class="categories-box">
            <ul class="list-group">
				<?php $categories = get_categories(); ?>
				<?php if ( $categories ): ?>
					<?php foreach ( $categories as $item ) : ?>
                        <li class="list-group-item">
                            <span class="badge">(<?php echo $item->count; ?>)</span>
							<?php echo $item->name; ?>
                        </li>
                        <li class="divider-categories"></li>
					<?php endforeach; ?>
				<?php endif; ?>
            </ul>
        </div>
    </div>
    <div class="inner-sidebar">
		<?php echo do_shortcode( '[wpb_most_commented]' ); ?>
    </div>
</div>