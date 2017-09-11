<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container flex-header">

        <div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt=""></a></div>

        <div class="header-block">
            <div class="family-owned">
                <a class="social" href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/linkedin.png" alt=""></a>
                <em>Family Owned Business Since 1974</em>
            </div>
            <div class="phone">
            CALL US TODAY
            <a href="tel:13364997221">(336) 499-7221</a></div>
            <div class="address">3302 Old Lexington Road, Winston-Salem, NC 27107</div>
        </div>

    </div>

    <div class="header-nav">
        <div class="container">
            <a href="javascript:void(0);" id="navToggle" class="nav-toggle"><i class="fa fa-bars"></i></a>
            <nav id="mainNav" class="main-nav" role="navigation">
               <?php wp_nav_menu( array( 'theme_location' => 'main', 'container' => '' ) ); ?>
            </nav>
            <!-- <a href="javascript:void(0);" class="get-quote" data-toggle="modal" data-target="#popForm">GET A QUOTE</a> -->
        </div>
    </div>
</header>

<main>
