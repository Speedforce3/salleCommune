<?php
/** 
 * Classe d'accès aux données. 
 
 * Utilise les services de la classe PDO
 * pour l'application sallecommune
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO 
 * $monPdoGsb qui contiendra l'unique instance de la classe
 *
*/

class PdosalleCommune
{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=sallecommune';   		
      	private static $user='root' ;    		
      	private static $mdp='' ;	
		private static $monPdo;
		private static $monPdosalleCommune = null;
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	private function __construct()
	{
    		PdosalleCommune::$monPdo = new PDO(PdosalleCommune::$serveur.';'.PdosalleCommune::$bdd, PdosalleCommune::$user, PdosalleCommune::$mdp); 
			PdosalleCommune::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		PdosalleCommune::$monPdo = null;
	}
/**
 * Fonction statique qui crée l'unique instance de la classe
 *
 * Appel : $instancePdosalleCommune = PdosalleCommune::getPdosalleCommune();
 * @return l'unique objet de la classe PdosalleCommune
 */
	public  static function getPdosalleCommune()
	{
		if(PdosalleCommune::$monPdosalleCommune == null)
		{
			PdosalleCommune::$monPdosalleCommune= new PdosalleCommune();
		}
		return PdosalleCommune::$monPdosalleCommune;  
	}

	public function getSalle()
	{
		$req = "select * from salle";
		$res = PdosalleCommune::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}
}
?>