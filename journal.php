<?php
/*
Template Name: journal
*/
// задаем имя и присваиваем шаблон к его странице
?>
<?php get_header(); ?>
<section class="journal">
	<div class="container">
		<div class="main-heading">
			<div class="wave"></div>
			<h2 class="heading"><?php the_title(); ?></h2>
		</div>
		<div class="journal-content">
			<div class="journal-one">
				<div class="journal text">
					<h2><?php echo _('Love'); ?></h2>
					<h3><?php echo _('About'); ?></h3>
					<p><?php echo _('Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br>sed do eiusmod tempor incididunt ut labore et dolore<br> magna aliqua. Ut enim ad minim veniam, quis nostrud<br> exercitation ullamco laboris nisi ut aliquip ex<br> ea commodo consequat.'); ?></p>
					<p class="little"><?php echo _('01'); ?></p>
				</div>
			</div>
			<div class="journal-two">
				<div class="journal text">
					<h2><?php echo _('Water'); ?></h2>
					<h3><?php echo _('Our work'); ?></h3>
					<p><?php echo _('Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br>sed do eiusmod tempor incididunt ut labore et dolore<br> magna aliqua. Ut enim ad minim veniam, quis nostrud<br> exercitation ullamco laboris nisi ut aliquip ex<br> ea commodo consequat.'); ?></p>
					<p class="little"><?php echo _('02'); ?></p>
				</div>
			</div>
			<div class="journal-three">
				<div class="journal text">
					<h2><?php echo _('Tree'); ?></h2>
					<h3><?php echo _('People'); ?></h3>
					<p><?php echo _('Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br>sed do eiusmod tempor incididunt ut labore et dolore<br> magna aliqua. Ut enim ad minim veniam, quis nostrud<br> exercitation ullamco laboris nisi ut aliquip ex<br> ea commodo consequat.'); ?></p>
					<p class="little"><?php echo _('03'); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>