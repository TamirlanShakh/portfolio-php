
<?php get_header();?>	
<content>
	<div class="content_fix_category">
		<div class="content_title_category"><hr><?php echo single_cat_title(); ?></div>
		<div class="content_body_category">
			<div class="portfolio_blocks">
				<?php if(have_posts()): ?>
				<?php while(have_posts()): the_post() ?>
				<a href="<?php echo get_field('ссылка');?>" class="portfolio_block" style="background: url('<?php echo get_field('фото');?>')no-repeat center/cover;"></a>
				<?php endwhile;?>
				<?php endif;?>
			</div>
		</div>
	</div>
</content>
<?php get_footer();?>