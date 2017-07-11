<?php
    /**
     * Template Name: Contact Us
     * Description: Template for the Contact Us page.
     */
    get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="intro-copy-box">
    <header class="about-us entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>
</div>
<?php endwhile; // end of the loop. ?>
<div id="content" class="clearfix sbfix">
<div id="main" role="main">
<div class="contact-wraper" style="margin-top: 20px">
    <div class="contact-wraper-content">
        <div id="rdv-widget" class="contact-us-section">
            <div class="about-us-reservation">
                <div class="about-us-reservation-icon">                                        
                    <a href="https://www.clicrdv.com/jeremy-moulin-osteopathe-Saint-Julien-en-Genevois?colors[content_links]=000000&popin=1&calendar_id=621377&styles=transparent&nologo=1&nofooter=1&clicrdv_widget=1&widget_width=600&websource=http%3A%2F%2Fosteosaintjulien.x10host.com%2Fprendre-rendez-vous%2F">                                            
                        <i class="fa fa-calendar fa-fw"></i>
                    </a>
                </div>
                <div class="about-us-reservation-icon-text">
                    <ul>
                        <li>
                            <a href="https://www.clicrdv.com/jeremy-moulin-osteopathe-Saint-Julien-en-Genevois?colors[content_links]=000000&popin=1&calendar_id=621377&styles=transparent&nologo=1&nofooter=1&clicrdv_widget=1&widget_width=600&websource=http%3A%2F%2Fosteosaintjulien.x10host.com%2Fprendre-rendez-vous%2F"; style="text-decoration:none">
                            <strong>Reservez maintenant</strong>
                            </a>
                            <br>Cliquez et prenez rendez-vous avec votre osteopathe dès maintenant!
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
        <div id="address-widget" class="contact-us-section">
            <div class="about-us-email">
                <div class="about-us-email-icon">
                    <i class="fa fa-envelope fa-fw"> </i>
                </div>
                <div class="about-us-email-icon-text">
                    <ul>
                        <li>
                            <?php if ( ! empty($setmore_spasalon_email_custom)) : ?>
                                <strong><?php echo esc_html($setmore_spasalon_email_custom) ?>:</strong>
                                <br>
                            <?php else: ?>
                                <strong>Email:</strong><br>
                            <?php endif; ?>
                            <?php if ( ! empty($setmore_spasalon_email)) : ?>
                                <?php echo esc_html($setmore_spasalon_email) ?>
                            <?php endif; ?>
                        </li>
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
                            <?php echo esc_html($setmore_spasalon_address_street) ?>
                            <?php echo esc_html($setmore_spasalon_address_city) ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="form-main">
    <div id="form-div">
        
        <div class="contact-us-content">
            <?php get_template_part( 'content' , 'page' ); ?>
            <div class="clearfix"></div>
        </div>
    </div>
    <div>
        <div id="sidebar" class="contact-us-sidebar widget-area col300" role="complementary">
            <aside id="meta-2" class="widget widget_meta">
                <?php if ( ! empty($setmore_spasalon_hours_custom)) : ?>
                <div class="widget-title"><?php echo esc_html($setmore_spasalon_hours_custom) ?></div>
                <?php else : ?>
                <div class="widget-title">Business Hours</div>
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
<?php get_footer(); ?>