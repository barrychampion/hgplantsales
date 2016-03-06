<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>
    <!doctype html>
    <html <?php language_attributes(); ?>>
    <?php get_template_part('templates/head'); ?>

    <body <?php body_class(); ?>>
        <?php get_template_part( 'templates/outdated-browser'); ?>
        <?php
  do_action('get_header');
  get_template_part('templates/header');
?>
            <section class="jumbotron">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="jumbotron-heading">Welcome</h1>
                            <p class="lead">HG Plant sales is a family owned and run business with over 40 years experience of buying and selling contractors plant and equipment, power tools and commercial vehicles.</p>
                            <div class="hidden-sm-down">
                                <hr>
                                <div class="row">
                                    <div class="col-xs-6 col-md-4">
                                        <a href="http://stores.ebay.co.uk/HG-Plant-Sales-Limited" target="_blank" data-no-instant><img src="wp-content/uploads/2016/03/ebay-370x148.png" class="img-ebay img-fluid"></a>
                                    </div>
                                    <div class="col-xs-6 col-md-8">
                                        <p>Buy used plant and equipment online from our <a href="http://stores.ebay.co.uk/HG-Plant-Sales-Limited" target="_blank" data-no-instant>eBay</a> store.</p>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <?php the_post_thumbnail('large', array('class' => 'img-thumbnail img-fluid hidden-sm-down')); ?>
                            <p><strong>Opening times: Monday - Friday 8am - 5pm and Saturday by appointment.</strong></p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="categories">
                <div class="container">
                    <div class="row equal-cards">
                        <?php $descendants = get_categories(array('child_of' => 12)); ?>
                        <?php foreach ($descendants as $child) { ?>
                        <?php $catPosts = new WP_Query(); $catPosts->query("showposts=3&cat=$child->term_id"); ?>
                        <?php while ($catPosts->have_posts()) : $catPosts->the_post(); ?>
                        <?php if (function_exists('get_wp_term_image')) {
                                    $meta_image = get_wp_term_image($child->term_id); //It will give category/term image url 
                                }
                            ?>
                        <div class="col-sm-6 col-lg-4">
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
                </div>
            </section>
            <div class="container" role="document">
                <div class="content row">
                    <main class="main">
                        <?php include Wrapper\template_path(); ?>
                    </main>
                    <!-- /.main -->
                </div>
                <!-- /.content -->
            </div>
            <!-- /.wrap -->
            <?php
  do_action('get_footer');
  get_template_part('templates/footer');
  wp_footer();
?>
                <!-- <script data-no-instant>InstantClick.init();</script>-->
    </body>

    </html>
