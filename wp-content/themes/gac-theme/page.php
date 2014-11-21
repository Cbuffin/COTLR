<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

<?php if (is_page('home')) { ?>
	<div class="photobox">
		<img src="<?php bloginfo('template_directory'); ?>/img/photo-01.jpg" alt="everyone is welcome" width="952" height="318" />
		<img src="<?php bloginfo('template_directory'); ?>/img/photo-02.jpg" alt="to worship in Spirit and Truth" width="952" height="318" />
		<img src="<?php bloginfo('template_directory'); ?>/img/photo-03.jpg" alt="and find peace in the Lord" width="952" height="318" />
	</div>
<div class="main-container">
	<div class="main wrapper home clearfix">
		<article>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="entry">
					
					<?php endwhile; endif; ?>
				</div>
			</div>
		</article>
		<aside class="htestimonial">
			<?php $args = array(
				'posts_per_page' => 1,
				'post_type' => 'members',
				'post_status' => 'publish',
			    'tax_query' => array(
			        array(
			            'taxonomy' => 'feature',
			            'field' => 'slug',
			            'terms' => 'home'
				        )
				    )
				);
				$my_query = null;
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) {
					while ($my_query->have_posts()) : $my_query->the_post(); ?>
				
					<div class="homequoteimg"><?php if ( has_post_thumbnail() ){ the_post_thumbnail( 'homequote' ); } ?><a class="imglink" href="/experience/meet-our-members/"></a></div>
					<?php the_field( 'small_quote' ); ?>
					<p class="reference">&mdash;<?php the_title(); ?></p>
				
					<?php endwhile; 
				} 
			wp_reset_query(); ?>
		</aside>
		<div class="clearfix"></div>
		<div class="bottom">
			<dl>
				<dt class="hministers">
					<a href="/about-us/meet-our-ministers/lacy-hawkins">
						<h2>Meet Lacy Hawkins</h2> 
					</a>
				</dt>
				<dt class="hmessage">
					<a href="/learn/messages-from-lacy-hawkins">
						<h2>Messages from Lacy Hawkins</h2>
					</a>
				</dt>
				<dt class="hfaq">
					<a href="/about-us/visitor-frequently-asked-questions">
						<h2>Visitor FAQs</h2>
					</a>
				</dt>
			</dl>
		</div>
	</div>
</div>

<?php } elseif (is_page(array('serving-the-lord', 'city-within-a-city', 'about-us', 'what-we-believe', 'tenets-of-faith'))) { ?>
<div class="main-container">
	<div class="main wrapper clearfix">
		<article class="single">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="entry">
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
					<?php endwhile; endif; ?>
				</div>
				<?php if (is_page('what-we-believe')) { ?>
					<div class="belief"><?php the_field( 'core_belief_1' ); ?></div>
					<div class="belief"><?php the_field( 'core_belief_2' ); ?></div>
					<div class="belief no-margin"><?php the_field( 'core_belief_3' ); ?></div>
					<div class="clearfix"></div>
					<div class="belief no-margin"><?php the_field( 'core_belief_4' ); ?></div>
				<?php } elseif (is_page('tenets-of-faith')) { ?>
					<div class="belief"><?php the_field( 'tenet_1' ); ?></div>
					<div class="belief"><?php the_field( 'tenet_2' ); ?></div>
					<div class="belief no-margin"><?php the_field( 'tenet_3' ); ?></div>
					<div class="clearfix"></div>
					<div class="belief"><?php the_field( 'tenet_4' ); ?></div>
					<div class="belief"><?php the_field( 'tenet_5' ); ?></div>
					<div class="belief no-margin"><?php the_field( 'tenet_6' ); ?></div>
					<div class="clearfix"></div>
					<div class="belief"><?php the_field( 'tenet_7' ); ?></div>
					<div class="belief"><?php the_field( 'tenet_8' ); ?></div>
					<div class="belief no-margin"><?php the_field( 'tenet_9' ); ?></div>
					<div class="clearfix"></div>
					<div class="belief"><?php the_field( 'tenet_10' ); ?></div>
					<div class="belief"><?php the_field( 'tenet_11' ); ?></div>
					<div class="belief no-margin"><?php the_field( 'tenet_12' ); ?></div>
					<div class="clearfix"></div>
					<div class="belief"><?php the_field( 'tenet_13' ); ?></div>
					<div class="belief"><?php the_field( 'tenet_14' ); ?></div>
					<div class="belief no-margin"><?php the_field( 'tenet_15' ); ?></div>
					<div class="clearfix"></div>
					<div class="belief"><?php the_field( 'tenet_16' ); ?></div>
					<div class="belief"><?php the_field( 'tenet_17' ); ?></div>
					<div class="belief no-margin"><?php the_field( 'tenet_18' ); ?></div>
					<div class="clearfix"></div>
				<?php } ?>
			</div>
		</article>
		<aside class="single">
			<?php if (is_page(array('serving-the-lord', 'city-within-a-city'))) { ?>
				<?php wp_nav_menu( array( 'container_class' => 'side-menu', 'theme_location' => 'experiencenav' ) ); ?>
			<?php } elseif (is_page(array('about-us', 'what-we-believe', 'tenets-of-faith'))) { ?>
				<?php wp_nav_menu( array( 'container_class' => 'side-menu', 'theme_location' => 'aboutnav' ) ); ?>
			<?php } ?>
		</aside>
	</div>
</div>
	
<?php } ?>

<?php get_footer(); ?>
