<!DOCTYPE html>
<html>
	<head>
		<title>Random MP4</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>

		<h1>Random MP4 [Beta]</h1>
		<h2>Quick and random mp4 ready to share</h2>
		<a class="pure-button pure-button-primary" href="index.php">Give me another one!</a>

		<ul class="ss-share pure-g">
			<li class="ss-share-item pure-u-1-3">
				<a class="ss-share-link ico-facebook" href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fbuiltbyboon.com%2Fposed%2FSimple-Social-Sharing-Buttons&amp;t=built%20by%20Boon" rel="nofollow" target="_blank">Share on Facebook</a>
			</li>
			<li class="ss-share-item pure-u-1-3">
				<a class="ss-share-link ico-twitter" href="http://twitter.com/share?text=Simple%20Social%20Sharing%20Buttons&amp;url=http%3A%2F%2Fbuiltbyboon.com%2Fposed%2FSimple-Social-Sharing-Buttons&amp;via=mattberridge" rel="nofollow" target="_blank">Share on Twitter</a>
			</li>
			<li class="ss-share-item pure-u-1-3">
				<a class="ss-share-link ico-google" href="http://plus.google.com/share?url=http%3A%2F%2Fbuiltbyboon.com%2Fposed%2FSimple-Social-Sharing-Buttons" rel="nofollow" target="_blank">Share on Google+</a>
			</li>
		</ul> 
		
		<div class="pure-g">
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- mp4random-desktop-topbanner -->
			<ins class="adsbygoogle"
				 style="display:inline-block;width:728px;height:90px"
				 data-ad-client="ca-pub-8092288354674404"
				 data-ad-slot="9647536808"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
		
		
		<div class="pure-g">
			<?php
			//Obtener Nombre gfycat
			$name = $_GET['gfy'];

			//Leer json
			$data = file_get_contents("json.html");
			$json = json_decode($data,true);

			//Buscar URL MP4
			$count = 0;
			$gfyname= $json[$count]['gfyName'];
			#$namestring = (string)$name;
			#$gfynamestring = (string)$gfyname;

			//echo '<br> Entramos en el bucle:<br>';
			do {
				$count++; 
				$gfyname = $json[$count]['gfyName'];
				$gfynamestring = (string)$gfyname;
			#} while (strcmp($gfynamestring,$namestring) != 0);
			} while ($gfyname !== $name);

			$mp4url = $json[$count]['mp4Url'];
			?>


		</div>

		<video autoplay loop controls>
			<source src=<?php echo $mp4url ?> type=video/mp4>
		</video>

		<iframe src="http://rcm-eu.amazon-adsystem.com/e/cm?t=iclcs-21&o=30&p=13&l=ez&f=ifr&f=ifr" width="468" height="60" scrolling="no" marginwidth="0" marginheight="0" border="0" frameborder="0" style="border:none;"></iframe>

		<a class="pure-button pure-button-primary" href="index.php">Give me another one!</a>
		

		<div class="pure-g">
			<ins class="adsbygoogle"
			style="display:block"
			data-ad-client="ca-pub-8092288354674404"
			data-ad-slot="9507936003"
			data-ad-format="auto"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>





		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
		<!--[if lte IE 8]>
		    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
		<![endif]-->
		<!--[if gt IE 8]><!-->
		    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
		<!--<![endif]-->

		<link rel="stylesheet" href="css/styles.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script src='js/scripts.min.js'></script>

		<script type="text/javascript">var switchTo5x=true;</script>
		<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
		<script type="text/javascript">stLight.options({publisher: "212d1d1e-56fc-4cb4-9d46-f6603803dcd7", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
	</body>
</html>