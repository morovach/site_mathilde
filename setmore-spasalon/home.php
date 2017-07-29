<?php
    function jec_display_mini_pictures_of_a_category( $category ) {
        echo " <br> saluuuuuuut $category </br>";
    }
    ?>
<?php get_header(); ?>
<?php
    $setmore_spasalon_text = esc_url($setmore_spasalon_booking_page_url);
    $setmore_spasalon_new_text = "";
    $setmore_spasalon_words = explode("/",$setmore_spasalon_text);
    $setmore_spasalon_inc = 0;
    foreach($setmore_spasalon_words as $setmore_spasalon_word){
    if($setmore_spasalon_word == "shortBookingPage"){
        $setmore_spasalon_words[$setmore_spasalon_inc] = "bookingpage";
    }
    $setmore_spasalon_new_text.= $setmore_spasalon_words[$setmore_spasalon_inc]."/";
    $setmore_spasalon_inc ++;
    }
    $setmore_spasalon_book_class_text = 'bookclass';
    ?>

    <?php
        $setmore_spasalon_args = array(
            'posts_per_page' => 100,
            'post_status' => 'publish'
            // 'post__in' => get_option("sticky_posts")
        );
        $setmore_spasalon_fPosts = new WP_Query( $setmore_spasalon_args );
        ?>

<div id="slide-wrap">


    <?php if ( $setmore_spasalon_fPosts->have_posts() ) : ?>
        <?php rewind_posts(); ?>
        <div class="cycle-slideshow"
          <?php  echo 'data-cycle-fx="' . wp_kses_post( get_theme_mod('setmore_spasalon_slider_effect') ) . '" data-cycle-tile-count="10"'; ?>
          data-cycle-slides="> div.slides"
          <?php
            $setmore_spasalon_slider_timeout = wp_kses_post( get_theme_mod('setmore_spasalon_slider_timeout') );
            echo 'data-cycle-timeout="' . $setmore_spasalon_slider_timeout . '000"'; ?>
        >
            <?php //seuls les articles de la category image slider vont apparaître dans le slider ?>
            <?php while ( $setmore_spasalon_fPosts->have_posts() ) : $setmore_spasalon_fPosts->the_post();  ?>
                <?php if (has_category("image slider")) : ?>
                    <div class="slides">
                        <div id="post-<?php the_ID(); ?>" <?php post_class('post-theme'); ?>>
                            <?php if ( has_post_thumbnail()) : ?>
                                <div class = "img-wrapper">
                                    <div class = "img-wrapper-helper">
                                        <?php the_post_thumbnail( "full" ); ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
</div>

<div id= header-overlay>
        <h1 itemprop="headline">Mathilde Vignes Ostéopathe D.F.O</h1>
        <h2>Confiez votre santé à une professionnelle </h2>
</div>

<div id="logo-overlay">
    <a href= "#article-section"><img src="https://osteopathe-saint-julien-en-genevois.fr/wp-content/uploads/2017/06/logo.png"> </a>
</div>

<!-- Add an image of the size 1024x715 , like the slider, to have an overlay of the same size -->
<div id="slider-overlay">
    <img src="https://osteopathe-saint-julien-en-genevois.fr/wp-content/uploads/2017/06/1024x715_empty.png">
</div>

<!--
<div id= book-now-button>
        <a href="https://www.clicrdv.com/jeremy-moulin-osteopathe-Saint-Julien-en-Genevois?colors[content_links]=000000&popin=1&calendar_id=621377&styles=transparent&nologo=1&nofooter=1&clicrdv_widget=1&widget_width=600&websource=http%3A%2F%2Fosteosaintjulien.x10host.com%2Fprendre-rendez-vous%2F"> Prendre RDV </a>
