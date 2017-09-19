
<article id="post-<?php the_ID(); ?>">
	
	<header class="entry-header">
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'setmore-spasalon' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

		<?php if ( 'post' == get_post_type() ) : ?>

		<?php endif; ?>
	</header><!-- .entry-header -->
    
    
	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
    	<?php if ( has_post_thumbnail()) : ?>
            <div class="imgthumb" id="home-imgthumb"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( array(150, 125) ); ?></a></div>       
    	<?php endif; ?>
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content post-content">
    

	<?php if ( has_post_format('audio') || has_post_format('chat') || has_post_format('link') ) : ?>
        <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'setmore-spasalon' ) ); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'setmore-spasalon' ), 'after' => '</div>' ) ); ?>
    <?php else : ?>
      <?php if ( has_excerpt() ) : ?>
        <p><?php the_excerpt(); ?><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">lire la suite</a></p>
      <?php else : ?>
        <p><?php echo setmore_spasalon_excerpt(25); ?><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">lire la suite</a></p>
      <?php endif; ?>
      <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'setmore-spasalon' ), 'after' => '</div>' ) ); ?>
    <?php endif; ?>

	</div><!-- .entry-content -->
	<?php endif; ?>
    
    <?php /* This piece of code is to retrieve the mini picture
        If there is a picture inside the post, it will be able to catch it otherwize
        it will try to find anotehr relative picture */ ?>
    <?php if ( has_post_thumbnail()) : ?>
        <!--/*the_post_thumbnail(  array(350, 350) )*/ est une optimisation pour réduire la taille des images: compression et gagner beaucoup de temps de chargement-->
        <div class="imgthumb" id="home-imgthumb"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(  array(350, 350) ); ?></a></div>
    <?php else : ?>
        <?php $setmore_spasalon_postimgs = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC' ) );
        if ( !empty($setmore_spasalon_postimgs) ) {
            $setmore_spasalon_firstimg = array_shift( $setmore_spasalon_postimgs );
            $setmore_spasalon_th_image = wp_get_attachment_image( $setmore_spasalon_firstimg->ID, 'full', false );?>
            <div class="imgthumb" id="home-imgthumb">
                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php echo esc_url($setmore_spasalon_th_image); ?></a>
            </div>
        <?php } ?>
        <?php /*This place is to retrieve the text of the post*/   ?>
    <?php endif; ?>    
    
    <p><span class="date updated published">Publié en 2017 </span>par <span class="vcard author"><span class="fn">Mathilde Vignes Ostéopathe D.F.O</span></span>,
    </br>Ostéopathe Saint-Julien-en-Genevois.
    </p>    
</article><!-- #post-<?php the_ID(); ?> -->
