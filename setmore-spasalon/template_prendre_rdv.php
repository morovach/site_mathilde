<?php /* Template Name: Prendre RDV */ ?>

<?php get_header(); ?>


<!-- Facebook login script -->
<script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else {
      // The person is not logged into your app or we are unable to tell.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me?fields=name,email,id', function(response) {
        console.log('Successful login for: ' + response.name);
        document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + ' '+ response.email + ' '+ response.id + '!';

        document.getElementById('iframe_clickRDV').innerHTML =
        '<iframe src="https://www.clicrdv.com/jeremy-moulin-osteopathe-Saint-Julien-en-Genevois?fiche[email]='+ response.email +'&colors[content_links]=000000&colors[even_timeslot_col_bg]=c6ddec&colors[odd_timeslot_col_bg]=b4e1ff&popin=1&calendar_id=621377&styles=transparent&nologo=1&nofooter=1&clicrdv_widget=1&widget_width=600&websource=http%3A%2F%2Fosteosaintjulien.x10host.com%2Fprendre-rendez-vous%2F" style="width: 100%; height: 500px; border: 0">' +
            '<p>'+
                'Si vous n\'arrivez pas à voir le module de prise de rendez-vous, veuillez <ahref="https://www.clicrdv.com/jeremy-moulin-osteopathe-Saint-Julien-en-Genevois?colors[content_links]=000000&colors[even_timeslot_col_bg]=c6ddec&colors[odd_timeslot_col_bg]=b4e1ff&popin=1&calendar_id=621377&styles=transparent&nologo=1&nofooter=1&clicrdv_widget=1&widget_width=600&websource=http%3A%2F%2Fosteosaintjulien.x10host.com%2Fprendre-rendez-vous%2F">cliquer sur ce lien</a>' +
                'pour prendre rendez vous:' +
            '</p>'+
        '</iframe>'
    });
  }
</script>

<div class = "header-spacer"> </div>

<div id="content" class="clearfix sbfix pgsb">

    <div id="main" class="col620 clearfix" role="main">
    
        <!--
          Below we include the Login Button social plugin. This button uses
          the JavaScript SDK to present a graphical Login button that triggers
          the FB.login() function when clicked.
        -->

        <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
        </fb:login-button>

        <div id="status"> </div>

        <div id="iframe_clickRDV"> </div>

        <!--
        // <iframe src="https://www.clicrdv.com/jeremy-moulin-osteopathe-Saint-Julien-en-Genevois?colors[content_links]=000000&colors[even_timeslot_col_bg]=c6ddec&colors[odd_timeslot_col_bg]=b4e1ff&popin=1&calendar_id=621377&styles=transparent&nologo=1&nofooter=1&clicrdv_widget=1&widget_width=600&websource=http%3A%2F%2Fosteosaintjulien.x10host.com%2Fprendre-rendez-vous%2F" style="width: 100%; height: 500px; border: 0">
           // <p>Si vous n'arrivez pas à voir le module de prise de rendez-vous, veuillez
             // <a href="https://www.clicrdv.com/jeremy-moulin-osteopathe-Saint-Julien-en-Genevois?colors[content_links]=000000&colors[even_timeslot_col_bg]=c6ddec&colors[odd_timeslot_col_bg]=b4e1ff&popin=1&calendar_id=621377&styles=transparent&nologo=1&nofooter=1&clicrdv_widget=1&widget_width=600&websource=http%3A%2F%2Fosteosaintjulien.x10host.com%2Fprendre-rendez-vous%2F">cliquer sur ce lien</a>
             // pour prendre rendez vous:
           // </p>
        // </iframe>
        -->

        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', 'page' ); ?>
            <?php comments_template( '', true ); ?>
        <?php endwhile; // end of the loop. ?>

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
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwXOajbithnEzHPPEXeyp1ZdgloU0I0ow&callback=initAllGoogle&libraries=places">    </script>
