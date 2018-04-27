<?php
	require 'inc/header.php';

	include("controleur/controleur.php")
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
		<link href="style.css" rel="stylesheet" type="text/css" media="all" />
	</br>
	</br>
	</br>
	<title> Tri Sélectif </title>
</head>
<body>
	<center>
		<h1> Menu </h1>
			<a href="index.php?page=1"> Mes Habitations
			</a><br/><br/>
			<a href="index.php?page=2"> Mes Poubelles
			</a><br/><br/>
			<a href="index.php?page=3"> Les levées
			</a><br/><br/>
			<a href="index.php?page=4"> Les types de déchets
			</a><br/><br/>
	</center>
	<?php
		if (isset($_GET['page']))
		{
			$page = $_GET['page'];
		}else{
			$page = 0;
		}
		switch ($page) 
		{

//						[ ## TABLE : Habitations ##] 					//

			case 1:
					if(isset($_GET['action']) && isset($_GET['adresse']))
					{
						$action = $_GET['action'];
						$adresse = $_GET['adresse'];
						if($action == "X")
						{
							deleteHabitationC($adresse);
						}
						else if ($action == "E")
						{
							$resultat = selectWhereIdHabitationC ($adresse);
							
						}
					}

					if(isset($_POST['Modifier']))
					{
						updateHabitationC($_POST) ;
						$resultat = null;
					}

					if(isset($_POST["Enregistrer"]))
					{
						insertHabitationC($_POST);
					}
					
			$resultats = selectAllC("habitation");
				include("vue/vuehabitations.php");
			break;
				
//						[ ## TABLE : Poubelle ##] 					//
				
				case 2:
					if(isset($_GET['action']) && isset($_GET['codep']))
						{
							$action = $_GET['action'];
							$codep = $_GET['codep'];
							if($action == "X")
								{
									deletePoubelleC($codep);
								}
							else if ($action == "E")
								{
									$resultat = selectWhereIdPoubelleC ($codep);										
								}
						}

					if(isset($_POST['Modifier']))
						{
							updatePoubelleC($_POST) ;
							$resultat = null;
						}

					if(isset($_POST["Enregistrer"]))
						{
							insertPoubelleC($_POST);
						}

					$resultats = selectAllC("poubelle");
					include("vue/vuepoubelle.php");
					break;

//						[ ## TABLE : Levees ##] 					//

				case 3:
					if(isset($_GET['action']) && isset($_GET['num']))
						{
							$action = $_GET['action'];
							$num = $_GET['num'];
							if($action == "X")
								{
									deleteLeveeC($num);
								}
								else if ($action == "E")
									{
										$resultat = selectWhereIdLeveeC ($num);	
									}
						}

					if(isset($_POST['Modifier']))
						{
							updateLeveeC($_POST) ;
							$resultat = null;
						}

					if(isset($_POST["Enregistrer"]))
						{
							insertLeveeC($_POST);
						}
					$resultats = selectAllC("levee");
					include("vue/vuelevee.php");
					break;

//						[ ## TABLE : TypeDechet ##] 					//

				case 4:
					if(isset($_GET['action']) && isset($_GET['code']))
				{
					$action = $_GET['action'];
					$code = $_GET['code'];
					if($action == "X")
					{
						deleteTypeDechetC ($code);
					}
					else if ($action == "E")
					{
						$resultat = selectWhereIdTypeDechetC ($code);
						
						var_dump($resultat);
					}
				}

				if(isset($_POST['Modifier']))
				{
					updateTypeDechetC($_POST) ;
					$resultat = null;
				}

				if(isset($_POST["Enregistrer"]))
				{
					insertTypeDechetC ($_POST);
				}

				$resultats = selectAllC("type_dechet");
				include("vue/vuetypedechets.php");
			break;	

//						[ ## TABLE : Usager ##] 					//

				case 5:
					if(isset($_GET['action']) && isset($_GET['nom']))
				{
					$action = $_GET['action'];
					$nom = $_GET['nom'];
					if($action == "X")
					{
						deleteUsagerC ($nom);
					}
					else if ($action == "E")
					{
						$resultat = selectWhereIdUsagerC ($nom);
						
						var_dump($resultat);
					}
				}

				if(isset($_POST['Modifier']))
				{
					updateUsagerC($_POST) ;
					$resultat = null;
				}

				if(isset($_POST["Enregistrer"]))
				{
					insertUsagerC ($_POST);
				}

				$resultats = selectAllC("usager");
				include("vue/vueusagers.php");
			break;	

		}
		?>

	<p>
		</br>
		</br>
	</p>
</body>
</html>

<?php require 'inc/footer.php'; ?>