<?php
/*
Template Name: sign
*/
// задаем имя и присваиваем шаблон к его странице
?>
<?php get_header(); ?>
<section class="wrapper clearfix">
	<div class="category">
		<h2>Enter your details, please</h2>
		<?php echo do_shortcode("[theme-my-login show_title=0 default_action=login login_template=login-form.php]"); ?> 
<!-- шорткод для вставки формы на странице, такой же в админке-страницы-profile -->
	</div>
</section>
<?php get_footer(); ?>