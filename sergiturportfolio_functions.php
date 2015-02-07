<?php

add_shortcode( 'acacha_twitter_follow', 'acacha_twitter_follow' );
function acacha_twitter_follow() {
	return "<a href=\"https://twitter.com/acacha1\" class=\"twitter-follow-button\" data-show-count=\"false\" data-size=\"large\">Follow @acacha1</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>";
}

add_shortcode( 'acacha_facebook_follow', 'acacha_facebook_follow' );
function acacha_facebook_follow() {
	return "<div id=\"fb-root\"></div><script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = \"//connect.facebook.net/ca_ES/sdk.js#xfbml=1&appId=601405286669971&version=v2.0\";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class=\"fb-follow\" data-href=\"https://www.facebook.com/sergi.tur\" data-colorscheme=\"light\" data-layout=\"button\" data-show-faces=\"false\"></div>";

}

add_shortcode( 'hola_mon', 'hola_mon' );
function hola_mon() {
	 return 'Hola mon!';
}
?>