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
   return '<style>
            .cf:after {
                clear: both;
                content: "";
                display: table;
            }
            .bottom-teaser {
                font-family: Open Sans,MundoSans,"Helvetica Neue",Arial,Helvetica,sans-serif;
                padding: 50px 0;
            }
            .bottom-teaser .isLeft {
                box-sizing: border-box;
                float: left;
                width: 47%;
            }
            .bottom-teaser .isRight {
                box-sizing: border-box;
                float: right;
                width: 47%;
            }
            .bottom-teaser .isLeft .index-headline {
                padding-bottom: 32px;
            }
            .index-headline {
                border-top: 1px solid #dededc;
                margin: 0;
                padding: 16px 0;
            }

            .index-headline span {
                font-family: Open Sans,MundoSans,"Helvetica Neue",Arial,Helvetica,sans-serif;
                color: #b3b3b1;
                font-size: 10px;
                letter-spacing: 1px;
                text-transform: uppercase;
            }
            .bottom-teaser .isLeft .author-image {
                background-size: cover;
                border-radius: 100%;
                display: block;
                float: left;
                height: 80px;
                text-indent: -9999px;
                width: 80px;
            }
            .bottom-teaser .isLeft h4 {
                font-family: Open Sans,MundoSans,"Helvetica Neue",Arial,Helvetica,sans-serif;
                font-size: 18px;
                font-weight: 700;
                line-height: 1.1;
                margin: 0;
                padding: 0 0 0 100px;
            }
            .bottom-teaser .isLeft p {
                font-family: Open Sans,MundoSans,"Helvetica Neue",Arial,Helvetica,sans-serif;
                font-size: 14px;
                font-weight: 400;
                line-height: 1.3;
                margin: 0;
                padding: 0 0 0 100px;
            }
            .bottom-teaser hr {
                -moz-border-bottom-colors: none;
                -moz-border-left-colors: none;
                -moz-border-right-colors: none;
                -moz-border-top-colors: none;
                border-color: #ddd;
                border-image: none;
                border-right: 0 solid #ddd;
                border-style: solid;
                border-width: 1px 0 0;
                display: block;
                margin: 16px 0 16px 100px;
                padding: 0;
                width: 15%;
            }
          </style>
          <div class="bottom-teaser cf">
          <div class="isLeft">
            <h5 class="index-headline featured"><span>Written by</span></h5>
            <section class="author">
              <div style="background-image: url(http://www.gravatar.com/avatar/046889f49471fd40d105eb76b9d83bf6.png)" class="author-image">Blog Logo</div>
              <h4>Sergi Tur Badenas</h4>
              <p class="bio">Sergi has contributed teaching, evangeling and documenting at acacha.org site and other projects, to try and make the Open Source community a better place.</p>
              <hr>
              <p class="published">Published <time datetime="2014-11-30 13:19">30 Nov 2014</time></p>
            </section>
          </div>
          
          <div class="isRight">
            <h5 class="index-headline featured"><span>More About Sergi Tur</span></h5>
            <footer class="site-footer">
              <h4>TODO</h4>
              <p>TODO</p>
              <p><a href="http://acacha.org">Acacha.org</a></p>
              <hr>
            </footer>
          </div>
        </div>';
}

add_shortcode( 'hola_mon', 'hola_mon' );
function hola_mon() {
	 return 'Hola mon!';
}
?>