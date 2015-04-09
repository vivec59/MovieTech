<?php 

require_once('../model/movie_model.php');
require_once('../allocine-api/PHP/search.php');
require_once('../allocine-api/PHP/allocine.class.php');

/*	$reponse = get_movie();

	$array['mesfilms'] = $reponse;
	json_encode($array);*/

	if (isset($_POST['recherche']))
	{
		//appeler la fonction get_movie pour vérifier dans la BDD si le film y existe
		////////
		//TODO//
		////////
		//si le film n'est pas dans la base, on appelle get_movie_by_name
		$reponse = json_decode(get_movie_by_name($_POST['recherche']));
		//si il y a plusieurs réponses, on demande de faire un choix à l'utilisateur
		////////
		//TODO//
		////////
		echo json_encode($reponse);
		//sinon, on affiche et on ajoute en base (créer fonction add_movie)
		////////
		//TODO//
		////////
	}

?>