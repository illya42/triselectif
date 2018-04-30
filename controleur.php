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

	function deleteHabitationC ($idhab)
	{
		deleteHabitationM ($idhab);
	}

	function selectWhereIdHabitationC ($idhab)
	{
		$resultat = selectWhereIdHabitationM ($idhab);
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

	function updatePoubelleC ($tab)
	{
		updatePoubelleM ($tab);
	}

	//						!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! Levees !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!						//

		function insertLeveeC ($tab)
	{
		insertLeveeM($tab);
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

//						!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! Usager !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!						//

	function insertUsagerC ($tab)
	{
		insertTypeUsagerM($tab);
	}

	function deleteUsagerC ($id)
	{
		deleteUsagerM ($id);
	}

	function selectWhereIdUsagerC ($id)
	{
		$resultat = selectWhereIdUsagerM ($id);
		return $resultat;
	}

	function updateUsagerC ($tab)
	{
		updateUsagerM ($tab);
	}