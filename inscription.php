<?php

require 'inc/header.php'; 

function controle()
{
$con = connexion();

/*
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
*/
}


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
		if(empty($_POST['adresse']) || !preg_match('/[a-zA-Z]/', $_POST['adresse']))
		{
			$erreurs['adresse'] = "Remplissez le champs de l'adresse avec des caractères valides !";
		}
		if(empty($_POST['prenom']) || !preg_match('/[a-zA-Z]/', $_POST['prenom']))
		{
			$erreurs['prenom'] = "Remplissez le champs du prénom avec des caractères valides !";
		}
		if(empty($_POST['civilite']) || !preg_match('/[a-zA-Z]/', $_POST['civilite']))
		{
			$erreurs['civilite'] = "Veuillez indiquer votre civilité";
		}
		if(empty($_POST['datenaiss']) || !preg_match('/\A\d{10}\z/', $_POST['datenaiss']))
		{
			$erreurs['datenaiss'] = "Date de naissance invalide !";
		}
		if($_POST['datenaiss']/365 < 18)
		{
			$erreurs['datenaiss'] = "Vous devez avoir plus de 18 ans";
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
					<div class="form-group">

						<label for="">Nom</label>

						<input type="text" name="nom" value="<?php if(isset($resultat)) echo $resultat['nom'] ; ?>" class="form-control" ></br>

						<label for="">Prénom</label>

						<input type="text" name="prenom" value="<?php if(isset($resultat)) echo $resultat['prenom'] ; ?>" class="form-control" ></br>


						<label for="">Adresse</label>

						<input type="text" name="adresse" value="<?php if(isset($resultat)) echo $resultat['adresse'] ; ?>" class="form-control" ></br>


						<label for="">Civilité</label>

						<input type="text" name="civilite" value="<?php if(isset($resultat)) echo $resultat['civilite'] ; ?>" class="form-control" ></br>


						<label for="">Date de Naissance</label>

						<input type="date" name="datenaiss" value="<?php if(isset($resultat)) echo $resultat['datenaiss'] ; ?>" class="form-control" ></br>
						
						<input type="hidden" name="nom" value="<?php if(isset($resultat)) echo $resultat['nom'] ; ?>">
						</div>

						<input type="reset" name="Annuler" value="Annuler">
						<input type="submit" name="Enregistrer" value="S'inscrire">

				</form>
			</br>
				<a href="index.php?">Retour à l'accueil</a>
			


<?php require 'inc/footer.php'; ?>
