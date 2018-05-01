<?php
	include ("modele/Modele.class.php");
	class Controleur
	{
		//Un modèle est un objet(de classe) du controleur
		private $unModele;

		public function __construct($serveur, $bdd, $user, $mdp)
		{
			//Instanciation de la classe Modele
			$this->unModele = new Modele($serveur, $bdd, $user, $mdp);
			//Le constructeur du controleur va instancier le modèle
		}

		public function selectAllInterventions ()
		{
			//traitement des données reçues du Modele
			return $this->unModele->selectAllInterventions ();
		}

		public function verifConnection($email, $mdp)
		{
			//controler les données
			if ($email =="" or $mdp=="")
			{
				return null;
			}
			else //on peut tester l'email et le mdp
			{
				return $this->unModele->verifConnection($email, $mdp);
			}
		}
	}

?>