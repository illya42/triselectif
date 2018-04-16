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

//						!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! EVENT !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!						//

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
