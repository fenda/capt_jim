<?php get_header(); ?>

	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
	<div class="ft-image" data-stellar-background-ratio="0.1" style="background-image: url('<?php echo $thumb['0'];?>')"></div>

	<main role="main" aria-label="Content">
		<section>
			<div class="wrapper">
				<h1 class="header__page"><?php the_title(); ?></h1>
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php the_content(); ?>
				</article>

			<?php endwhile; ?>
			<?php else: ?>

				<article>
					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
				</article>
			<?php endif; ?>
			</div>
		</section>
	</main>

<?php get_footer(); ?>