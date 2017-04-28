<?php get_header(); ?>
<section class="galary">
	<div class="container">
		<div class="main-heading">
			<img src="<?php bloginfo('template_url'); ?>/img/wave.png" alt="wave">
			<h2 class="heading"><?php echo _('Galary'); ?></h2>
		</div>
		<div class="clearfix mosaicflow" data-min-item-width="270"> 
	        <div class="mosaicflow__item">
	          <a class="fancybox" data-fancybox="group" data-type="image" data-caption="Caption #1" href="/wp-content/uploads/2017/04/galary-1.png" title="1">  
	              <img src="/wp-content/uploads/2017/04/galary-1.png" alt="1" height="205px"> 
	          </a>
	        </div> 
	        <div class="mosaicflow__item"> 
	          <a class="fancybox" data-fancybox="group" data-type="image" data-caption="Caption #2" href="/wp-content/uploads/2017/04/galary-2.png" title="2">  
	              <img src="/wp-content/uploads/2017/04/galary-2.png" alt="2" height="104px"> 
	          </a>
	        </div> 
	        <div class="mosaicflow__item"> 
	          <a class="fancybox" data-fancybox="group" data-type="image" data-caption="Caption #3" href="/wp-content/uploads/2017/04/galary-3.png" title="3">  
	              <img src="/wp-content/uploads/2017/04/galary-3.png" alt="3" height="205px"> 
	          </a>
	        </div> 
	        <div class="mosaicflow__item">
	          <a class="fancybox" data-fancybox="group" data-type="image" data-caption="Caption #4" href="/wp-content/uploads/2017/04/galary-4.png" title="4">  
	              <img src="/wp-content/uploads/2017/04/galary-4.png" alt="4" height="140px"> 
	          </a>
	        </div> 
	        <div class="mosaicflow__item"> 
	          <a class="fancybox" data-fancybox="group" data-type="image" data-caption="Caption #5" href="/wp-content/uploads/2017/04/galary-5.png" title="5">  
	              <img src="/wp-content/uploads/2017/04/galary-5.png" alt="5" height="240px"> 
	          </a>
	        </div> 
	        <div class="mosaicflow__item"> 
	          <a class="fancybox" data-fancybox="group" data-type="image" data-caption="Caption #6" href="/wp-content/uploads/2017/04/galary-6.png" title="6">  
	              <img src="/wp-content/uploads/2017/04/galary-6.png" alt="6" height="140px"> 
	          </a>
	        </div> 
        </div>
	</div>
	<div class="galary-bottom">
		<div class="container">
        	<div class="logos">
		    	<a href="https://slack.com" target="blank">
					<img src="/wp-content/uploads/2017/04/galary-bottom-1.png" alt="logo">
				</a>
			</div>
			<div class="logos">
				<a href="www.adobe.com/ru" target="blank">
					<img src="/wp-content/uploads/2017/04/galary-bottom-2.png" alt="logo">
				</a>
			</div>
			<div class="logos">
				<a href="https://www.google.ru" target="blank">
					<img src="/wp-content/uploads/2017/04/galary-bottom-3.png" alt="logo">
				</a>
			</div>
			<div class="logos">
				<a href="https://facebook.com" target="blank">
					<img src="/wp-content/uploads/2017/04/galary-bottom-4.png" alt="logo">
				</a>
			</div>
			<div class="logos">
				<a href="https://www.spotify.com" target="blank">
					<img src="/wp-content/uploads/2017/04/galary-bottom-5.png" alt="logo">
				</a>
			</div>
			<div class="logos">
				<a href="http://www.nike.com/ru/ru_ru/" target="blank">
					<img src="/wp-content/uploads/2017/04/galary-bottom-6.png" alt="logo">
				</a>
			</div>
		</div>
	</div>
</section>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<?php endif; ?>
</section>
<?php get_footer(); ?>