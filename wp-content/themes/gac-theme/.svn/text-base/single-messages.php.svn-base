<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

<div class="main-container">
	<?php if (is_single()) { ?>
	<div class="main wrapper clearfix">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="single message">
			<h1><?php the_title(); ?></h1>
			<small><?php the_field( 'minister' ); ?></small>
			<div class="clearfix"></div>
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="entry">
					<?php the_content(); ?>
				</div>
			</div>
			
			<div class="clearfix"></div>

		</article>
		
		<aside class="single">
			<?php wp_nav_menu( array( 'container_class' => 'side-menu', 'theme_location' => 'learnnav' ) ); ?>
		</aside>
		
		<div class="clearfix"></div>
		
		<?php endwhile; endif; ?>
	</div>
	<?php } ?>
</div>

<?php get_footer(); ?>
