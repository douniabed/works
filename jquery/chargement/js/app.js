app = {
	/*
	 * Fonction appelée au chargement du DOM
	 */
	init: function() {
		console.info("app.init")

		// Je lance le chargement
		app.load()

		// On écoute le clic sur stop
		$("#stop").on("click", app.arret)
	},

	/*
	 * Lance le chargement
	 */
	load: function() {
		console.info("app.load")

		// J'anime #progress
		$("#progress").animate({
			width: "100%",
			opacity: 1
		},{
			duration: 2000,
			easing: "linear",
			complete: function() { // Callback de la fin de l'animation
				//alert("Animation terminée.")
				$("#stop").hide() /* display: none */
			},
			step: function(now, tween) { // Callback à chaque étape

				// Je calcule seulement sur width
				if(tween.prop == "width") {
				
					// On arrondit
					now = parseInt(now)

					// On rajoute le "%"
					now = now + " %"

					// On affiche
					/*
					 * $(this) = $("#progress"),
					 * car c'est #progress qui lance cette fonction
					 */
					/* ("#progress").text(now) */
					$(this).text(now)

				}
				
			}
		})
	},

	/*
	 * Arrête l'animation
	 */
	arret: function() {
		// .stop() arrête les animations en cours sur #progress
		$("#progress").stop()
	}

}


/*
 * Chargement du DOM
 */
$(function(){
	app.init()
})