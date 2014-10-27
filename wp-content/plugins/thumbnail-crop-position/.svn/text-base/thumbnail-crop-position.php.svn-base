<?php
	/*
	Plugin Name: Thumbnail Crop Position
	Plugin URI: http://www.poselab.com/
	Description: Select the crop position of your thumbnails.
	Author: Javier Gómez Pose
	Author URI: http://www.poselab.com/
	Version: 1.2.1
	License: GPL2
		
		Copyright 2013 Javier Gómez Pose  (email : javierpose@gmail.com)

		This program is free software; you can redistribute it and/or modify
		it under the terms of the GNU General Public License, version 2, as 
		published by the Free Software Foundation.

		This program is distributed in the hope that it will be useful,
		but WITHOUT ANY WARRANTY; without even the implied warranty of
		MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
		GNU General Public License for more details.

		You should have received a copy of the GNU General Public License
		along with this program; if not, write to the Free Software
		Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
	*/


//Enable Image Scaling on Upload
class Thumbnail_Crop_Position {	
	

	//Initialize
	function __construct() {
		define( 'MYPLUGINNAME_PATH', plugin_dir_url(__FILE__) );

		load_plugin_textdomain( 'thumb_crop_position', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

		//init option with center-center default value
		$options = array(
			'position' => '4'
		);
		add_option( 'thumb_crop_position_option', $options );

		// Action and filter hooks
		$this->hooks();
	}


	//hooks
	function hooks() {
		global $pagenow;
		if ($pagenow == 'media-new.php') {
			add_action( 'post-upload-ui', array( $this, 'uploader_controls' ) );
		} else {
			add_action( 'pre-upload-ui', array( $this, 'uploader_controls' ) );
		}
		add_action( 'post-upload-ui', array( $this, 'uploader_scripts_styles' ) );
		add_action( 'wp_ajax_my_action', array( $this, 'my_action_callback' ) );
		add_filter( 'image_resize_dimensions', array( $this, 'custom_image_resize_dimensions' ), 10, 6 );
	}


	//load scripts and styles only in uploader
	function uploader_scripts_styles() {
		?>
		<script type="text/javascript" src="<?php echo MYPLUGINNAME_PATH; ?>js/scripts.js"></script>
		<link rel="stylesheet" href="<?php echo MYPLUGINNAME_PATH; ?>css/styles.css" type="text/css">
	<?php
	}


	// ajax response to update thumb_crop_position_option
	function my_action_callback() {
		global $wpdb;
		$ajax_position_option = intval( $_POST['ajax_position_option'] );
		$options['position'] = $ajax_position_option;
		update_option( 'thumb_crop_position_option', $options );
		echo $ajax_position_option;
		die(); 
	}


	//write html controls
	function uploader_controls() {

		?>
		<div class="thumbnail-crop-position">
			<p><?php _e( 'Select thumbnail crop position:', 'thumb_crop_position' );?></p>
			<div class="tcp-controls">
				<!-- top -->
				<div class="tcp-top">
					<div class="<?php $this->check_current('0'); ?>">
						<input id="ci-0" name="position" type="radio" value="0" onClick="myfunction('0');" />
						<label for="ci-0" class="ci-0">Top-Left</label>
					</div>
					<div class="<?php $this->check_current('1'); ?>">
						<input id="ci-1" name="position" type="radio" value="1" <?php checked( '1', get_option( 'thumb_crop_position_option' ) ); ?>  onClick="myfunction('1');" />
						<label for="ci-1" class="ci-1">Top-Center</label>
					</div>
					<div class="<?php $this->check_current('2'); ?>">
						<input id="ci-2" name="position" type="radio" value="2" <?php checked( '2', get_option( 'thumb_crop_position_option' ) ); ?>  onClick="myfunction('2');" />
						<label for="ci-2" class="ci-2">Top-Right</label>
					</div>
				</div>

				<!-- center -->
				<div class="tcp-center">
					<div class="<?php $this->check_current('3'); ?>">
						<input id="ci-3" name="position" type="radio" value="3" <?php checked( '3', get_option( 'thumb_crop_position_option' ) ); ?>  onClick="myfunction('3');" />
						<label for="ci-3" class="ci-3">Center-Left</label>
					</div>
					<div class="<?php $this->check_current('4'); ?>">
						<input id="ci-4" name="position" type="radio" value="4" <?php checked( '4', get_option( 'thumb_crop_position_option' ) ); ?>  onClick="myfunction('4');" />
						<label for="ci-4" class="ci-4">Center-Center</label>
					</div>
					<div class="<?php $this->check_current('5'); ?>">
						<input id="ci-5" name="position" type="radio" value="5" <?php checked( '5', get_option( 'thumb_crop_position_option' ) ); ?>  onClick="myfunction('5');" />
						<label for="ci-5" class="ci-5">Center-Right</label>
					</div>
				</div>

				<!-- bottom -->
				<div class="tcp-bottom">
					<div class="<?php $this->check_current('6'); ?>">
						<input id="ci-6" name="position" type="radio" value="6" <?php checked( '6', get_option( 'thumb_crop_position_option' ) ); ?>  onClick="myfunction('6');" />
						<label for="ci-6" class="ci-6">Bottom-Left</label>
					</div>
					<div class="<?php $this->check_current('7'); ?>">
						<input id="ci-7" name="position" type="radio" value="7" <?php checked( '7', get_option( 'thumb_crop_position_option' ) ); ?>  onClick="myfunction('7');" />
						<label for="ci-7" class="ci-7">Bottom-Center</label>
					</div>
					<div class="<?php $this->check_current('8'); ?>">
						<input id="ci-8" name="position" type="radio" value="8" <?php checked( '8', get_option( 'thumb_crop_position_option' ) ); ?>  onClick="myfunction('8');" />
						<label for="ci-8" class="ci-8">Bottom-Right</label>
					</div>
				</div>
			</div>
		</div>
	<?php
	}


	//check current control
	function check_current( $val ) {
		$options = get_option( 'thumb_crop_position_option' );

		if ( $options['position'] == $val ) {
			echo ' current';
		} 
	}


	//hook for custom thumbnail crop position
	//reference: http://codex.wordpress.org/Plugin_API/Filter_Reference/image_resize_dimensions
	//---------------------------------------
	function custom_image_resize_dimensions( $payload, $orig_w, $orig_h, $dest_w, $dest_h, $crop){

		// Change this to a conditional that decides whether you 
		// want to override the defaults for this image or not.;
		if( false )
			return $payload;

		// crop the largest possible portion of the original image that we can size to $dest_w x $dest_h
		if ( $crop ) {
			$aspect_ratio = $orig_w / $orig_h;
			$new_w = min($dest_w, $orig_w);
			$new_h = min($dest_h, $orig_h);

			if ( !$new_w ) {
				$new_w = intval($new_h * $aspect_ratio);
			}

			if ( !$new_h ) {
				$new_h = intval($new_w / $aspect_ratio);
			}

			$size_ratio = max($new_w / $orig_w, $new_h / $orig_h);

			$crop_w = round($new_w / $size_ratio);
			$crop_h = round($new_h / $size_ratio);


			// positions
			$s_x_left = 0;
			$s_x_center = floor( ($orig_w - $crop_w) / 2 );
			$s_x_right = floor( ($orig_w - $crop_w) );

			$s_y_top = 0; 
			$s_y_center = floor( ($orig_h - $crop_h) / 2 );
			$s_y_bottom = floor( ($orig_h - $crop_h) );

			$options = get_option( 'thumb_crop_position_option' );
			$pos =  $options['position'];

			//row 1
			if ( $pos == 0 ) {
				$s_x = $s_x_left;
				$s_y = $s_y_top;
			}
			elseif  ( $pos == 1 ) {
				$s_x = $s_x_center;
				$s_y = $s_y_top;
			}
			elseif  ( $pos == 2 ) {
				$s_x = $s_x_right;
				$s_y = $s_y_top;
			}

			//row 2
			elseif  ( $pos == 3 ) {
				$s_x = $s_x_left;
				$s_y = $s_y_center;
			}
			elseif  ( $pos == 4 ) {
				$s_x = $s_x_center;
				$s_y = $s_y_center;
			}
			elseif  ( $pos == 5 ) {
				$s_x = $s_x_right;
				$s_y = $s_y_center;
			}

			//row 3
			elseif  ( $pos == 6 ) {
				$s_x = $s_x_left;
				$s_y = $s_y_bottom;
			} elseif  ( $pos == 7 ) {
				$s_x = $s_x_center;
				$s_y = $s_y_bottom;
			} elseif  ( $pos == 8 ) {
				$s_x = $s_x_right;
				$s_y = $s_y_bottom;
			} 

			// for security
			else{
				$s_x = $s_x_center;
				$s_y = $s_y_center;				
			}

		// don't crop, just resize using $dest_w x $dest_h as a maximum bounding box
		} else {
			$crop_w = $orig_w;
			$crop_h = $orig_h;

			$s_x = 0;
			$s_y = 0;

			list( $new_w, $new_h ) = wp_constrain_dimensions( $orig_w, $orig_h, $dest_w, $dest_h );
		}

		// if the resulting image would be the same size or larger we don't want to resize it
		if ( $new_w >= $orig_w && $new_h >= $orig_h )
			return false;

		// the return array matches the parameters to imagecopyresampled()
		// int dst_x, int dst_y, int src_x, int src_y, int dst_w, int dst_h, int src_w, int src_h
		return array( 0, 0, (int) $s_x, (int) $s_y, (int) $new_w, (int) $new_h, (int) $crop_w, (int) $crop_h );

	}

} // Thumbnail_Crop_Position

add_action('init', create_function('', 'new Thumbnail_Crop_Position();'));
?>