<?php
	include("modele/modele.php");

	function selectAllC($table)
	{
		//traitement des données
		if($table == "type_dechet" || $table == "levee" || $table == "poubelle" || $table == "habitation" || $table == "usager")
		{
			$resultat = selectAllM($table);
			return $resultat;
		}
		else
		{
			return null;
		}
	}

//						!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! TypeDechet !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!						//

	function insertTypeDechetC ($tab)
	{
		insertTypeDechetM($tab);
	}

	function deleteTypeDechetC ($code)
	{
		deleteTypeDechetM ($code);
	}

	function selectWhereIdTypeDechetC ($code)
	{
		$resultat = selectWhereIdTypeDechetM ($code);
		return $resultat;
	}

	function updateTypeDechetC ($tab)
	{
		updateTypeDechetM ($tab);
	}

//						!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! Habitations !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!						//

		function insertHabitationC ($tab)
	{
		insertHabitationM($tab);
	}

	function deleteHabitationC ($code)
	{
		deleteHabitationM ($code);
	}

	function selectWhereIdHabitationC ($code)
	{
		$resultat = selectWhereIdHabitationM ($code);
		return $resultat;
	}

	function updateHabitationC ($tab)
	{
		updateHabitationM ($tab);
	}

//						!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! Poubelles !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!						//

		function insertPoubelleC ($tab)
	{
		insertPoubelleM($tab);
	}

	function deletePoubelleC ($code)
	{
		deletePoubelleM ($code);
	}

	function selectWhereIdPoubelleC ($code)
	{
		$resultat = selectWhereIdPoubelleM ($code);
		return $resultat;
	}

	function updatePouebelleC ($tab)
	{
		updatePoubelleM ($tab);
	}

	//						!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! Levees !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!						//

		function insertLeveeC ($tab)
	{
		insertPoubelleM($tab);
	}

	function deleteLeveeC ($num)
	{
		deleteLeveeM ($num);
	}

	function selectWhereIdLeveeC ($num)
	{
		$resultat = selectWhereIdLeveeM ($num);
		return $resultat;
	}

	function updateLeveeC ($tab)
	{
		updateLeveeM ($tab);
	}
