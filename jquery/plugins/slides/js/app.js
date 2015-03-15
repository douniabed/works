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
		$("#suivant")
			.on("click", carousel.next)
			.on("click", carousel.replay)
		$("#precedent")
			.on("click", carousel.prev)
			.on("click", carousel.replay)

		// Vignettes
		carousel.vignettes()

	},

	/*
	 * Toutes les 5 secondes, on affiche l'image suivante
	 */
	play: function() {
		console.info("carousel.play")

		// « toutes les » ==> setInterval
		carousel.timer = setInterval(carousel.next, 5000)
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

		// On récupère l'image active
		var image = $("#slider .active")

		// Je récupère le precedent
		var precedent = image.prev()

		// S'il n'y a pas de précédent, on prend le dernier
		if(precedent.length == 0) {
			precedent = $("#slider img:last")
		}
		
		// Je cache l'ancienne
		image.fadeOut().removeClass("active")

		// J'affiche la nouvelle
		precedent.fadeIn().addClass("active")

	},

	/*
	 * Relance le carousel
	 */
	replay: function() {
		console.info("carousel.replay")

		// J'arrête le setInterval
		clearInterval(carousel.timer)

		// Je relance
		carousel.play()
	},

	/*
	 * Créer les vignettes
	 */
	vignettes: function() {

		// Créer le conteneur
		var thumbnails = $("<div>",{
			id: "thumbnails"
		})

		// Créer les images
		$("#slider img").each(function() {

			// On crée
			var img = $("<img>",{
				src: this.src
			})

			// On ajoute à #thumbnails
			img.appendTo(thumbnails)

		})

		// Rajoute mon conteneur au body
		thumbnails
			.on("click","img",carousel.monClic)
			.appendTo("body")
	},

	/*
	 * Clic sur mes vignettes
	 */
	monClic: function() {

		// Je récupère ma vignette
		var index = $(this).index()

		// Je récupère l'image qui correspond
		var image = $("#slider img").eq(index)

		// Je cache l'image actuelle
		$("#slider .active").fadeOut().removeClass("active")

		// J'affiche la nouvelle
		image.fadeIn().addClass("active")
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
		// carousel.init()
	},

	/*
	 * Chargement de la page
	 */
	chargement: function() {
		// Flexslider
		$("#slider").flexslider({
			controlNav: "thumbnails"
		})

		// Resizer vignettes
		var vignettes = $(".flex-control-thumbs li")
		var nbVignettes = vignettes.length
		var pourcentage = 100 / nbVignettes
		vignettes.css({
			width: pourcentage + "%"
		})
	}

}


/*
 * Chargement du DOM
 */
$(function(){
	app.init()
})

/*
 * Chargement de la page
 */
$(window).load(function() {
	app.chargement()
})