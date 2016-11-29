(function($) {
	"use strict";
	$(function() {
		var
			event = "ontouchend" in window ? "touchend" : "click",
			elmNav = $(".layout-header-nav"),
			elmSwitch = $("#header-nav-switch");

		elmSwitch.on(event, function() {
			if (elmNav.css("display") === "block") {
				elmNav.stop().slideUp();
			} else {
				elmNav.stop().slideDown();
			}
		});
	});
})(jQuery);