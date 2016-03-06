<?php
/**
 * Template Name: Category Template
 */
?>
    <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', 'page'); ?>
    <div class="row equipment-page">
        <section class="col-md-8 categories">
            <h1>Equipment</h1>
            <div class="row equal-cards">
                <?php $descendants = get_categories(array('child_of' => 12)); ?>
                <?php foreach ($descendants as $child) { ?>
                <?php $catPosts = new WP_Query(); $catPosts->query("showposts=3&cat=$child->term_id"); ?>
                <?php while ($catPosts->have_posts()) : $catPosts->the_post(); ?>
                <?php if (function_exists('get_wp_term_image')) {
                                $meta_image = get_wp_term_image($child->term_id); //It will give category/term image url 
                            }
                        ?>
                <div class="col-sm-6">
                    <div class="card">
                        <img src="<?php echo $meta_image ?>" class="card-img-top img-fluid" />
                        <div class="card-block">
                            <a href="<?php echo get_category_link($child->term_id); ?>">
                                <h2 class="card-title"><?php echo $child->cat_name; ?></h2>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php } ?>
            </div>
        </section>
        <section class="col-md-4 manufacturers">
            <h1>Manufacturers</h1>
            <div class="list-group">
                <?php $descendants = get_categories(array('child_of' => 13)); ?>
                <?php foreach ($descendants as $child) { ?>
                <?php $catPosts = new WP_Query(); $catPosts->query("showposts=3&cat=$child->term_id"); ?>
                <?php while ($catPosts->have_posts()) : $catPosts->the_post(); ?>
                <?php if (function_exists('get_wp_term_image')) {
                                $meta_image = get_wp_term_image($child->term_id); //It will give category/term image url 
                            }
                        ?>
                <a href="<?php echo get_category_link($child->term_id); ?>" class="list-group-item">
                    <h3><?php echo $child->cat_name; ?></h3>
                </a>
                <?php endwhile; ?>
                <?php } ?>
            </div>
        </section>
    </div>
    <?php endwhile; ?>
