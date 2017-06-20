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
<div id="slide-wrap">
    <div class="cover">
        <div id="panel_container_wrapper">
            <div id="content">
                <div class="panel-fullwidth">
                    <div class="panel-main-content">
                        <div class="entry-content">
                            <div id="panel-id">
                                <div class="panel-grid">
                                    <div class="panel-grid-cell">
                                        <div class="so-panel">
                                            <div class="vspace">
                                            </div>
                                        </div>
                                        <div class="so-panel widget widget_text" id="panel-942-0-0-1">
                                            <div class="panel-textwidget">
                                                <h2  style="text-shadow: none;"><?php echo esc_html($setmore_spasalon_home_page_header) ?></h2>
                                                <h1 style="text-shadow: none;"><?php echo esc_html($setmore_spasalon_home_page_sub_hearder_color) ?><?php echo esc_html($setmore_spasalon_home_page_sub_hearder)?></h1>
                                                <h3 style="line-height:30px;text-shadow: 0 0 0px #111;"> <?php echo esc_html($setmore_spasalon_home_page_description)?></h3>
                                            </div>
                                        </div>
                                        <?php if ( ! empty($setmore_spasalon_slider_button_name) ) : ?>
                                        <?php if ($setmore_spasalon_default_booking_page === 'services' ) : ?>
                                        <div class="panel-button-area">
                                            <a class="panel-button" href="<?php echo esc_url($setmore_spasalon_booking_page_url)?>" target="_blank"><?php echo esc_html($setmore_spasalon_slider_button_name) ?></a>
                                            <div class="clear">&nbsp;</div>
                                        </div>
                                        <?php endif; ?>
                                        <?php if ($setmore_spasalon_default_booking_page === 'classes' ) : ?>
                                        <div class="panel-button-area">
                                            <a class="panel-button" href="<?php echo esc_url($setmore_spasalon_new_text)?><?php echo esc_html($setmore_spasalon_book_class_text)?>" target="_blank"><?php echo esc_html($setmore_spasalon_slider_button_name)?></a>
                                            <div class="clear">&nbsp;</div>
                                        </div>
                                        <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        $setmore_spasalon_args = array(
            'posts_per_page' => 100,
            'post_status' => 'publish'
            // 'post__in' => get_option("sticky_posts")
        );
        $setmore_spasalon_fPosts = new WP_Query( $setmore_spasalon_args );
        ?>
        
        
    <?php if ( $setmore_spasalon_fPosts->have_posts() ) : ?>
        <?php rewind_posts(); ?>
    <div id="load-cycle"></div>
    <div class="cycle-slideshow" <?php
        if ( get_theme_mod('setmore_spasalon_slider_effect') ) {
            echo 'data-cycle-fx="' . wp_kses_post( get_theme_mod('setmore_spasalon_slider_effect') ) . '" data-cycle-tile-count="10"';
        } else {
            echo 'data-cycle-fx="scrollHorz"';
        }
        ?> data-cycle-slides="> div.slides" <?php
        if ( get_theme_mod('setmore_spasalon_slider_timeout') ) {
            $setmore_spasalon_slider_timeout = wp_kses_post( get_theme_mod('setmore_spasalon_slider_timeout') );
            echo 'data-cycle-timeout="' . $setmore_spasalon_slider_timeout . '000"';
        } else {
            echo 'data-cycle-timeout="5000"';
        }
        ?> data-cycle-prev="#sliderprev" data-cycle-next="#slidernext">
        <?php //seuls les articles de la category image slider vont apparaître dans le slider ?>
        <?php while ( $setmore_spasalon_fPosts->have_posts() ) : $setmore_spasalon_fPosts->the_post();  ?>
        <?php if (has_category("image slider")) : ?>
        <div class="slides">
            <div id="post-<?php the_ID(); ?>" <?php post_class('post-theme'); ?>>
                <?php if ( has_post_thumbnail()) : ?>
                <div class="slide-cover"></div>
                <div class="slide-thumb"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( "full" ); ?></a></div>
                <?php else : ?>
                <?php $setmore_spasalon_postimgs = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC' ) );
                    if ( !empty($setmore_spasalon_postimgs) ) :
                        $setmore_spasalon_firstimg = array_shift( $setmore_spasalon_postimgs );
                        $setmore_spasalon_my_image = wp_get_attachment_image( $setmore_spasalon_firstimg->ID, "full", false );
                        ?>
                <div class="slide-thumb"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php echo esc_url($setmore_spasalon_my_image); ?></a></div>
                <?php else : ?>
                <div class="slide-noimg">
                    <p><?php _e('No featured image set for this post.', 'setmore-spasalon') ?></p>
                </div>
                <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
