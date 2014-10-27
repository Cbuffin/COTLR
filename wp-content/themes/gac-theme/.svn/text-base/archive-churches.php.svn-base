<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
<div class="main-container aboutpages">
	<div class="main wrapper clearfix">
		<article class="full">
			<h1>Come &amp; See</h1>
			<p>The Church of the Latter Rain is a Christian, non-denominational church with fellowships throughout the United States. If you are seeking a deeper relationship with Jesus Christ and desire to be filled with the Holy Ghost and His word, come and see for yourself the mighty works of God.</p>
			<dl>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<dt id="post-<?php the_ID(); ?>">
					<div>
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'lrgthumbnail' ); } ?>
						<a class="imglink" href="<?php the_permalink() ?>"></a>
					</div>
					<h2><?php the_title(); ?></h2>
					<h3><?php the_field( 'city_and_state' ); ?></h3>
				</dt>
				<?php endwhile; endif; ?>
			</dl>
			<div class="clearfix"></div>
		</article>
	</div>
</div>

<?php get_footer(); ?>
