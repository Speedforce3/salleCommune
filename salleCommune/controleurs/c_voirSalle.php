<?php
$action=$_REQUEST['action'];
switch ($action)
{
	case 'voirSalle':
	{
		$salle=$pdo->getSalle();
		include("vues/v_salle.php");
		break;
	}
}
?>