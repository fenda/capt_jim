(function( root, $, undefined ) {
	"use strict";

	$(function () {
		var windowHeight = window.innerHeight;
		var homeFeatured = document.querySelector('.ft-image--home');

		if (homeFeatured) {
				homeFeatured.style.height = windowHeight + "px";
		}

		$.stellar();

		$(function() {
			$('a[href*="#"]:not([href="#"])').click(function() {
				if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
					if (target.length) {
						$('html, body').animate({
							scrollTop: target.offset().top
						}, 1000);
						return false;
					}
				}
			});
		});
	});

} ( this, jQuery ));