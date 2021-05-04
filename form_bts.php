<?php

include("connectionpdo.php");
 if($idconn=connec('supdeco','myparam')){

        $errors = [];

        if(!array_key_exists('nom',$_POST) || $_POST['nom'] == ''){
            $errors['nom'] = "vous n'avez pas renseigner votre nom";
        }

        if(!array_key_exists('prenom',$_POST) || $_POST['prenom'] == ''){
            $errors['prenom'] = "vous n'avez pas renseigner votre prenom";
        }
        if(!array_key_exists('date',$_POST) || $_POST['date'] == ''){
            $errors['date'] = "vous n'avez pas renseigner votre date de naissance";
        }
        if(!array_key_exists('lieu',$_POST) || $_POST['lieu'] == ''){
            $errors['lieu'] = "vous n'avez pas renseigner votre lieu de naissance";
        }
        if(!array_key_exists('situation',$_POST) || $_POST['situation'] == ''){
            $errors['situation'] = "vous n'avez pas renseigner votre situation familial";
        }
        if(!array_key_exists('sexe',$_POST) || $_POST['sexe'] == ''){
            $errors['sexe'] = "vous n'avez pas renseigner votre sexe";
        }
        if(!array_key_exists('adresse',$_POST) || $_POST['adresse'] == ''){
            $errors['adresse'] = "vous n'avez pas renseigner votre adresse";
        }
        if(!array_key_exists('teletu',$_POST) || $_POST['teletu'] == ''){
            $errors['teletu'] = "vous n'avez pas renseigner votre numero de téléphone d'étudiant";
        }
        if(!array_key_exists('quartier',$_POST) || $_POST['quartier'] == ''){
            $errors['quartier'] = "vous n'avez pas renseigner votre quartier";
        }
        if(!array_key_exists('telpar',$_POST) || $_POST['telpar'] == ''){
            $errors['telpar'] = "vous n'avez pas renseigner le numero de téléphone de votre parent";
        }
        if(!array_key_exists('regionori',$_POST) || $_POST['regionori'] == ''){
            $errors['regionori'] = "vous n'avez pas renseigner votre region d'origine";
        }
        if(!array_key_exists('email',$_POST) || $_POST['email'] == ''){
            $errors['email'] = "vous n'avez pas renseigner votre adresse email valide";
        }
        if(!array_key_exists('originebac',$_POST) || $_POST['originebac'] == ''){
            $errors['originebac'] = "vous n'avez pas renseigner votre pays d'origine du bac";
        }
        if(!array_key_exists('anneeobtention',$_POST) || $_POST['anneeobtention'] == ''){
            $errors['anneeobtention'] = "vous n'avez pas renseigner votre année d'obtnetion du bac";
        }
        if(!array_key_exists('diplome',$_POST) || $_POST['diplome'] == ''){
            $errors['diplome'] = "vous n'avez pas renseigner votre region d'origine";
        }
        if(!array_key_exists('nometabli',$_POST) || $_POST['nometabli'] == ''){
            $errors['nometabli'] = "vous n'avez pas renseigner le nom de votre établissement";
        }

        session_start();

        if(!empty($errors)){
            
            $_SESSION['errors']= $errors;
            $_SESSION['inputs'] = $_POST;
            header('Location: form_bts0.php');            
        }else{

        $_SESSION['success'] = 1;
        if(isset($_POST['nom'])&& isset($_POST['lieu'])&& isset($_POST['adresse']) && isset($_POST['cycle'])&& isset($_POST['filiere'])&& isset($_POST['specialite']))
        {

            // table etudiantbts
            $id_etudiantbts="\N";
            $nom=$idconn->quote($_POST['nom']);
            $prenom=$idconn->quote($_POST['prenom']);
            $date=$idconn->quote($_POST['date']);
            $lieu=$idconn->quote($_POST['lieu']);
            $situation=$idconn->quote($_POST['situation']);
            $sexe=$idconn->quote($_POST['sexe']);
            $adresse=$idconn->quote($_POST['adresse']);
            $telephoneetu=$idconn->quote($_POST['teletu']);
            $quatier=$idconn->quote($_POST['quartier']);
            $telephonepar=$idconn->quote($_POST['telpar']);
            $region=$idconn->quote($_POST['regionori']);
            $email=$idconn->quote($_POST['email']);
            //$cycle= 1;

            //table formationetudiantbts
            $originebac=$idconn->quote($_POST['originebac']);
            $anneeobtention=$idconn->quote($_POST['anneeobtention']);
            $diplome=$idconn->quote($_POST['diplome']);
            $nometabli=$idconn->quote($_POST['nometabli']);
            $id_formation="\N";

            
            
            $cycles=$_POST['cycle'];
            $filieres=$_POST['filiere'];
            $specialites=$_POST['specialite'];
            // table cycle
            $id_cycle="\N";
            foreach($cycles as $valeur)
            {
                $nom_cycle=$idconn->quote($valeur);
            }

            //table filierebts
            $id_filierebts="\N";
            foreach($filieres as $valeur)
            {
                $nom_filierebts=$idconn->quote($valeur);
            }

            //table specialitebts
            $id_specialitebts="\N";
            foreach($specialites as $valeur)
            {
                $nom_specialitebts=$idconn->quote($valeur);
            }
            
            
            $filierebtss=[];
            $cycles=[];
            $etudiantsbts=[];
        

            $requete1="INSERT INTO cycle
            VALUES($id_cycle,$nom_cycle)";

            $idconn->exec($requete1);
            $cycles[]=$idconn->lastInsertId();

            foreach($cycles as $cyc)
            {
                $requete2="INSERT INTO etudiantbts
                VALUES($id_etudiantbts,$nom,$prenom,$date,$lieu,$situation,$sexe,$adresse,$telephoneetu,
                $quatier,$telephonepar,$region,$email,$cyc)";

                $idconn->exec($requete2);
                $etudiantsbts[]=$idconn->lastInsertId();
                foreach($etudiantsbts as $etudiants)
                {
                    if(isset($_FILES["fichier"]) && $_FILES["fichier"]["error"] === 0){

                        // on a reçut l'image
                        //on procède aux vérifications
                        //on vérifie toujours l'extension et le type mime
                        
                        $allowed = [
                            "jpg" => "image/jpeg",
                            "jpeg" => "image/jpeg",
                            "png" => "image/png"
                        ];
            
                        $filename = $_FILES["fichier"]["name"];
                        $filetype = $_FILES["fichier"]["type"];
                        $filesize = $_FILES["fichier"]["size"];
            
                        $extension = pathinfo($filename, PATHINFO_EXTENSION);
                        // on vérifie l'absence de l'extension dans les clés de $allowed 
                        // ou l'absence du type mime dans les valeurs
                        if(!array_key_exists($extension,$allowed) || !in_array($filetype,$allowed))
                        {
                            // ici soit l'extension, soit le type est incorrect
                            die("Erreur: format de fichier incorrect");
                        }
            
                        //le type est correct
                        //on limite la taille a 2Mo
                        if($filesize > 2*1024*1024)
                        {
                            die("fichier trop volumineux");
                        }
            
                        //on génère un nom unique
                        $newname = md5(uniqid());
                        $newnames= $idconn->quote($newname.$extension);
                        //on génère le chemin complet
                        $newfilename = __DIR__ . "/image/$newnames";
            
                        $id_image="\N";
                       // $id_etudiantbts= 1;
            
                        $req = "INSERT INTO image_bts VALUES($id_image,$etudiants,$newnames)";
                         $idconn->exec($req);
                        
                      
                      
                    } 
                }
            
            
            }
                $etudiantsbts[]=$idconn->lastInsertId();
                foreach($etudiantsbts as $etudiants)
                {
                    
                    $requete3="INSERT INTO formationetudiantbts
                    VALUES($id_formation,$etudiants,$anneeobtention,$diplome,$originebac,$nometabli)";
                    $idconn->exec($requete3);
                }

               

            foreach($cycles as $cyc)
            {
                $requete4="INSERT INTO filierebts
                VALUES($id_filierebts,$cyc,$nom_filierebts)";
                $idconn->exec($requete4);
                $filierebtss[]=$idconn->lastInsertId();
                foreach($filierebtss as $fil)
                {
                    $requete5="INSERT INTO specialitebts
                    VALUES($id_specialitebts,$fil,$nom_specialitebts)";
                    $nblignes=$idconn->exec($requete5);
                }
            }

        
            if($nblignes !=1)
            {
                $mess_erreur=$idconn->errorInfo();
                echo "Insertion impossible, code".$idconn->errorCode().$mess_erreur[2];
                echo "<script type=\"text/javascript\">alert('Erreur: ".$idconn->errorCode()."')</script>";
            }
            else
            {
                //echo "<script type=\"text/javascript\">alert('Vous etes enregister votre numero 
            // client est: ".$idconn->lastInsertId()."')</script>";
             //on déplace le fichier de tmp à image en le renommant
             if(!move_uploaded_file($_FILES["fichier"]["tmp_name"],$newfilename)){
                die("L'upload a échoué!!!");
            }

              // on interdit l'execution du fichier
             chmod($newnames, 0644);
            
                 header('Location: form_bts0.php');

                $idconn=null;
            }

        }
    }
}





