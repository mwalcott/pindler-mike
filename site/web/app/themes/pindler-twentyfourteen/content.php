<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<!--
<div id="nav-media">
	<div class="content">
		<div class="grid-100">
			<header class="entry-header">
			    <div class="entry-meta">
			    	<?php the_date(); ?>
			    </div><!-- .entry-meta --
			</header><!-- .entry-header --
		</div>
	</div>
</div>
-->
<div class="main-content clearfix">
	<div class="content">
		<div class="grid-100">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				<?php if ( is_search() ) : ?>
				<div class="entry-summary">
					<?php the_excerpt(); ?>
				</div><!-- .entry-summary -->
				<?php else : ?>
				<div class="entry-content">
					<?php
						the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyfourteen' ) );
						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
						) );
					?>
				</div><!-- .entry-content -->
				<?php endif; ?>
			
				<?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
			</article><!-- #post-## -->
		</div>
	</div>
</div>