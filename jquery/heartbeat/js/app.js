app = {
	/*
	 * Fonction appelée au chargement du DOM
	 */
	init: function() {
		console.info("app.init")

		// On écoute le clavier
		$(window).on("keyup", this.clavier)
	},

	/*
	 * Handler du l'event clavier
	 */
	clavier: function(e) {
		console.info("app.clavier")

		// Quel est cet event ?
		// console.log(e)

		// Si j'ai appuyé sur Entrée
		if(e.keyCode == 13) {
			console.info("On appuie sur entrée")
			app.lancerJeu()
		}
	},

	/*
	 * On lance le jeu
	 */
	lancerJeu: function() {
		console.info("app.lancerJeu")

		// On récupère le coeur
		var coeur = $("#coeur")

		// On écoute le clic sur le coeur
		coeur.on("click", app.compter)

		// Au bout de 5 secondes, on ne peut plus cliquer
		setTimeout(function() {
			coeur.off()
		}, 5000)
	},

	/*
	 * A chaque clic, on incrémente
	 */
	compter: function() {
		console.info("app.compter")

		// On récupère le compteur dans le HTML
		var compteur = $("#compteur")

		// On incrémente
		++app.nbClics

		// On ajoute au HTML
		compteur.html(app.nbClics)
	},

	/*
	 * Nombre de clics
	 */
	nbClics: 0

}


/*
 * Chargement du DOM
 */
document.addEventListener("DOMContentLoaded", function(){
	app.init()
})