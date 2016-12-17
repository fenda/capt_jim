<?php
	/* Template Name: Blog */
	get_header();
?>

	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
	<div class="ft-image" data-stellar-background-ratio="0.1" style="background-image: url('<?php echo $thumb['0'];?>')"></div>

	<main role="main" aria-label="Content">
		<section class="blog_page">
			<div class="wrapper">
				<h1 class="header__page"><?php the_title(); ?></h1>
				<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args = array( 'post_type' => 'post', 'posts_per_page' => 10, 'paged' => $paged );
						$wp_query = new WP_Query($args);
						while ( have_posts() ) : the_post(); ?>
   				 <article id="post-<?php the_ID(); ?>" class="post flex-container">

					<?php if ( has_post_thumbnail()) : ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="post__image col--9">
							<?php the_post_thumbnail('blog-post');  ?>
						</a>
					<?php endif; ?>
					<div class="post__content align-center col--3">
						<p class="post__date"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_date(); ?></time></p>
						<h2 class="post__title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						</h2>
						<?php html5wp_excerpt('html5wp_index'); ?>
					</div>
				</article>
				<?php endwhile; ?>
				<?php get_template_part('pagination'); ?>
			</div>
		</section>
	</main>

<?php get_footer(); ?>