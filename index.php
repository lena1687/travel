<?php get_header(); ?>
<section class="wrapper clearfix">
	<?php get_sidebar(); ?>
	<div class="category">
		<div class="main-heading">
			<div class="wave"></div>
			<h2 class="heading"><?php the_title(); ?><span> - post from  (<?php the_time('G:i j F Y'); ?>)</span></h2>
		</div>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="content">
			<div class="imagestyle">
				<p><?php the_post_thumbnail('full', 'class=imagestyle'); ?></p>
			</div>
			<div class="post-content">
				<p><?php the_content(); ?></p>
				<?php the_tags('<ul>Tags of the posts: <li>','</li><li>','</li></ul>'); ?>
			</div>
		</div>
		<!-- post -->
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>
	</div>
</section>
<?php get_footer(); ?>