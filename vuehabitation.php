<center>
	<h2> Habitation </h2>
	<br/>
	<table border = 1>
		<tr><td> Adresse </td>
			<td> CP </td>
			<td> Ville </td>
			<td> Type </td> 
			<td> Actions </td>
		</tr>
			<?php
			foreach ($resultats as $unResultat)
			{
				echo"<tr>
				<td>".$unResultat['adresse']."</td>
				<td>".$unResultat['CP']."</td>
				<td>".$unResultat['ville']."</td>
				<td>".$unResultat['type']."</td>
				<td> 	<a href='index.php?page=4&action=X&adresse=".$unResultat['adresse']."'>
							<img src='image/supprimer.png' width='80' height='80' > </a>
							<a href='index.php?page=4&action=E&adresse=".$unResultat['adresse']."'>
							<img src='image/editer.jpg' width='80' height='80' > </a>
				</tr>";
			}
			?>
	</table>
		<br/>
			<h2>Ajout d'une habitation</h2>
				<form method="post" action="">

					<table border= 1 >
						<tr><td>Adresse : </td> <td> <input type="text" name="adresse" value="<?php if(isset($resultat)) echo $resultat['adresse'] ; ?>"></td></tr>
						<tr><td>Code Postal : </td> <td> <input type="text" name="CP" value="<?php if(isset($resultat)) echo $resultat['CP'] ; ?>"></td></tr>
						<tr><td>Ville : </td> <td> <input type="text" name="ville" value="<?php if(isset($resultat)) echo $resultat['ville'] ; ?>"></td></tr>
						<tr><td>Type : </td> <td> <input type="text" name="type" value="<?php if(isset($resultat)) echo $resultat['type'] ; ?>"></td></tr>
						
							<td> <input type="reset" name="Annuler" value="Annuler"></td>
							<td> <input type="submit" name="Enregistrer" value="Enregistrer"> 
							<input type="submit" name="Modifier" value="Modifier"></td>
						</tr>

					</table>
					<input type="hidden" name="adresse" value="<?php if(isset($resultat)) echo $resultat['adresse'] ; ?>">
				</form>
</center>
