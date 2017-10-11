<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="icon" href="<?php echo bloginfo('url'); ?>/wp-content/uploads/2017/09/favicon.png" type="image/x-icon" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container flex-header">

        <div class="logo">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="">
            </a>
        </div>

        <div class="header-block">
            <div class="family-owned">
                <a class="social" href="https://www.linkedin.com/company/8863788/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/linkedin.png" alt=""></a>
                <em>Family Owned Business Since 1974</em>
            </div>
            <div class="phone">
            CALL US TODAY
            <a href="tel:13363314975">(336) 331-4975</a></div>
            <div class="address">3302 Old Lexington Road, Winston-Salem, NC 27107</div>
        </div>

    </div>

    <div class="header-nav">
        <div class="container">
            <a href="javascript:void(0);" id="navToggle" class="nav-toggle"><i class="fa fa-bars"></i></a>
            <nav id="mainNav" class="main-nav" role="navigation">
               <?php wp_nav_menu( array( 'theme_location' => 'main', 'container' => '' ) ); ?>
            </nav>
            <a href="javascript:void(0);" class="get-quote" data-toggle="modal" data-target="#popForm">GET A QUICK QUOTE</a>
        </div>
    </div>
</header>
<?php 
if (is_front_page())
{  }
elseif(is_home()) {
    echo '<div class="container-fluid  subpagebackground">';
        echo '<div class="container">';
            echo '<div class="row">';
                echo '<div class="col col-lg-12">';
                echo '<div class="bannertagline">';
                echo '<img src="'.get_bloginfo('url').'/wp-content/uploads/2017/09/SubPageThumbnails.png" class="subpageicon"/>';
                echo '<h1 class="subpagetitle"><span>\ \ \</span>Twin City Blog</h1>';
                echo '<h4 class="subpagetagline">What Is New With Twin City?</h4>';
                echo '</div>';
             echo '</div>';
            echo '</div>';
        echo '</div>';
    echo '</div>';

} else {
    echo '<div class="container-fluid  subpagebackground">';
        echo '<div class="container">';
            echo '<div class="row">';
                echo '<div class="col col-lg-12">';
                echo '<div class="bannertagline">';
                echo '<img src="'.get_bloginfo('url').'/wp-content/uploads/2017/09/SubPageThumbnails.png" class="subpageicon"/>';
                echo '<h1 class="subpagetitle">'.get_post_meta($post->ID, 'page-title', true).'</h1>';
                echo '<h4 class="subpagetagline">'.get_post_meta($post->ID, 'tag-line', true).'</h4>';
                echo '</div>';
             echo '</div>';
            echo '</div>';
        echo '</div>';
    echo '</div>';
}
?>

<main>
