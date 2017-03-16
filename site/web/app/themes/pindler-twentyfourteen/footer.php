		</div><!-- #main -->
		<div id="footer">
			<!-- Flexible Content -->
			<div class="flex-content-container content clearfix">
				<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('featured_footer')) : endif; ?>				
			</div>
			<!-- End of Flexible Content -->
			<div class="footer-details content clearfix">
				<div class="grid-50 follow">
					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('social_media_footer')) : endif; ?>
				</div>
				<div class="grid-50">
					<div class="nav-footer clearfix">
						<?php wp_nav_menu( array( 'theme_location' => 'nav-footer' ) ); ?>
					</div>
					<p class="copyright brown">© <?php echo date("Y"); ?> Pindler & Pindler, Inc. <a style="text-decoration: none; color: #555;" href="tel:1-800-669-6002">1.800.669.6002</a></p>
				</div>
			</div>	
		</div>
	</div>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/magnific-popup.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/slider.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57503518-1', 'auto');
  ga('send', 'pageview');

</script>
<?php wp_footer(); ?>
</body>
</html>