</div>
-->
<div class="contact-wraper">
    <?php /* bannière avec marqué "ostéo pour qui"    pour séparer la page */ ?>

    <div class="home-intro-frame">
        <div class="contact-wraper-content">
            <div class="contact-wraper-content-inner-left"> <!-- style="right:0; left:0; margin-right:auto; margin-left: auto"> -->
                <div class="contact-us-section">
                    <div class="about-us-inner-section">
                        <div class="about-us-icon">
                            <a target="_blank" href="https://www.clicrdv.com/jeremy-moulin-osteopathe-Saint-Julien-en-Genevois?colors[content_links]=000000&colors[even_timeslot_col_bg]=c6ddec&colors[odd_timeslot_col_bg]=b4e1ff&popin=1&calendar_id=621377&styles=transparent&nologo=1&nofooter=1&clicrdv_widget=1&widget_width=600&websource=http%3A%2F%2Fosteosaintjulien.x10host.com%2Fprendre-rendez-vous%2F">
                                <i class="fa fa-calendar fa-fw"></i>
                            </a>
                        </div>
                        <div class="about-us-text">
                            <ul>
                                <li>
                                    <a target="_blank" href="https://www.clicrdv.com/jeremy-moulin-osteopathe-Saint-Julien-en-Genevois?colors[content_links]=000000&colors[even_timeslot_col_bg]=c6ddec&colors[odd_timeslot_col_bg]=b4e1ff&popin=1&calendar_id=621377&styles=transparent&nologo=1&nofooter=1&clicrdv_widget=1&widget_width=600&websource=http%3A%2F%2Fosteosaintjulien.x10host.com%2Fprendre-rendez-vous%2F"; style="text-decoration:none">
                                        <strong>Reservez dès maintenant</strong>
                                    </a>
                                    <br>Cliquez pour prendre rendez-vous,
                                    <br>Le cabinet est ouvert de <?php echo esc_html($setmore_spasalon_mon_start) ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="contact-us-section">
                    <div class="about-us-inner-section">
                        <div class="about-us-icon">
                            <a HREF=mailto:<?php echo esc_html($setmore_spasalon_email) ?>> <i class="fa fa-at fa-fw"> </i> </a>
                        </div>
                        <div class="about-us-text">
                            <ul>
                                <li>
                                    <?php if ( ! empty($setmore_spasalon_email_custom)) : ?>
                                        <strong><?php echo esc_html($setmore_spasalon_email_custom) ?>:</strong>
                                        <br>
                                    <?php else: ?>
                                        <a HREF=mailto:<?php echo esc_html($setmore_spasalon_email) ?> style="text-decoration:none"> <strong>Email</strong> </a>
                                        <br>

                                    <?php endif; ?>
                                    <?php if ( ! empty($setmore_spasalon_email)) : ?>
                                        <?php echo esc_html($setmore_spasalon_email) ?>
                                        <br><a href="/formulaire-de-contact/">Formulaire de contact</a>
                                    <?php endif; ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="contact-us-section">
                    <div class="about-us-inner-section">
                        <div class="about-us-icon">
                            <a target="_blank" href="https://search.google.com/local/writereview?placeid=ChIJK1hbnol7jEcRE7ywC4Hc89o">
                                <i class="fa fa-thumbs-o-up fa-fw"></i>
                            </a>
                        </div>
                        <div class="about-us-text">
                            <ul>
                                <li>
                                    <a target="_blank" href="https://search.google.com/local/writereview?placeid=ChIJK1hbnol7jEcRE7ywC4Hc89o" style="text-decoration:none"> <strong>Votre avis compte</strong> </a>
                                    <br>Cliquez pour me laisser un avis
                                    <a target="_blank" href="https://www.google.com/maps/place/Mathilde+Vignes+Ost%C3%A9opathe+D.F.O/@46.1489837,6.084976,17z/data=!3m1!4b1!4m10!1m2!2m1!1sosteopathe+Saint-Julien-en-Genevois!3m6!1s0x478c7b899e5b582b:0xdaf3dc810bb0bc13!8m2!3d46.14898!4d6.08717!9m1!1b1?hl=fr"><br>Vous pouvez aussi voir les autres avis</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-wraper-content-inner-right"> <!-- style="right:0; left:0; margin-right:auto; margin-left: auto"> -->
                <div class="contact-us-section">
                    <div class="about-us-inner-section">
                        <div class="about-us-icon">
                            <a href="#map">
                                <i class="fa fa-map-marker fa-fw"></i>
                            </a>
                        </div>
                        <div class="about-us-text">
                            <ul>
                                <li>
                                    <a href="#map" style="text-decoration:none"> <strong>Adresse</strong> </a>
                                    <br> <?php echo esc_html($setmore_spasalon_address_street) ?>
                                    <br> <?php echo esc_html($setmore_spasalon_address_city) ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>            
                <div class="contact-us-section">
                    <div class="about-us-inner-section">
                        <div class="about-us-icon">
                            <a href=tel:+33665206608> <i class="fa fa-phone fa-fw"> </i> </a>
                        </div>
                        <div class="about-us-text">
                            <ul>
                                <li>
                                    <?php if ( ! empty($setmore_spasalon_telephone_custom)) : ?>
                                        <strong><?php echo esc_html($setmore_spasalon_telephone_custom) ?>:</strong>
                                        <br>
                                    <?php else: ?>
                                        <a href="tel:+33665206608" style="text-decoration:none"> <strong>Téléphone</strong> </a> <br>
                                    <?php endif; ?>
                                    <?php if ( ! empty($setmore_spasalon_phone)) : ?>
                                        <?php echo esc_html($setmore_spasalon_phone) ?>
                                    <?php endif; ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="contact-us-section">
                    <div class="about-us-inner-section">
                        <div class="about-us-icon">
                            <i class="fa fa-wheelchair fa-fw"></i>
                        </div>
                        <div class="about-us-text">
                            <ul>
                                <li>
                                    <strong>Mobilité réduite</strong>
                                    <br> Le cabinet a un accès facilité pour les personnes à mobilité réduite
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
              
                
                <!--<div class="contact-us-section">
                    <div class="about-us-inner-section">
                        <div class="about-us-icon">
                            <a href="#article-section">
                                <i class="fa fa-arrow-down fa-fw"></i>
                            </a>
                        </div>
                        <div class="about-us-text">
                            <ul>
                                <li>
                                    <a href="#article-section" style="text-decoration:none"> <strong>A qui s'adresse l'otéoapthie ?</strong> </a>
                                    <br> Cliquez pour voir mes champs d'intervention
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

    <!--<style>    #map {        height: 400px;        width: 100%;    }</style>
        <div id="map"> </div> -->

    <div class="map-container" id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2764.088505459006!2d6.084975951557445!3d46.14898369540632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c7b899e5b582b%3A0xdaf3dc810bb0bc13!2sMathilde+Vignes+Ost%C3%A9opathe+D.F.O!5e0!3m2!1sfr!2sus!4v1499680365733" width="100%" height="400" frameborder="0" scrollwheel="no" style="border:0" allowfullscreen></iframe>
    </div>

