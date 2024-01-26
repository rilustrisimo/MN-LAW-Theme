<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Eyorsogood_Design
 */

get_header(); 
?>
	<div class="blog-header container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12 col-12 blog-header-title"><?php echo get_the_title(); ?></div>
				<div class="col-md-6 col-sm-12 col-xs-12 col-12"><?php echo qed_render_template_part( 'templates/header/breadcrumbs', '', array(), true ); ?></div>
			</div>
		</div>
	</div>

	<div class="clearfix"></div>

	<div class="page-single-narrow">
		<main class="page-single__content" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'templates/content', get_post_type() );

//			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
//			if ( comments_open() || get_comments_number() ) :
//				comments_template();
//			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- .page-single__content -->
	</div><!-- .page-single-narrow -->

<?php
//get_sidebar();
get_footer();
