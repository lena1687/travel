<?php get_header(); ?>
<section class="wrapper clearfix">
	<?php get_sidebar(); ?>
	<div class="category">
		<div class="main-heading">
		<div class="wave"></div>
		<h2 class="heading"><?php the_title('Page : '); ?></h2>
		</div>
		<div class="container">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="content">
				<div class="post-main">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				</div>
				<div class="post-content">
					<?php the_excerpt(); ?>
					<p><a href="<?php the_permalink(); ?>">read more</a></p>
				</div>
			</div>
			<!-- post -->
			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>
			<!-- no posts found -->
			<?php endif; ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>