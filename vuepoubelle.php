<center>
	<h2> Poubelle </h2>
	<br/>
	<table border = 1>
		<tr><td> Code </td>
			<td> Type de déchets </td>
			<td> Numéro </td>
			<td> Couleur </td>
			<td> Nombre levees </td>
			<td> Actions </td>
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
				<td> 	<a href='index.php?page=2&action=X&codep=".$unResultat['codep']."'>
							<img src='image/supprimer.png' width='80' height='80' > </a>
							<a href='index.php?page=2&action=E&codep=".$unResultat['codep']."'>
							<img src='image/editer.jpg' width='80' height='80' > </a>
				</tr>";
			}
			?>
	</table>
		<br/>
			<h2>Ajout poubelle</h2>
				<form method="post" action="">

					<table border= 1 >
						<tr><td>Code : </td> <td> <input type="text" name="codep" value="<?php if(isset($resultat)) echo $resultat['codep'] ; ?>"></td></tr>

						<tr><td>Type de déchets : </td> <td> <input type="text" name="code" value="<?php if(isset($resultat)) echo $resultat['code'] ; ?>"></td></tr>

						<tr><td>Numero : </td> <td> <input type="text" name="num" value="<?php if(isset($resultat)) echo $resultat['num'] ; ?>"></td></tr>

						<tr><td>Couleur : </td> <td> <input type="text" name="couleur" value="<?php if(isset($resultat)) echo $resultat['couleur'] ; ?>"></td></tr>

						<tr><td>Nombre Levees : </td> <td> <input type="text" name="nblevees" value="<?php if(isset($resultat)) echo $resultat['nblevees'] ; ?>"></td></tr>
						
							<td> <input type="reset" name="Annuler" value="Annuler"></td>
							<td> <input type="submit" name="Enregistrer" value="Enregistrer"> 
							<input type="submit" name="Modifier" value="Modifier"></td>
						</tr>

					</table>
					<input type="hidden" name="codep" value="<?php if(isset($resultat)) echo $resultat['codep'] ; ?>">
				</form>
</center>
