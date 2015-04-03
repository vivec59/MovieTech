<?php 
require_once('connection_sql.php');

function get_movie()
{
	$bdd = getConnection();
	$marequete = "select * FROM film where ID_Film = 1";
	$resultat = $bdd->query($marequete);
	return $resultat->fetchAll();
}
?>