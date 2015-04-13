<?php 
	include_once('connection_sql.php');


function get_movie($monfilm)
{
	$bdd = getConnection();
	$marequete = "SELECT COUNT * FROM film WHERE Nom_Film LIKE '%".$monfilm."%'";
	$resultat = $bdd->query($marequete);
	$reponse = $resultat->fetchAll();
	if ($reponse != null)
		return true;
	else
		return false;
}

function get_movie_by_name($titre)
{

	$monapi = new Allocine(ALLOCINE_PARTNER_KEY, ALLOCINE_SECRET_KEY);
	return $monapi->search($titre);

}