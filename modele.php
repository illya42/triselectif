<?php

function connexion()
    {
    $con = mysqli_connect("localhost","root","","triselectif");
    return $con;
    }

function deconnexion ($con)
    {
        mysqli_close($con);
    }
    
function selectAll_M ($table)
    {
        $con = connexion();
        $requete ="select * from " .$table. ";";

        $resultat = mysqli_query($con,$requete);
        deconnexion($con);
        return $resultat;
    }
    

//                      [ ## TABLE : type_dechet ##]                     //

    function insert_type_dechet_M ($tab)
    {
        $con = connexion();
        $requete = "insert into type_dechet values
            (
            null,
            '".$tab["libelle"]."',
            '".$tab["recyclable"]."',
            '".$tab["tarif"]."'
            );";

        echo $requete;

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function delete_type_dechet_M ($code)
    {
        $con = connexion();
        $requete = "delete from type_dechet where code = ".$code.";";

        echo $requete;

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereId_type_dechet_M ($code)
    {
        $con = connexion();
        $requete = "select * from type_dechet where code = ".$code.";";

        $resultat = mysqli_query($con, $requete);
        $ligne = mysqli_fetch_assoc($resultat);

        echo $requete;

        deconnexion($con);

        return $ligne;
    }

    function update_type_dechet_M ($tab)
    {
        $con = connexion();
        $requete = 
        "update type_dechet
        set 
        code =          '".$tab['code'].       "', 
        libelle =       '".$tab['libelle'].             "',
        recyclable =    '".$tab['recyclable'].       "',
        tarif =         '".$tab['tarif'].         "'
        
        where code = ".$tab['code'].";";

        echo $requete;

        mysqli_query($con, $requete);
        deconnexion($con);
    }
