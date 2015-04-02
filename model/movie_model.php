<?php 
	include_once('connection_sql.php');

	function get_movie($movie_name)
	{
		$bdd = getConnection();
		if (is_null($bdd))
			console.log('CONNARD');
	}
?>