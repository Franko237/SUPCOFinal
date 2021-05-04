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
		<div class = "container cont">
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
			
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
				     <p id="info">
						BP: 11151 Yde-Cameroun Tel:(237) 242 033 731<br/>
						Email: contact@supdeco-yaounde.com <br/>
						Ann&eacute;e Acad&eacute;mique : 2018 - 2019 <br/><br/>
						Groupe ESC-YAOUNDE
					 </p>
				</div>
			</div>
            <fieldset>
                <legend><h2 class="op">Liste des Etudiants Inscrit en cycle BTS</h2></legend>
            </fieldset>
            <?php
                    include("connectionpdo.php");
                   if($idconn=connec('supdeco','myparam'))
                   {
					if(isset($_GET['page']) && !empty($_GET['page']))
					{
						$currentPage=(int) strip_tags($_GET['page']);
					}
					else{
						$currentPage=1;
					}
					$perpage=4;

					if($currentPage <= 0)
					{
						throw new Exception('Numéro de page invalide');
					}

					$count= $idconn->query('SELECT COUNT(id_etudiantbts) FROM etudiantbts')->fetch(PDO::FETCH_NUM)[0];
					$pages = ceil($count/$perpage);
					if($currentPage > $pages)
					{
						throw new Exception('Cette page n\'existe pas');
					}

					$premier=($currentPage*$perpage)-$perpage;

                       $requete="SELECT * FROM etudiantbts LIMIT :premier,:perpage";
					   $result=$idconn->prepare($requete);
					   $result->bindValue(':premier',$premier,PDO::PARAM_INT);
					   $result->bindValue(':perpage',$perpage,PDO::PARAM_INT);
					   $result->execute();
                       if(!$result)
                            {
                                $mes_erreur=$idconn->errorInfo();
                                echo "Lecture Impossible, code".$idconn->errorCode().$mes_erreur[2];
                            }
                       else
                            {
                                $nbetudiantbts=$result->rowCount();
                                echo "<p id=\"nb\">IL y a $count etudiants inscrits en filière bts</p><br><br>";
                                echo "<div class=\"table-responsive-md\">";
                                echo "<table class=\"table table-striped\" border=\"2\">";
                                echo "<thead><tr><th id=\"he\">NOM</th><th id=\"he\">PRENOM</th><th id=\"he\">Date Naissance</th><th id=\"he\">SEXE</th><th id=\"he\">Numéro téléphone</th><th id=\"he\"></th></tr></thead>";
                                $ligne=$result->fetchObject();

                                echo "<tbody><tr>";
                                do{
                                    echo "<td>".$ligne->nom."</td><td>".$ligne->prenom."</td><td>".$ligne->date_naissance."</td><td>".$ligne->sexe."</td><td>".$ligne->tel_etudiant."</td>
                                    <td><div class=\"btn-group\" role=\"group\"><div id=\"inli\"><button class=\"btn btn-success \" ><a href=\"detailsetudiantbts0.php?id_etudiantbts=".$ligne->id_etudiantbts."\">Detail</a></button>
                                    <button class=\"btn btn-primary-outline \" ><a href=\"modifetudiantbts0.php?id_etudiantbts=".$ligne->id_etudiantbts."\" >Modifier</a></button>
                                    <button class=\"btn btn-info-outline \" ><a href=\"imprimeretudiantbts.php?id_etudiantbts=".$ligne->id_etudiantbts."\" >Imprimer</a></button></div></div></td></tr>";
                                }
                                while($ligne=$result->fetchObject());
                                echo "</tbody></table>";
                                echo "</div>";

								echo "<ul class=\"pagination\" >";

								//lien vers la page précédente
								echo "<li class=\"page-item ($currentPage==1)?\"disabled\":\"\"\">";
								echo "<a href=\"listeetudiantbts.php?page=$currentPage-1\" class=\"page-link\"><button class=\"btn btn-success \">Précédente</button></a>";
								echo "</li>";
								for($page=1;$page<=$pages;$page++){
										//lien vers chacune des pages
										echo "<li class=\"page-item ($currentPage==$page)?\"active\":\"\"\">";
										echo "<a href=\"listeetudiantbts.php?page=$page\" class=\"page-link\"><button class=\"btn btn-success \">$page</button></a>";
										echo "</li>";  
								}
				
								//lien vers la page suivante
								echo "<li class=\"page-item ($currentPage=$pages)?\"disabled\":\"\"\">";
								echo "<a href=\"listeetudiantbts.php?page=$currentPage+1\" class=\"page-link\"><button class=\"btn btn-success \">Suivante</button></a>";
								echo "</li>";
								echo "</ul>";
                
                            }
                   }
            ?>
    
</body>
</html>