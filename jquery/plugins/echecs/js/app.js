app = {
	/*
	 * Fonction appelée au chargement du DOM
	 */
	init: function() {
		console.info("app.init")

		// Créer cases
		app.creerCases()

		// Créer pièces
		app.creerPieces()

	},

	/*
	 * Créer les cases
	 */
	creerCases: function() {
		console.info("app.creerCases")

		// Notre tableau
		var plateau = $("#plateau")
		var lettres = "ABCDEFGH"
		var chiffres = "87654321"
		var cases = []

		// On crée 8 x 8 cases
		for(var i = 0; i < 8; ++i) {
			for(var j = 0; j < 8; ++j) {

				// On crée la case
				var c = $("<div>",{
					class: "case"
				})

				// Numéro de case ?
				var lettre = lettres[j]
				var chiffre = chiffres[i]
				c.attr("id", lettre + chiffre)

				// case grise ?
				if(j % 2 == (i % 2))
					c.addClass("grise")

				/********* A faire : Accepter une pièce *********/
				c.droppable({
					drop: function( event, ui ) {
						$(ui.draggable)
							.appendTo(this) // On ajoute à la case
							.css({ // On enlève top et left rajoutés par le draggable
								top: "auto",
								left: "auto"
							}) 
					}
				})

				
				// On rajoute dans le tableau
				cases.push(c)
			}
		}

		// On ajoute
		plateau.append(cases)
	},

	/*
	 * Créer les pièces
	 */
	creerPieces: function() {
		console.info("app.creerPieces")

		/* Blanches */
		// Tours
		app.creerPiece("tour", "blanche", "A1")
		app.creerPiece("tour", "blanche", "H1")

		// Cavalier
		app.creerPiece("cavalier", "blanche", "B1")
		app.creerPiece("cavalier", "blanche", "G1")

		// Fous
		app.creerPiece("fou", "blanche", "C1")
		app.creerPiece("fou", "blanche", "F1")

		// Roi
		app.creerPiece("roi", "blanche", "D1")

		// Reine
		app.creerPiece("reine", "blanche", "E1")

		// Pions
		app.creerPiece("pion", "blanche", "A2")
		app.creerPiece("pion", "blanche", "B2")
		app.creerPiece("pion", "blanche", "C2")
		app.creerPiece("pion", "blanche", "D2")
		app.creerPiece("pion", "blanche", "E2")
		app.creerPiece("pion", "blanche", "F2")
		app.creerPiece("pion", "blanche", "G2")
		app.creerPiece("pion", "blanche", "H2")


		/* Noires */
		// Tours
		app.creerPiece("tour", "noire", "A8")
		app.creerPiece("tour", "noire", "H8")

		// Cavalier
		app.creerPiece("cavalier", "noire", "B8")
		app.creerPiece("cavalier", "noire", "G8")

		// Fous
		app.creerPiece("fou", "noire", "C8")
		app.creerPiece("fou", "noire", "F8")

		// Roi
		app.creerPiece("roi", "noire", "D8")

		// Reine
		app.creerPiece("reine", "noire", "E8")

		// Pions
		app.creerPiece("pion", "noire", "A7")
		app.creerPiece("pion", "noire", "B7")
		app.creerPiece("pion", "noire", "C7")
		app.creerPiece("pion", "noire", "D7")
		app.creerPiece("pion", "noire", "E7")
		app.creerPiece("pion", "noire", "F7")
		app.creerPiece("pion", "noire", "G7")
		app.creerPiece("pion", "noire", "H7")
	},

	/*
	 * Créer une pièce
	 */
	creerPiece: function(type, couleur, id) {
		var piece = $("<div>",{
			class: "piece"
		})

		// Type
		piece.addClass(type)

		// Couleur
		piece.addClass(couleur)

		/********* A faire : Pouvoir bouger la pièce *********/
		piece.draggable()


		// On ajoute
		$("#"+id).append(piece)
	}

}


/*
 * Chargement du DOM
 */
$(function(){
	app.init()
})