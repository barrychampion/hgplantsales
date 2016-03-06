<?php
/**
 * Template Name: Category
 */
?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="row">
        <div class="col-xs-8">
            <h1><?php single_cat_title(); ?></h1>
        </div>
        <div class="col-xs-4 text-xs-right hidden-sm-down">
            <a href="#" id="list" class="btn btn-default">
                <span class="fa fa-th-list">
            </span> List</a>
            <a href="#" id="grid" class="btn btn-default"><span class="fa fa-th"></span> Grid</a>
        </div>
    </div>
    <div id="products" class="row grid-view">
        <?php get_template_part('templates/content', 'products'); ?>
    </div>
    <?php endwhile; ?>
