<?php
/*
Template Name: work
*/
// задаем имя и присваиваем шаблон к его странице
?>
<?php get_header(); ?>
<section class="wrapper clearfix">
	<?php get_sidebar(); ?>
	<div class="work-one">
		<div class="main-heading">
			<div class="wave"></div>
			<h2 class="heading"><?php echo _('HOW WE WORK'); ?></h2>
		</div>
		<div class="numbers">
			<span><?php echo _('1'); ?></span>
			<span><?php echo _('2'); ?></span>
			<span><?php echo _('3'); ?></span>
			<span><?php echo _('4'); ?></span>
		</div>
	</section>
</div>
<?php get_footer(); ?>