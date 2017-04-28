<?php get_header(); ?>
<section class="wrapper clearfix">
	<?php get_sidebar(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<?php endif; ?>
</section>
<?php get_footer(); ?>