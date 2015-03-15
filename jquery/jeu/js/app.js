app = {
	/*
	 * Fonction appelée au chargement du DOM
	 */
	init: function() {
		console.info("app.init")

		// Je crée le squelette HTML
		app.creerHtml()
	},

	/*
	 * Créer les balises html
	 */
	creerHtml: function() {
		console.info("app.creerHtml")

	},

	/*
	 * Créer le bouton pour lancer le jeu
	 */
	creerBouton: function() {
		console.info("app.creerBouton")

		/*** Je crée le bouton ***/

		// Je crée l'élément html
		var bouton = document.createElement("button")

		// Je rajoute le contenu
		bouton.innerHTML = "Jouer !"

		// Je rajoute mon écouteur
		bouton.addEventListener("click", jeu.init)
		

		/*** On le rajoute au DOM ***/
		
		// Je récupère l'id jeu
		var divJeu = document.getElementById("jeu")

		// J'ajoute bouton comme enfant de #jeu
		divJeu.appendChild(bouton)
	},

	/*
	 * Créer le tableau des scores
	 */
	creerTableau: function() {
		console.info("app.creerTableau")

		/*** Je crée le tableau ***/

		// Je crée l'élément html
		var tableau = document.createElement("table")
		tableau.id = "scores"
		
		/*** On le rajoute au DOM ***/
		
		// Je récupère l'id jeu
		var divJeu = document.getElementById("jeu")

		// J'ajoute tableau comme enfant de #jeu
		divJeu.appendChild(tableau)

	}

}


/*
 * Chargement du DOM
 */
document.addEventListener("DOMContentLoaded", function(){
	app.init()
})