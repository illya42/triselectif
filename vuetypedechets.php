<center>
	<h2> Types de déchets </h2>
	<br/>
	<table border = 0>
		<tr><th> Code </th>
			<th> Libellé </th>
			<th> Recyclable </th>
			<th> Tarif </th> 
			<th> Actions </th>
		</tr>
			<?php
			foreach ($resultats as $unResultat)
			{
				echo"<tr>
				<td>".$unResultat['code']."</td>
				<td>".$unResultat['libelle']."</td>
				<td>".$unResultat['recyclable']."</td>
				<td>".$unResultat['tarif']."</td>
				<td> 	<a href='index.php?page=4&action=X&code=".$unResultat['code']."'>
							<img src='image/supprimer.png' width='80' height='80' > </a>
							<a href='index.php?page=4&action=E&code=".$unResultat['code']."'>
							<img src='image/editer.jpg' width='80' height='80' > </a>
				</tr>";
			}
			?>
	</table>
		<br/>
			<h2>Ajout d'un type de déchet</h2>
				<form method="post" action="">

					<table border= 0 >
						
						<tr><td>Libellé : </td> <td> <input type="text" name="libelle" value="<?php if(isset($resultat)) echo $resultat['libelle'] ; ?>"></td></tr>
						<tr><td>Recyclable : </td> <td> 
								<select name="recyclable" value="<?php if(isset($resultat)) echo $resultat['recyclable'] ; ?>">
						<option value="1"> Recyclable </option>
						<option value="0"> Non recyclable </option>
						</select>
						<tr><td>Tarif : </td> <td> <input type="text" name="tarif" value="<?php if(isset($resultat)) echo $resultat['tarif'] ; ?>"></td></tr>
						
							<td> <input type="reset" name="Annuler" value="Annuler"></td>
							<td> <input type="submit" name="Enregistrer" value="Enregistrer"> 
							<input type="submit" name="Modifier" value="Modifier"></td>
						</tr>

					</table>
					<input type="hidden" name="code" value="<?php if(isset($resultat)) echo $resultat['code'] ; ?>">
				</form>
</center>
