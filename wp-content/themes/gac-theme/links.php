<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

/*
Template Name: Links
*/
?>

<?php get_header(); ?>
</header>
<div id="main" class="clearfix">

	<div>
		<h2>Links:</h2>
		<ul>
			<?php wp_list_bookmarks(); ?>
		</ul>

	</div>
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
