<?php get_header(); ?>
<section class="wrapper clearfix">
<?php get_sidebar(); ?>
<div class="category">
	<div class="main-heading">
		<div class="wave"></div>
		<h2 class="heading"><?php printf( __('Результаты поиска: %s', 'default'), get_search_query() ); ?></h2>
	</div>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="content">
			<div class="post-main">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			</div>
			<div class="post-content">
				<?php the_excerpt(); ?>
				<p><a href="<?php the_permalink(); ?>">read more</a></p>
				<?php the_tags('<ul>Tags of the posts: <li>','</li><li>','</li></ul>'); ?>
			</div>
		</div>
	<!-- post -->
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<p class="zero"><?php echo _('Ничего не найдено'); ?></p>
	<?php endif; ?>
</div>
</section>
<?php get_footer(); ?>