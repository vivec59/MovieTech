<?php
	require_once('controller/home_controller.php'); 
	require_once('model/movie_model.php');
?>
	
        <?php
        	$AllMovie = get_movie();
        ?>
        <div class="Div_ListeFilm col-md-4" >
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

    	<div class="Recherche col-md-4 col-md-offset-1">
    		 <label class="" for="txtDate">Rechercher un film : </label>
             <input class="search" type="text"  name="recherche" />
             <input class="btn btn-success" type="submit" value="Valider" />
    	</div>

    