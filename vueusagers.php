<center>
	<h2> Mon profil </h2>
	<br/>
	<table border = 1>
		<tr><td> Nom </td>
			<td> Prénom </td>
			<td> Adresse </td>
			<td> Civilité </td> 
			<td> Date de naissance </td>
			<td> Payement </td>
			<td> Actions </td>
		</tr>
			<?php
			foreach ($resultats as $unResultat)
			{
				echo"<tr>
				<td>".$unResultat['nom']."</td>
				<td>".$unResultat['prenom']."</td>
				<td>".$unResultat['adresse']."</td>
				<td>".$unResultat['civilite']."</td>
				<td>".$unResultat['datenaiss']."</td>
				<td>".$unResultat['payement']."</td>
				<td> 	<a href='index.php?page=5&action=X&nom=".$unResultat['nom']."'>
							<img src='image/supprimer.png' width='80' height='80' > </a>
							<a href='index.php?page=5&action=E&nom=".$unResultat['nom']."'>
							<img src='image/editer.jpg' width='80' height='80' > </a>
				</tr>";
			}
			?>
	</table>
		<br/>
			<h2>Modification du profil</h2>
				<form method="post" action="">

					<table border= 1 >
						<tr><td>Nom : </td> <td> <input type="text" name="nom" value="<?php if(isset($resultat)) echo $resultat['nom'] ; ?>"></td></tr>
						<tr><td>Prénom : </td> <td> <input type="text" name="prenom" value="<?php if(isset($resultat)) echo $resultat['prenom'] ; ?>"></td></tr>
						<tr><td>Adresse : </td> <td> <input type="text" name="adresse" value="<?php if(isset($resultat)) echo $resultat['adresse'] ; ?>"></td></tr>
						<tr><td>Civilité : </td> <td> <input type="text" name="civilite" value="<?php if(isset($resultat)) echo $resultat['civilite'] ; ?>"></td></tr>
						<tr><td>Date de naissance : </td> <td> <input type="date" name="datenaiss" value="<?php if(isset($resultat)) echo $resultat['datenaiss'] ; ?>"></td></tr>
						<tr><td>Payement : </td> <td> <input type="text" name="payement" value="<?php if(isset($resultat)) echo $resultat['payement'] ; ?>"></td></tr>
						
						<tr>

							<td> <input type="reset" name="Annuler" value="Annuler"></td>
							<td> <input type="submit" name="Modifier" value="Modifier"></td>
						</tr>

					</table>
					<input type="hidden" name="nom" value="<?php if(isset($resultat)) echo $resultat['nom'] ; ?>">
				</form>
</center>
