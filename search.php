<?php
get_header(); ?>

<div class="main_container">

	<header class="page-header">
		<?php if ( have_posts() ) : ?>
			<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'itmicroscope' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		<?php else : ?>
			<h1 class="page-title"><?php _e( 'Nothing Found', 'itmicroscope' ); ?></h1>
		<?php endif; ?>
	</header>

	<div>


		<?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				?>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php

			endwhile; // End of the loop.

			

		else : ?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'itmicroscope' ); ?></p>
			<?php
				get_search_form();

		endif;
		?>
	</div>
</div>

<?php get_footer();
