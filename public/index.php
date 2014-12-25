<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <!--[if lt IE 9]><script>document.createElement('video');</script><![endif]-->

        <style>

	        video { display: block; }
			
			video#bgvid {
				position: fixed; right: 0; bottom: 0;
				min-width: 100%; min-height: 100%;
				width: auto; height: auto; z-index: -100;
				background: url(polina.jpg) no-repeat;
				background-size: cover;
			}

			@media screen and (max-device-width: 800px) {
				html { background: url(polina.jpg) #000 no-repeat center center fixed; }
				#bgvid { display: none; }
			}

        </style>
    </head>
    <body>
		<video autoplay loop poster="polina.jpg" id="bgvid">
			<source src="hodorliz.webm" type="video/webm">
			<source src="hodorliz.mp4" type="video/mp4">
		</video>
    </body>
</html>

