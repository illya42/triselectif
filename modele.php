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
    

//                      [ ## TABLE : typeDechet ##]                     //

    function insertTypeDechetM ($tab)
    {
        $con = connexion();
        $requete = "insert into type_dechet values
            (
            null,
            '".$tab["code"]."',
            '".$tab["libelle"]."',
            '".$tab["recyclable"]."',
            '".$tab["tarif"]."'
            );";

        echo $requete;

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function deleteTypeDechetM ($code)
    {
        $con = connexion();
        $requete = "delete from type_dechet where code = ".$code.";";

        echo $requete;

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdTypeDechetM ($code)
    {
        $con = connexion();
        $requete = "select * from type_dechet where code = ".$code.";";

        $resultat = mysqli_query($con, $requete);
        $ligne = mysqli_fetch_assoc($resultat);

        echo $requete;

        deconnexion($con);

        return $ligne;
    }

    function updateTypeDechetM ($tab)
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

//                      [ ## TABLE : habitation ##]                     //

    function insertHabitationM ($tab)
    {
        $con = connexion();
        $requete = "insert into habitation values
            (
            null,
            '".$tab["CP"]."',
            '".$tab["ville"]."',
            '".$tab["type"]."'
            );";

        echo $requete;

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function deleteHabitationM ($adresse)
    {
        $con = connexion();
        $requete = "delete from habitation where adresse = ".$adresse.";";

        echo $requete;

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdHabitationM ($adresse)
    {
        $con = connexion();
        $requete = "select * from habitation where adresse = ".$adresse.";";

        $resultat = mysqli_query($con, $requete);
        $ligne = mysqli_fetch_assoc($resultat);

        echo $requete;

        deconnexion($con);

        return $ligne;
    }

    function updateHabitationM ($tab)
    {
        $con = connexion();
        $requete = 
        "update habitation
        set 
        adresse =          '".$tab['adresse'].       "', 
        CP =       '".$tab['CP'].             "',
        ville =    '".$tab['ville'].       "',
        type =         '".$tab['type'].         "'
        
        where adresse = ".$tab['adresse'].";";

        echo $requete;

        mysqli_query($con, $requete);
        deconnexion($con);
    }

//                      [ ## TABLE : poubelles ##]                     //

            function insertPoubelleM ($tab)
    {
        $con = connexion();
        $requete = "insert into poubelle values
            (
            null,
            '".$tab["couleur"]."',
            '".$tab["nblevees"]."'
            );";

        echo $requete;

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function deletePoubelleM ($codep)
    {
        $con = connexion();
        $requete = "delete from poubelle where codep = ".$codep.";";

        echo $requete;

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdPoubelleM ($codep)
    {
        $con = connexion();
        $requete = "select * from poubelle where codep = ".$codep.";";

        $resultat = mysqli_query($con, $requete);
        $ligne = mysqli_fetch_assoc($resultat);

        echo $requete;

        deconnexion($con);

        return $ligne;
    }

    function updatePoubelleM ($tab)
    {
        $con = connexion();
        $requete = 
        "update poubelle
        set 
        codep =          '".$tab['codep'].       "', 
        couleur =       '".$tab['couleur'].             "',
        nblevees =    '".$tab['nblevees'].       "'
        
        where codep = ".$tab['codep'].";";

        echo $requete;

        mysqli_query($con, $requete);
        deconnexion($con);
    }


//                      [ ## TABLE : levees ##]                     //

       function insertLeveeM ($tab)
    {
        $con = connexion();
        $requete = "insert into levee values
            (
            null,
            '".$tab["datelevee"]."',
            '".$tab["poids"]."'
            );";

        echo $requete;

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function deleteLeveeM ($num)
    {
        $con = connexion();
        $requete = "delete from levee where num = ".$num.";";

        echo $requete;

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdLeveeM ($num)
    {
        $con = connexion();
        $requete = "select * from levee where num = ".$num.";";

        $resultat = mysqli_query($con, $requete);
        $ligne = mysqli_fetch_assoc($resultat);

        echo $requete;

        deconnexion($con);

        return $ligne;
    }

    function updateLeveeM ($tab)
    {
        $con = connexion();
        $requete = 
        "update levee
        set 
        num =          '".$tab['num'].       "', 
        datelevee =       '".$tab['datelevee'].             "',
        poids =    '".$tab['poids'].       "'
        
        where num = ".$tab['num'].";";

        echo $requete;

        mysqli_query($con, $requete);
        deconnexion($con);
    }