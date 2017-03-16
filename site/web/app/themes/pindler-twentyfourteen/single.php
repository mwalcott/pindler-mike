<?php
/*
 * The Template for displaying all single posts
 */

get_header(); ?>
<div id="news-navigation-container">
	<div id="news-navigation">
		<?php
		/*
			$prevPost = get_adjacent_post(false, '', true);
			$nextPost = get_adjacent_post(false, '', false);
			if($prevPost){
				$prevURL = get_permalink($prevPost->ID);
				echo '<a class="ajax-popup-link" href="' . $prevURL . '"><img class="mfp-news-prev" src="'.get_stylesheet_directory_uri().'/assets/images/popup/popup-prev.png" /></a>';
			}
			if($nextPost){
				$nextURL = get_permalink($nextPost->ID);
				echo '<a class="ajax-popup-link" href="' . $nextURL . '"><img class="mfp-news-next" src="'.get_stylesheet_directory_uri().'/assets/images/popup/popup-next.png" /></a>';
			}
		*/
		?>
		<img class="close-trigger mfp-close" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/popup/popup-close.jpg" />
	</div>
</div>
<div id="page-header" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/backgrounds/bg-fabric-mesh.png');">
	<div class="content">
		<h1 class="grid-100"><?php echo get_the_title(); ?></h1>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function() {

	//News Popup - Stop Page Scrolling When Popup is Active
	$('.mfp-close').click(function() {
		$('#wrapper').removeClass('noscroll');
	});
	
});
</script>
<?php
    // Start the Loop.
    while ( have_posts() ) : the_post();

    	/*
    	 * Include the post format-specific template for the content. If you want to
    	 * use this in a child theme, then include a file called called content-___.php
    	 * (where ___ is the post format) and that will be used instead.
    	 */
    	get_template_part( 'content', get_post_format() );

    	// Previous/next post navigation.
    	//twentyfourteen_post_nav();

    	// If comments are open or we have at least one comment, load up the comment template.
    	if ( comments_open() || get_comments_number() ) {
    		comments_template();
    	}
    endwhile;
    
get_sidebar();
get_footer();
?>