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
function acacha_link($atts, $content) {
	 return '<a href="http://acacha.org/mediawiki/index.php/' . $content . '">' . $content . '</a>';
}

add_shortcode( 'acacha', 'acacha' );
function acacha() {
	 return '<a href="http://acacha.org">acacha.org</a>';
}

add_shortcode( 'written_by_sergitur', 'written_by_sergitur' );
function written_by_sergitur() {
   return '<div class="bottom-teaser cf">
          <div class="isLeft">
            <h5 class="index-headline featured"><span>Written by</span></h5>
            <section class="author">
              <div style="background-image: url(/assets/images/author.jpg)" class="author-image">Blog Logo</div>
              <h4>Phil Sturgeon</h4>
              <p class="bio">Phil has contributed to CodeIgniter, FuelPHP, Laravel and handfuls of other projects, to try and make the PHP community a better place.</p>
              <hr>
              <p class="published">Published <time datetime="2014-11-30 13:19">30 Nov 2014</time></p>
            </section>
          </div>
          
          <div class="isRight">
            <h5 class="index-headline featured"><span>More Writing</span></h5>
            <footer class="site-footer">
              <h4>Build APIs You Won\'t Hate</h4>
              <p>Everyone and their dog wants an API, so you should probably learn how to build them.</p>
              <p><a href="http://apisyouwonthate.com/">Buy it from LeanPub</a> for $26.99</p>
              <hr>
              <p class="published">Published 01 Feb 2014</p>
            </footer>
          </div>
        </div>';
}

add_shortcode( 'hola_mon', 'hola_mon' );
function hola_mon() {
	 return 'Hola mon!';
}
?>