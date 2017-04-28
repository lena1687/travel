<?php
/*
Template Name: about
*/
// задаем имя и присваиваем шаблон к его странице
?>
<?php get_header(); ?>
<section class="wrapper clearfix" id="about">
	<?php get_sidebar(); ?>
	<div class="about">
		<div class="about-content clearfix">
			<div class="main-heading">
				<div class="wave"></div>
				<h2 class="heading"><?php the_title(); ?></h2>
			
			<p><?php echo _('Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br>sed do eiusmod tempor incididunt ut labore et dolore<br> magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex<br> ea commodo consequat.'); ?></p>
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>