<?php 
	include_once('connection_sql.php');


function get_movie()
{
	$bdd = getConnection();
	$marequete = "select * FROM film";
	$resultat = $bdd->query($marequete);
	return $resultat->fetchAll();
}
