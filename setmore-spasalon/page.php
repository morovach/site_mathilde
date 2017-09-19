<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <div class = "header-spacer"> </div>

    <div id="content" class="clearfix sbfix pgsb">

        <div id="main" class="col620 clearfix" role="main">

			<?php get_template_part( 'content', 'page' ); ?>
			<?php comments_template( '', true ); ?>

        </div> <!-- end #main -->



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