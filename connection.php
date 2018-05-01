<?php require 'inc/header.php'; 

include("controleur/controleur.php");


?>

</br>
</br>
</br>
<h1>Formulaire de connection</h1>

				<form method="post" action="">

					<table border= 0 >
						<tr><td>Nom : </td> <td> <input type="text" name="nom" class="form-control" required></td></tr>
						<tr><td>Prénom : </td> <td> <input type="text" name="prenom" class="form-control" required></td></tr>
						<tr><td>ID Habitation : </td> <td> <input type="text" name="idhab" class="form-control" required></td></tr>
						<tr><td>Mot de passe : </td> <td> <input type="text" name="mdp" class="form-control" required></td></tr>		
					
						<tr>

							<td> <input type="reset" name="Annuler" value="Annuler"></td>
							<td> <input type="submit" name="Enregistrer" value="Se connecter"></td>
						</tr>

					</table>
					<input type="hidden" name="id" value="<?php if(isset($resultat)) echo $resultat['id'] ; ?>">
				</form>
				<?php

				if(isset($_POST["Enregistrer"]))
					{
					$nom = $_POST['nom'];
					$prenom = $_POST['prenom'];
					$idhab = $_POST['idhab'];
					$mdp = $_POST['mdp'];
					
					echo '<a href="index.php?page=6"> Voir mon profil
					</a><br/>';
					exit;
					}

				?>
			</br>
				<a href="index.php?">Retour à l'accueil</a>

				
				

<?php require 'inc/footer.php'; ?>