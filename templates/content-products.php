<div class="col-md-4">
    <article <?php post_class( 'card clearfix'); ?>>
              <?php
        $images = get_field('photos');
        $max = 1;
        $i = 0;

        if( $images ): ?>
        <?php foreach( $images as $image ): $i++; ?>
        <?php if( $i > $max){ break; } ?>
            <img src="<?php echo $image['sizes']['medium']; ?>" class="card-img-top img-fluid" />
        <?php endforeach; ?>
      <?php endif; ?>
        <div class="card-block">
            <header>
                <h2 class="card-title"><a href="<?php  the_permalink(); ?>"><?php  the_title(); ?></a></h2>
            </header>
            <div class="entry-summary">
                <?php the_excerpt(); ?>
            </div>
            <div class="row">
                <div class="col-xs-6 product-price">
                    <strong>£<?php the_field('price', $term); ?></strong>
                </div>
                <div class="col-xs-6 product-year text-xs-right">
                    <small>Year</small><br>
                    <strong><?php the_field('year', $term); ?></strong>
                </div>
            </div>
        </div>
    </article>
</div>