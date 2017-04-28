<?php get_header(); ?>
<section class="wrapper clearfix">
	<?php get_sidebar(); ?>
	<div class="block-error">
		<div class="main-heading">
		<div class="wave"></div>
		<h2 class="heading"><?php echo _('Ничего не найдено'); ?></h2>
		</div>
		<div class="error">
			<img src="<?php bloginfo('template_url'); ?>/img/404.png" alt="404-foto" width="300px" height="200">
		</div>
	</div>
</section>
<?php get_footer(); ?>