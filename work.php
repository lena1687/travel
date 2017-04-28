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
		<div class="dashed container">
			<div class="dashed-one">
			</div>
			<div class="dashed-two">
			</div>
			<div class="dashed-three">
			</div>
		</div>
		<div class="figure-content container">
			<div class="figure figure-one">
				<h3><?php echo _('Lorem ipsum dolor sit'); ?></h3>
				<p><?php echo _('sed do eiusmod tempor incididunt<br> ut labore et dolore<br> magna aliqua. Ut enim ad minim veniam'); ?></p>
			</div>
			<div class="figure figure-two">
				<h3><?php echo _('Lorem ipsum dolor sit'); ?></h3>
				<p><?php echo _('sed do eiusmod tempor incididunt<br> ut labore et dolore<br> magna aliqua. Ut enim ad minim veniam'); ?></p>			
			</div>
			<div class="figure figure-three">
				<h3><?php echo _('Lorem ipsum dolor sit'); ?></h3>
				<p><?php echo _('sed do eiusmod tempor incididunt<br> ut labore et dolore<br> magna aliqua. Ut enim ad minim veniam'); ?></p>			
			</div>
			<div class="figure figure-four">
				<h3><?php echo _('Lorem ipsum dolor sit'); ?></h3>
				<p><?php echo _('sed do eiusmod tempor incididunt<br> ut labore et dolore<br> magna aliqua. Ut enim ad minim veniam'); ?></p>			
			</div>
		</div>
	</div>
</section>
<div class="work-two">
	<div class="main-heading">
		<div class="wave"></div>
		<h2 class="heading"><?php echo _('TRAVEL WITH US'); ?></h2>
	</div>
	<div class="price-content container">
		<div class="price price-one">
			<h3><?php echo _('Carpathian'); ?></h3>
			<p><?php echo _('Lorem ipsum dolor si<br> amet, consectetur adipisicing elit, sed do'); ?></p>
			<div class="value clearfix">
				<span class="value-left"><?php echo _('3150$'); ?></span>
				<span class="value-right"><?php echo _('1111$'); ?></span>
			</div>
		</div>
		<div class="price price-two">
			<h3><?php echo _('Alps'); ?></h3>
			<p><?php echo _('Lorem ipsum dolor si<br> amet, consectetur adipisicing elit, sed do'); ?></p>
			<div class="value clearfix">
				<span class="value-left"><?php echo _('3150$'); ?></span>
				<span class="value-right"><?php echo _('999$'); ?></span>
			</div>
		</div>
		<div class="price price-three">
			<h3><?php echo _('Pyrenees'); ?></h3>
			<p><?php echo _('Lorem ipsum dolor si<br> amet, consectetur adipisicing elit, sed do'); ?></p>
			<div class="value clearfix">
				<span class="value-left"><?php echo _('3150$'); ?></span>
				<span class="value-right"><?php echo _('777$'); ?></span>
			</div>
		</div>
		<div class="price price-four">
			<h3><?php echo _('Rocky'); ?></h3>
			<p><?php echo _('Lorem ipsum dolor si<br> amet, consectetur adipisicing elit, sed do'); ?></p>
			<div class="value clearfix">
				<span class="value-left"><?php echo _('3150$'); ?></span>
				<span class="value-right"><?php echo _('555$'); ?></span>
			</div>
		</div>
		<div class="price price-five">
			<h3><?php echo _('Kavkaz'); ?></h3>
			<p><?php echo _('Lorem ipsum dolor si<br> amet, consectetur adipisicing elit, sed do'); ?></p>
			<div class="value clearfix">
				<span class="value-left"><?php echo _('3150$'); ?></span>
				<span class="value-right"><?php echo _('888$'); ?></span>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>