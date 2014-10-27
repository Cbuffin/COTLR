<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

include('custom-ministers.php');
include('custom-members.php');
include('custom-messages.php');
include('custom-churches.php');
include('custom-faq.php');

add_action('post_edit_form_tag', 'post_edit_form_tag');
function post_edit_form_tag() {
    echo ' enctype="multipart/form-data"';
}

add_action( 'after_setup_theme', 'regMyMenus' );

function regMyMenus() {
// This theme uses wp_nav_menu() in four locations.
register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'regMyMenus' ),
		'aboutnav' => __( 'About Navigation', 'regMyMenus' ),
		'experiencenav' => __( 'Experience Navigation', 'regMyMenus' ),
		'learnnav' => __( 'Learn Navigation', 'regMyMenus' ),
		'seenav' => __( 'Come And See Navigation', 'regMyMenus' ),
	) );
}


automatic_feed_links();

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
} 



add_filter('the_content', 'prettyPhoto', 12);
add_filter('get_comment_text', 'prettyPhoto');
function prettyPhoto ($content)
{   global $post;
	$pattern = "/<a(.*?)href=('|\")([^>]*).(bmp|gif|jpeg|jpg|png)('|\")(.*?)>(.*?)<\/a>/i";
    $replacement = '<a$1href=$2$3.$4$5 rel="prettyPhoto['.$post->ID.']"$6>$7</a>';
    $content = preg_replace($pattern, $replacement, $content);
    return $content;
}

add_theme_support( 'post-thumbnails' );

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 ); add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 ); function remove_thumbnail_dimensions( $html ) { $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html ); return $html; }

if (class_exists('MultiPostThumbnails')) {
    $types = array('page', 'post', 'product');
    foreach($types as $type) {
        $thumb = new MultiPostThumbnails(array(
            'label' => 'Second Image',
            'id' => 'second-image',
            'post_type' => $type
            )
        );
        $thumb = new MultiPostThumbnails(array(
            'label' => 'Third Image',
            'id' => 'third-image',
            'post_type' => $type
            )
        );
        $thumb = new MultiPostThumbnails(array(
            'label' => 'Fourth Image',
            'id' => 'fourth-image',
            'post_type' => $type
            )
        );
        $thumb = new MultiPostThumbnails(array(
            'label' => 'Fifth Image',
            'id' => 'fifth-image',
            'post_type' => $type
            )
        );
    }
}

add_image_size( 'thumbnail', 230, 172, true ); //(cropped)
add_image_size( 'lrgthumbnail', 314, 248, true ); //(cropped)
add_image_size( 'homequote', 203, 160, true ); //(cropped)
add_image_size( 'homebottom', 314, 194, true ); //(cropped)
add_image_size( 'pageimage', 318, 0, false ); //(cropped)

function boxleft_shortcode( $atts, $content = null ) {
   return '<div class="boxleft">' . $content . '</div>';
}
add_shortcode( 'boxleft', 'boxleft_shortcode' );

function boxright_shortcode( $atts, $content = null ) {
   return '<div class="boxright">' . $content . '</div>';
}
add_shortcode( 'boxright', 'boxright_shortcode' );



function get_shares($url) { 
    // retrieves data with HTTP GET method for current URL      
    $json_string = wp_remote_get(
        'https://graph.facebook.com/'.$url,
        array(
            // disable checking SSL sertificates
            'sslverify'=>false
        )
    );  
    // retrives only body from previous HTTP GET request    
    $json_string = wp_remote_retrieve_body($json_string);
     
    // convert body data to JSON format
    $json = json_decode($json_string, true);    
         
    if (isset($json['shares'])) {
        // return count of Facebook shares for requested URL
        return intval( $json['shares'] ); 
    } else {
        // return zero if response is error or current URL not shared yet
        return "0";
    }
}


function get_tweets($url) { 
    // retrieves data with HTTP GET method for current URL      
    $json_string = wp_remote_get(
        'http://urls.api.twitter.com/1/urls/count.json?url='.$url,
        array(
            // disable checking SSL sertificates
            'sslverify'=>false
        )
    ); 
    // retrives only body from previous HTTP GET request
    $json_string = wp_remote_retrieve_body($json_string);
    // convert body data to JSON format
    $json = json_decode($json_string, true);
    // return count of Tweets for requested URL         
    return intval( $json['count'] );
}


function get_plusones($url) {
    $args = array(
            'method' => 'POST',
            'headers' => array(
                // setup content type to JSON 
                'Content-Type' => 'application/json'
            ),
            // setup POST options to Google API
            'body' => json_encode(array(
                'method' => 'pos.plusones.get',
                'id' => 'p',
                'method' => 'pos.plusones.get',
                'jsonrpc' => '2.0',
                'key' => 'p',
                'apiVersion' => 'v1',
                'params' => array(
                    'nolog'=>true,
                    'id'=> $url,
                    'source'=>'widget',
                    'userId'=>'@viewer',
                    'groupId'=>'@self'
                ) 
             )),
             // disable checking SSL sertificates               
            'sslverify'=>false
        );
    // retrieves JSON with HTTP POST method for current URL  
    $json_string = wp_remote_post("https://clients6.google.com/rpc", $args);
    if (is_wp_error($json_string)){
        // return zero if response is error                             
        return "0";             
    } else {        
        $json = json_decode($json_string['body'], true);                    
        // return count of Google +1 for requsted URL
        return intval( $json['result']['metadata']['globalCounts']['count'] ); 
    }
}


	
	

?>