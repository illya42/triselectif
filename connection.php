<?php require 'inc/header.php'; 

include("controleur/controleur.php");


?>

</br>
</br>
</br>
<h1>Formulaire de connection</h1>

				<form method="post" action="">

					<div class="form-group">

						<label for="">Nom</label>

						<input type="text" name="nom" value="<?php if(isset($resultat)) echo $resultat['nom'] ; ?>" class="form-control" required></br>
						
						<label for="">Prénom</label>

						<input type="text" name="prenom" value="<?php if(isset($resultat)) echo $resultat['prenom'] ; ?>" class="form-control" required></br>

						<label for="">Adresse</label>

						<input type="text" name="adresse" value="<?php if(isset($resultat)) echo $resultat['adresse'] ; ?>" class="form-control" required>

						<input type="hidden" name="nom" value="<?php if(isset($resultat)) echo $resultat['nom'] ; ?>">
					</div>
					
					<input type="reset" name="Annuler" value="Annuler">
					<input type="submit" name="Enregistrer" value="Se connecter"> 
				</form>
			</br>
				<a href="index.php?">Retour à l'accueil</a>

				<?php

				if(isset($_POST["Enregistrer"]))
					{
					$nom = $_GET['nom'];

					header("Location: index.php?page=5.php");

					$resultat = selectWhereIdUsagerC ($nom);
					
					exit;
					}

				?>

<?php require 'inc/footer.php'; ?>