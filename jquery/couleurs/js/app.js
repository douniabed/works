app = {
	/*
	 * Fonction appelée au chargement du DOM
	 */
	init: function() {
		console.info("app.init")

		// On écoute le formulaire
		$("#form").on("submit", this.monSubmit)

		// On écoute le clavier
		$("#couleur").on("keydown", this.monKeyup)
	},

	/*
	 * Handler du submit
	 */
	monSubmit: function(e) {
		console.info("app.monSubmit")

		// Empêcher le comportement par défaut : le rechargement de la page
		e.preventDefault()

		// Récupérer la valeur de l'input
		var valeur = app.recupereCouleur()

		if(valeur) {
			// Ajouter la liste
			app.ajouteListe(valeur)
		} else {
			// Erreur
			app.erreur()
		}

		// On remet l'input à zéro
		$("#couleur").val("").focus()
	},

	/*
	 * Récupère la couleur
	 * 		Renvoie la valeur si la valeur est une couleur
	 * 		Renvoie false sinon
	 */
	recupereCouleur: function() {
		console.info("app.recupereCouleur")

		// On récupère la valeur
		var valeur = $("#couleur").val()

		// Tests pour savoir que l'on a bien une couleur
		// Couleur = # + 3 caracteres ou # + 6 caracteres

		// if(/^#([0-9a-fA-F]{3}){1,2}$/.exec(valeur)) {
		if(valeur[0] == "#" && (valeur.length == 4 || valeur.length == 7)) {
			return valeur
		} else {
			return false
		}
	},

	/*
	 * Ajoute une couleur à la liste
	 */
	ajouteListe: function(val) {
		console.info("app.ajouterListe")

		// Créer un <li>
		var li = $("<li>",{
			css: {
				color: val
			},
			text: val
		})

		// On ajoute à la liste
		$("#entrees").append(li)
		// ou on peut faire aussi :
		//li.appendTo("#entrees")

	},

	/*
	 * Affiche un message d'erreur
	 */
	erreur: function() {
		console.error("app.erreur")

		// Je crée mon élément
		var error = $("<div>",{
			text: "Ceci n'est pas une couleur",
			id: "error"
		})

		// J'ajoute après mon form
		// $("#form").after(error)
		error.insertAfter("#form")
	},

	/*
	 * Handler de keyup
	 */
	monKeyup: function() {
		console.info("app.monKeyup")

		// Je supprime l'erreur
		$("#error").remove()
	}


},


/*
 * Chargement du DOM
 */
$(function(){
	app.init()
})