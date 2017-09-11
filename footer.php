</main>

<div class="container-fluid footer-contact-container">
    <div class="container">
    <h4 class="oswald inverse">Request a Quick Quote</h4>
    <?php // echo do_shortcode( '[contact-form-7 id="258" title="Footer Form" html_class="footer-form"]' ); ?>
    -- form --
    </div>
</div>


<div class="container-fluid ng-inverse subfooter-wrap">
    <div class="container subfooter">

        <div class="f-item logo"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo-footer.png" alt=""></a></div>

        <div class="f-item phone">
            <p>
                <img src="<?php bloginfo('template_url'); ?>/img/i-phone.png" alt="">
            </p>
            <p>
                <span>Phone: <a href="tel:13364997221">(336) 499-7221</a></span>
                Fax Us: (336) 499-6011
            </p>
        </div>

        <div class="f-item address">
            <p>
                <img src="<?php bloginfo('template_url'); ?>/img/i-home.png" alt="">
            </p>
            <p>
                <span>3302 Old Lexington Road</span>
                Winston-Salem, NC 27107
            </p>
        </div>

    </div>
</div>

<footer class="container-fluid site-footer">
    <div class="container">

        <div class="flex-footer">
            <nav class="f-item footer-nav" role="navigation">
                <ul>
                    <li><a href="<?php echo home_url(); ?>">Home</a></li>
                    <li><a href="<?php echo home_url('/products/'); ?>">Products</a></li>
                    <li><a href="<?php echo home_url('/about/'); ?>">About Us</a></li>
                    <li><a href="<?php echo home_url('/news/'); ?>">News</a></li>
                    <li><a href="<?php echo home_url('/contact/'); ?>">Contact</a></li>
                </ul>
            </nav>

            <div class="f-item associations">
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/assoc-sewa-sm.png" alt=""></a>
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/assoc-data-chambers-sm.png" alt=""></a>
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/assoc-ncwa-sm.png" alt=""></a>
            </div>
        </div>

        <div class="flex-footer">
            <div class="f-item copyright">Copyright &copy; <?php echo date("Y"); ?> Bins4 Shredding Inc. All rights reserved.</div>

            <div class="f-item netgain">Website Designed by <a href="http://www.netgainseo.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/netgain.png" alt=""></a></div>
        </div>

    </div>

</footer>

<div class="modal fade" id="popForm" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header popover-header">
                <h1 class="modal-title title">Get a Quote</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php // echo do_shortcode( '[contact-form-7 id="254" title="Popover Form" html_class="popover-form"]' ); ?>
            </div>
        </div>
    </div>
</div>

<div id="refContainer" class="container" style="visibility: hidden;"></div>
<div id="openNavOverlay"></div>
<div id="closeNav" class="close-nav">Close <i class="fa fa-times"></i></button></div>
<?php wp_footer(); ?>

<script>
var isSticky = false;
var siteHeader = jQuery(".site-header");
var mainNav = jQuery("#mainNav");

jQuery(document).on("scroll", function() {
    if ( jQuery(document).scrollTop() > 156 ) {
        if(!isSticky) {
            jQuery(siteHeader).hide();
            jQuery("body").addClass("sticky-header");
            jQuery(siteHeader).fadeIn('fast');
            isSticky = true;
        }
    } else {
        if(isSticky) {
            jQuery(siteHeader).hide();
            jQuery("body").removeClass("sticky-header");
            jQuery(siteHeader).fadeIn('fast');
            isSticky = false;
        }
    }
});

jQuery('#navToggle, #closeNav, #openNavOverlay, .get-quote').on('click', function() {
    // console.log(jQuery(this));
    // return false;
    if(jQuery(this).context.className != 'get-quote') {
        jQuery(mainNav).toggleClass('open');
        jQuery('#closeNav').toggleClass('open');
        jQuery('html').toggleClass('no-scroll');
        jQuery('body').toggleClass('no-scroll');
    } else {
        jQuery(mainNav).removeClass('open');
        jQuery('#closeNav').removeClass('open');
        jQuery('html').removeClass('no-scroll');
        jQuery('body').removeClass('no-scroll');
    }
    // console.log(jQuery(this).context.className);
});
</script>

</body>
</html>
