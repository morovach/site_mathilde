<?php /* Template Name: Le cabinet */ ?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <div class = "header-spacer"> </div>

    <div id="content" class="clearfix sbfix pgsb">
        
        <div id="main" class="col620 clearfix" role="main">

			<?php get_template_part( 'content', 'page' ); ?>

			<?php comments_template( '', true ); ?>

        </div> <!-- end #main -->

         <style>    #wrapper-google-reviews { height: auto; width: 31.333%; float: right; overflow:hidden;   }</style>
        <div id="wrapper-google-reviews">
            <style>    #google-reviews { height: auto; width: 100%;   }</style>
            <div id="google-reviews"></div>
            <div class= "write-review-button">
                <a href="https://search.google.com/local/writereview?placeid=ChIJK1hbnol7jEcRE7ywC4Hc89o"> Laissez votre propre avis! </a>
            </div>
            <link rel="stylesheet" href="https://cdn.rawgit.com/stevenmonson/googleReviews/6e8f0d79/google-places.css">
            <script src="https://cdn.rawgit.com/stevenmonson/googleReviews/6e8f0d79/google-places.js"></script>

        </div>

        <?php get_sidebar('page'); ?>

        <div id="sidebar" class="col300" role="complementary">
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
        
    </div> <!-- end #content -->
    
<?php endwhile; // end of the loop. ?>   
     
<?php get_footer(); ?>



<!-- Google Maps script: to display the map -->
<script>
    function initAllGoogle(){
        initPlaces();
    }


    function initPlaces(){
        <!-- Receive 4 best reviews -->
        jQuery(document).ready(function( $ ) {
           $("#google-reviews").googlePlaces({
                placeId: 'ChIJK1hbnol7jEcRE7ywC4Hc89o' //Find placeID @: https://developers.google.com/places/place-id
              , render: ['reviews']
              , min_rating: 4
              , max_rows:5
              , rotateTime: 6000
           });
        });
    }
</script>

<!-- Google api script call -->
<script async defer        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwXOajbithnEzHPPEXeyp1ZdgloU0I0ow&callback=initAllGoogle&libraries=places">    </script>

