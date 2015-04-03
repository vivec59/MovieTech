<?php 

include_once('model/movie_model.php');
require_once('allocine-api/PHP/search.php');
	
	$reponse = get_movie();

	$array['mesfilms'] = $reponse;
	json_encode($array);
?>