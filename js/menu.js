;(function($) {
	"use strict";
	$(function() {
		var
			event = "ontouchend" in window ? "touchend" : "click",
			elmNav = $(".layout-header-nav"),
			elmSwitch = $("#header-nav-switch");

		elmSwitch.on(event, function() {
			elmNav.not(":animated").slideToggle();
		});
	});
})(jQuery);