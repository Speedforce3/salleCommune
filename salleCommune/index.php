<?php
session_start();
require_once("util/fonctions.inc.php");
require_once("util/class.pdosalleCommune.inc.php");
include("vues/v_entete.php") ;
include("vues/v_bandeau.php") ;

if(!isset($_REQUEST['uc']))
     $uc = 'accueil';
else
	$uc = $_REQUEST['uc'];

$pdo = PdosalleCommune::getPdosalleCommune();	 
switch($uc)
{
	case 'accueil':
		{include("vues/v_accueil.php");break;}
	case 'voirSalle':
	{
		include("controleurs/c_voirSalle.php");
		break;
	}
}
include("vues/v_pied.php") ;
?>