</div>


<div class= main-page-parallax>

    <div class="inner-title-wrap" id = "article-section">
        <div class="inner-title-box">
            <header class="entry-header">
                <h2 class="entry-title"><b><em>Prenez soin de votre corps</b></em></h2>
                <h2 class="entry-title"><b><em>c'est le seul endroit où vous êtes obligés de vivre</b></em></h2>
            </header>
            <!-- .entry-header -->
        </div>
    </div>
    <div id="content" class="clearfix">
        <div id="main" class="clearfix" role="main">

            <?php rewind_posts(); ?>
            <? // Ajoute les articles de type description cabinet ?>
            <?php if ( $setmore_spasalon_fPosts->have_posts() ) : ?>
            <div id="grid-wrap" class="main-page-post clearfix">

                <?php /* Resets post counter */ ?>
                <?php rewind_posts(); ?>

                <?php /* Start the Loop */ ?>
                <?php while ( $setmore_spasalon_fPosts->have_posts() ) : $setmore_spasalon_fPosts->the_post(); ?>
                <?php if (has_category("A qui s'adresse l'ostéopathie")) : ?>
                <div <?php post_class('grid-box'); ?>>
                    <?php
                        /* Include the Post-Format-specific template for the content.
                         * If you want to overload this in a child theme then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part( 'home_content', get_post_format() );
                        ?>
                    <?php /* This piece of code is to retrieve the mini picture
                        If there is a picture inside the post, it will be able to catch it otherwize
                        it will try to find anotehr relative picture */ ?>
                    <?php if ( has_post_thumbnail()) : ?>
                    <!--/*the_post_thumbnail(  array(350, 350) )*/ est une optimisation pour réduire la taille des images: compression et gagner beaucoup de temps de chargement-->
                    <div class="imgthumb"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(  array(350, 350) ); ?></a></div>
                    <?php else : ?>
                    <?php $setmore_spasalon_postimgs = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC' ) );
                        if ( !empty($setmore_spasalon_postimgs) ) {
                            $setmore_spasalon_firstimg = array_shift( $setmore_spasalon_postimgs );
                            $setmore_spasalon_th_image = wp_get_attachment_image( $setmore_spasalon_firstimg->ID, 'full', false );?>
                    <div class="imgthumb">
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php echo esc_url($setmore_spasalon_th_image); ?></a>
                    </div>
                    <?php } ?>
                    <?php /*This place is to retrieve the text of the post*/   ?>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
                <?php endwhile; ?>
            </div>
            <?php else : ?>
            <article id="post-0" class="post no-results not-found">
                <header class="entry-header">
                    <h1 class="entry-title"><?php _e( 'Nothing Found', 'setmore-spasalon' ); ?></h1>
                </header>
                <!-- .entry-header -->
                <div class="entry-content post-content">
                    <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'setmore-spasalon' ); ?></p>
                    <?php get_search_form(); ?>
                </div>
                <!-- .entry-content -->
            </article>
            <!-- #post-0 -->
            <?php endif; ?>
            <?php /* bannière avec marqué "ostéo pour qui"
                pour séparer la page */ ?>
        </div>
        <!-- end #main -->
    </div>
    <!-- end #clearfix -->
