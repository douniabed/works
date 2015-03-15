/*
 * Jeu où il faut deviner un nombre
 */
jeu = {

	/*
	 * Fonction pour lancer le jeu
	 */
	init: function() {

		// Je lance ma partie
		var resultat = jeu.partie()

		// Résultat
		if(resultat) {
			jeu.ecrireResultat(resultat)
		}
	},

	partie: function() {
		console.info("jeu.partie")

		/*** INIT ***/

		// Un nombre entre 0 et 1000 aléatoire
		var min = 0, max = 1000
		var nbATrouver = jeu.aleatoire(min, max)
		console.info("Le nombre à trouver est", nbATrouver)

		// Tentatives
		var tentative = 0, tentativesMax = 10

		// Joueur
		var nomDuJoueur = prompt("Entrez votre nom")
		if(nomDuJoueur == null) {
			alert("Faux départ !")
			return false
		}

		// Résultat à renvoyer
		var resultat = {
			nom: nomDuJoueur
		}

		/*** JEU ***/

		while(tentative++ < tentativesMax) {

			// Le nombre que tape le joueur
			var nbUser = prompt("Donne-moi un nombre")

			// Abandon ?
			if(nbUser == null) { // prompt renvoit null si clic sur "Annuler"
				alert("Abandon !")
				resultat.score = "abandon"
				return resultat
			}

			/* On s'assure que l'on a un entier */
			// Avec parseInt, soit j'ai un entier, soit j'ai un NaN
			nbUser = parseInt(nbUser)
			

			// Si j'ai un NaN, alors c'est pas bon
			if(isNaN(nbUser)) {
				alert("Attention, il faut entrer un nombre !")
				resultat.score = "faute"
				return resultat
			}

			// On s'assure qu'on est entre min et max
			if(nbUser > max || nbUser < min) {
				alert("Attention, il faut entrer un nombre entre "+min+" et "+max+" !")
				resultat.score = "faute"
				return resultat
			}

			// On compare avec nbAtrouver
			if(nbUser < nbATrouver) {
				alert("Plus grand !")
			} else if(nbUser > nbATrouver) {
				alert("Plus petit !")
			} else {
				alert("Gagné !")
				resultat.score = tentative
				return resultat
			}

		}

		/*** FIN ***/

		// Si on est ici, c'est qu'on a perdu
		alert("Perdu :(")
		resultat.score = "perdu"
		return resultat

	},

	/*
	 * Génère un entier aléatoire entre min et max
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
	},

	/*
	 * Fonction qui rajoute du html dans le tableau de résultat
	 */
	ecrireResultat: function(res) {

		// On récupère le tableau des scores
		var tab = document.getElementById("scores")

		// On crée un <tr>
		var tr = document.createElement("tr")

		// Est-ce que res.score est un nombre ?
		if( !isNaN(res.score) ) {
			// Si j'ai gagné, je rajoute la classe gagne
			tr.className = "gagne"
		} else { 
			// Sinon on rajoute la classe perdu
			tr.className = "perdu"
		}

		// On crée un premier <td> avec le numéro de partie
		var numero = document.createElement("td")
		numero.innerHTML = ++jeu.nbParties

		// On crée un deuxième <td> avec le nom
		var nom = document.createElement("td")
		nom.innerHTML = res.nom

		// On crée un troisième <td> avec le score
		var score = document.createElement("td")
		score.innerHTML = res.score

		// On ajoute les td au tr
		tr.appendChild(numero)
		tr.appendChild(nom)
		tr.appendChild(score)

		// On ajoute au tableau notre tr
		tab.appendChild(tr)

	},

	/*
	 * Nombre de partie
	 */
	nbParties: 0

}