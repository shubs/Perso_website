<?php
	$response = http_get("http://www.example.com/", array("timeout"=>1), $info);
	print_r($info);
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Shubham Sharma - Developer Evangelist at Mailjet</title>
		<meta name="description" content="Developer, Traveller and API Rider ! Tech Evangelist for Mailjet, Former EPITA and CRISTAL, currently in Paris" />
		<meta name="keywords" content="evangelist, Developer, mailjet, epita, cristal, API" />
		<meta name="author" content="Shubham SHARMA" />
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/timesheet.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link href='http://fonts.googleapis.com/css?family=Raleway:200,400,800' rel='stylesheet' type='text/css'>
		<style media="screen">
			.main .large-header {
				background-image: url("<?php echo $img; ?>");
			}
		</style>
		<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="main">
			<div class="content">
				<div id="large-header" class="large-header">
					<canvas id="demo-canvas"></canvas>
					<div id="info">
						<h1 class="main-title"><span class="big">Shubham</span> SHARMA</h1>
						<h2 id="intro">
							Developer Evangelist <a href="http://mailjet.com">@Mailjet</a>, <br>
							<a href="http://epita.fr">@EPITA</a>, CIO <a href="http://www.cristal-asso.com/">#CRISTAL</a> <a href="http://epimeros.org">#Epimeros</a>, <br>
							Local councillor <a href="http://www.villeneuve92.com/">#VilleneuveLaGarenne</a> #HautsDeSeine
						</h2>
						<div class="links">
							<ul id="social-network" class="list-inline">
					          <li>
					            <a target="_blank" href="https://twitter.com/shub_s">
					              <i class="icon-twitter"></i>
					              <span>Twitter</span>
					            </a>
					          </li>
					          <li>
					            <a target="_blank" href="https://github.com/shubs">
					              <i class="icon-github"></i>
					              <span>Github</span>
					            </a>
					          </li>
					          <li>
					            <a target="_blank" href="http://fr.linkedin.com/in/sharmashubham1/">
					              <i class="icon-linkedin-sign"></i>
					              <span>LinkedIn</span>
					            </a>
					          </li>
					        </ul>
						</div>
					</div>

				</div>
				<div class="">
					<!--<div id="timesheet"></div>-->
				</div>
			</div>
		</div><!-- /container -->

		<script src="js/TweenLite.min.js"></script>
		<script src="js/EasePack.min.js"></script>
		<script src="js/rAF.js"></script>
		<script src="js/main-anim.js"></script>
		<script src="js/timesheet.js" type="text/javascript" />
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-36711350-1', 'auto');
		  ga('send', 'pageview');

		</script>
		<script>
			new Timesheet('timesheet', 2007, 2018, [
  ['09/2007', '07/2010', 'Lycée Michel ange', 'lorem'],
	['12/2008', '08/2013', 'Feelance', 'ipsum'],
  ['06/2010', '07/2010', 'Bac S', 'default'],
  ['09/2010', '12/2014', 'EPITA', 'lorem'],
	['10/2011', '12/2014', 'Epimeros', 'default'],
  ['06/2012', '10/2012', 'UC Berkeley', 'lorem'],
	['01/2012', '05/2013', 'EGE', 'ipsum'],
	['03/2013', '10/2014', 'CRISTAL', 'default'],
  ['08/2013', '12/2014', 'Mailjet', 'ipsum']
]);
		</script>
	</body>
</html>
