<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

 <div class="main_container">
<h1><?php the_title(); ?></h1>

			<?php
			while ( have_posts() ) : the_post();
				?>
				
				<?php
				the_content();

			endwhile; 
			?>

	
</div>

<?php get_footer();
