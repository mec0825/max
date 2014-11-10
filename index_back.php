<?php get_header(); ?>
<div class="col-8" id="main">
	<div class="res-cons">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="post">
				<h2 class="post-title">
					<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
				</h2>
				<date class="post-meta">
					<?php the_time('F j, Y'); ?>
					<?php the_views(); ?>
				</date>
				<div class="post-content">
					<?php the_content('...'); ?>
				</div>
			</article>
		<?php endwhile; endif;?>
		<?php pagenavi();?>
	</div>
</div>
<?php get_footer(); ?>