</div>
<div class="contact-wraper">
    <?php /* bannière avec marqué "ostéo pour qui"    pour séparer la page */ ?>
    <div class="inner-title-wrap">
        <div class="inner-title-box">
            <header class="entry-header">
                <h1 class="entry-title">Bienvenue sur le site de Mathilde Vignes Ostéopathe D.F.O</h1>
                <p> Ce site a pour vocation de vous présenter l'ostéopathie et ses champs d'interventions. </p>
                <p> Vous y trouverez les informations concernant le cabinet d'ostéopathie de Saint-Julien-en-Genevois, son plan d'accès et la prise de rendez-vous en ligne. </p>
                <p> Vous avez également la possibilité de partager vos témoignages. </p>
            </header>
            <!-- .entry-header -->
        </div>
    </div>
    <div class="home-intro-frame">
        <div class="contact-wraper-content">
            <div class="contact-wraper-content-inner-left"> <!-- style="right:0; left:0; margin-right:auto; margin-left: auto"> -->
                <div id="rdv-widget" class="contact-us-section">
                    <div class="about-us-reservation">
                        <div class="about-us-reservation-icon"> 
                            <a href="https://www.clicrdv.com/jeremy-moulin-osteopathe-Saint-Julien-en-Genevois?colors[content_links]=000000&popin=1&calendar_id=621377&styles=transparent&nologo=1&nofooter=1&clicrdv_widget=1&widget_width=600&websource=http%3A%2F%2Fosteosaintjulien.x10host.com%2Fprendre-rendez-vous%2F">                                                                        
                                <i class="fa fa-calendar fa-fw"></i>
                            </a> 
                        </div>
                        <div class="about-us-reservation-icon-text">
                            <ul>
                                <li>                                <a href="https://www.clicrdv.com/jeremy-moulin-osteopathe-Saint-Julien-en-Genevois?colors[content_links]=000000&popin=1&calendar_id=621377&styles=transparent&nologo=1&nofooter=1&clicrdv_widget=1&widget_width=600&websource=http%3A%2F%2Fosteosaintjulien.x10host.com%2Fprendre-rendez-vous%2F"; style="text-decoration:none">                                <strong>Reservez maintenant</strong>                                </a>                                <br>Cliquez et prenez rendez-vous avec votre osteopathe dès maintenant!                            </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="address-widget" class="contact-us-section">
                    <div class="about-us-location">
                        <div class="about-us-location-icon">
                            <i class="fa fa-map-marker fa-fw"> </i>
                        </div>
                        <div class="about-us-location-icon-text">
                            <ul>
                                <li><strong>Adresse:</strong><br>
                                    <?php echo esc_html($setmore_spasalon_address) ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="address-widget" class="contact-us-section">
                    <div class="about-us-location">
                        <div class="about-us-location-icon">
                            <i class="fa fa-at fa-fw"> </i>  
                        </div>
                        <div class="about-us-location-icon-text">
                            <ul>
                                <li>      
                                    <?php if ( ! empty($setmore_spasalon_email_custom)) : ?>
                                        <strong><?php echo esc_html($setmore_spasalon_email_custom) ?>:</strong>
                                        <br>
                                    <?php else: ?>
                                        <strong>Email:</strong>
                                        <br>
                                    <?php endif; ?>
                                    <?php if ( ! empty($setmore_spasalon_email)) : ?> 
                                        <?php echo esc_html($setmore_spasalon_email) ?> 
                                    <?php endif; ?>
                                    <br>&nbsp;
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-wraper-content-inner-right"> <!-- style="right:0; left:0; margin-right:auto; margin-left: auto"> -->
                <div id="address-widget" class="contact-us-section">
                    <div class="about-us-location">
                        <div class="about-us-location-icon">
                            <a href="/formulaire-de-contact/">
                                <i class="fa fa-envelope fa-fw"> </i>  
                            </a>
                        </div>
                        <div class="about-us-location-icon-text">
                            <ul>
                                <li><strong>Formulaire de contact:</strong>
                                    <br> Cliquez pour me contacter directement depuis le site
                                </li>
                            </ul>
                        </div>
                    </div>                    
                </div>
                <div id="address-widget" class="contact-us-section">
                    <div class="about-us-contact">
                        <div class="about-us-contact-icon">      
                            <i class="fa fa-phone fa-fw"> </i>         
                        </div>
                        <div class="about-us-contact-icon-text">
                            <ul>
                                <li>
                                    <?php if ( ! empty($setmore_spasalon_telephone_custom)) : ?>
                                        <strong><?php echo esc_html($setmore_spasalon_telephone_custom) ?>:</strong>
                                        <br>                                
                                    <?php else: ?>                             
                                        <strong>Téléphone:</strong><br>          
                                    <?php endif; ?>
                                    <?php if ( ! empty($setmore_spasalon_phone)) : ?>
                                        <?php echo esc_html($setmore_spasalon_phone) ?>   
                                    <?php endif; ?>                            
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>                
                <div id="handi-widget" class="contact-us-section">
                    <div class="about-us-handi">
                        <div class="about-us-handi-icon">
                            <i class="fa fa-wheelchair fa-fw"></i>
                        </div>
                        <div class="about-us-contact-icon-text">
                            <ul>
                                <li>
                                    <strong>Mobilité réduite:</strong>
                                    <br> Le cabinet a un accès facilité pour les personnes à mobilité réduite
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sidebar" class="contact-us-sidebar widget-area col300" role="complementary">
            <aside id="meta-2" class="widget widget_meta">
                <?php if ( ! empty($setmore_spasalon_hours_custom)) : ?>
                <div class="widget-title"><?php echo esc_html($setmore_spasalon_hours_custom) ?></div>
                <?php else : ?>
                <div class="widget-title">Horaires d'ouverture</div>
                <?php endif;?>
                <table class="business-hours two">
                    <tr>
                        <td class="business-days">LUN</td>
                        <td><?php echo esc_html($setmore_spasalon_mon_start) ?></td>
                    <tr>
                    <tr>
                        <td class="business-days">MAR</td>
                        <td><?php echo esc_html($setmore_spasalon_tue_start) ?></td>
                    <tr>
                    <tr>
                        <td class="business-days">MER</td>
                        <td><?php echo esc_html($setmore_spasalon_wed_start) ?></td>
                    <tr>
                    <tr>
                        <td class="business-days">JEU</td>
                        <td><?php echo esc_html($setmore_spasalon_thu_start) ?></td>
                    <tr>
                    <tr>
                        <td class="business-days">VEN</td>
                        <td><?php echo esc_html($setmore_spasalon_fri_start) ?></td>
                    <tr>
                </table>
            </aside>
        </div>
    </div>
