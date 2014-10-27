<?php
function fb_count() {
global $fbcount;
$facebook = file_get_contents('http://api.facebook.com/restserver.php?method=links.getStats&urls=<?php the_permalink(); ?>');
$fbbegin = '<share_count>'; $fbend = '</share_count>';
$fbpage = $facebook;
$fbparts = explode($fbbegin,$fbpage);
$fbpage = $fbparts[1];
$fbparts = explode($fbend,$fbpage);
$fbcount = $fbparts[0];
if($fbcount == '') { $fbcount = '0'; }
}		
?>
