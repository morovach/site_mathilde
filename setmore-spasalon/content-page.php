<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">
        <h1 class="entry-title article-title"><?php the_title(); ?></h1>
    </header><!-- .entry-header -->        

	<div class="entry-content post-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'setmore-spasalon' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'setmore-spasalon' ), '<span class="edit-link">', '</span>' ); ?>
    <p> <span class="date updated published"> Publié en 2017  </span> par
    <span class="vcard author"><span class="fn"> Mathilde Vignes Ostéopathe D.F.O </span></span> </p>    

    
</article><!-- #post-<?php the_ID(); ?> -->
