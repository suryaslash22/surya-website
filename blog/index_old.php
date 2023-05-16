<!DOCTYPE HTML>
<html>
	<head>
		<title>SOL by Sudharsan Surya</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<link rel="shortcut icon" href="favicon.ico"/>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html">SOL</a></h1>
						<nav class="links">
							<ul>
								<li>a blog by&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://sudharsan.me">sudharsansurya</a></li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Post 3 -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#">This one is for my Dad</a></h2>
										<p>On his special day!</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2017-03-29">April 25, 2017</time>
										<span class="author"><span class="name">Sudharsan Surya</span><img src="images/1_avatar.jpg" alt="" /></span>
									</div>
								</header>
								<span class="image featured"><img src="images/appa_and_me.jpg" alt="" /></span>
								<p>
								<?php
									$post_id = 3;
									include $_SERVER['DOCUMENT_ROOT']."/assets/php/getpost.php";
								?>
								</p>
								<footer>
									<ul class="stats">
										<!--<li><a href="#">General</a></li>-->
										<a href="assets/php/updatelikes.php?post_id=3" class="icon fa-heart" id="uplike2">&nbsp;&nbsp;&nbsp;
										<?php
											$post_id = 3;
											include $_SERVER['DOCUMENT_ROOT']."/assets/php/getlikes.php";
										?>
										</a></li>
										<!--<li><a href="#" class="icon fa-comment">128</a></li>-->
									</ul>
								</footer>
							</article>
							
						<!-- Post 2 -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#">Towards Infinity</a></h2>
										<p>A mathematical approach to the unthinkable.</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2017-03-29">April 14, 2017</time>
										<span class="author"><span class="name">Sudharsan Surya</span><img src="images/1_avatar.jpg" alt="" /></span>
									</div>
								</header>
								<span class="image featured"><img src="images/infinity.jpg" alt="" /></span>
								<p>
								<?php
									$post_id = 2;
									include $_SERVER['DOCUMENT_ROOT']."/assets/php/getpost.php";
								?>
								</p>
								<footer>
									<ul class="stats">
										<!--<li><a href="#">General</a></li>-->
										<a href="assets/php/updatelikes.php?post_id=2" class="icon fa-heart" id="uplike2">&nbsp;&nbsp;&nbsp;
										<?php
											$post_id = 2;
											include $_SERVER['DOCUMENT_ROOT']."/assets/php/getlikes.php";
										?>
										</a></li>
										<!--<li><a href="#" class="icon fa-comment">128</a></li>-->
									</ul>
								</footer>
							</article>
							
						<!-- Post 1 -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#">Welcome</a></h2>
										<p>Mandatory introductory post. The blog's README.txt</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2017-03-29">March 29, 2017</time>
										<span class="author"><span class="name">Sudharsan Surya</span><img src="images/1_avatar.jpg" alt="" /></span>
									</div>
								</header>
								<span class="image featured"><img src="images/china.jpg" alt="" /></span>
								<p>
								<?php
									$post_id = 1;
									include $_SERVER['DOCUMENT_ROOT']."/assets/php/getpost.php";
								?></p>
								<footer>
									<ul class="stats">
										<!--<li><a href="#">General</a></li>-->
										<a href="assets/php/updatelikes.php?post_id=1" class="icon fa-heart" id="uplike1">&nbsp;&nbsp;&nbsp;
										<?php
											$post_id = 1;
											include $_SERVER['DOCUMENT_ROOT']."/assets/php/getlikes.php";
										?>
										</a></li>
										<!--<li><a href="#" class="icon fa-comment">128</a></li>-->
									</ul>
								</footer>
							</article>

						<!-- Pagination -->
							<ul class="actions pagination">
								<!--<li><a href="" class="disabled button big previous">Previous Page</a></li>-->
								<!--<li><a href="#" class="disabled button big next">Next Page</a></li>-->
							</ul>

					</div>

				<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<!--<a href="#" class="logo"><img src="images/logo.jpg" alt="" /></a>-->
								<header>
									<h2><img id="sol" src="images/SOL.png"></h2>
									<p>Sometimes I think;<br>When I do, I think aloud here.</p>
								</header>
							</section>

						<!-- About -->
							<section class="blurb">
								<h2>About</h2>
								<p>Third-year computer science student at NYU. First blog since a laughable attempt back in the 7th grade, so comments are appreciated.</p>
								<ul class="actions">
									<li><a href="http://sudharsansurya.com" class="button">More about me</a></li>
								</ul>
							</section>
					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>