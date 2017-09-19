<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="author" href="https://plus.google.com/112155375109374229033">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<script>
    <!--Analytics tracking code-->
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-98811254-2', 'auto');
    ga('send', 'pageview');

    /**
    * Fonction de suivi des clics sur des liens sortants dans Analytics
    * Cette fonction utilise une chaîne d'URL valide comme argument et se sert de cette chaîne d'URL
    * comme libellé d'événement. Configurer la méthode de transport sur 'beacon' permet d'envoyer le clic
    * au moyen de 'navigator.sendBeacon' dans les navigateurs compatibles.
    */
    function handleOutBoundLinkClicks(label) {
      ga('send', 'event', {
        eventCategory: 'Outbound Link',
        eventAction: 'click',
        transport: 'beacon',
        eventLabel: label
      });
    }

  
</script>

<!--Facebook SDK, pour pouvoir avec des boutons partagés etc...
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1979671505600275',
      xfbml      : true,
      version    : 'v2.10'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/fr_FR/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

-->

<?php
	//booking page section
 	global	$setmore_spasalon_default_booking_page;
 	global	$setmore_spasalon_symbol;
 //home page section
 	global	$setmore_spasalon_company_key;
 	global	$setmore_spasalon_booking_page_url;
 	global	$setmore_spasalon_header_button_name;
 	global	$setmore_spasalon_slider_button_name;
 	global	$setmore_spasalon_home_page_header;
 	global	$setmore_spasalon_home_page_sub_hearder_color;
 	global	$setmore_spasalon_home_page_sub_hearder;
 	global	$setmore_spasalon_home_page_description;
 //contact page section
 	global	$setmore_spasalon_address_street;
 	global	$setmore_spasalon_address_city;
 	global	$setmore_spasalon_about_us;
 	global	$setmore_spasalon_phone;
 	global	$setmore_spasalon_facsimile;
 	global	$setmore_spasalon_email;
//business hours page section
	global	$setmore_spasalon_sun_start;
	global	$setmore_spasalon_mon_start;
	global	$setmore_spasalon_tue_start;
	global	$setmore_spasalon_wed_start;
	global	$setmore_spasalon_thu_start;
	global	$setmore_spasalon_fri_start;
	global	$setmore_spasalon_sat_start;
//custom labels page section
	global	$setmore_spasalon_telephone_custom;
	global	$setmore_spasalon_facsimile_custom;
	global	$setmore_spasalon_email_custom;
	global	$setmore_spasalon_location_custom;
	global	$setmore_spasalon_hours_custom;
	global	$setmore_spasalon_expert_custom;
	global	$setmore_spasalon_email_send_button_custom;
