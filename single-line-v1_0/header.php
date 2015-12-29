<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="el">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="el">
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html lang="el">
<!--<![endif]-->
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width">
		<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
		<link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,300,300italic,400italic,500,500italic,700,700italic&subset=latin,greek' rel='stylesheet' type='text/css'>
		<?php wp_head(); ?>
	</head>

	<body>
		<div id="wrapper">
		<div id="header">
			<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
		</div>
		<div id="tagline">
			<?php bloginfo('description'); ?>
		</div>
		<div id="top-nav">
			<ul>
				<li><a href="/">blog</a></li>
				<li><a href="/about">ποιος είμαι</a></li>
				<li><a href="/about#ask">επικοινωνία</a></li>
			</ul>
		</div>
		<div id="social">
			<ul>
				<li><a href="http://www.facebook.com/filippostsagkris/"><div id="facebook" />facebook</a></li>
				<li><a href="http://twitter.com/ftsagkris/"><div id="twitter" />twitter</a></li>
				<li><a href="http://www.instagram.com/ftsagkris"><div id="instagram" />instagram</a></li>
				<li><a href="http://www.flickr.com/goofis"><div id="flickr" />flickr</a></li>
				<li><a href="http://www.youtube.com/channel/UCoLCPbKZtJPXHHJM8tB01Sw"><div id="youtube" />youtube</a></li>
				<li><a href="https://vimeo.com/user30793686"><div id="vimeo" />vimeo</a></li>
			</ul>
		</div>
