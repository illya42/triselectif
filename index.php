<?php
	include("controleur/controleur.php")
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
		<link href="style.css" rel="stylesheet" type="text/css" media="all" />
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

//						!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! MESSAGE !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!						//

			case 4:
				
				if(isset($_GET['action']) && isset($_GET['code']))
				{
					$action = $_GET['action'];
					$code = $_GET['code'];
					if($action == "X")
					{
						delete_type_dechet_C ($code);
					}
					else if ($action == "E")
					{
						$resultat = selectWhereId_type_dechet_C ($code);
						
						var_dump($resultat);
					}
				}

				if(isset($_POST['Modifier']))
				{
					update_type_dechet_C($_POST) ;
					$resultat = null;
				}

				if(isset($_POST["Enregistrer"]))
				{
					insert_type_dechet_C ($_POST);
				}

				$resultats = selectAll_C("type_dechet");
				include("vue/vuetypedechets.php");
			break;
		}
		?>
</body>
</html>