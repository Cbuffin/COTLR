<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
<div id="main" class="clearfix">
	
	<?php if (is_single()) { ?>
	<div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="postpage" id="post-<?php the_ID(); ?>">
			
			<h1><?php the_title(); ?></h1>
			
			<div class="entry">
				<?php the_content(); ?>
			</div>
		</div>
		<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
	<?php } ?>
</div>

<?php get_footer(); ?>
