<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
    <div id="gallery-1" class="royalSlider rsDefault">
            <?php
            $images = get_field('photos');
            $max = 10;
            $i = 0;

        if( $images ): ?>
        <?php foreach( $images as $image ): $i++; ?>
        <?php if( $i > $max){ break; } ?>
        <a class="rsImg" data-rsBigImg="<?php echo $image['sizes']['large']; ?>" href="<?php echo $image['sizes']['large']; ?>">
          <img class="rsTmb" src="<?php echo $image['sizes']['thumbnail']; ?>" />
        </a>
        <?php endforeach; ?>
        <?php endif; ?>
        </div>
      <?php the_content(); ?>
    </div>
    <div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
  </article>
<?php endwhile; ?>
