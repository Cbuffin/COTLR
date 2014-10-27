<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
<div class="main-container aboutpages">
	<div class="main wrapper clearfix">
		<div class="main wrapper clearfix">
			<article>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'press' ); } ?>
					<div class="entry">
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>
				</div>
				<div class="clearfix"></div>
				
						<?php endwhile; endif; ?>
			</article>
			<aside>
			<?php wp_nav_menu( array( 'container_class' => 'footer-menu', 'theme_location' => 'secondary' ) ); ?>
			</aside>
		</div>
	</div>
</div>

<?php get_footer(); ?>
