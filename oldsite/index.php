<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<meta name="keywords" content="Sinnet, Sinnetsongs, Aaron Spransy, Boston, indie, Fatal Flaw, those royals, sleep tight co., castlevania." /><meta name="description" 
content="Sinnet is a Boston based, spooky-pants, indie-rock team! Formed by Aaron J. Spransy and featuring members of The Fatal Flaw, Those Royals and SleepTightCo. Brought to life by the handsome hands of Marlo Pedroso, John Drislane and more. thank you." />  
<title>SINNET | SWEET JAMS | BOSTON</title>  <meta name="description" content=""> 

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/julia_styles.css">

	<script type="text/javascript" src="jquery.js"></script>
	<script>
	function goToByScroll(id){
 			$('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
	}
	</script>
</head>
<body>
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <header>

  </header>
	<div id="main_navigation">
		<div id="main_navigation_inner">
			<ul>
				<li id="header_logo"><a href="javascript:void(0)" onClick="goToByScroll('main_container')"><img src="img/nav/Sinnet_Letters.png" alt="Sinnet_Letters" width="" height="" /></a></li>
				<li><a href="javascript:void(0)" onClick="goToByScroll('hello')">HELLO</a></li>			
				<li>|</li>
				<li><a href="javascript:void(0)" onClick="goToByScroll('jams')">JAMS</a></li>
				<li>|</li>
				<li><a href="javascript:void(0)" onClick="goToByScroll('shows')">SHOWS</a></li>
				<li>|</li>
				<li><a href="javascript:void(0)" onClick="goToByScroll('video')">VIDEO</a></li>
				<li>|</li>
				<li><a href="javascript:void(0)" onClick="goToByScroll('images')">IMAGES</a></li>
				<li>|</li>
				<li><a href="javascript:void(0)" onClick="goToByScroll('contact')">CONTACT</a></li>
				<li>|</li>
				<li><a class="social_button" href="https://www.facebook.com/sinnetsongs" target="_blank"><img src="img/nav/facebook.png" alt="facebook"  /></a></li>
				<li><a class="social_button" href="http://www.sonicbids.com/sinnet" target="_blank"> <img src="img/nav/sonicbids.png" alt="sonicbids"  /> </a></li>
				<li><a class="social_button" href="http://www.sinnet.bandcamp.com" target="_blank"><img src="img/nav/bandcamp.png" alt="bandcamp"  /></a></li>
				<li><a class="social_button" href="http://www.twitter.com/sinnetsongs" target="_blank"><img src="img/nav/twitter.png" alt="twitter" /> </a></li>
			</ul>
		</div>		
	</div>  
<div id="main_container">
	<div class="hero_image">
		<img class="big_logo" src="img/bg/sinnet_logo_slice.png" width="277" height="277" alt="Logo">
	</div>	
	<div class="section_box box_shadow" id="hello">
		<div class="section_box_header">
			HELLO
		</div>
		<div class="calendar">
			<div class="calendar_text">
					<?php include 'includes/shows.php'; ?>
			</div>	
			<div class="twitter">
				<a class="twitter-timeline" href="https://twitter.com/SinnetSongs" data-widget-id="426194166519828480">Tweets by @SinnetSongs</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
			<div class="email_sign_up">
					<!-- Begin MailChimp Signup Form -->
				<link href="http://cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
				<style type="text/css">
				
					/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
					   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
				</style>
				<div id="mc_embed_signup">
				<form action="http://sinnetsongs.us4.list-manage1.com/subscribe/post?u=662a7f65859d3610bb75f230e&amp;id=7990a0f8d1" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<label for="mce-EMAIL">Subscribe to the Sinnet Mailing List</label>
					<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
					<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
				</form>
			</div>
			<!--End mc_embed_signup-->
		</div>
		</div>
		
		<?php include 'includes/news.php'; ?>
		
	
<!-- jams-->
	<div class="section_box_two" id="jams">
		<div class="section_box_two_header box_shadow">
			JAMS 
		</div>
		<?php include 'includes/jams.php'; ?>
	</div> 
<!--end of jams -->
	
	<div class="section_box box_shadow" id="shows">
		<div class="section_box_header">
			SHOWS 
		</div>
		<div class="section_box_shows_text">
				<?php include 'includes/shows.php'; ?>	
		</div>
				<?php include 'includes/pastshows.php'; ?>
	</div>
	<div class="section_box_two" id="video">
		<div class="section_box_two_header box_shadow">
			VIDEO		
		</div>
		<iframe src="//player.vimeo.com/video/89650627?byline=0&amp;portrait=0" width="700" height="378" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		<iframe width="700" height="350" src="http://www.youtube.com/embed/videoseries?list=PLn6QBtqbg0jF623R2se-xt4-qvYaIUwUu&amp;hl=en_US" frameborder="0" allowfullscreen></iframe>
		<iframe width="700" height="350" src="http://www.youtube.com/embed/L0LjTfcrAIQ?rel=0" frameborder="0" allowfullscreen></iframe>
	</div>	
	
	
<!--images-->	
	<div class="section_box_two" id="images">
		<div class="section_box_two_header box_shadow">
			IMAGES 
		</div>
		<div id="instagram" class="box_shadow">
			<img src="img/photos/instagram.png" alt="instagram" width="" height="" /> <h2>Sinnet on Instagram  / #sinnetsongs</h2> 
			<iframe src="http://snapwidget.com/in/?u=c2lubmV0c29uZ3N8aW58MjUwfDN8Mnx8eWVzfDE1fGZhZGVPdXQ=" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:825px; height: 550px" ></iframe>
		</div>	
		<img class="box_shadow" src="img/dudes/onthetown_panorama.jpg" alt="onthetown_panorama" width="" height="" />
		<a href="http://www.flickr.com/photos/johnnyanguish/11040904643/" title="Sinnet @ T.T. The Bear's Place 11.20.2013 by johnny anguish, on Flickr"><img class="box_shadow" src="http://farm8.staticflickr.com/7440/11040904643_df5574f9c6_c.jpg" width="800" height="534" alt="Sinnet @ T.T. The Bear's Place 11.20.2013"></a>
		<img class="box_shadow" src="img/photos/panorama.png" alt="panorama" width="" height="" />
		<img class="box_shadow" src="img/posters/TT's.jpeg" alt="TT's" width="358" height="600" />
		<img class="box_shadow float_right" src="img/photos/drislane.jpeg" alt="drislane" width="450" />
		<img class="box_shadow" src="img/MIA.jpg" alt="MIA" width="350" height="226" />
		<img class="float_left" src="img/photos/sinnet_cartoon_letters.png" alt="sinnet_cartoon_letters" width="188" height="85" />
		<img class="box_shadow" src="img/posters/PA's.jpeg" alt="PA's" width="395" height="600" />
		<img class="box_shadow" src="img/posters/o'briens3.jpg" alt="o'briens3" width="450" height="" />
		<img class="box_shadow" src="img/photos/Aaron.jpg" alt="Aaron" width="530" />
	</div> 
<!--end of images -->
	
	<div class="section_box box_shadow" id="contact"><!-- CONTACT -->
		<div class="section_box_header">
			CONTACT 
		</div>
		<div class="contact_box_text" style="margin-left:30px;">
			<h2>
			BOOKING:
			</h2>
			<p style="margin-bottom:20px">
			<a href="mailto:booking@sinnetsongs.com">booking@sinnetsongs.com</a>
			</p>
			<H2>Sinnet on the Interwebs:</H2>
			<a href="http://www.facebook/sinnetsongs" target="_blank">facebook</a><br>
			<a href="http://www.twitter/sinnetsongs" target="_blank">twitter</a><br>
			<a href="http://www.sinnet.bandcamp.com" target="_blank">bandcamp</a>
			</p>
		</div>
		<div class="contact_box_text">
			<H2>Personel</H2>
				<p>
				<b>Aaron Spransy</b><br>
				Guitar / Keys / Vocals / Songs / 
				Kitty Petting
				</p>
				<p>
				<b>Kevin "Junkyard" Junker</b><br>
				Bass / Vocals 
				</P>
				<p>Bassist Alumni:<br>
				<b>Joel Reader, Bob Gaszak, Matt Girard</b> and <b>Alan Durell</b>
				</p>
		</div>
		<div class="contact_box_text">
			<h2>Linkage:</h2>
			<p>
				<a href="http://www.thefatalflaw.net" target="_blank">The Fatal Flaw</a><br>
				<a href="http://www.softpyramids.org" target="_blank">Soft Pyramids</a><br>
				<a href="http://www.canarycoalmine.com" target="_blank" >Canary Coalmine (Aaron's Design)</a><br>
				<a href="http://matthewgirard.com/" target="_blank">Matthew A Girard Recording</a><br>
				<a href="http://dalereincephoto.blogspot.com" target="blank"> Dale Reince Photography<br>
				<a href="http://www.happyplayground.com" target="_blank">Happy Playground<br>
			</p>	
		</div>
		<div class="contact_box_text">
			<p>
				Site By<br>   
				<a href="http://www.canarycoalmine.com">Canary Coalmine
			</p>
			<p>	
				<img src="img/nav/CC.png" alt="CC"width="" height="" /></a>
			</p>	
			<a href="http://www.youtube.com/watch?v=EqCgFPV-8SM" target="_blank"><img class="mini_pony" src="img/bg/brown_miniature_pony.png" alt="brown_miniature_pony" /></a>
		</div>
		
	</div>
	 
</div> <!-- END main_container -->

<footer>
	<img src="img/bg/Camry.png" alt="Camry" width="" height="" />
</footer>


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <!-- scripts concatenated and minified via build script -->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <!-- end scripts -->

  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html>