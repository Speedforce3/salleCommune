<div id="produits">
<?php
	
foreach( $salle as $unesalle) 
{
	$id = $unesalle['IDSALLE'];
	$nom = $unesalle['NOMSALLE'];
	?>
	<table>
	<tr>
	<ul>
			<td><li><?php echo $id ?></li></td>
			<td><li><?php echo $nom ?></li></td>
			<td><li><a href=index.php?uc=voirSalle&salle=<?php echo $id ?>&action=reserver> 
			 <img src="http://www.gist-afrique.com/res.gif" TITLE="Reserver salle" width="50px" height="30px"></li></a></td>
	</ul>
	</tr>
			
			
			
<?php			
}
?>
</div>