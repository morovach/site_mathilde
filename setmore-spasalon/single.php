<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

       <div class = "header-spacer"> </div>
	<div class="inner-title-wrap">
      <div class="inner-title-box">
	  <header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

	  </header><!-- .entry-header -->
      </div>
    </div>

    <div id="content" class="clearfix sbfix">
        
        <div id="main" class="col620 clearfix" role="main">
               	
               	 <div class="imgthumb" id="article-picture"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'full' ); ?></a></div>
				<?php get_template_part( 'content', 'single' ); ?>
                <p> <span class="date updated published"> Publié en 2017 par </span>
                <span class="vcard author"><span class="fn"> Mathilde Vignes Ostéopathe D.F.O </span></span> </p>


				<?php setmore_spasalon_content_nav( 'nav-below' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>

        </div> <!-- end #main -->

        <?php get_sidebar(); ?>

    </div> <!-- end #content -->
<?php endwhile; // end of the loop. ?>        
<?php get_footer(); ?>