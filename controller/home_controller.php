<?php 

require_once('../model/movie_model.php');
require_once('../allocine-api/PHP/search.php');
require_once('../allocine-api/PHP/allocine.class.php');

/*	$reponse = get_movie();

	$array['mesfilms'] = $reponse;
	json_encode($array);*/

	if (isset($_POST['recherche']))
	{
		$reponse = json_decode(get_movie_by_name($_POST['recherche']));

		echo json_encode($reponse);
	}

?>