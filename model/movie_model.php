<?php 
	include_once('connection_sql.php');


function get_movie()
{
	$bdd = getConnection();
	$marequete = "select * FROM film";
	$resultat = $bdd->query($marequete);
	return $resultat->fetchAll();
}

function get_movie_by_name($titre)
{

	$monapi = new Allocine(ALLOCINE_PARTNER_KEY, ALLOCINE_SECRET_KEY);
	return $monapi->search($titre);
	
}