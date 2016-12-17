<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

function theme_options_init(){
	register_setting( 'sample_options', 'captnJim_options', 'theme_options_validate' );
}

function theme_options_add_page() {
	add_theme_page( __( 'Theme Options', 'captnJim' ), __( 'Theme Options', 'captnJim' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}

function theme_options_do_page() {
	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;
	?>

	<div class="wrap">
		<?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' Theme Options', 'captnJim' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved', 'captnJim' ); ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'sample_options' ); ?>
			<?php $options = get_option( 'captnJim_options' ); ?>

			<h3>Header</h3>
			<table class="form-table">
				<tr valign="top"><th scope="row"><?php _e( 'Phone number', 'captnJim' ); ?></th>
					<td>
						<input type="text" id="captnJim_options[phoneNumber]" name="captnJim_options[phoneNumber]" class="large-text" value="<?php echo esc_textarea( $options['phoneNumber'] ); ?>">
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Yelp rating', 'captnJim' ); ?></th>
					<td>
						<input type="text" id="captnJim_options[yelpRating]" name="captnJim_options[yelpRating]" class="large-text" value="<?php echo esc_textarea( $options['yelpRating'] ); ?>">
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'TripAdvisor rating', 'captnJim' ); ?></th>
					<td>
						<input type="text" id="captnJim_options[tripadvisorRating]" name="captnJim_options[tripadvisorRating]" class="large-text" value="<?php echo esc_textarea( $options['tripadvisorRating'] ); ?>">
					</td>
				</tr>
			</table>

			<h3>Explore our menu Heading</h3>
			<table class="form-table">
				<tr valign="top"><th scope="row"><?php _e( 'Parallax heading', 'captnJim' ); ?></th>
					<td>
						<input type="text" id="captnJim_options[homeMenuHeading]" name="captnJim_options[homeMenuHeading]" class="large-text" value="<?php echo esc_textarea( $options['homeMenuHeading'] ); ?>">
					</td>
				</tr>
			</table>

			<h3>Home page Call to Action</h3>
			<table class="form-table">
				<tr valign="top"><th scope="row"><?php _e( 'Parallax heading', 'captnJim' ); ?></th>
					<td>
						<input type="text" id="captnJim_options[call2action]" name="captnJim_options[call2action]" class="large-text" value="<?php echo esc_textarea( $options['call2action'] ); ?>">
					</td>
				</tr>
			</table>

			<h3>Footer</h3>
			<table class="form-table">
				<tr valign="top"><th scope="row"><?php _e( 'Maps link', 'captnJim' ); ?></th>
					<td>
						<input type="text" id="captnJim_options[linkMaps]" name="captnJim_options[linkMaps]" class="large-text" value="<?php echo esc_textarea( $options['linkMaps'] ); ?>">
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Facebook link', 'captnJim' ); ?></th>
					<td>
						<input type="text" id="captnJim_options[linkFacebook]" name="captnJim_options[linkFacebook]" class="large-text" value="<?php echo esc_textarea( $options['linkFacebook'] ); ?>">
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Twitter link', 'captnJim' ); ?></th>
					<td>
						<input type="text" id="captnJim_options[linkTwitter]" name="captnJim_options[linkTwitter]" class="large-text" value="<?php echo esc_textarea( $options['linkTwitter'] ); ?>">
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Yelp link', 'captnJim' ); ?></th>
					<td>
						<input type="text" id="captnJim_options[linkYelp]" name="captnJim_options[linkYelp]" class="large-text" value="<?php echo esc_textarea( $options['linkYelp'] ); ?>">
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Trip Advisor link', 'captnJim' ); ?></th>
					<td>
						<input type="text" id="captnJim_options[linkTripadvisor]" name="captnJim_options[linkTripadvisor]" class="large-text" value="<?php echo esc_textarea( $options['linkTripadvisor'] ); ?>">
					</td>
				</tr>
			</table>

			<h3>Blog posts header</h3>
			<table class="form-table">
				<tr valign="top"><th scope="row"><?php _e( 'Image URL', 'captnJim' ); ?></th>
					<td>
						<input type="text" id="captnJim_options[blog_ft_image]" name="captnJim_options[blog_ft_image]" class="large-text" value="<?php echo esc_textarea( $options['blog_ft_image'] ); ?>">
					</td>
				</tr>
			</table>

			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'captnJim' ); ?>" />
			</p>
		</form>
	</div>
	<?php
}

function theme_options_validate( $input ) {
	$input['phoneNumber'] = wp_filter_post_kses( $input['phoneNumber'] );
	$input['yelpRating'] = wp_filter_post_kses( $input['yelpRating'] );
	$input['tripadvisorRating'] = wp_filter_post_kses( $input['tripadvisorRating'] );
	$input['homeMenuHeading'] = wp_filter_post_kses( $input['homeMenuHeading'] );

	return $input;
}