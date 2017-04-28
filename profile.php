<?php
/*
Template Name: profile-table
*/
// задаем имя и присваиваем шаблон к его странице
?>
<?php get_header(); ?>
<section class="wrapper clearfix">
	<?php get_sidebar(); ?>
	<div class="category">
		<?php echo do_shortcode("[theme-my-login show_title=0 default_action=profile login_template=profile-form.php]"); ?> 
<!-- шорткод для вставки формы на странице, такой же в админке-страницы-profile -->
		</div>
</section>
<?php get_footer(); ?>