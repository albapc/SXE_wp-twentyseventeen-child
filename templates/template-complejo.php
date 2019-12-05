<?php
/**
* Template Name: Template Complejo
* Template Post Type: page
*
* @package WordPress
* @subpackage Twenty_Seventeen
* @since Twenty Seventeen 1.0
*/

get_header(); ?>

<div class="wrap" id="complejo">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<h1 class="complejo">Paginas</h1>
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer("complejo");