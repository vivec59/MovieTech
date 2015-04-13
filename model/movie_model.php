<?php 
	include_once('connection_sql.php');


function get_movie($monfilm)
{
	$bdd = getConnection();
	$marequete = "SELECT * FROM film WHERE Nom_Film LIKE '%".$monfilm."%'";
	$resultat = $bdd->query($marequete);
	return $resultat->fetchAll();
}

/*function insert_movie($movie)
{
	$bdd = getConnection();
	$marequete = "INSERT INTO film ('Nom_Film', 'Annee_Film', 'Categorie_Film', 'Realisateur_Film') VALUES ('" + $movie->nom + "', '" + $movie->annee + "', '"+ $movie->categorie +"', '" + $movie->realisateur "')";
	$resultat = $bdd->query($marequete);
	return $resultat;
}
*/
function get_movie_by_name($titre)
{

	$monapi = new Allocine(ALLOCINE_PARTNER_KEY, ALLOCINE_SECRET_KEY);
	return $monapi->search($titre);
}