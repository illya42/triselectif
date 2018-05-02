<?php
	include ("modele/Modele.class.php");
	class Controleur
	{
		//Un modèle est un objet(de classe) du controleur
		private $unModele;

		public function __construct($serveur, $bdd, $user, $nom, $prenom, $idhab, $mdp)
		{
			//Instanciation de la classe Modele
			$this->unModele = new Modele($serveur, $bdd, $user, $nom, $prenom, $idhab, $mdp);
			//Le constructeur du controleur va instancier le modèle
		}

		public function selectAllUsager ()
		{
			//traitement des données reçues du Modele
			return $this->unModele->selectAllUsager ();
		}

		public function verifConnection($nom, $prenom, $idhab, $mdp)
		{
			//controler les données
			if ($nom =="" or $prenom =="" or $idhab =="" or $mdp=="")
			{
				return null;
			}
			else //on peut tester l'email et le mdp
			{
				return $this->unModele->verifConnection($nom, $prenom, $idhab, $mdp);
			}
		}
	}

?>