</div>



<?php get_footer(); ?>




<!-- Google Maps script: to display the map --
<script>
    function initAllGoogle(){
        initMap();
    }

    function initMap(){

        <!-- display the map --
        var cabinet = {lat: 46.148953, lng: 6.087220};
        var map = new google.maps.Map(document.getElementById('map'),{
            zoom: 13,
            center: cabinet
        });
        map.setOptions({draggable: true, zoomControl: true, scrollwheel: false, disableDoubleClickZoom: true});
        var marker = new google.maps.Marker({
            position: cabinet,
            map: map,
            title: "Cabinet ostéopathe Vignes"
        });
        var contentString = '<div id="content">'+
                            '<h1 id="firstHeading" class="firstHeading">Mathilde Vignes Ostéopathe D.F.O</h1>'+
                            '<div id="bodyContent">'+
                            '<p><b>28 Avenue de Genève</b></p>'+
                            '<p>74160 Saint-Julien-en-Genevois</p>'+
                            '</div>'+
                            '</div>';
        var infowindow = new google.maps.InfoWindow({
            content: contentString,
            maxWidth : 10000
        });
        infowindow.open(map, marker);
    }

</script>

<!-- Google api script call --
<script async defer        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwXOajbithnEzHPPEXeyp1ZdgloU0I0ow&callback=initAllGoogle&libraries=places">    </script>

-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
//Enable again to scroll when click on the map
$('.map-container')
	.click(function(){
			$(this).find('iframe').addClass('clicked')})
	.mouseleave(function(){
			$(this).find('iframe').removeClass('clicked')});

// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
      //get the size of the top navigation bar
      var clientHeight = document.getElementById('branding').offsetHeight;
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top -clientHeight
        }, 1500, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
});
</script>