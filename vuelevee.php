<center>
	<h2> Types de déchets </h2>
	<br/>
	<table border = 1>
		<tr><td> Numero </td>
			<td> Date Levee </td>
			<td> Poids </td>
			<td> Actions </td>
		</tr>
			<?php
			foreach ($resultats as $unResultat)
			{
				echo"<tr>
				<td>".$unResultat['num']."</td>
				<td>".$unResultat['datelevee']."</td>
				<td>".$unResultat['poids']."</td>
				<td> 	<a href='index.php?page=4&action=X&num=".$unResultat['num']."'>
							<img src='image/supprimer.png' width='80' height='80' > </a>
							<a href='index.php?page=4&action=E&num=".$unResultat['num']."'>
							<img src='image/editer.jpg' width='80' height='80' > </a>
				</tr>";
			}
			?>
	</table>
		<br/>
			<h2>Ajout d'un type de déchet</h2>
				<form method="post" action="">

					<table border= 1 >
						<tr><td>Numero : </td> <td> <input type="text" name="num" value="<?php if(isset($resultat)) echo $resultat['num'] ; ?>"></td></tr>
						
						<tr><td>Date Levee : </td> <td> <input type="text" name="datelevee" value="<?php if(isset($resultat)) echo $resultat['datelevee'] ; ?>"></td></tr>

						<tr><td>Poids : </td> <td> <input type="text" name="poids" value="<?php if(isset($resultat)) echo $resultat['poids'] ; ?>"></td></tr>
						
							<td> <input type="reset" name="Annuler" value="Annuler"></td>
							<td> <input type="submit" name="Enregistrer" value="Enregistrer"> 
							<input type="submit" name="Modifier" value="Modifier"></td>
						</tr>

					</table>
					<input type="hidden" name="num" value="<?php if(isset($resultat)) echo $resultat['num'] ; ?>">
				</form>
</center>
