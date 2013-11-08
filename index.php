<?php

function get_age($birth_date){
	return floor((time() - strtotime($birth_date))/31556926);
}
$age = get_age('1992-09-09');
$years = abs(13 - $age);

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en" class="no-js"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en" class="no-js"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en" class="no-js"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<title>James King ~ Web Programmer</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="James King is a Web Programmer from the West Midlands in the UK.">
	<meta name="author" content="James King">

	<!-- CSS -->
	<link href="assets/css/main.css" media="screen, projection" rel="stylesheet" type="text/css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="http://en.gravatar.com/avatar/b066fe4a2f3abbe276fd754b378dbff7?s=20">

</head>
<body data-spy="scroll" data-target="#main-nav">
	<!-- WRAPPER -->
	<div class="wrapper">
				
		<!-- main navigation -->
		<nav class="navbar navbar-default navbar-fixed-top" id="main-nav" role="navigation">
			<div class="container">
				<!-- brand and toggle -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".main-nav-collapse">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>					
				</div>

				<!-- navigation links -->
				<div class="collapse navbar-collapse main-nav-collapse">
					<ul class="nav navbar-nav">
						<li><a href="#about-me">ABOUT ME</a></li>
						<li><a href="#cv">CV</a></li>
						<li><a href="#projects">PROJECTS</a></li>
						<li><a href="#contact">CONTACT</a></li>
						<li><a href="http://blog.jamesking56.co.uk">BLOG &raquo;</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- end main navigation -->

		<!-- header -->
		<header class="jumbotron header" id="header">
			<div class="container">
				<div class="row">
					<div class="col-md-6 left">
						<div class="avatar">
							<img src="http://en.gravatar.com/avatar/b066fe4a2f3abbe276fd754b378dbff7?s=445" class="img-responsive" alt="Profile Picture" />
						</div>
					</div>
					<div class="col-md-6 right">
						<h1 class="hide">JAMES KING</h1>
						<h2 class="heading">HI, I'M JAMES</h2>
						<p>A Web Programmer from the West Midlands in the UK. Want to know more about me?</p>
						<a href="#about-me" class="btn btn-default btn-lg">READ MORE</a><a href="vcard.php" class="btn btn-primary btn-lg">DOWNLOAD vCARD</a>
					</div>
				</div>
			</div>
		</header>
		<!-- end header -->


		<!-- about-me -->
		<section class="section about-me" id="about-me">
			<div class="container">
				<h2 class="heading">ABOUT ME</h2>
				<p>Hello, my name is James King and I am a Web Programmer from the West Midlands in the UK. I am also studying BSc(hons) Web Programming at Staffordshire University in Stafford. I am best at PHP based programming and I am currently using <a href="http://www.laravel.com" rel="nofollow">Laravel's awesome framework</a> for my personal projects.</p>
				<p>I began Web Programming when I was 13, I stared at the Google homepage on my Windows 98 SE based computer and "super fast" dial-up connection and wondered how it all worked. From there I taught myself HTML using only 1 hour internet time per day and since then I've been doing Backend website development work. I have been doing website development now for <?php echo $years; ?> years and I love it!</p>
				<p>Here is a little bit about my personal life:</p>
				<div class="row interest">
					<div class="col-md-3">
						<h3 class="sub-heading"><span class="glyphicon glyphicon-star"></span> Gaming</h3>
						<p>I love gaming! Playing games is a really nice way to relax. I have Xbox Live and play a few games on there, I also have Steam and play online sometimes too. I'm also a big player of Minecraft and sometimes run a Minecraft Server on my Secondary machine. Its good fun to play games with friends and I find it really enjoyable.</p>
					</div>
					<div class="col-md-3">
						<h3 class="sub-heading"><span class="glyphicon glyphicon-home"></span> Home Life</h3>
						<p>My home life is quiet and nice. At home I am usually using some form of technology as it makes me feel happy. I don't however use it all the time and I like to take breaks from time to time.</p>
					</div>
					<div class="col-md-3">
						<h3 class="sub-heading"><span class="glyphicon glyphicon-heart"></span> Going Out</h3>
						<p>It's great to see friends. I enjoy going to the local pub, cinema, bowling alley or just going to their house to see them. Its really nice to have great friends and get away from the computer screens sometimes.</p>
					</div>
					<div class="col-md-3">
						<h3 class="sub-heading"><span class="glyphicon glyphicon-qrcode"></span> Technology</h3>
						<p>I love technology, here is the tech I own and use often:</p>
						<ul>
							<li>Macbook Pro (Mid-2010) running OS X Mavericks <span class="label label-primary">Primary</span></li>
							<li>Ubuntu Server 12.04.3 LTS <span class="label label-info">Secondary</span></li>
							<li>Raspberry Pi running Raspbian <span class="label label-warning">Test Server</span></li>
							<li>iPad 3rd generation (White)</li>
							<li>iPhone 5S (Space grey)</li>
						</ul>
						<p>I do have a host of other gadgets too!</p>
					</div>
				</div>
				<div class="social">
					<h3 class="sub-heading">Follow me on:</h3>
					<ul class="social-icons">
						<li><a href="http://www.twitter.com/Jamesking56" rel="nofollow"><i class="icon icon-twitter"></i></a></li>
						<li><a href="http://www.facebook.com/Jamesking56" rel="nofollow"><i class="icon icon-facebook"></i></a></li>
						<li><a href="http://uk.linkedin.com/in/jamesking56/" rel="nofollow"><i class="icon icon-linkedin"></i></a></li>
						<li><a href="https://github.com/Jamesking56" rel="nofollow"><i class="icon icon-github"></i></a></li>
						<li><a href="http://blog.jamesking56.co.uk" rel="nofollow"><i class="icon icon-tumblr"></i></a></li>
						<li><a href="http://www.instagram.com/Jamesking56" rel="nofollow"><i class="icon icon-instagram"></i></a></li>
						<li><a href="http://www.bitbucket.com/Jamesking56" rel="nofollow"><i class="icon icon-bitbucket"></i></a></li>
					</ul>
				</div>
			</div>
		</section>
		<!-- end about-me -->

		<!-- resume -->
		<section class="section resume" id="cv">
			<div class="container">
				<h2 class="heading">CV</h2>
				<ul class="timeline">
					<li class="year"><?php echo date("Y"); ?></li>
					<li class="event">
						<h3 class="heading">Junior Web Developer @ <a href="http://www.trakware-solutions.co.uk" rel="nofollow">Trakware Solutions Ltd</a></h3>
						<span class="month"><i class="icon icon-calendar"></i>May 2013 - present</span>
						<p>12 month Industrial Placement for my University Sandwich course. JavaScript Framework building and other web software developments.</p>
					</li>
					<li class="year">2012</li>
					<li class="event">
						<h3 class="heading">Temporary Web Developer @ <a href="http://www.trakware-solutions.co.uk" rel="nofollow">Trakware Solutions Ltd</a></h3>
						<span class="month"><i class="icon icon-calendar"></i>June 2012 - September 2012</span>
						<p>Temporary summer job in between University. Prominent JavaScript and PHP work mostly including development of a new JavaScript framework. Lead developer on a few client projects.</p>
					</li>
					<li class="year">2008</li>
					<li class="event">
						<h3 class="heading">Sales Assistant @ Greenlands Post Office</h3>
						<span class="month"><i class="icon icon-calendar"></i>November 2008 - September 2011</span>
						<p>Front desk staff for a convienence side of the Post Office. Dealing with customers on a daily basis in a professional manner, stock control and key responsibilities.</p>
					</li>
				</ul>

			</div>
		</section>
		<!-- end resume -->

		<!-- projects -->
		<section class="section projects" id="projects">
			<div class="container">
				<h2 class="heading">PROJECTS</h2>
				<p>My style of building web applications has changed dramatically over the years. I used to use WordPress for client's websites but now I use MVC style programming using <a href="http://www.laravel.com" rel="nofollow">Laravel Framework</a>.</p>
				<div class="row project-list">
					<ul class="project-grid project-effect-shrink">
						<li class="col-md-6">
							<figure>
								<img src="assets/img/projects/djbates.png" alt="Big Thing Landing Page"/>
								<figcaption>
									<div class="project-item-info">
										<h3 class="sub-heading">DJBates.co.uk</h3>
										<p>WordPress-based website for a local DJ in Redditch.</p>
										<a href="http://www.djbates.co.uk" rel="nofollow" class="btn btn-default">Visit</a>
									</div>
								</figcaption>
							</figure>
						</li>
						<li class="col-md-6">
							<figure>
								<img src="assets/img/projects/reddipc.png" alt="Tiick Tock Coming Soon Page"/>
								<figcaption>
									<div class="project-item-info">
										<h3 class="sub-heading">ReddiPC</h3>
										<p>WordPress-based website for a local PC repair company in Redditch.</p>
										<a href="http://www.reddipc.co.uk" rel="nofollow" class="btn btn-default">Visit</a>
									</div>
								</figcaption>
							</figure>
						</li>
					</ul>
				</div>
			</div>	
		</section>
		<!-- end projects -->

		<!-- contacts -->
		<section class="section contacts" id="contact">
			<div class="container">
				<h2 class="heading">CONTACT</h2>
				<p id='github-status'></p>
				<div class="row google-map">
					<div class="map-canvas"></div>
				</div>
				<div class="row contact-address">
					<div class="col-md-6">
						<div class="contact-form margin-bottom">
							<div class="alert"></div>
							<form method="post">   
	                        	<label for="name">Name:</label>
								<input type="text" id="name" name="name" value="" placeholder="your name*" required="required" data-val="true" data-placement="bottom">
								<label for="email">Email:</label>
								<input type="email" id="email" name="email" value="" placeholder="email address*" required="required" data-rule-email="true" data-val="true" data-placement="bottom">  
								<label for="subject">Subject:</label>
								<input type="text" id="subject" name="subject" value="" placeholder="please provide the subject">  
								<label for="message">Message:</label>
								<textarea id="message" name="message" placeholder="your message here*" required="required" data-val="true" data-placement="bottom"></textarea>  
								<input type="submit" value="Submit" class="btn btn-primary btn-lg" id="submit-button">
								<input type="hidden" name="msg-submitted" id="msg-submitted" value="true"> 
							</form>						
						</div>
					</div>

					<div class="col-md-6">
						<p>I aim to respond to emails sent through this form within 48 hours except for when I am on holiday or travelling which may take up to 2 weeks. If you have no response after 2 weeks, please try again or contact me using social networking as my spam filters may have set your email as spam by mistake.</p>
						<div class="address-lines">
							<p>Redditch, UK</p>
							<p>Mobile: (please ask)</p>
							<p>Email: <a href="mailto:james@jamesking56.co.uk">james@jamesking56.co.uk</a></p>
							<p><i class="icon icon-skype"></i> <a href="skype:jamesking56" rel="nofollow">jamesking56</a></p>
						</div>
					</div>
				</div>
			</div>	
		</section>
		<!-- end contacts -->

		<!-- footer -->
		<footer class="footer">
			<p>&copy; Copyright 2013 James King, All Rights Reserved.</p>
			<p>Proudly hosted by <a href="https://interhosty.com/secure/aff.php?aff=397">InterHosty</a>.</p>
		</footer>
		<!-- end footer -->

	</div>
	<!-- END WRAPPER -->

	<!-- Javascript -->
	<script type="text/javascript" src="assets/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/modernizr.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script type="text/javascript" src="assets/js/jquery.ui.map.full.min.js?ver=3.0"></script>
	<script type="text/javascript" src="assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.localscroll-1.2.7-min.js"></script>	
	<script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>