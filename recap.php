<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

<head>
		<meta http-equiv= "Content type" content = "text/html; charset= utf-8"/>
		<title> SUP DE CO YAOUNDE</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/stylee.css" />
        
</head>
<body>
    <div class="container-fluid">

        <div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 " >
						<div class="row ead">
							<div class="col-lg-5 col-md-5 col-sm-5 col-xm-5 " >
						
								<h6 id="ead1">Groupe ESC-YAOUNDE </h6>
							</div>

							<div class="col-lg-5 col-md-5 col-sm-5 col-xm-5 " >
								<h6 id="ead3">Email: contact@supdecoyaounde.com </h6>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xm-2 " >
								<h6 id="ead3">Tel:(237) 242 033 731 </h6>
							</div>
						</div>
					</div>
		    </div>
				<header class="header">
						<div id="titre_principal">
							<img src="img/site-logo.png" alt="logo_sup_co" id="logo" />
							<div class="topbar">
							<nav>
								<ul>
									<li><a href="index.php" >ACCUEIL</a></li>
									<!--<li><a href="#" id="ac0">SUP DE CO-YAOUNDE</a></li>-->
										<!--<ul>
											<li><a href="#">Mot Du Directeur Général</a></li>
											<li><a href="#">Personnel D'encadrement</a></li>
											<li><a href="#">Nos Principaux Partenaires</a></li>
										</ul>-->
									<li><a href="mot.html" >SUP DE CO</a></li>
									
									<li class="menu-html"><a href="cycle1.html">NOS PROGRAMMES</a>
										<ul class="submenu">
											<li><a href="cycle1.html">CYCLE BTS</a></li>
											<li><a href="cycle2.html">CYCLE PROFESSIONNEL</a></li>
											<li><a href="cycle3.html">Programme Grande école</a></li>
											<li><a href="cycle4.html">ENGLISH BACHELOR</a></li>
											<li><a href="cycle5.html">CYCLE DBA</a></li>
											<li><a href="listeetudiantbts.php">Liste etudiant BTS</a></li>
										</ul>
									</li>
									<li><a href="#">ACTUALIT&Eacute;S</a></li>
									<li><a href="contact.html">CONTACT</a></li>
								</ul>
							</nav>
						</div>
						 </div>
					
				
            </header>
            <br>
            <br>
            <br>

            
            <p id="recap">Liste des inscriptions au niveau BTS</p>

            <?php 
                    include("connectionpdo.php");
                    $idconn=connec('supdeco','myparam');
                

                    $requete="select nom,prenom,date_naissance,sexe,tel_etudiant  from etudiantbts";
                    $result=$idconn->query($requete);
                
                if(!$result)
                {
                    $mess_erreur=$idconn->errorInfo();
                    echo "Lecture imposible, code".$idconn->errorCode().$mess_erreur[2];
                }
                else
                {
                    $ligne=$result->fetchObject();

                    //Affichage des titres du tableau
                    echo "<table class=\"table table-hover\"><thead> <tr>";
                    foreach($ligne as $nomcol => $val)
                    {
                        echo "<th scope=\"col\">".$nomcol."</th>";
                    }
                    echo "</thead></tr>";

                    //Affichage des valeurs du tableau
                    echo "<tr>";
                    do
                    {
                    
                        echo "<td>".$ligne->nom."</td><td>".$ligne->prenom."</td><td>".$ligne->date_naissance.
                        "</td><td>".$ligne->sexe."</td><td>".$ligne->tel_etudiant."</td></tr>";
                    }
                    while($ligne = $result->fetchObject());
                    echo "</table>";
                    $result->closeCursor();
                    $idconn=null;
                }
            ?>
    </div>

</body>
</html>