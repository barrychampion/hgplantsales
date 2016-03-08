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
            <div class="container" role="document">
                <div class="content">
                    <main class="main">
                        <?php include Wrapper\template_path(); ?>
                    </main>
                    <!-- /.main -->
                    <?php if (Setup\display_sidebar()) : ?>
                    <aside class="sidebar">
                        <?php include Wrapper\sidebar_path(); ?>
                    </aside>
                    <!-- /.sidebar -->
                    <?php endif; ?>
                </div>
                <!-- /.content -->
            </div>
            <!-- /.wrap -->
            <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
                <!--     <script data-no-instant>InstantClick.init();</script> -->
                <script id="addJS">
                jQuery(document).ready(function($) {
                    $('#gallery-1').royalSlider({
                        fullscreen: {
                            enabled: false,
                            nativeFS: true
                        },
                        controlNavigation: 'thumbnails',
                        autoScaleSlider: true,
                        autoScaleSliderWidth: 1110,
                        autoScaleSliderHeight: 833,
                        loop: false,
                        imageScaleMode: 'fill',
                        navigateByClick: false,
                        numImagesToPreload: 2,
                        arrowsNav: false,
                        arrowsNavAutoHide: true,
                        arrowsNavHideOnTouch: true,
                        keyboardNavEnabled: true,
                        fadeinLoadedSlide: true,
                        globalCaption: false,
                        globalCaptionInside: false,
                        thumbs: {
                            appendSpan: true,
                            firstMargin: true,
                            paddingBottom: 0
                        }
                    });
                });
                </script>
    </body>

    </html>
