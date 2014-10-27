<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

<div class="main-container">
	<div class="main wrapper clearfix">
		<article>
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<div class="entry">
					<?php the_content('[&hellip;]'); ?>
				</div>
			</div>
			<?php endwhile; ?>
			<?php else : ?>
			<h2 class="center">Not Found</h2>
			<p class="center">Sorry, but you are looking for something that isn't here.</p>
			<?php get_search_form(); ?>
			<?php endif; ?>
		</article>
		
		<aside>
			<?php get_sidebar(); ?>
		</aside>
	</div> <!-- #main -->
</div> <!-- #main-container -->

<?php get_footer(); ?>