
<?php get_header();?>	
<content>
	<div class="about">
		<div class="about_fix">
			<div class="about_desc">
				<div class="about_title"><hr>KNOW MORE ABOUT ME</div>
				<div class="about_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</div>
				<a href="" class="about_button">DOWNLOAD MY CV</a>
			</div>
			<div class="about_img"></div>
		</div>
	</div>
	<div class="services">
		<div class="services_fix">
			<div class="services_title"><hr>Services</div>
			<div class="services_list">
				<a href="" class="services_li" style="background: url('<?php echo $GLOBALS['theme_uri'];?>/images/User Research.png')no-repeat center top 2px;">User Research</a>
				<a href="" class="services_li" style="background: url('<?php echo $GLOBALS['theme_uri'];?>/images/IA And Wireframes.png')no-repeat center top 2px;">IA And Wireframes</a>
				<a href="" class="services_li" style="background: url('<?php echo $GLOBALS['theme_uri'];?>/images/User Testing.png')no-repeat center top 2px;">User Testing</a>
				<a href="" class="services_li" style="background: url('<?php echo $GLOBALS['theme_uri'];?>/images/Looks and FeelDesign (UI).png')no-repeat center top 2px;">Looks and FeelDesign (UI)</a>
				<a href="" class="services_li" style="background: url('<?php echo $GLOBALS['theme_uri'];?>/images/Delivery.png')no-repeat center top 2px;">Delivery</a>
				<a href="" class="services_li" style="background: url('<?php echo $GLOBALS['theme_uri'];?>/images/Integration Support.png')no-repeat center top 2px;">Integration Support</a>
			</div>
		</div>
	</div>
	<div class="portfolio">
		<div class="portfolio_fix">
			<div class="portfolio_title"><hr>portfolio</div>
			<div class="portfolio_blocks">
				<?php if(have_posts()): ?>
				<?php while(have_posts()): the_post() ?>
				<a href="<?php echo get_field('ссылка');?>" class="portfolio_block" style="background: url('<?php echo get_field('фото');?>')no-repeat center/cover;"></a>
				<?php endwhile;?>
				<?php endif;?>
			</div>
			<a href="" class="portfolio_button">load more</a>
		</div>
	</div>
	<div class="count">
		<div class="count_fix">
			<div class="count_block">
				<img src="<?php echo $GLOBALS['theme_uri'];?>/images/count_block1.png" alt="">
				<div class="count_title">120</div>
				<div class="count_text">hands to work</div>
			</div>
			<div class="count_block">
				<img src="<?php echo $GLOBALS['theme_uri'];?>/images/count_block2.png" alt="">
				<div class="count_title">310</div>
				<div class="count_text">happy client</div>
			</div>
			<div class="count_block">
				<img src="<?php echo $GLOBALS['theme_uri'];?>/images/count_block3.png" alt="">
				<div class="count_title">510</div>
				<div class="count_text">finished project</div>
			</div>
			<div class="count_block">
				<img src="<?php echo $GLOBALS['theme_uri'];?>/images/count_block4.png" alt="">
				<div class="count_title">720</div>
				<div class="count_text">cups of coffe</div>
			</div>
		</div>
	</div>
	
</content>
<?php get_footer();?>	