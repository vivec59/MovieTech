<?php
	require_once('controller/home_controller.php'); 
	require_once('model/movie_model.php');
	require_once('api-allocine-helper/api-allocine-helper.php')
?>

   
        <?php
        	$AllMovie = get_movie();
        ?>
        <div id="Div_ListeFilm">
        	<div class="sujet">Liste de mes films</div>
        	<div class="corp">
        		<table>
        			<tr>
        				<th>Nom</td>
        				<th>Année</td>
        				<th>Catégorie</td>
        			</tr>
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
				         </tr>
		     	
                     <?php
		            }
		        ?>
		         </table>
	        </div>
    	</div>

    