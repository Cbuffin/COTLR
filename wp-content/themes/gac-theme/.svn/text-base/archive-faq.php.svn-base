<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
<div class="main-container aboutpages">
	<div class="main wrapper clearfix">
		<article class="single">
			<h1>Visitor Frequently Asked Questions</h1>
			<p>Are you planning to attend one of our churches and are wondering what to expect?  Here are a few questions you may have and some answers to help you get to know us. Come and see for yourself what this life-changing movement is all about.</p>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="faq">
				<h2><?php the_title(); ?></h2>
				<div class="faqhide"><?php the_content(); ?></div>
			</div>
			<div class="clearfix"></div>
				<?php endwhile; endif; ?>
			<div class="clearfix"></div>
		</article>
		<aside class="single">
			<?php wp_nav_menu( array( 'container_class' => 'side-menu', 'theme_location' => 'aboutnav' ) ); ?>
		</aside>
	</div>
</div>

<?php get_footer(); ?>
