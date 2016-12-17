<?php 
	get_header(); 
	$options = get_option('captnJim_options');
?>
	<div class="ft-image ft-image--home align-center" data-stellar-background-ratio="0.1">
		<h1 class="exploremenu__title"><b>the freshest </b>seafood in town</h1>
	</div>
	<section class="specials4items">
		<div class="wrapper">
			<h1 class="menu__title">House specials</h1>
			<div class="menu__list">
				<?php echo do_shortcode('[wprm_menu_category category_slug="house-specials-top" category_title="false" category_description="false" hyperlink="false" description="true" price="false" display_images="true"]'); ?>
			</div>
		</div>
	</section>
	<section class="exploremenu align-center" data-stellar-background-ratio="0.1">
		<div class="wrapper">
			<h1 class="exploremenu__title"><?php echo $options['homeMenuHeading']; ?></h1>
			<a href="#homeMenu" class="exploremenu__link">Explore our menu <i class="fa fa-angle-down" aria-hidden="true"></i></a>
		</div>
	</section>
	<section class="menu menu--home" id="homeMenu">
		<div class="wrapper">
			<h1 class="menu__title">Our menu</h1>
			<h2 class="menu__subtitle">Discover Our Delicacies</h2>
			<div class="menu__cols flex-container margin-t-30">
				<div class="col--3 padding-r-30">
					<h3>House Specials</h3>
					<?php echo do_shortcode('[wprm_menu_category category_slug="house-specials" category_title="false" category_description="false" hyperlink="false" description="true" price="true" display_images="false"]'); ?>
				</div>
				<div class="col--9">
					<h3 class="col--12">Entrees</h3>
					<div class="col--6 padding-r-30">
						<?php echo do_shortcode('[wprm_menu_category category_slug="entrees_left" category_title="false" category_description="false" hyperlink="false" description="true" price="true" display_images="false"]'); ?>
					</div>
					<div class="col--6">
						<?php echo do_shortcode('[wprm_menu_category category_slug="entrees_right" category_title="false" category_description="false" hyperlink="false" description="true" price="true" display_images="false"]'); ?>
					</div>
				</div>
			</div>
			<div class="col--12 align-center margin-t-30">
				<a href="#" class="button">View full menu</a>
			</div>
		</div>
	</section>
	<section class="call2action align-center" data-stellar-background-ratio="0.4">
		<div class="wrapper">
			<h1 class="exploremenu__title"><?php echo $options['call2action']; ?></h1>
		</div>
	</section>
	<section class="mailchimp">
		<div class="wrapper">
			<h1 class="menu__title">Sign up for our mailing list</h1>
			<h3 class="menu__undertitle align-center">Stay up-to-date on the best Captain Jim’s has to offer.</h3>
			<div id="mc_embed_signup">
				<form action="//hypeberries.us2.list-manage.com/subscribe/post?u=3eaf2d0332b0a5240cd6630ae&amp;id=c7c56e93d0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<div id="mc_embed_signup_scroll">
						<div class="mc-field-group">
							<label for="mce-EMAIL">Email Address </label>
							<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
						</div>
						<div class="mc-field-group">
							<label for="mce-FNAME">First Name </label>
							<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
						</div>
						<div class="mc-field-group">
							<label for="mce-LNAME">Last Name </label>
							<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
						</div>
						<div class="mc-field-group size1of2">
							<label for="mce-BDAY-month">Birthday </label>
							<div class="datefield">
								<span class="subfield monthfield"><input class="birthday required" type="text" pattern="[0-9]*" value="" placeholder="MM" size="2" maxlength="2" name="BDAY[month]" id="mce-BDAY-month"></span> / 
								<span class="subfield dayfield"><input class="birthday required" type="text" pattern="[0-9]*" value="" placeholder="DD" size="2" maxlength="2" name="BDAY[day]" id="mce-BDAY-day"></span> 
								<span class="small-meta nowrap">( mm / dd )</span>
						</div>
					</div>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    
					<div style="position: absolute; left: -5000px;" aria-hidden="true">
						<input type="text" name="b_3eaf2d0332b0a5240cd6630ae_c7c56e93d0" tabindex="-1" value="">
					</div>
					<div class="clear align-center margin-t-30">
						<input type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="button">
					</div>
				</div>
			</form>
		</div>
		</div>
	</section>
<?php get_footer(); ?>