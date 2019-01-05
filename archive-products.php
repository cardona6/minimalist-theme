<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
    <table border="1" width="1000">
		<tr>
		
			<th>Product Name</th>
			<th>Coluor</th>
			<th>Price</th>
			<th>SKU Code</th>
			<th>DELETE</th>
		</tr>

	

	
		<?php
		if ( have_posts() ) :


			/* Start the Loop */
			while ( have_posts() ) : 
				the_post();
				?>
				<tr>
				   <td><?php  the_title(); ?> </td>
				   <td><?php  echo get_field('colour'); ?> </td>
				</tr>
<?php

			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</table>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();