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
    
function selectAllM ($table)
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
            '".$tab["adresse"]."',
            '".$tab["codep"]."',
            '".$tab["CP"]."',
            '".$tab["ville"]."',
            '".$tab["type"]."'
            );";

        echo $requete;

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function deleteHabitationM ($idhab)
    {
        $con = connexion();
        $requete = "delete from habitation where idhab = '".$idhab."';";

        echo $requete;

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdHabitationM ($idhab)
    {
        $con = connexion();
        $requete = "select * from habitation where idhab = '".$idhab."';";

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
        codep =          '".$tab['codep'].       "', 
        CP =       '".$tab['CP'].             "',
        ville =    '".$tab['ville'].       "',
        type =         '".$tab['type'].         "'
        
        where idhab = '".$tab['idhab']."';";

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
            '".$tab["code"]."',
            '".$tab["num"]."',
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
        code =          '".$tab['code'].       "',  
        couleur =       '".$tab['couleur'].             "',
        num =       '".$tab['num'].             "',
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
            '".$tab["num"]."',
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

//                      [ ## TABLE : usagers ##]                     //

       function insertUsagerM ($tab)
    {
        $con = connexion();
        $requete = "insert into usager values
            (
            null,
            '".$tab["nom"]."',
            '".$tab["adresse"]."',
            '".$tab["prenom"]."',
            '".$tab["civilite"]."',
            '".$tab["datenaiss"]."',
            '".$tab["payement"]."'
            );";

        echo $requete;

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function deleteUsagerM ($id)
    {
        $con = connexion();
        $requete = "delete from usager where id = ".$id.";";

        echo $requete;

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdUsagerM ($id)
    {
        $con = connexion();
        $requete = "select * from usager where id = '".$id."';";

        $resultat = mysqli_query($con, $requete);
        $ligne = mysqli_fetch_assoc($resultat);

        echo $requete;

        deconnexion($con);

        return $ligne;
    }

    function updateUsagerM ($tab)
    {
        $con = connexion();
        $requete = 
        "update usager
        set 
        nom =          '".$tab['nom'].       "', 
        adresse =       '".$tab['adresse'].             "',
        prenom =          '".$tab['prenom'].       "',
        civilite =          '".$tab['civilite'].       "',
        datenaiss =          '".$tab['datenaiss'].       "',
        payement =    '".$tab['payement'].       "'
        
        where id = '".$tab['id']."';";

        echo $requete;

        mysqli_query($con, $requete);
        deconnexion($con);
    }