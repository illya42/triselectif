<?php
	include("modele/modele.php");

	function selectAll_C($table)
	{
		//traitement des données
		if($table == "type_dechet" || $table == "levee" || $table == "poubelle" || $table == "habitation" || $table == "usager")
		{
			$resultat = selectAll_M($table);
			return $resultat;
		}
		else
		{
			return null;
		}
	}

//						!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! TypeDechet !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!						//

	function insert_type_dechet_C ($tab)
	{
		insert_type_dechet_M($tab);
	}

	function delete_type_dechet_C ($code)
	{
		delete_type_dechet_M ($code);
	}

	function selectWhereId_type_dechet_C ($code)
	{
		$resultat = selectWhereId_type_dechet_M ($code);
		return $resultat;
	}

	function update_type_dechet_C ($tab)
	{
		update_type_dechet_M ($tab);
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
