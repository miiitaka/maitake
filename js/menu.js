(function($) {
	"use strict";
	$(function() {
		var
			elmNav = $(".layout-header-nav"),
			elmSwitch = $("#header-nav-switch");

		elmSwitch.on("click", function() {
			if (elmNav.css("display") === "block") {
				elmNav.stop().slideUp();
			} else {
				elmNav.stop().slideDown();
			}
		});
	});
})(jQuery);