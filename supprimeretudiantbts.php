<?php

include("connectionpdo.php");
    if($idconn=connec('supdeco','myparam'))

    {

        $etudiantsbts=$_GET['id_etudiantbts'];

        $requete="DELETE etudiantbts,formationetudiantbts,cycle,filierebts,specialitebts
        FROM etudiantbts
        INNER JOIN formationetudiantbts
        INNER JOIN cycle
        INNER JOIN filierebts
        INNER JOIN specialitebts
        ON
        etudiantbts.id_etudiantbts=formationetudiantbts.id_etudiantbts
        AND etudiantbts.id_cycle=cycle.id_cycle
        AND cycle.id_cycle=filierebts.id_cycle
        AND filierebts.id_filierebts=specialitebts.id_filierebts
        
        WHERE etudiantbts.id_etudiantbts=$etudiantsbts";

            $result=$idconn->exec($requete);

            if($result != 1)
                {
                    echo "<script type=\"texr/javascript\">
                        alert('Erreur:".$idconn->errorCode()."')</script>";
                }
                else
                {
                    //header('Location:form_bts.html');
                    echo "<h3>Suppression éffectué avec succès</h3>";
                }

                $idconn=null;
    }

