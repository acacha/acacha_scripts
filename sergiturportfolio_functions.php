<?php

add_shortcode( 'acacha_twitter_follow', 'acacha_twitter_follow' );
function acacha_twitter_follow() {
	return "<a href=\"https://twitter.com/acacha1\" class=\"twitter-follow-button\" data-show-count=\"false\">Follow @acacha1</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>";
}

add_shortcode('acacha_facebook_follow', 'acacha_facebook_follow' );
function acacha_facebook_follow() {
	return "<style type=\"text/css\">.fb_iframe_widget span { vertical-align: top !important; }</style><span id=\"fb-root\"></span><script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = \"//connect.facebook.net/ca_ES/sdk.js#xfbml=1&appId=601405286669971&version=v2.0\";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<span class=\"fb-follow\" data-href=\"https://www.facebook.com/sergi.tur\" data-colorscheme=\"light\" data-layout=\"button\" data-show-faces=\"false\"></span>";
}

add_shortcode('acacha_googleplus_follow', 'acacha_googleplus_follow' );
function acacha_googleplus_follow() {
	return "<!-- Place this tag in your head or just before your close body tag. --><script src=\"https://apis.google.com/js/platform.js\" async defer>
    {lang: 'ca'}
    </script>
    <!-- Place this tag where you want the widget to render. -->
    <div class=\"g-follow\" data-annotation=\"none\" data-height=\"20\" data-href=\"//plus.google.com/u/0/114574773856585741955\" data-rel=\"author\"></div>";
}

add_shortcode( 'al', 'acacha_link' );
function acacha_link() {
	 return '<a href="http://acacha.org/index.php/' . $content . '">' . $content . '</a>';
}

add_shortcode( 'acacha', 'acacha' );
function acacha() {
	 return '<a href="http://acacha.org">acacha.org</a>';
}

add_shortcode( 'hola_mon', 'hola_mon' );
function hola_mon() {
	 return 'Hola mon!';
}
?>