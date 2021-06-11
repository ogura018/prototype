
jQuery(function ($) {
	$('.bgimg-slider').bgSwitcher({
		images: ['./images/pic_bg.jpg', '../images/pic_bg1.jpg', '../images/pic_bg2/.jpg'],
		effect: "drop",
		easing: "linear"
	});
});
