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
                                        <ul>
                                            <li>
                                                <script type="text/javascript" src="//clicrdv-assets.s3.amazonaws.com/lib/clicrdv-widgets-v1/clicrdv-widgets-min.js"></script>
                                                
                                                <script type="text/javascript">CLICRDV.renderWidget('link','jeremy-moulin-osteopathe-Saint-Julien-en-Genevois',{"params": {"colors[content_links]": "000000", "popin" : 1, "calendar_id" :"621377", "styles": "transparent", "nologo" : 1, "nofooter" : 1} ,"style": "clicrdv-button-style2","button_bg_color":"<?php echo get_theme_mod('setmore_spasalon_theme_color') ?>"});</script>    
                                            </li>
                                        </ul>
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
                                    						<strong><?php echo esc_html($setmore_spasalon_telephone_custom) ?>:</strong><br>
                                    						<?php else: ?>
                                    						<strong>Téléphone:</strong><br>
                                    						<?php endif; ?>
                                    						<?php if ( ! empty($setmore_spasalon_phone)) : ?>
                                    						<?php echo esc_html($setmore_spasalon_phone) ?>
                                    						<?php endif; ?>
                                    					</li>
                                    					<li>
                                        					<?php if ( ! empty($setmore_spasalon_facsimile_custom)) : ?>
                                    						<strong><?php echo esc_html($setmore_spasalon_facsimile_custom) ?>:</strong><br>
                                    						<?php endif; ?>
                                    						<?php if ( ! empty($setmore_spasalon_facsimile)) : ?>
                                    						<?php echo esc_html($setmore_spasalon_facsimile) ?>
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
                                    						<strong><?php echo esc_html($setmore_spasalon_email_custom) ?>:</strong><br>
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
                                                            <?php echo esc_html($setmore_spasalon_address) ?></li>
                                                        </ul>
                            						</div>
                        					</div>
           							</div>
           					</div>
           			</div>
           	<div id="form-main">
           			
  							<div id="form-div">
  							    <?php get_template_part( 'content' , 'page' ); ?>
								<div class="clearfix"></div>
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