<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

</div>

<div class="clearfix"></div>

<div class="footer-anchor">
	<div class="footer-top"></div>
	<div class="footer-container">
		<footer class="wrapper">
			<ul class="footer-church">
				<?php $args = array(
				'posts_per_page' => 0,
				'post_type' => 'churches',
				'post_status' => 'publish',
				);
				$my_query = null;
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) {
					while ($my_query->have_posts()) : $my_query->the_post(); ?>
				
					<li><a href="<?php the_permalink(); ?>"><span class="ctitle"><?php the_title(); ?></span><br><span class="clocation"><?php the_field( 'city_and_state' ); ?></span></a></li>
				
					<?php endwhile; 
				} 
			wp_reset_query(); ?>
			</ul>
			<div class="logo-bird"></div>
		</footer>
		
		
			
		
		
		
		
		<div class="copyright wrapper">&copy; <?php print date('Y') ?> <?php bloginfo('name'); ?>. All rights reserved.</div>
		<div class="social-networks">
			<a class="fb" href="#" target="_blank"></a>
			<a class="tw" href="#" target="_blank"></a>
			<a class="gp" href="#" target="_blank"></a>
		</div>
	</div>
	<div class="footer-bottom"></div>
</div>

		<?php wp_footer(); ?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.cycle.all.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/vendor/SSUhtml5Audio.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/vendor/css3-mediaqueries.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
		
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			
			ga('create', 'UA-26501692-13', 'churchofthelatterrain.com');
			ga('send', 'pageview');
		
		</script>

        
</body>
</html>
