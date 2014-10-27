<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

<div class="main-container">
	<div class="main wrapper product-landing clearfix"></div>

	<?php $term = $wp_query->queried_object;?>
	<?php if (has_term('core', 'type')) { ?>
	<div class="photobox-one">
		<div class="wrap slide-core"></div>
	</div>
	<div class="edge">
		<div class="wrap texture"></div>
	</div>
	<div class="photo-tag coretest">
		<p>Human to the power of X</p>
		<div class="message">Balance &amp; Stability</div>
	</div>
	<?php } elseif (has_term('training-tools', 'type')) { ?>
	<div class="photobox-one">
		<div class="wrap slide-training-tools"></div>
	</div>
	<div class="edge">
		<div class="wrap texture"></div>
	</div>
	<div class="photo-tag">
		<p>Human to the power of X</p>
		<div class="message">Preserve &amp; Protect</div>
	</div>
	<?php } elseif (has_term('conditioning', 'type')) { ?>
	<div class="photobox-one">
		<div class="wrap slide-conditioning"></div>
	</div>
	<div class="edge">
		<div class="wrap texture"></div>
	</div>
	<div class="photo-tag">
		<p>Human to the power of X</p>
		<div class="message">Strength &amp; Endurance</div>
	</div>
	<?php } elseif (has_term('belts', 'type')) { ?>
	<div class="photobox-one">
		<div class="wrap slide-belts"></div>
	</div>
	<div class="edge">
		<div class="wrap texture"></div>
	</div>
	<div class="photo-tag">
		<p>Human to the power of X</p>
		<div class="message">Support &amp; Stability</div>
	</div>
	<?php }else{ ?>
	sdfsdfsdfsdfsdfsdfsdf
	<?php } ?>
</div>

<div class="landing-thumbs">
	<dl>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php global $more; $more = 0; ?>
		<dt>
			<a href="<?php the_permalink(); ?>">
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'thumbnail' ); } ?>
			<div class="clearfix"></div>
			<?php the_title(); ?>
			</a>
		</dt>
		<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
