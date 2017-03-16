<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="page-header" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/backgrounds/bg-fabric-mesh.png');">
	<div class="content">
		<?php if (is_single()) : ?>
		<h1 class="grid-100"><?php the_title(); ?></h1>
		<?php else : ?>
		<h1 class="grid-100"><?php echo apply_filters('the_title',get_page( get_option('page_for_posts') )->post_title); ?></h1>
		<?php endif; ?>
	</div>
</div>
<div id="nav-media">
	<div class="content">
		<?php wp_nav_menu( array( 'theme_location' => 'nav-media', 'container_class' => 'grid-100' ) ); ?>
	</div>
</div>
<div class="main-content clearfix">
    <div class="content">
    	<div class="grid-100">
    		<?php echo apply_filters('the_content',get_page( get_option('page_for_posts') )->post_content); ?>
    	</div>
		<div class="news-list clearfix">
	        <?php
		    if ( have_posts() ) :
		    	// Start the Loop.
		    	while ( have_posts() ) : the_post();
	
		    		/*
		    		 * Include the post format-specific template for the content. If you want to
		    		 * use this in a child theme, then include a file called called content-___.php
		    		 * (where ___ is the post format) and that will be used instead.
		    		 */
		    		get_template_part( 'content', 'media' );
	
		    	endwhile;
		    	// Previous/next post navigation.
		    	//twentyfourteen_paging_nav();
	
		    else :
		    	// If no content, include the "No posts found" template.
		    	//get_template_part( 'content', 'none' );
	
		    endif;
		    ?>			
		</div>
    </div>
</div>
<?php
get_sidebar();
get_footer();
