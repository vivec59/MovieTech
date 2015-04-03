<?php
	require_once('controller/home_controller.php'); 
	require_once('model/movie_model.php');
?>

   
        <?php
        	$AllMovie = get_movie();
        ?>
        <div id="Div_ListeFilm">
        	<div class="sujet">Liste de mes films</div>
        	<div class="corp">
        <table>
       	<?php
        	foreach($AllMovie as $movie)
            {
        ?>
		        <tr>
		            <td><?php echo $movie["Nom_Film"]; ?>
		            </td>
		            <td><?php echo $movie["Annee_Film"]; ?>
		            </td>
		            <td><?php echo $movie["Categorie_Film"]; ?>
		            </td>
		            <td><?php echo $movie["Realisateur_Film"]; ?>
		            </td>
		         </tr>
	        </div>
                     <?php
            }
        ?>
    	</div>

    </table>