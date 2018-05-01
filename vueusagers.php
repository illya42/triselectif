<center>
	<h2> Mon profil </h2>
	<br/>
	<table border = 0>
		<tr><th> ID </th>
			<th> Nom </th>
			<th> Prénom </th>
			<th> Mot de passe </th>
			<th> ID Habitation </th>
			<th> Civilité </th> 
			<th> Date de naissance </th>
			<th> Payement </th>
			<th> Actions </th>
		</tr>
			<?php
			foreach ($resultats as $unResultat)
			{
				echo"<tr>
				<td>".$unResultat['id']."</td>
				<td>".$unResultat['nom']."</td>
				<td>".$unResultat['prenom']."</td>
				<td>".$unResultat['mdp']."</td>
				<td>".$unResultat['idhab']."</td>
				<td>".$unResultat['civilite']."</td>
				<td>".$unResultat['datenaiss']."</td>
				<td>".$unResultat['payement']."</td>

				<td> 	<a href='index.php?page=5&action=X&id=".$unResultat['id']."'>
							<img src='image/supprimer.png' width='80' height='80' > </a>
							<a href='index.php?page=5&action=E&id=".$unResultat['id']."'>
							<img src='image/editer.jpg' width='80' height='80' > </a>
				</tr>";
			}
			?>
	</table>
		<br/>
			<h2>Modification du profil</h2>
				<form method="post" action="">

					<table border= 0 >
						<tr><td>Nom : </td> <td> <input type="text" name="nom" value="<?php if(isset($resultat)) echo $resultat['nom'] ; ?>"></td></tr>
						<tr><td>Prénom : </td> <td> <input type="text" name="prenom" value="<?php if(isset($resultat)) echo $resultat['prenom'] ; ?>"></td></tr>
						<tr><td>Mot de passe : </td> <td> <input type="text" name="mdp" value="<?php if(isset($resultat)) echo $resultat['mdp'] ; ?>"></td></tr>
						<tr><td>ID Habitation : </td> <td> <input type="text" name="idhab" value="<?php if(isset($resultat)) echo $resultat['idhab'] ; ?>"></td></tr>
						<tr><td>Civilité : </td> <td> <input type="text" name="civilite" value="<?php if(isset($resultat)) echo $resultat['civilite'] ; ?>"></td></tr>
						<tr><td>Date de naissance : </td> <td> <input type="date" name="datenaiss" value="<?php if(isset($resultat)) echo $resultat['datenaiss'] ; ?>"></td></tr>
						<tr><td>Payement : </td> <td> <input type="text" name="payement" value="<?php if(isset($resultat)) echo $resultat['payement'] ; ?>"></td></tr>
						
						<tr>

							<td> <input type="reset" name="Annuler" value="Annuler"></td>
							<td> <input type="submit" name="Modifier" value="Modifier"></td>
						</tr>

					</table>
					<input type="hidden" name="id" value="<?php if(isset($resultat)) echo $resultat['id'] ; ?>">
				</form>
</center>
