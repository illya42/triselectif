<?php require 'inc/header.php'; 

include("controleur/controleur.php");

if(isset($_POST["Enregistrer"]))
{
	if(!empty($_POST))
	{
		$erreurs = array();

		//controle();

		if(empty($_POST['nom']) || !preg_match('/[a-zA-Z]/', $_POST['nom']))
		{
			$erreurs['nom'] = "Remplissez le champs du nom avec des caractères valides !";
		}
		if(empty($_POST['idhab']) || !preg_match('/[0-9]/', $_POST['idhab']))
		{
			$erreurs['idhab'] = "Remplissez le champs de l'adresse avec des caractères valides !";
		}
		if(empty($_POST['prenom']) || !preg_match('/[a-zA-Z]/', $_POST['prenom']))
		{
			$erreurs['prenom'] = "Remplissez le champs du prénom avec des caractères valides !";
		}
		if(empty($_POST['mdp']) || preg_match('/~(?=.*[0-9])(?=.*[a-z])^[a-z0-9]{5,15}$~/', $_POST['mdp']))
		{
			$erreurs['mdp'] = "Le mot de passe doit contenir des lettres et des chiffres !";
		}

		debug($erreurs);

		if(!$erreurs)
			{
			selectWhereIdUsagerM ($_POST);

			popup2();
			}
		}
		
}

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
				

			</br>
				<a href="index.php?">Retour à l'accueil</a>

					

<?php require 'inc/footer.php'; ?>