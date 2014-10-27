<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
<div class="main-container aboutpages">
	<div class="main wrapper clearfix">
		<article class="single">
			<h1>Meet Our Ministers</h1>
			<dl>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<dt id="post-<?php the_ID(); ?>">
					<div>
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'thumbnail' ); } ?>
						<a class="imglink" href="<?php the_permalink() ?>"></a>
					</div>
					<h2><?php the_title(); ?></h2>
					<h3><?php the_field( 'church_title' ); ?></h3>
				</dt>
				<?php endwhile; endif; ?>
			</dl>
			<div class="clearfix"></div>
		</article>
		<aside class="single">
			<?php wp_nav_menu( array( 'container_class' => 'side-menu', 'theme_location' => 'aboutnav' ) ); ?>
		</aside>
	</div>
</div>

<?php get_footer(); ?>
