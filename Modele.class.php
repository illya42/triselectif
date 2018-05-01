<?php
	class Modele
	{
		//objet permettant la connexion à la BDD
		private $pdo ;
		//constructeur PHP
		public function __construct($serveur, $bdd, $user, $mdp)
		{
				
			//try => code qui peut poser problème, catch => réalise la levé de l'exception pour gérer l'erreur dans le try
			$this->pdo = null;

			try 
			{
				//EN MAJUSCULE, instanciation de la classe PDO => écrire un objet de la classe PDO
				$this->pdo = new PDO("mysql:host=".$serveur.";dbname=".$bdd, $user, $mdp);
				
			}
			catch(Exception $exp)
			{
				//Afficher le message d'origine
				$exp->getMessage();
				//Un autre message
				echo "Connexion impossible au ".$serveur."/".$bdd;
			}
		}

		public function selectAllInterventions() 
		{

			$requete = "select * from intervention;";

			if ($this -> pdo == null) 
			{
				
				return null;
			
			} 
			else 
			{

				$select = $this -> pdo -> prepare($requete);		//de $this il recupere pdo puis ensuite prepare
				$select -> execute();
				$resultats = $select -> fetchAll();

				return $resultats;
			}
		}

		public function verifConnection($email, $mdp)
		{
			$requete ="select * from technicien where email = :email and mdp = :mdp ;";
			$donnees =array(":email"=>$email, ":mdp"=>$mdp);

			if($this->pdo == null)
			{
				return null;
			}
			else
			{
				$select = $this->pdo->prepare($requete);
				$select->execute($donnees);
				$resultat = $select->fetch();
				return $resultat;
			}
		}

	}//FIN DE LA CLASSE PHP
?>