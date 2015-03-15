/************************
 * 	 	Modules			*
 ************************/

	
/*
 * Carousel d'images
 */

carousel = {

	/*
	 * Lancement du carousel
	 */
	init: function() {
		console.info("carousel.init")

		// Toutes les 5 sec, on change d'image
		carousel.play()

		// Ecouteurs
		$("#suivant").on("click", carousel.next)
		$("#precedent").on("click", carousel.prev)

	},

	/*
	 * Toutes les 5 secondes, on affiche l'image suivante
	 */
	play: function() {
		console.info("carousel.play")

		// « toutes les » ==> setInterval
		setInterval(carousel.next, 5000)
	},

	/*
	 * Image suivante
	 */
	next: function() {
		console.info("carousel.next")

		// On récupère l'image active
		var image = $("#slider .active")

		// Je récupère le suivant
		var suivant = image.next("img")

		// S'il n'y a pas de suivant, on prend le premier
		if(suivant.length == 0) {
			suivant = $("#slider img:first")
		}

		// Je cache l'ancienne
		image.fadeOut().removeClass("active")

		// J'affiche la nouvelle
		suivant.fadeIn().addClass("active")

	},

	/*
	 * Image précédente
	 */
	prev: function() {
		console.info("carousel.prev")

	}

}








/************************
 * 	 Objet principal 	*
 ************************/

app = {
	/*
	 * Fonction appelée au chargement du DOM
	 */
	init: function() {
		console.info("app.init")

		// Lance le carousel
		carousel.init()
	}

}



/*
 * Chargement du DOM
 */
$(function(){
	app.init()
})