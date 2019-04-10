<?php
	if (!isset($page_title)) {
		$page_title = 'Page Title';
	}
?>

<!DOCTYPE html>
<html lang="en"><!-- bloginfo('language') -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $page_title ?> - Votiro Disarmer</title>
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
	<link rel="stylesheet" href="css/jcf.css">
	<link rel="stylesheet" href="css/main.css">
	<?php //wp_head(); ?>
</head>
<body>
	<div class="wrapper push">
		<div class="header">
			<div class="header-inner">
				<div class="header-block">
					<div class="menu-opener" data-toggle="menu-panel" data-target="#panel-mobile-nav">
						<div class="bars">
							<div class="bar"></div>
							<div class="bar"></div>
							<div class="bar"></div>
						</div>
						<span class="opener-text">menu</span>
						<span class="close-text">close</span>
					</div>
				</div>
				<div class="header-block">
					<a href="index.php" class="logo" title="Votiro">
						<img src="img/logo.svg" alt="">
					</a>
				</div>
				<div class="header-block">
					<div class="tawk-holder">
						<img src="img/tmp/tawk-chat-icon.png" alt="">
					</div>
				</div>
			</div>
		</div>