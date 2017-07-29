;(function($){
	$.fn.topMove = function(options){
		var defaults = {
			"speed"  : 500,
			"scroll" : 300
		};
		var
			settings = $.extend( {}, defaults, options ),
			event = "ontouchend" in window ? "touchend" : "click";

		return this.each(function(){
			var self = $(this);
			self.hide();

			self.on(event, function(e) {
				e.preventDefault();
				$('html, body').animate({scrollTop: 0}, settings.speed);
			});

			$(window).on('scroll', function () {
				if ($(this).scrollTop() > settings.scroll) {
					self.fadeIn();
				} else {
					self.fadeOut();
				}
			});
		});
	};

	var param = {
		speed: 500,
		scroll: 300
	};
	$("#move-to-the-top").topMove(param);
}(jQuery));