//I-Frame booking page section
 	 global	$setmore_spasalon_frame_service_booking_page;
 	 global	$setmore_spasalon_frame_class_booking_page;
    //JEC
    global $jec_site_banner_title;
 	$setmore_spasalon_default_booking_page 				= get_option('booking_default');
 	$setmore_spasalon_symbol							= get_theme_mod('setmore_currency');
 	$setmore_spasalon_company_key						= get_theme_mod('company_key');
 	$setmore_spasalon_booking_page_url					= get_theme_mod('booking_page_url');
 	$setmore_spasalon_header_button_name				= get_theme_mod('header_button_name');
 	$setmore_spasalon_slider_button_name				= get_theme_mod('slider_button_name');
 	$setmore_spasalon_home_page_header					= get_theme_mod('home_page_header');
 	$setmore_spasalon_home_page_sub_hearder_color		= get_theme_mod('home_page_sub_hearder_color');
 	$setmore_spasalon_home_page_sub_hearder				= get_theme_mod('home_page_sub_hearder');
 	$setmore_spasalon_home_page_description				= get_theme_mod('home_page_description');
 	$setmore_spasalon_address_street                    = get_theme_mod('address_street');
 	$setmore_spasalon_address_city                      = get_theme_mod('address_city');
 	$setmore_spasalon_about_us							= get_theme_mod('about_us');
 	$setmore_spasalon_phone								= get_theme_mod('phone');
 	$setmore_spasalon_facsimile							= get_theme_mod('facsimile');
 	$setmore_spasalon_email								= get_theme_mod('email');
 	$setmore_spasalon_telephone_custom					= get_theme_mod('telephone_custom');
 	$setmore_spasalon_facsimile_custom					= get_theme_mod('facsimile_custom');
 	$setmore_spasalon_email_custom						= get_theme_mod('email_custom');
 	$setmore_spasalon_location_custom					= get_theme_mod('location_custom');
 	$setmore_spasalon_hours_custom						= get_theme_mod('hours_custom');
 	$setmore_spasalon_expert_custom						= get_theme_mod('expert_custom');
 	$setmore_spasalon_email_send_button_custom			= get_theme_mod('email_send_button_custom');
 	$setmore_spasalon_linkedin							= get_theme_mod('linkedin');
 	$setmore_spasalon_twitter							= get_theme_mod('twitter');
 	$setmore_spasalon_google_plus						= get_theme_mod('google_plus'); 	$setmore_spasalon_facebook  						= get_theme_mod('facebook');
 	$setmore_spasalon_youtube							= get_theme_mod('youtube');
 	$setmore_spasalon_sun_start							= get_theme_mod('sun_start');
 	$setmore_spasalon_mon_start							= get_theme_mod('mon_start');
 	$setmore_spasalon_tue_start							= get_theme_mod('tue_start');
 	$setmore_spasalon_wed_start							= get_theme_mod('wed_start');
 	$setmore_spasalon_thu_start							= get_theme_mod('thu_start');
 	$setmore_spasalon_fri_start							= get_theme_mod('fri_start');
 	$setmore_spasalon_sat_start							= get_theme_mod('sat_start');
 	$jec_site_banner_title							    = get_theme_mod('banner_title');
?>

<div id="wrapper">

    <div id="container">

        <header id="branding" role="banner">
          <div id="inner-header" class="clearfix">
            <div id="site-heading">
                <?php if ( wp_get_attachment_url(get_theme_mod( 'site_logo' )) ) : ?>
                <div id="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url( wp_get_attachment_url(get_theme_mod( 'site_logo' ) )); ?>" height="60px" width="60px" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></a></div>
                <?php else : ?>
                <div id="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
                <?php endif; ?>
            </div>
           <?php if ( ! empty($setmore_spasalon_default_booking_page) ) : ?>
            <?php if ($setmore_spasalon_default_booking_page === 'blabla' ) : ?>
        		<div id="book-now-button">
                	<ul><li><a class="Setmore_button_iframe" id="Setmore_button_iframe" style="float:none" href="https://my.setmore.com/shortBookingPage/<?php echo esc_html($setmore_spasalon_company_key)?>"><?php echo esc_html($setmore_spasalon_header_button_name) ?></a></li></ul>
            	</div>
            <?php endif; ?>

            <?php if ($setmore_spasalon_default_booking_page ==='blabla' ) : ?>
        		<div id="book-now-button">
                	<ul><li><a class="Setmore_button_iframe" id="Setmore_button_iframe" style="float:none" href="https://my.setmore.com/shortBookingPage/<?php echo esc_html($setmore_spasalon_company_key)?>/bookclass"><?php echo esc_html($setmore_spasalon_header_button_name) ?></a></li></ul>
            	</div>
            <?php endif; ?>
            <?php endif; ?>
            <nav id="access" role="navigation">
                <div class="assistive-text section-heading"><?php _e( 'Main menu', 'setmore-spasalon' ); ?></div>
                <div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'setmore-spasalon' ); ?>"><?php _e( 'Skip to content', 'setmore-spasalon' ); ?></a></div>
                <?php setmore_spasalon_main_nav(); // Adjust using Menus in Wordpress Admin ?>
            </nav><!-- #access -->
          </div>

        </header><!-- #branding -->
