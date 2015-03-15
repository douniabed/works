app = {
	/*
	 * Fonction appelée au chargement du DOM
	 */
	init: function() {
		console.info("app.init")

		// J'écoute le clic
		$(window).on("click", app.clic)
	},

	/*
	 * Handler du clic
	 */
	clic: function(e) {
		console.info("app.clic")

		// Coordonnées
		console.log(e.pageX, e.pageY)

		// CSS
		var hauteur = app.aleatoire(50,150)
		var fond = app.randomColor()
		var coord = {
			left: e.pageX - hauteur / 2,
			top: e.pageY - hauteur / 2
		}

		// Je crée une div
		var rond = $("<div>",{
			css: {
				width: hauteur,
				height: hauteur,
				borderRadius: hauteur,
				background: fond,
				position: "absolute",
				top: coord.top,
				left: coord.left
			}
		}) 

		// Ajoute la div au html
		rond.appendTo("body")


		/* Hors énoncé */
		
		// Au bout de 20 div
		if( $("div").length % 20 == 0 ) {

			h = $(window).height()
			$("div").each(function() {
				$(this).animate({
					top: h - $(this).height()
				},{
					duration: 2000,
					complete: function() {
						$(this).fadeOut()
					},
					easing: "easeOutBounce"
				})
			})

		}

	},

	/*
	 * Couleur aléatoire
	 */
	randomColor: function() {
		var rouge = app.aleatoire(0,255)
		var vert = app.aleatoire(0,255)
		var bleu = app.aleatoire(0,255)
		return "rgba("+ rouge +","+ vert +","+ bleu +",0.5)"
	},

	/*
	 * Nombre entre min et max
	 */
	aleatoire: function(min, max) {
		// Entre 0 et 1 exclu
		var rand = Math.random()

		// Entre 0 et max - min + 1 exclu
		rand *= max - min + 1

		// Entre min et max + 1 exclu
		rand += min

		// On prend le nombre entier entre min et max inclus
		rand = parseInt(rand)

		return rand
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