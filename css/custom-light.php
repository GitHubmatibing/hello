<?php
function custom_light() {
	
	$current_options = wp_parse_args(  get_option( 'busiprof_pro_theme_options', array() ), theme_data_setup() );
	$link_color = $current_options['link_color'];
	list($r, $g, $b) = sscanf($link_color, "#%02x%02x%02x");
	$r = $r - 50;
	$g = $g - 25;
	$b = $b - 40;
	
	if ( $link_color != '#ff0000' ) :
	?>
<style type="text/css">

body { background: #ffffff; color: #8f969c; }
#wrapper { background-color: #ffffff; }

.woocommerce span.onsale, 
.woocommerce #respond input#submit.alt, 
.woocommerce #respond input#submit.alt:hover, 
.woocommerce a.button.alt, 
.woocommerce a.button.alt:hover, 
.woocommerce button.button.alt, 
.woocommerce button.button.alt:hover,
.woocommerce input.button.alt,  
.woocommerce input.button.alt:hover, 
.woocommerce .woocommerce-error:before, 
.woocommerce .label,  
.woocommerce .badge, 
.woocommerce nav.woocommerce-pagination ul li a:focus, 
.woocommerce nav.woocommerce-pagination ul li a:hover, 
.woocommerce nav.woocommerce-pagination ul li span.current, 
.testi-next:hover, .testi-prev:hover {
background-color:<?php echo $link_color; ?>;
}

.dropdown-menu { background-color:<?php echo $link_color; ?> }

.dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus,
.dropdown-menu > .active > a, .dropdown-menu > .active > a:hover, .dropdown-menu > .active > a:focus { background-color: rgba(0, 0, 0, 0.1); }

.custom-background, .avatar .tooltip-inner, .widget table caption, .widget table tbody a, .paginations span.current, 
.btn-wrap a, .btn-wrap a:hover, input[type="submit"], .more-link, input[type="submit"]:hover, .more-link:hover, 
.paginations a:hover, .paginations a:focus, .paginations a.active, ins, mark, .top-header-widget {
    background-color:<?php echo $link_color; ?>
}

.flex-btn { background-color:<?php echo $link_color; ?> }
.flex-btn:hover, .flex-btn:focus { background-color: rgba(<?php echo $r; ?>,<?php echo $g; ?>,<?php echo $b;?>, 0.9); }

/*===================================================================================*/
/* TEXT COLOR
/*===================================================================================*/

.navbar .navbar-nav > .active > a, .navbar .navbar-nav > .active > a:hover, .navbar .navbar-nav > .active > a:focus { color: #FFFFFF; }
.navbar .navbar-nav > .open > a, .navbar .navbar-nav > .open > a:hover, .navbar .navbar-nav > .open > a:focus, 
.navbar .navbar-nav > li > a:hover, .navbar .navbar-nav > li > a:focus, .navbar-default .navbar-nav > li > a:before, 
.navbar-default .navbar-nav > .active > a,  
.navbar-default .navbar-nav > .active > a:hover, 
.navbar-default .navbar-nav > .active > a:focus { 
	color: <?php echo $link_color; ?>
}

.txt-color, .service-icon, .service .post:hover .entry-header .entry-title > a, .other-service .service-icon, .other-service .entry-header .entry-title > a:hover, .portfolio-tabs li.active > a, .portfolio-tabs li > a:hover, .portfolio .entry-header .entry-title > a:hover, .testimonial-scroll .post .entry-content p:before, .author-name a, .about h4.team-name, .site-content .post .entry-header .entry-title > a:hover, .home-post-latest .entry-header .entry-title > a:hover, .home-post .entry-header .entry-title > a:hover, .entry-meta a:hover, .entry-meta a:focus, .fn, .datetime:hover, .datetime:focus, .reply a, .reply a:hover, .reply a:focus, .widget ul li a:hover, .widget ul li a:focus, .widget table #next a:hover, .widget table #next a:focus, .widget table #prev a:hover, .widget table #prev a:focus, .tagcloud a:hover, .tagcloud a:focus,
.footer-sidebar .tagcloud a:hover, .footer-sidebar .tagcloud a:focus, .widget .widget-tabs li.active > a, .widget .widget-tabs li > a:hover, .footer-sidebar .widget .widget-tabs li.active > a, .footer-sidebar .widget .widget-tabs li > a:hover, .widget .post .entry-header .entry-title > a:hover, .footer-sidebar .widget .post .entry-header .entry-title > a:hover, .footer-sidebar .widget p a, .footer-sidebar .widget p a:hover, .site-info p a:hover, .site-info p a:focus, tbody a, p a, dl dd a .testimonial-scroll .post .entry-content p:before, .page-breadcrumb > li a, .page-breadcrumb > li a:hover, .page-breadcrumb > li a:focus { 
	color: <?php echo $link_color; ?> 
}

.woocommerce .woocommerce-error:before, 
.woocommerce-page .woocommerce-error:before, 
.woocommerce .woocommerce-message:before, 
.woocommerce-page .woocommerce-message:before, 
.woocommerce .woocommerce-message:before, 
.woocommerce-page .woocommerce-message:before, 
.woocommerce .woocommerce-info:before, 
.woocommerce-page .woocommerce-info:before, 
.woocommerce .woocommerce-info:before, 
.woocommerce-page .woocommerce-info:before,
.woocommerce form .form-row .required, 
.woocommerce-shipping-calculator p > a:hover, 
.woocommerce a.remove, 
.woocommerce ul.products li.product .price, 
.woocommerce-info a.showcoupon, 
a.woocommerce-review-link, 
.posted_in a, ins span, 
.woocommerce div.product p.price, .woocommerce div.product span.price, 
.woocommerce #respond input#submit:hover, 
.woocommerce a.button:hover, 
.woocommerce button.button:hover, 
.woocommerce input.button:hover, 
a.added_to_cart, 
blockquote::before {
    color:<?php echo $link_color; ?>
}

/*===================================================================================*/
/* BORDER COLOR
/*===================================================================================*/

.widget table tbody a, .widget table tbody a:hover, .widget table tbody a:focus, .paginations span.current, 
.paginations a:hover, .paginations a:focus, .paginations a.active { border: 1px solid <?php echo $link_color; ?>; } 

.avatar .tooltip.top .tooltip-arrow { border-top-color: <?php echo $link_color; ?>; }

blockquote { border-left: 6px solid <?php echo $link_color; ?>; }

.woocommerce .woocommerce-error { border-top-color: <?php echo $link_color; ?>; }
.woocommerce form .form-row.woocommerce-invalid .select2-container, 
.woocommerce form .form-row.woocommerce-invalid input.input-text, 
.woocommerce form .form-row.woocommerce-invalid select,
.woocommerce form .form-row.woocommerce-validated .select2-container, 
.woocommerce form .form-row.woocommerce-validated input.input-text, 
.woocommerce form .form-row.woocommerce-validated select  {
	border-color: <?php echo $link_color; ?>;
}
.woocommerce .woocommerce-error, 
.woocommerce-page .woocommerce-error, 
.woocommerce .woocommerce-message, 
.woocommerce-page .woocommerce-message, 
.woocommerce .woocommerce-info, 
.woocommerce-page .woocommerce-info {
	border-top: 3px solid <?php echo $link_color; ?>;
}

.dropdown-menu > li > a { border-bottom: 1px solid rgba(0, 0, 0, 0.1); }
.navbar { border-bottom: 7px solid <?php echo $link_color; ?>; }
.team-bg{background-color: <?php echo $link_color; ?>;}

.site-content#blog-masonry .name { color: <?php echo $link_color; ?>; }
.site-content#blog-masonry .cat-links { background-color: <?php echo $link_color; ?>; }
.site-content#blog-masonry .entry-date a:hover, .site-content#blog-masonry .entry-date a:focus { color: <?php echo $link_color; ?>; }

</style>
<?php
	endif;
}