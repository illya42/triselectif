<center>
	<h2> Mes Habitations </h2>
	<br/>
	<table border = 0>
		<tr><th> ID </th>
			<th> Adresse </th>
			<th> Code Poubelles </th>
			<th> Code Postal </th>
			<th> Ville </th> 
			<th> Type d'habitation </th>
			<th> Actions </th>
		</tr>
			<?php
			foreach ($resultats as $unResultat)
			{
				echo"<tr>
				<td>".$unResultat['idhab']."</td>
				<td>".$unResultat['adresse']."</td>
				<td>".$unResultat['codep']."</td>
				<td>".$unResultat['CP']."</td>
				<td>".$unResultat['ville']."</td>
				<td>".$unResultat['type']."</td>
				<td> 	<a href='index.php?page=1&action=X&idhab=".$unResultat['idhab']."'>
							<img src='image/supprimer.png' width='80' height='80' > </a>
							<a href='index.php?page=1&action=E&idhab=".$unResultat['idhab']."'>
							<img src='image/editer.jpg' width='80' height='80' > </a>
				</tr>";
			}
			?>
	</table>
		<br/>
			<h2>Ajout d'une habitation</h2>
				<form method="post" action="">

					<table border= 0 >
						<tr><td>ID : </td> <td> <input type="text" name="idhab" value="<?php if(isset($resultat)) echo $resultat['idhab'] ; ?>"></td></tr>
						<tr><td>Adresse : </td> <td> <input type="text" name="adresse" value="<?php if(isset($resultat)) echo $resultat['adresse'] ; ?>"></td></tr>
						<tr><td>Code des poubelles : </td> <td> <input type="text" name="codep" value="<?php if(isset($resultat)) echo $resultat['codep'] ; ?>"></td></tr>
						<tr><td>Code Postal : </td> <td> <input type="text" name="CP" value="<?php if(isset($resultat)) echo $resultat['CP'] ; ?>"></td></tr>
						<tr><td>Ville : </td> <td> <input type="text" name="ville" value="<?php if(isset($resultat)) echo $resultat['ville'] ; ?>"></td></tr>
						<tr><td>Type d'habitation : </td> <td> <input type="text" name="type" value="<?php if(isset($resultat)) echo $resultat['type'] ; ?>"></td></tr>

							<td> <input type="reset" name="Annuler" value="Annuler"></td>
							<td> <input type="submit" name="Enregistrer" value="Enregistrer"> 
							<input type="submit" name="Modifier" value="Modifier"></td>
						</tr>

					</table>
					<input type="hidden" name="idhab" value="<?php if(isset($resultat)) echo $resultat['idhab'] ; ?>">
				</form>
</center>
