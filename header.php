<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo $GLOBALS['theme_uri'];?>/style.css">
	<title>Portfolio</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo $GLOBALS['theme_uri'];?>/js/scripts.js"></script>
	<?php wp_head(); ?>
</head>
<body>
	<main>
		<header>
			<div class="modal">
				<div class="modal_window ">
					<div class="close_modal">x</div>
					<div class="modal_title">Contact with me</div>
					<div class="modal_form">
						<?php echo do_shortcode('[contact-form-7 id="53" title="кф"]'); ?>
					</div>
				</div>
			</div>
			<div class="header_menu">
				<div class="header_top">
					<div class="header_menu_fix">
						<a href="<?php echo home_url();?>" class="header_logo"></a>
						<nav class="header_list">
							<ul>
								<li><a href="<?php echo $GLOBALS['home_url'];?>">Home</a></li>
								<li><a href="<?php the_permalink(6);?>">About</a></li>
								<li><a href="<?php the_permalink(9);?>">Service</a></li>
								<li><a href="<?php echo get_category_link(2);?>">Portfolio</a></li>
								<li><a href="<?php the_permalink(11);?>">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<div class="header_info">
					<div class="header_info_fix">
						<div class="header_info_name">
							<div class="header_info_name_title">Luis Oenrique</div>
							<div class="header_info_name_desc">User Experience / User Interface Expert</div>
							<div class="header_info_name_more">
								<a href="<?php the_permalink(6);?>" class="button_more">know more</a>
								<div class="button_hire">hire me</div>
							</div>
						</div>
						<div class="header_info_img"></div>
					</div>
				</div>
			</div>
		</header>