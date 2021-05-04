<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUP DE CO YAOUNDE</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/stylee.css" />
</head>
<body>
    <?php
        include("connectionpdo.php");
        $idconn=connec('supdeco','myparam');

        if(!isset($_POST['modif']))
        {
            $etudiantsbts=$idconn->quote($_GET['id_etudiantbts']);
             
            //Requete SQL
            $requete= "SELECT * FROM etudiantbts,formationetudiantbtsetcyclepro,cycle,
            filierebts,specialitebts WHERE etudiantbts.id_etudiantbts=formationetudiantbtsetcyclepro.id_etudiantbts
             AND etudiantbts.id_cycle=cycle.id_cycle AND cycle.id_cycle=filierebts.id_cycle 
             AND filierebts.id_filierebts=specialitebts.id_specialitebts AND etudiantbts.id_etudiantbts=$etudiantsbts LIMIT 1";

             $result=$idconn->query($requete);
             $nbligne=$result->rowCount();
             $ligne=$result->fetchObject();


             //Création du formulaire avec les données existantes

             echo "<form action=\"".$_SERVER['PHP_SELF']."\" method=
             \"POST\" enctype=\"application/x-www-form-urlencoded\">";
             echo "<fieldset>";
            echo "<legend><h2 class=\"op\">Identification</h2></legend>";

            
                    do {

                        echo "<fieldset>";
                        echo "<div class=\"row\"><div class=\"form-group\">";
                        echo "<label for=\"text\" class=\"col-lg-1 col-md-1 col-sm-12 col-xm-12 ind\">Nom:</label>";
                        echo "  <div class=\"col-lg-3 col-md-3 col-sm-12 col-xm-12\">
                                <input type=\"text\" class=\"form-control\" name=\"nom\" id=\"nom\" value=\"".htmlentities($ligne->nom)."\">
                                </div>";
                        
                        echo "<label for=\"text\" class=\"col-lg-1 col-md-1 col-sm-12 col-xm-12 ind\">Pr&eacute;nom:</label>
                                <div class=\"col-lg-3 col-md-3 col-sm-12 col-xm-12\">
                                <input type=\"text\" class=\"form-control\" name=\"prenom\" id=\"prenom\" value=\"".htmlentities($ligne->prenom)."\">
                                </div>";
                        echo "<label for=\"text\" class=\"col-lg-1 col-md-1 col-sm-12 col-xm-12 ind\">Date de Naissance:</label>
                                <div class=\"col-lg-3 col-md-3 col-sm-12 col-xm-12\">
                                <input type=\"date\" class=\"form-control\" name=\"date\" id=\"date\" value=\"".$ligne->date_naissance."\">
                                </div></div></div>";
            
                        echo "<div class=\"row\"><div class=\"form-group\">";        
                        echo "<label for=\"text\" class=\"col-lg-1 col-md-1 col-sm-12 col-xm-12 ind\">Lieu:</label>
                                <div class=\"col-lg-2 col-md-2 col-sm-12 col-xm-12\">
                                 <input type=\"text\" class=\"form-control\" name=\"lieu\" id=\"lieu\" value=\"".htmlentities($ligne->lieu_naissance)."\">
                                </div>";
                        echo "<label for=\"text\" class=\"col-lg-1 col-md-1 col-sm-12 col-xm-12 ind\">Situation familiale:</label>
                             <div class=\"col-lg-2 col-md-2 col-sm-12 col-xm-12\">
                            <input type=\"text\" class=\"form-control\" name=\"situation\" id=\"situation\"  value=\"".$ligne->situation_familial."\">
                             </div>";
                        echo "<label for=\"text\" class=\"col-lg-1 col-md-1 col-sm-2 col-xm-2 ind\">Sexe:</label>
                                 <div class=\"col-lg-2 col-md-2 col-sm-12 col-xm-12\">
                                <input type=\"text\" class=\"form-control\" name=\"sexe\" id=\"sexe\" value=\"".htmlentities($ligne->sexe)."\">
                                </div></div></div>";
                        echo "<div class=\"row\"><div class=\"form-group\">";
                        echo "<label for=\"text\" class=\"col-lg-1 col-md-1 col-sm-12 col-xm-12 ind\">Adresse:</label>
                            <div class=\"col-lg-3 col-md-3 col-sm-12 col-xm-12\">
                            <input type=\"text\" class=\"form-control\"  name=\"adresse\" id=\"adresse\"  value=\"".htmlentities($ligne->adresse)."\">
                            </div>";
                        echo "<label for=\"text\" class=\"col-lg-1 col-md-1 col-sm-12 col-xm-12 ind\">Tel(etudiant):</label>
                            <div class=\"col-lg-3 col-md-3 col-sm-12 col-xm-12\">
                            <input type=\"number\" class=\"form-control\" name=\"teletu\" id=\"teletu\" value=\"$ligne->tel_etudiant\">
                            </div>";
                        echo "<label for=\"text\" class=\"col-lg-1 col-md-1 col-sm-12 col-xm-12 ind\">Quartier:</label>
                                <div class=\"col-lg-3 col-md-3 col-sm-12 col-xm-12\">
                                <input type=\"text\" class=\"form-control\" name=\"quartier\" id=\"quartier\" value=\"".htmlentities($ligne->quartier)."\">
                             </div></div></div>";
                        echo "<div class=\"row\"><div class=\"form-group\">";
                        echo "<label for=\"text\" class=\"col-lg-1 col-md-1 col-sm-12 col-xm-12 ind\">Tel(parent):</label>
                             <div class=\"col-lg-3 col-md-3 col-sm-12 col-xm-12\">
                            <input type=\"number\" class=\"form-control\" name=\"telpar\" id=\"telpar\" value=\"$ligne->tel_parent\">
                            </div>";
                        echo "<label for=\"text\" class=\"col-lg-1 col-md-1 col-sm-12 col-xm-12 ind\">R&eacute;gion d'origine:</label>
                                <div class=\"col-lg-3 col-md-3 col-sm-12 col-xm-12\">
                                <input type=\"text\" class=\"form-control\" name=\"regionori\" id=\"regionori\"  value=\"".htmlentities($ligne->region_origine)."\">
                                </div>";
                        echo "<label for=\"text\" class=\"col-lg-1 col-md-1 col-sm-12 col-xm-12 ind\">E-mail:</label>
                                <div class=\"col-lg-3 col-md-3 col-sm-12 col-xm-12\">
                                 <input type=\"text\" class=\"form-control\" name=\"email\" id=\"email\" value=\"".htmlentities($ligne->email)."\">
                                 </div></div></div></fieldset>";
                        echo "<legend><h2 class=\"op\">PROFIL SCOLAIRE</h2></legend>
                                 </div><div class=\"form-group\">
                                 <fieldset>";
                        echo "<div class=\"row\"><div class=\"form-group\">
                                <label for=\"text\" class=\"col-lg-1 col-md-1 col-sm-12 col-xm-12 ind\">Pays D&#39;origine du BAC:</label>
                                <div class=\"col-lg-3 col-md-3 col-sm-12 col-xm-12\">
                                    <input type=\"text\" class=\"form-control\" name=\"originebac\" id=\"originebac\" value=\"".htmlentities($ligne->pays_origine_diplome)."\">
                                </div>";
                        echo "<label for=\"text\" class=\"col-lg-1 col-md-1 col-sm-12 col-xm-12 ind\">Ann&eacute;e d&#39;obtention:</label>
                                <div class=\"col-lg-3 col-md-3 col-sm-12 col-xm-12\">
                                <input type=\"date\" class=\"form-control\" name=\"anneeobtention\" id=\"anneeobtention\" value=\"$ligne->annee_obtention\">
                                </div>";
                        echo "<label for=\"text\" class=\"col-lg-1 col-md-1 col-sm-12 col-xm-12 ind\">Diplome préparé:</label>
                                <div class=\"col-lg-3 col-md-3 col-sm-12 col-xm-12\">
                                <input type=\"text\" class=\"form-control\" name=\"diplome\" id=\"diplome\" value=\"".htmlentities($ligne->diplome_preparer)."\">
                                </div></div></div>";
                        echo "<div class=\"row\"><div class=\"form-group\">
                            <label for=\"text\" class=\"col-lg-4 col-md-4 col-sm-12 col-xm-12 ind\">Nom Etablissement:</label>
                            <div class=\"col-lg-6 col-md-6 col-sm-12 col-xm-12\">
                                <input type=\"text\" class=\"form-control\" name=\"nometabli\" id=\"nometabli\" value=\"".htmlentities($ligne->nom_etablissement)."\">
                            </div></div></div></fieldset>";
                    
                
            
                    
                    

                        
           
          echo "<div class=\"form-group\"></legend><h2 class=\"op\">CYCLES</h2><legend>
                    <h3 id=\"ques\">Dans quelle cycle,filiere et sp&eacute;cialit&eacute; souhaiterez vous , vous inscrire ?</h3>
                    </div>
                    <fieldset>";
            echo "<div class=\"row\"><div class=\"col-lg-2 col-md-2 col-sm-2 col-xm-2\">
                    <h4 class=\"fili\">CYCLES</h4>
                    </div>";
            echo "<div class=\"col-lg-4 col-md-4 col-sm-4 col-xm-4\">
                    <select name=\"cycle[]\" id=\"\" size=\"1\">
                    <option value=\"".htmlentities($ligne->nom_cycle)."\">Brevet de technicien supérieur(BTS)</option>
                    </select> 
                    </div>";
            echo "<div class=\"col-lg-2 col-md-2 col-sm-2 col-xm-2\">
                    <h4 class=\"fili\">FILIERES</h4>
                    </div>";
            echo "<div class=\"col-lg-4 col-md-4 col-sm-4 col-xm-4\">
                    <select name=\"filiere[]\" id=\"\" size=\"1\">
                    <option value=\"".$ligne->nom_filierebts."\"
                    if($ligne->nom_filierebts==COMMERCE-VENTE){ echo 'selected';}>".$ligne->nom_filierebts."</option>
                    <option value=\"".$ligne->nom_filierebts."\"
                    if($ligne->nom_filierebts==GESTION){ echo 'selected';}>".$ligne->nom_filierebts."</option>
                    <option value=\"".$ligne->nom_filierebts."\"
                    if($ligne->nom_filierebts==CARRIERES JURIDIQUES){ echo 'selected';}>".$ligne->nom_filierebts."</option>
                    </select></div></div>";
            echo "<div class=\"row\"><div class=\"col-lg-4 col-md-4 col-sm-4 col-xm-4\">
                 <h4 class=\"fili\">SPECIALITES</h4>
                </div>";
            echo "<div class=\"col-lg-6 col-md-6 col-sm-6 col-xm-6\">
                    <select name=\"specialite[]\" id=\"\" size=\"1\">
                    <option value=\"COMMERCE INTERNATIONALE\">COMMERCE INTERNATIONALE</option>
                    <option value=\"MARKETING-COMMERCE-VENTE\">MARKETING-COMMERCE-VENTE</option>
                    <option value=\"BANQUE ET FINANCE\">BANQUE ET FINANCE</option>
                    <option value=\"COMPTABILITE ET GESTION DES ENTREPRISES\">COMPTABILITE ET GESTION DES ENTREPRISES</option>
                    <option value=\"GESTION DES RESSOURCES HUMAINES\">GESTION DES RESSOURCES HUMAINES</option>
                    <option value=\"GESTION LOGISTIQUE ET TRANSPORT\">GESTION LOGISTIQUE ET TRANSPORT</option>
                    <option value=\"GESTION FISCALE\">GESTION FISCALE</option>
                    <option value=\"DOUANE ET TRANSIT\">DOUANE ET TRANSIT</option>
                        
                    </select></div></div></fieldset>";

            echo "</fieldset>
                    <div class=\"form-group\">
                        <div class=\"col-lg-6 col-md-6 col-sm-12 col-xm-12 \">
                        <button class=\"pull-right btn btn-primary\" type=\"submit\" name=\"modif\">ENREGISTRER</button>
                        </div>
                        <div class=\"col-lg-6 col-md-6 col-sm-12 col-xm-12 \">
                        <a class=\"pull-right btn btn-primary\" href=\"index.html\">ACCUEIL</a>
                        </div>
                    </div>
                    </fieldset>"; 
                echo "</form>";


                } while( $ligne=$result->fetchObject());

                    $result->closeCursor();
                    $idconn=null;
    }
    elseif(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['lieu']) && isset($_POST['situation']))
    {
            //table etudiantbts
        $nom=$idconn->quote($_POST['nom']);
        $prenom=$idconn->quote($_POST['prenom']);
        $date=$idconn->quote($_POST['date']);
        $lieu=$idconn->quote($_POST['lieu']);
        $situation=$idconn->quote($_POST['situation']);
        $sexe=$idconn->quote($_POST['sexe']);
        $adresse=$idconn->quote($_POST['adresse']);
        $teletu=$idconn->quote($_POST['teletu']);
        $quartier=$idconn->quote($_POST['quartier']);
        $telpar=$idconn->quote($_POST['telpar']);
        $regionori=$idconn->quote($_POST['regionori']);
        $email=$idconn->quote($_POST['email']);

        //table formationetudiantbts
        $originebac=$idconn->quote($_POST['originebac']);
        $anneeobtention=$idconn->quote($_POST['anneeobtention']);
        $diplome=$idconn->quote($_POST['diplome']);
        $originebac=$idconn->quote($_POST['originebac']);
        $nometabli=$idconn->quote($_POST['nometabli']);
        $etudiantsbts=$_GET['id_etudiantbts'];

        //Requete SQL

        $requete="UPDATE etudiantbts INNER JOIN formationetudiantbts
                ON etudiantbts.id_etudiantbts=formationetudiantbts.id_etudiantbts
                SET etudiantbts.nom=$nom,etudiantbts.prenom=$prenom,etudiantbts.date_naissance=$date
                etudiantbts.lieu_naissance=$lieu,etudiantbts.situation_familial=$situation,
                etudiantbts.sexe=$sexe,etudiantbts.adresse=$adresse,etudiantbts.tel_etudiant=$teletu
                etudiantbts.quartier=$quatier,etudiantbts.tel_parent=$telpar,etudiantbts.region_origine=$regionori
                etudiantbts.email=$email,formationetudiantbts.annee_obtention=$anneeobtention
                formationetudiantbts.diplome_preparer=$diplome,
                formationetudiantbts.pays_origine_diplome=$originebac,
                formationetudiantbts.nom_etablissement=$nometabli
                WHERE id_etudiantbts=$etudiantsbts";
        
        $result=$idconn->exec($requete);

        if($result != 1)
            {
                echo "<script type=\"texr/javascript\">
                    alert('Erreur:".$idconn->errorCode()."')</script>";
            }
            else
            {
                echo "<h3>Vos modifications sont enregistées</h3>";
            }

            $idconn=null;




        }
    ?>
</body>
</html>