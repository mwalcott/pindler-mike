<?php
/**
 * Template Name: Home Template
 */

get_header(); ?>
<?php if(is_page(1992)) { ?>
    <?php echo get_new_royalslider(13); ?>
<?php } else { ?>
<div class="slideshow-container">
    <?php echo get_new_royalslider(12); ?>
</div>
<?php } ?>
<div class="mobile-slideshow-container">
	<?php echo get_new_royalslider(9); ?>
</div>
<div class="main-content clearfix">
    <div class="content">
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
</div><!-- #main-content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>