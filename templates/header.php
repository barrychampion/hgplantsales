<header>
    <nav class="navbar">
        <div class="container">
            <div class="row navbar-top">
                <div class="col-xs-3 hidden-md-up">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <div class="col-xs-6">
                    <a class="navbar-brand pull-left" href="<?= esc_url(home_url('/')); ?>" title="Go Home"><img src="<?= get_template_directory_uri(); ?>/dist/images/hgplantsales-logo-light-hg.png" alt="<?php bloginfo('name'); ?>"></a>
                </div>
                <div class="col-xs-3 col-md-6 text-xs-right">
                    <a href="tel:01245 231 165" class="navbar-phone hidden-sm-down" data-no-instant><h3><i class="fa fa-phone"></i> 01245 231 165</h3></a>
<!--                     <a class="btn btn-search hidden-md-up">
                        <i class="fa fa-search"></i>
                    </a> -->
                </div>
            </div>
            <div id="navbar-collapse" class="collapse navbar-toggleable-sm text-xs-center text-sm-center">
                <div class="row">
                    <div class="col-md-7">
                        <ul class="nav navbar-nav">
<!--                             <li class="nav-item active">
                                <a class="nav-link" href="<?= esc_url(home_url('/')); ?>">Home</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="<?= esc_url(home_url('/')); ?>equipment/">Equipment</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= esc_url(home_url('/')); ?>sell-your-planttools">Sell Your Plant/Tools</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://stores.ebay.co.uk/HG-Plant-Sales-Limited" target="_blank" data-no-instant>eBay</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-5">
                        <ul class="nav navbar-nav pull-md-right">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= esc_url(home_url('/')); ?>about">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= esc_url(home_url('/')); ?>contact-us">Contact Us</a>
                            </li>
                        </ul>
                        <a href="tel:01245 231 165" class="btn btn-call btn-success btn-block hidden-md-up" data-no-instant><i class="fa fa-phone"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
