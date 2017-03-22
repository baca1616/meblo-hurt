<?php
    header('Content-type: text/css; charset: UTF-8');
    header('Cache-Control: must-revalidate');
    header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 3600) . ' GMT');
    $url = $_REQUEST['url'];
?>

.mobilemenu>li.first {
	-webkit-border-radius: 4px 4px 0 0;
	-moz-border-radius: 4px 4px 0 0;
	border-radius: 4px 4px 0 0;
	behavior: url(<?php echo $url; ?>css/css3.htc);
	position: relative;
}
.mobilemenu>li.last {
	-webkit-border-radius:0 0 4px 4px;
	-moz-border-radius: 0 0 4px 4px;
	border-radius: 0 0 4px 4px;
	behavior: url(<?php echo $url; ?>css/css3.htc);
	position: relative;
}
#Example_F {
	-moz-box-shadow: 0 0 5px 5px #888;
	-webkit-box-shadow: 0 0 5px 5px #888;
	box-shadow: 0 0 5px 5px #888;
}
.header .currency-header ul li a {
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    behavior: url(<?php echo $url; ?>css/css3.htc);
}
.link-wishlist,.link-compare,button.button.btn-cart span,.email-friend a { border-radius:2px;}
.footer-static .block-subscribe input.input-text { box-shadow:none;}
.header .form-search,.ma-upsellslider-container .product_item,.ma-relatedslider-container .flex-direction-nav a { border-radius:3px;}
.header .form-search button.button,.header .form-search button.button span, #search_price span,.products-list .box-list,.block-currency .block-content select,.language_curency #select-language
,.product-view .product-img-box .product-image,.ma-featuredproductslider-container .bx-wrapper .bx-controls-direction a,.banner-static-center .banner-text a,.responisve-container p a, .footer-static .block-subscribe input.input-text,.footer-static .block-subscribe .actions .button span,.product_view_addtocart .add-to-cart .qty,.ma-relatedslider-container .carousel .relatedslider-item{
   border-radius:3px;
}
.header .logo { box-shadow:0 0 3px 0 #EFEFEF;}
.container-home { box-shadow:0 0 5px 0 #ccc; }
.top-cart-content { box-shadow:0;}
.banner-static-center .static-link a { border-radius:2px; }
.ma-upsellslider-container .flexslider { border-radius:5px; }
.opc .active .step-title  { border-radius:0; }
.opc .step { border-radius:0; }
.block_static_top { box-shadow:0 7px 11px -9px;}
.header-cart  { border-radius:20px;}
.top-cart-contain { border-radius:5px 0 0 5px;}
.nivo-directionNav a,.ma-featuredproductslider-container .flex-direction-nav a,.ma-brand-slider-contain .flex-direction-nav a,.ma-upsellslider-container .flex-direction-nav a
,.fraction-slider .prev ,.fraction-slider .next,.ma-thumbnail-container .flex-direction-nav a,.animate-in .link a,.link.subtitle a,.animate-in .link-slider2 a,.animate-out .link-slider2 a,.animate-in .link a,.animate-out .link a,.link-slider2.subtitle-slider2 a
,.animate-in .link-slider3 a,.animate-out .link-slider3 a,.link-slider3.subtitle-slider3 a{ border-radius:3px;}
#back-top,#sequence-theme .controls a {
    border-radius:30px;
    -moz-transition: all 0.3s ease-in-out 0s;
    transition: all 0.3s ease-in-out;
}
#back-top:hover,#sequence-theme .controls .sequence-prev:hover,#sequence-theme .controls .sequence-next:hover {
    -moz-transition: all 0.3s ease 0s;
}
.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {
    -moz-transition: all 0.3s ease-in-out 0s;
    transition: all 0.3s ease-in-out;
}
.ui-state-default:hover, .ui-widget-content .ui-state-default:hover, .ui-widget-header .ui-state-default:hover {
    -moz-transition: all 0.3s ease 0s;
}
.drop-lang .sub-lang li a,.animate-in .link a,ul.tabs li,.drop-lang li a,.drop-currency .sub-currency li a,.drop-currency li a,button.button span,button.button span span
,.top-header .head-link a,.ma-brand-slider-contain .bx-wrapper .bx-controls-direction a,.ma-featuredproductslider-container .bx-wrapper .bx-controls-direction a{
    -moz-transition: background 0.4s ease-in-out 0s;
    transition: background 0.4s ease-in-out;
}
.drop-lang li a:hover,.drop-lang .sub-lang li a:hover,ul.tabs li:hover,.animate-in .link a:hover,.drop-currency .sub-currency li a:hover,.drop-currency li a:hover,button.button:hover span,button.buttonL:hover span span,
.top-header .head-link a:hover{
    -moz-transition: background	 0.4s ease 0s;
}
.link-wishlist,.link-compare,.footer-static li a,.top-header .head-link a,.email-friend a{
    -moz-transition: color 0.3s ease-in-out 0s;
    transition: color 0.3s ease-in-out;
}
.link-wishlist:hover,.link-compare:hover,.footer-static li a:hover,.top-header .head-link a:hover,.email-friend a:hover{
    -moz-transition: color 0.3s ease 0s;
}
.top-header .head-link a{
    -moz-transition: border 0.3s ease-in-out 0s;
    transition: border 0.3s ease-in-out;
}
.top-header .head-link a:hover{
    -moz-transition: border 0.3s ease 0s;
}
.ma-demo-wrap .ma-demo-option,.drop-lang li a,.drop-currency li a  {border-radius:3px;}
.header .form-search button.button span,.pt_custommenu .itemMenu h4.level1, .pt_custommenu .itemMenu a.level1,
.pt_custommenu div.pt_menu .parentMenu a, .pt_custommenu div.pt_menu .parentMenu span.block-title,.responisve-container p a,button.button.btn-cart span,.product-name a,.ma-tabs-title a,.banner-static-center .static-link a
.footer-static .block-subscribe .actions .button span,#search_price span
,.block .block-content a,button.btn-checkout span,.header-top .links .first a,.header-top .links li a.top-link-cart
,.header-top .links li a.top-link-checkout,.header-top .links li.last a,.header-icon .google a,.header-icon .dribbe a,.header-icon .facebook a,.header-icon .flow a,.header-icon .twiter a
,.link-wishlist,.link-compare{
    -moz-transition: all 0.4s ease-in-out 0s;
    transition: all 0.4s ease-in-out;
}
.ma-banner7-container .flexslider .nivo-nextNav:hover , .pt_custommenu div.pt_menu .parentMenu a:hover,
.ma-banner7-container .flexslider .nivo-prevNav:hover,.header .form-search button.button:hover span,
.pt_custommenu .itemMenu a.level1.nochild:hover,.responisve-container p a:hover,button.button.btn-cart:hover span,
.product-name a:hover,.ma-tabs-title li.active a, .ma-tabs-title a:hover,.banner-static-center .static-link a:hover,
.footer-static .block-subscribe .actions .button:hover span
,#search_price:hover span,.block .block-content a:hover,button.btn-checkout:hover span,.header-top .links .first a:hover,.header-top .links li a.top-link-cart:hover
,.header-top .links li a.top-link-checkout:hover,.header-top .links li.last a:hover
,.header-icon .google a:hover,.header-icon .dribbe a:hover,.header-icon .facebook a:hover,.header-icon .flow a:hover,.header-icon .twiter a:hover,
.link-wishlist:hover,.link-compare:hover{
    -moz-transition: all 0.4s ease 0s;
}
.banner7-readmore a {
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    behavior: url(<?php echo $url; ?>css/css3.htc);
}
.footer_subscribe .block-content {
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    behavior: url(<?php echo $url; ?>css/css3.htc);
}
.footer_subscribe .block-subscribe .actions button.button span {
    -moz-border-radius-topright: 4px;
    -webkit-border-top-right-radius: 4px;
    border-top-right-radius: 4px;
    -moz-border-radius-bottomright: 4px;
    -webkit-border-bottom-right-radius: 4px;
    border-bottom-right-radius: 4px;
    behavior: url(<?php echo $url; ?>css/css3.htc);
}
.ma-newproductslider-container .flex-direction-nav a , .ma-upsellslider-container .flex-direction-nav a , .ma-thumbnail-container .flex-direction-nav a ,.ma-relatedslider-container .flex-direction-nav a , .ma-featuredproductslider-container .flex-direction-nav a ,a.follow_us_text .icon_floow_us {
    -moz-transition: all 0.2s ease-in-out; 
    -webkit-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
}
.block_static_top a img {
    -webkit-transition-duration: 0.5s;
    -moz-transition-duration: 0.5s;
    -ms-transition-duration: 0.5s;
    -o-transition-duration: 0.5s;
    transition-duration: 0.5s;
}
.block_static_top:hover a img {
    transform: scale(1.2); /* opera not support rotateX */
    -ms-transform: scale(1.2); 
    -moz-transform: scale(1.2);
    -webkit-transform: scale(1.2);
    -o-transform: scale(1.2);
}
.pager .pages .current {
    -webkit-border-radius: 15px;
    -moz-border-radius: 15px;
    border-radius: 15px;
    behavior: url(<?php echo $url; ?>css/css3.htc);
}
.banner-static-contain .banner-box img {
    cursor: pointer;
     -moz-transition:all .3s ease-out;
    -webkit-transform: scale(1);
    -webkit-transition: all .3s ease-out;
    transition: all .2s ease-in;
}
.banner-static-contain .banner-box img:hover {
    -webkit-transform: scale(1.3);
    -webkit-transition: all .3s ease-out;
}
.products-grid .item .actions {
    bottom: -30%;
    transition: bottom 0.3s ease-out;
    -webkit-transition: bottom 0.3s ease-out;
    -moz-transition: bottom 0.3s ease-out;
}
.products-grid .item:hover .actions {
    bottom:10px;
    transition: bottom 0.3s ease-out;
    -webkit-transition: bottom 0.3s ease-out;
    -moz-transition: bottom 0.3s ease-out;
}
.ma-featuredproductslider-container .featuredproductslider-item .actions {
    bottom: -30%;
    transition: bottom 0.3s ease-out;
    -webkit-transition: bottom 0.3s ease-out;
    -moz-transition: bottom 0.3s ease-out;
}
.ma-featuredproductslider-container .featuredproductslider-item:hover .actions {
    bottom:10px;
    transition: bottom 0.3s ease-out;
    -webkit-transition: bottom 0.3s ease-out;
    -moz-transition: bottom 0.3s ease-out;
}
.drop-lang .drop-trigger .sub-lang,.drop-currency .currency-trigger .sub-currency,.dropit  .dropit-trigger .dropit-submenu,.dropit .dropit-submenu li a{
   -moz-transition: all 0.3s ease-in-out 0s;
    transition: all 0.3s ease-in-out; 
}
.drop-lang .drop-trigger:hover .sub-lang,.drop-currency .currency-trigger:hover .sub-currency ,.dropit  .dropit-trigger:hover .dropit-submenu,.dropit .dropit-submenu li a:hover{
    -moz-transition: all 0.3s ease 0s;
}