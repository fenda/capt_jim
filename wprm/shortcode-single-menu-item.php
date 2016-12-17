<?php
/**
 * Template: Shortcode single menu item
 *
 * @since  1.0.0
 * @version 1.0.0
 */

$thumb_width = wprm_get_option('thumbnail_width');
$thumb_height = wprm_get_option('thumbnail_height');

?>
	<div id="wprm-menu-item-<?php echo get_the_id();?>" class="menu__item">
		<?php do_action( 'wprm_single_menu_item_part_before' ); ?>
		<div class="menu__inner flex-container">
			<div class="menu__content">
				<?php if($hyperlink == 'true') : ?>
					<h2 class="menu__itemtitle"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
				<?php else : ?>
					<h2 class="menu__itemtitle"><?php the_title();?></h2>
				<?php endif; ?>
				<?php if($price == 'true'): ?>
					<p class="menu__price"><?php echo wprm_get_item_price(); ?></p>
				<?php endif; ?>
				<?php if( get_post_meta( get_the_id(), '_wprm_calories', true ) || get_post_meta( get_the_id(), '_wprm_cholesterol', true ) ) : ?>
					<?php if(get_post_meta( get_the_id(), '_wprm_calories', true )) : ?>
						<p class="menu__cals"><?php echo get_post_meta( get_the_id(), '_wprm_calories', true );?></p>
					<?php endif; ?>
					<?php if(get_post_meta( get_the_id(), '_wprm_cholesterol', true )) : ?>
						<p class="menu__cals"><?php echo get_post_meta( get_the_id(), '_wprm_cholesterol', true );?></p>
					<?php endif; ?>
				<?php endif ; ?>

				<?php // if($description == 'true') : ?>
					<p class="menu__description"><?php the_excerpt();?></p>
				<?php // endif; ?>
			</div>
			<div class="menu__ftimage">
				<?php 
					if(has_post_thumbnail() && $display_images == 'true') :
						$post_thumbnail_id = get_post_thumbnail_id();
						$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
						$thumb = wprm_thumb($post_thumbnail_url, $thumb_width, $thumb_height); // Crops from bottom right
						echo '<img class="wp-post-image" src="'.$thumb.'">';
					endif;
			   	?>
			</div>
		</div>
		<?php do_action( 'wprm_single_menu_item_part_after' ); ?>
	</div>