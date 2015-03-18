<?php

class Db extends PDO {

	const ENGINE = 'mysql';
	const HOST 	 = 'localhost';
	const USER   = 'root';
	const PASS   = '';
	const DB = 'cooking';


	private static $instance;

	public function __construct() {
		 $db_options = array(
    		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", // On force l'encodage en utf8
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // On récupère tous les résultats en tableau associatif
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING // On affiche des warnings pour les erreurs, à commenter en prod
            );

		parent::__construct(self::ENGINE.':dbname='.self::DB.";host=".self::HOST, self::USER, self::PASS, $db_options);
    }

	public static function getInstance() {
		if(!isset(self::$instance)) {
			self::$instance = new Db();
		}
		return self::$instance;
	}
}