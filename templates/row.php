<article role="article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<a href="<?php the_permalink(); ?>"><h2 class="entry-title"><?php the_title(); ?></h2></a>
	</header>	
	<div class="entry-content">
		<?php

		// On archive views, display post thumbnail, if available, and excerpt.
		if ( ! is_singular() ) {

			if ( has_post_thumbnail() ) { ?>

				<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Link to %s', 'alienship' ), the_title_attribute( 'echo=0' ) ); ?>">
					<?php echo get_the_post_thumbnail( $post->ID, 'thumbnail', array( 'class' => 'alignleft', 'title' => "" ) ); ?>
				</a>
			<?php
			} // has_post_thumbnail()

			the_excerpt();

		} // if ( ! is_singular() )

		//wp_link_pages(); 
		?>
	</div><!-- .entry-content -->
	<?php
	do_action( 'alienship_entry_content_after' );
	do_action( 'alienship_entry_footer' );
	do_action( 'alienship_post_bottom' );
	?>
</article><!-- #post-<?php the_ID(); ?> -->