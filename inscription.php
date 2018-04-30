<?php

require 'inc/header.php'; 

/*
function controle()
{
$con = connexion();


	$requete = "

		drop trigger if exists verifage;
		delimiter //
		create trigger verifage
		before insert on client
		for each row
		begin
		if datediff(curdate(),new.DATENAISSC)/365 < 18
			  then
			         signal sqlstate'42000'
			         set message_text = 'Impossible';
			  end if;
		end //
		delimiter ;

		";
		deconnexion($con);

}

*/
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
		if(empty($_POST['civilite']) || !preg_match('/[Homme,Femme,Autre]/', $_POST['prenom']))
		{
			$erreurs['civilite'] = "Veuillez indiquer votre civilité : Homme, Femme ou Autre";
		}
		if(empty($_POST['datenaiss']) || !preg_match('/[0-9]/', $_POST['datenaiss']))
		{
			$erreurs['datenaiss'] = "Date de naissance invalide !";
		}

		debug($erreurs);

		if(!$erreurs)
			{
			insertUsagerC($_POST);

			popup();
			}
		}
		
}
	



?>

</br>
</br>
</br>
<h1>Formulaire d'inscription</h1>

				<form method="post" action="">

					<table border= 0 >
						<tr><td>Nom : </td> <td> <input type="text" name="nom" class="form-control" required></td></tr>
						<tr><td>Prénom : </td> <td> <input type="text" name="prenom" class="form-control" required></td></tr>
						<tr><td>ID Habitation : </td> <td> <input type="text" name="idhab" class="form-control" required></td></tr>
						<tr><td>Civilité : </td> <td>
						<select name="civilite">
						<option value="Homme"> Homme </option>
						<option value="Femme"> Femme </option>
						<option value="Autre"> Autre </option>
						</select>

						<tr><td>Date de naissance : </td> <td> <input type="date" name="datenaiss" class="form-control" required></td></tr>
						<tr><td>Payement : </td> <td> <input type="text" name="payement" class="form-control" required></td></tr>
						
						<tr>

							<td> <input type="reset" name="Annuler" value="Annuler"></td>
							<td> <input type="submit" name="Enregistrer" value="Enregistrer"></td>
						</tr>

					</table>
					<input type="hidden" name="id" value="<?php if(isset($resultat)) echo $resultat['id'] ; ?>">
				</form>
			</br>
				<a href="index.php?">Retour à l'accueil</a>
			


<?php require 'inc/footer.php'; ?>
