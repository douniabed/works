app = {
	/*
	 * Fonction appelée au chargement du DOM
	 */
	init: function() {
		console.info("app.init")

		$("#retour").on("click", app.retour)
	},

	retour: function() {
		$("html,body").animate({
			scrollTop: 0
		}, {
			duration: 800,
			easing: "easeOutBounce"
		})
	}

}


/*
 * Chargement du DOM
 */
$(function(){
	app.init()
})


jQuery.extend( jQuery.easing,
{
	easeOutBounce: function (x, t, b, c, d) {
		if ((t/=d) < (1/2.75)) {
			return c*(7.5625*t*t) + b;
		} else if (t < (2/2.75)) {
			return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
		} else if (t < (2.5/2.75)) {
			return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
		} else {
			return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
		}
	}
});