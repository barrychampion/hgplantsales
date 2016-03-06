<div class="col-md-4">
    <article <?php post_class( 'card clearfix'); ?>
        <img class="card-img-top img-fluid" src="http://placehold.it/370x208?text=..." alt="">
        <div class="card-block">
            <header>
                <h2 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </header>
            <div class="entry-summary">
                <?php the_excerpt(); ?>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <p>£<?php the_field('price', $term); ?></p>
                </div>
                <div class="col-xs-6 text-xs-right">
                    <p><?php the_field('year', $term); ?></p>
                </div>
            </div>
        </div>
    </article>
</div>