</div>
<style>    #map {        height: 400px;        width: 100%;    }</style>
<div id="map">
    <script>        function initMap()        {            var cabinet = {lat: 46.148953, lng: 6.087220};            var map = new google.maps.Map(document.getElementById('map'), {              zoom: 13,              center: cabinet            });            map.setOptions({draggable: true, zoomControl: true, scrollwheel: false, disableDoubleClickZoom: true});
        var marker = new google.maps.Marker({                position: cabinet,                map: map,                title: "Cabinet ostéopathe Vignes"            });            var contentString =            '<div id="content">'+                '<h1 id="firstHeading" class="firstHeading">Mathilde Vignes Ostéopathe D.F.O</h1>'+                '<div id="bodyContent">'+                    '<p><b>28 Avenue de Genève</b></p>'+                    '<p>74160 Saint-Julien-en-Genevois</p>'+                '</div>'+            '</div>';            var infowindow = new google.maps.InfoWindow({              content: contentString,              maxWidth : 10000            });            infowindow.open(map, marker);        }
    </script>    <script async defer        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2gbJR7ESDHHOarQrcEyrtW4MCRVSp-UA&callback=initMap">    </script>
</div>
<div class= main-page-parallax>
    <div class="inner-title-wrap">
        <div class="inner-title-box">
            <header class="entry-header">
                <h1 class="entry-title"><em>"Prenez soin de votre corps, c'est le seul endroit où vous êtes obligés de vivre"</em> Jim Rohn</h1>
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
                    <div class="imgthumb"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'full' ); ?></a></div>
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