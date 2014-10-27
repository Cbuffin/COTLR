<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
<div class="main-container aboutpages">
	<div class="main wrapper clearfix">
		<article class="single">
			<h1>Messages from Lacy Hawkins</h1>
			<p>Read message excerpts from Founder and General Overseer, Brother Lacy Hawkins:</p>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="listen">
				<h2><?php the_title(); ?></h2>
				<?php the_field( 'excerpt' ); ?>
				<a href="<?php the_permalink() ?>">Read More</a>
			</div>
			<div class="clearfix"></div>
				<?php endwhile; endif; ?>
			<div class="clearfix"></div>
		</article>
		<aside class="single">
			<div class="bottom">
				<dl>
					<dt class="hministers">
						<a href="/about-us/meet-our-ministers">
							<h2>Meet Our Ministers</h2>
						</a>
					</dt>
					<dt class="hfaq">
						<a href="/about-us/visitor-frequently-asked-questions">
							<h2>Visitor FAQs</h2>
						</a>
					</dt>
				</dl>
			</div>
		</aside>
	</div>
</div>

<?php get_footer(); ?>
