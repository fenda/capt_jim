<?php $options = get_option('captnJim_options'); ?>
	<footer class="footer" role="contentinfo">
		<div class="wrapper">
			<p class="footer__logo"><img src="<?php echo get_template_directory_uri(); ?>/img/footer_captnjim.png" alt="Captain Jim's Seafood Market Restaurant"></p>

			<nav class="nav nav--footer" role="navigation">
					<?php html5blank_nav(); ?>
				</nav>

			<div class="footer__social flex-container">
				<div class="col--3 padding-l-30 padding-r-30">
					<p class="footer__label">Locate Us:</p>
					<a href="<?php echo $options['linkMaps']; ?>" class="footer__link footer__link--maps"><img src="<?php echo get_template_directory_uri(); ?>/img/footer_maps.png" alt="Google Maps link"></a>
				</div>
				<div class="col--9 padding-l-30 padding-r-30">
					<p class="footer__label">Follow Us:</p>
					<a href="<?php echo $options['linkMaps']; ?>" class="footer__link footer__link--facebook"><img src="<?php echo get_template_directory_uri(); ?>/img/footer_facebook.png" alt="Facebooks link"></a>
					<a href="<?php echo $options['linkMaps']; ?>" class="footer__link footer__link--twitter"><img src="<?php echo get_template_directory_uri(); ?>/img/footer_twitter.png" alt="Twitter link"></a>
					<a href="<?php echo $options['linkMaps']; ?>" class="footer__link footer__link--yelp"><img src="<?php echo get_template_directory_uri(); ?>/img/footer_yelp.png" alt="Yelp link"></a>
					<a href="<?php echo $options['linkMaps']; ?>" class="footer__link footer__link--tripadvisor"><img src="<?php echo get_template_directory_uri(); ?>/img/footer_tripadvisor.png" alt="Trip Advisor link"></a>
				</div>
			</div>
			<p class="footer__copyright">
				&copy; <?php echo date('Y'); ?> Captain Jim's Seafood Market Restaurant. All rights reserved. <br>
				Designed and developed by: <a href="http://crush-interactive.com" target="_blank">Crush Interactive</a>
			</p>
		</div>

	</footer>

	<?php wp_footer(); ?>

	</body>
</html>
