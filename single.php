<?php
	get_header(); 
	$options = get_option('captnJim_options');
?>


<div class="ft-image" data-stellar-background-ratio="0.1" style="background-image: url('<?php echo $options['blog_ft_image']; ?>')"></div>

<main role="main" aria-label="Content">
	<section>
		<div class="wrapper clear">
			<h1 class="header__page">Captain's Blog</h1>
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" class="post with-sidebar">
					<?php if ( has_post_thumbnail()) : ?>
						<div class="ftImage">
							<?php the_post_thumbnail(); ?>
						</div>
					<?php endif; ?>

					<h2 class="post__title post__title--single"><?php the_title(); ?></h2>
					<p class="post__date post__date--single"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_date(); ?></time></p>

					<?php the_content(); // Dynamic Content ?>

					<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); ?>
					<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); ?></p>
				</article>
			<?php endwhile; ?>
			<?php else: ?>
				<article>
					<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
				</article>
			<?php endif; ?>
			<?php get_sidebar(); ?>
		</div>
		<div class="align-center margin-b-90">
			<a href="/blog/" class="button">View all posts</a>
		</div>
	</section>
</main>
<?php get_footer(); ?>