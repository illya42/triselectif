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
            '".$tab["libelle"]."',
            '".$tab["recyclable"]."',
            '".$tab["tarif"]."'
            );";

        

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function deleteTypeDechetM ($code)
    {
        $con = connexion();
        $requete = "delete from type_dechet where code = ".$code.";";

        

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdTypeDechetM ($code)
    {
        $con = connexion();
        $requete = "select * from type_dechet where code = ".$code.";";

        $resultat = mysqli_query($con, $requete);
        $ligne = mysqli_fetch_assoc($resultat);

        

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

        

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function deleteHabitationM ($idhab)
    {
        $con = connexion();
        $requete = "delete from habitation where idhab = '".$idhab."';";

        

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdHabitationM ($idhab)
    {
        $con = connexion();
        $requete = "select * from habitation where idhab = '".$idhab."';";

        $resultat = mysqli_query($con, $requete);
        $ligne = mysqli_fetch_assoc($resultat);

        

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

        

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function deletePoubelleM ($codep)
    {
        $con = connexion();
        $requete = "delete from poubelle where codep = ".$codep.";";

        

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdPoubelleM ($codep)
    {
        $con = connexion();
        $requete = "select 
        codep, 
        t.code,
        l.num,
        p.couleur,
        p.nblevees,
        t.libelle as type,
        l.datelevee as datel

        from 

        poubelle p,
        type_dechet t,
        levee l

         where 

         p.code = t.code
         and
         p.num = l.num
         and
         codep = ".$codep.";";

        $resultat = mysqli_query($con, $requete);
        $ligne = mysqli_fetch_assoc($resultat);
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

        mysqli_query($con, $requete);
        deconnexion($con);
    }


    function selectAllPoubelleM()
    {
        $con=connexion();
        $requete="select 
        p.codep, 
        t.code,
        l.num,
        p.couleur,
        p.nblevees,
        t.libelle as libellepoubelle,
        l.datelevee as leveepoubelle

        from 

        poubelle p,
        type_dechet t,
        levee l

         where 

         p.code = t.code
         and
         p.num = l.num

         order by codep
         ;";

       $resultat = mysqli_query($con,$requete);
        deconnexion($con);
        return $resultat;
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

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function deleteLeveeM ($num)
    {
        $con = connexion();
        $requete = "delete from levee where num = ".$num.";"; 

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdLeveeM ($num)
    {
        $con = connexion();
        $requete = "select * from levee where num = ".$num.";";

        $resultat = mysqli_query($con, $requete);
        $ligne = mysqli_fetch_assoc($resultat); 

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
            '".$tab["prenom"]."',
            '".$tab["mdp"]."',
            '".$tab["idhab"]."',
            '".$tab["civilite"]."',
            '".$tab["datenaiss"]."',
            '".$tab["payement"]."'
            
            );";

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function deleteUsagerM ($id)
    {
        $con = connexion();
        $requete = "delete from usager where id = ".$id.";";

        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdUsagerM ($nom, $prenom, $idhab, $mdp)
    {
        $con = connexion();
        $requete = "select * from usager where nom = '".$nom."' and prenom = '".$prenom."' and idhab = '".$idhab."' and mdp = '".$mdp."';";

        $resultat = mysqli_query($con, $requete);
        $ligne = mysqli_fetch_assoc($resultat);

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
        idhab =       '".$tab['idhab'].             "',
        prenom =          '".$tab['prenom'].       "',
        civilite =          '".$tab['civilite'].       "',
        datenaiss =          '".$tab['datenaiss'].       "',
        payement =    '".$tab['payement'].       "'
        
        where id = '".$tab['id']."';";

        mysqli_query($con, $requete);
        deconnexion($con);
    }