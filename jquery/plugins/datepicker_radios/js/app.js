app = {
	/*
	 * Fonction appelée au chargement du DOM
	 */
	init: function() {
		console.info("app.init")

		// Datepicker
		$("#datepicker input").datepicker({
			changeMonth: true,
			changeYear: true,
			monthNamesShort: [
				"Janvier",
				"Février",
				"Mars",
				"Avril",
				"Mai",
				"Juin",
				"Juillet",
				"Août",
				"Septembre",
				"Octobre",
				"Novembre",
				"Décembre"
			]
		})
	}

}


/*
 * Chargement du DOM
 */
$(function(){
	app.init()
})