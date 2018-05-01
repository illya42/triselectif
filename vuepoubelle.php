<center>
	<h2> Mes Poubelles </h2>

	<br/>
	<table border = 0>
		<tr><th> Code </th>
			<th> Type de déchets </th>
			<th> Numéro </th>
			<th> Couleur </th>
			<th> Nombre de levées </th>
			<th> Libellé </th>
			<th> Date de la levée </th>
			<th> Actions </th>
		</tr>
			<?php
			foreach ($resultats as $unResultat)
			{
				echo"<tr>
				<td>".$unResultat['codep']."</td>
				<td>".$unResultat['code']."</td>
				<td>".$unResultat['num']."</td>
				<td>".$unResultat['couleur']."</td>
				<td>".$unResultat['nblevees']."</td>
				<td>".$unResultat['libellepoubelle']."</td>
				<td>".$unResultat['leveepoubelle']."</td>
				<td> 	<a href='index.php?page=2&action=X&codep=".$unResultat['codep']."'>
							<img src='image/supprimer.png' width='80' height='80' > </a>
							<a href='index.php?page=2&action=E&codep=".$unResultat['codep']."'>
							<img src='image/editer.jpg' width='80' height='80' > </a>
				</tr>";
			}
			?>
	</table>
		<br/>
			<h2>Ajout d'une poubelle</h2>
				<form method="post" action="">

					<div title="vert : Verre, jaune : plastique et emballage, noir : Autres">Détails sur les couleurs</div>

					<table border= 0 >
						<tr><td>Type de déchets : </td> <td> <input type="text" name="code" value="<?php if(isset($resultat)) echo $resultat['code'] ; ?>"></td></tr>

						<tr><td>Numero : </td> <td> <input type="text" name="num" value="<?php if(isset($resultat)) echo $resultat['num'] ; ?>"></td></tr>

							<tr><td>Couleur : </td> <td> 
								<select name="couleur" value="<?php if(isset($resultat)) echo $resultat['couleur'] ; ?>">
						<option value="vert"> vert </option>
						<option value="jaune"> jaune </option>
						<option value="noir"> noir </option>
						</select>

						<tr><td>Nombre Levees : </td> <td> <input type="text" name="nblevees" value="<?php if(isset($resultat)) echo $resultat['nblevees'] ; ?>"></td></tr>

						
							<td> <input type="reset" name="Annuler" value="Annuler"></td>
							<td> <input type="submit" name="Enregistrer" value="Enregistrer"> 
							<input type="submit" name="Modifier" value="Modifier"></td>
						</tr>

					</table>
					<input type="hidden" name="codep" value="<?php if(isset($resultat)) echo $resultat['codep'] ; ?>">
				</form>
</center>
