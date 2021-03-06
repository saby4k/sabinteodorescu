<?php
	
	$language = 'ro';
	$heroTitle = 'Welcome to my blog!';
	$heroButton = 'Read more';
	$videosLink = [
		'text' => 'Other videos', 
		'url' => 'videos.php'
	];
	$livesLink = [
		'text' => 'Other lives', 
		'url' => 'lives.php'
	];
	$aboutTitle = 'About Me';
	$aboutText = 'My name is Sabin and i\'m 11 years old. I have a YouTube channel on which I record gaming videos. I like playing a lot of games and trying new ones. This site is a project to test my programming skills and to have a YouTube channel blog of mine.';
	$lastVideo = 'Latest video';
	$lastLive = 'Latest live';
	$formName = 'Name:';
	$formMessage = 'Message:';
	$formSubmit = 'Send';
	$postTitle = 'Posts';
	$posts = array_reverse([
		0 => [
			'date' => '19 jan. 2018',
			'title' => 'Blog',
			'content' => 'I\'ve made a new blog on which i will put my new videos and posts to keep you updated!'
		],
		1 => [
			'date' => '8 mar. 2018',
			'title' => 'Domain',
			'content' => 'This site is officially on the internet now, getting it as a gift for my birthday, today. I have turned 11 years old.'
		],
		2 => [
			'date' => '3 apr. 2018',
			'title' => 'Live',
			'content' => 'We\'re going to be live today at 21:15 !!! We\'re going to play Clash Royale with Stefan today. Don\'t forget to check out his channel that i\'ve put in the description!'
		],
		3 => [
			'date' => '14 apr. 2018',
			'title' => 'Live',
			'content' => 'I\'m going to be live today at 20:00! I\'m going to play Clash Royale, pushing into 4000 trophies this evening.'
		]
	]);
	$menu = [
		0 => [
			'text' => 'About',
			'url' => 'index.php#about',
			'target' => false
		],
		1 => [
			'text' => 'Videos',
			'url' => 'index.php#videos',
			'target' => false
		],
		2 => [
			'text' => 'Lives',
			'url' => 'index.php#lives',
			'target' => false
		],
		3 => [
			'text' => 'Posts',
			'url' => 'index.php#posts',
			'target' => false
		],
		4 => [
			'text' => 'Contact',
			'url' => 'index.php#footer',
			'target' => false
		],
		5 => [
			'text' => 'YouTube',
			'url' => 'https://www.youtube.com/Sabyoficial?sub_confirmation=1',
			'target' => true
		],
		6 => [
			'text' => 'Discord',
			'url' => 'https://discord.gg/y7DAEFZ',
			'target' => true
		]
	];

?>