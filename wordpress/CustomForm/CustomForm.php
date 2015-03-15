<?php

/*
Plugin name: Mon Plugin
Plugin URI: http://www.webforce3.fr
Description: Modèle de plugin
Version: 1.0
Author: Maxime Vasse
Author URI: http://twitter.com/webdif
License: GPL2
*/



/***** Front-office *****/

/*
 * Init
 */
function monPlugin_init() {

	// On crée un shortcode
	add_shortcode('mon-plugin','monPlugin_shortcodeOutput');

}

/*
 * Shortcode output
 */
function monPlugin_shortcodeOutput() {

	// On capture le tampon
	ob_start();

	// On affiche, mais c'est capturé
	monPlugin_display('mentions');

	// Arrête la capture, et retourne ce qui a été capturé
	return ob_get_clean();

}


/***** Back-office *****/

/*
 * Active le plugin
 */
function monPlugin_activate() {

}

/*
 * Désactive le plugin
 */
function monPlugin_deactivate() {

}

/*
 * Admin init
 */
function monPlugin_adminInit() {

	// Config
	register_setting('monPlugin-config', 'monPlugin-client');
	register_setting('monPlugin-config', 'monPlugin-annee');
	register_setting('monPlugin-config', 'monPlugin-url');
	register_setting('monPlugin-config', 'monPlugin-agence');

}

/*
 * Admin menu
 */
function monPlugin_adminMenu() {

	// On ajoute au menu
	add_options_page(
		'Réglages Mon Plugin',			// Titre de la page
		'Mon plugin',					// Titre du menu
		'manage_options',				// Niveau de capacité
		'monPlugin',					// Slug
		'monPlugin_configPage'			// Fonction appelée
	);

}

/*
 * Page de configuration
 */
function monPlugin_configPage() {

	// On affiche
	monPlugin_display('config');

}

/*
 * Templating
 */
function monPlugin_display($file) {
	include dirname(__FILE__) . '/templates/' . $file . '.php';
}





/***** Hooks *****/

// Front
add_action('init','monPlugin_init');

// Back
register_activation_hook(__FILE__, 'monPlugin_activate');
register_deactivation_hook(__FILE__, 'monPlugin_deactivate');

add_action('admin_init', 'monPlugin_adminInit');
add_action('admin_menu', 'monPlugin_adminMenu');