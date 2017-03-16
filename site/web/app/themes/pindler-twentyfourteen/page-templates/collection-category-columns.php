<?php
/**
 * Template Name: Collection Directory Columns
 */
get_header(); ?>
<div id="page-header" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/backgrounds/bg-fabric-mesh.png');">
	<div class="content">
		<h1 class="grid-100"><?php echo get_the_title(); ?></h1>
	</div>
</div>
<div class="main-content clearfix">
    <div class="content collection-columns">
    	<div class="grid-100">
    		<?php
				 // Start the Loop.
				 while ( have_posts() ) : the_post();
			
			    	// Include the page content template.
			    	the_content();
			
			    	// If comments are open or we have at least one comment, load up the comment template.
			    	if ( comments_open() || get_comments_number() ) {
			    		comments_template();
			    	}
				endwhile;
			?>
    	</div>
    </div><!-- .content -->
</div><!-- .main-content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>