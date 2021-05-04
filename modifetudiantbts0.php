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
									<li><a href="index.html" >ACCUEIL</a></li>
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
			<section class="cycle">
			<h1 id="fil">FICHE D'INSCRIPTION DU BTS</h1>
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
			<div class="row">
				<form class="form-horizontal col-lg-12 col-md-12 col-sm-12 col-xm-12" action="" method="POST" enctype="multipart/form-data">
				
					<div class="form-group">
						<legend><h2 class="op">IDENTIFICATION</h2></legend>
					</div>
					<!--
								<fieldset>
						<legend class="ind">Votre photo</legend>
						<div class="row">
							<div class="form-group">
								
								<div class="col-lg-10 col-md-10 col-sm-10 col-xm-10">
									<input type="file" class="form-control" name="fichier" accept="image/jpeg,image/png" id=""/>
									<input type="hidden" name="MAX_FILE_SIZE" value="2000000"/>
									
								</div>
							</div>
						</div>
						</fieldset>
					-->
						<?php 
                                
								include("connectionpdo.php");
								$idconn=connec('supdeco','myparam');

                            if(!isset($_POST['modif']))
                            {
								$id_etudiantbts=$_GET["id_etudiantbts"];

								$requete="SELECT * FROM etudiantbts,formationetudiantbts,cycle,filierebts,specialitebts
								 WHERE  etudiantbts.id_etudiantbts=formationetudiantbts.id_etudiantbts AND etudiantbts.id_cycle=cycle.id_cycle 
								 AND cycle.id_cycle= filierebts.id_cycle AND filierebts.id_filierebts=specialitebts.id_filierebts AND  etudiantbts.id_etudiantbts= :id";
								$req=$idconn->prepare($requete);
								$req->bindValue(":id",$id_etudiantbts,PDO::PARAM_INT);
                       			$req->execute();

								$ligne=$req->fetch();
                        ?>
					
						
				
								<fieldset>
									<div class="row">
										<div class="form-group">
											
												<label for="text" class="col-lg-1 col-md-1 col-sm-12 col-xm-12 ind">Nom:</label>
												<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
													<input type="text" class="form-control" name="nom" id="nom" value="<?=  strip_tags($ligne["nom"])   ?>">
												</div>
												<label for="text" class="col-lg-1 col-md-1 col-sm-12 col-xm-12 ind">Pr&eacute;nom:</label>
												<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
													<input type="text" class="form-control" name="prenom" id="prenom" value="<?= strip_tags($ligne["prenom"]) ?>">
												</div>
												<label for="text" class="col-lg-1 col-md-1 col-sm-12 col-xm-12 ind">Date de Naissance:</label>
												<div class="col-lg-2 col-md-2 col-sm-12 col-xm-12">
													<input type="date" class="form-control" name="date" id="date" value="<?= strip_tags($ligne["date_naissance"]) ?>">
												</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											
											<label for="text" class="col-lg-1 col-md-1 col-sm-12 col-xm-12 ind">Lieu:</label>
											<div class="col-lg-2 col-md-2 col-sm-12 col-xm-12">
												<input type="text" class="form-control" name="lieu" id="lieu" value="<?= strip_tags($ligne["lieu_naissance"]) ?>">
											</div>
										
											<label for="text" class="col-lg-1 col-md-1 col-sm-12 col-xm-12 ind">Situation familiale:</label>
											<div class="col-lg-2 col-md-2 col-sm-12 col-xm-12">
												<input type="text" class="form-control" name="situation" id="situation" value="<?= strip_tags($ligne["situation_familial"]) ?>">
											</div>
											<label for="text" class="col-lg-1 col-md-1 col-sm-2 col-xm-2 ind">Sexe:</label>
											<div class="col-lg-2 col-md-2 col-sm-12 col-xm-12">
												<input type="text" class="form-control" name="sexe" id="sexe" value="<?= strip_tags($ligne["sexe"])?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<label for="text" class="col-lg-1 col-md-1 col-sm-12 col-xm-12 ind">Adresse:</label>
											<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
												<input type="text" class="form-control"  name="adresse" id="adresse" value="<?= strip_tags($ligne["adresse"]) ?>">
											</div>
											<label for="text" class="col-lg-1 col-md-1 col-sm-12 col-xm-12 ind">Tel(etudiant):</label>
											<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
												<input type="number" class="form-control" name="teletu" id="teletu" value="<?= strip_tags($ligne["tel_etudiant"]) ?>">
											</div>
											<label for="text" class="col-lg-1 col-md-1 col-sm-12 col-xm-12 ind">Quartier:</label>
											<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
												<input type="text" class="form-control" name="quartier" id="quartier" value="<?= strip_tags($ligne["quartier"] ) ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<label for="text" class="col-lg-1 col-md-1 col-sm-12 col-xm-12 ind">Tel(parent):</label>
											<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
												<input type="number" class="form-control" name="telpar" id="telpar" value="<?= strip_tags($ligne["tel_parent"])  ?>">
											</div>
											<label for="text" class="col-lg-1 col-md-1 col-sm-12 col-xm-12 ind">R&eacute;gion d'origine:</label>
											<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
												<input type="text" class="form-control" name="regionori" id="regionori" value="<?= strip_tags($ligne["region_origine"])  ?>">
											</div>
											<label for="text" class="col-lg-1 col-md-1 col-sm-12 col-xm-12 ind">E-mail:</label>
											<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
												<input type="text" class="form-control" name="email" id="email" value="<?= strip_tags($ligne["email"])  ?>">
											</div>
										</div>
											
									</div>
								</fieldset>

					

					
					<legend><h2 class="op">PROFIL SCOLAIRE</h2></legend>
					</div><div class="form-group">
	
					<fieldset>
						<div class="row">
							<div class="form-group">
									<label for="text" class="col-lg-1 col-md-1 col-sm-12 col-xm-12 ind">Pays D&#39;origine du BAC:</label>
									<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
										<input type="text" class="form-control" name="originebac" id="originebac" value="<?= strip_tags($ligne["pays_origine_diplome"])  ?>">
									</div>
							
						
						
									<label for="text" class="col-lg-1 col-md-1 col-sm-12 col-xm-12 ind">Ann&eacute;e d&#39;obtention:</label>
									<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
										<input type="date" class="form-control" name="anneeobtention" id="anneeobtention" value="<?= strip_tags($ligne["annee_obtention"])  ?>">
									</div>
									<label for="text" class="col-lg-1 col-md-1 col-sm-12 col-xm-12 ind">Diplome préparé:</label>
									<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
										<input type="text" class="form-control" name="diplome" id="diplome" value="<?= strip_tags($ligne["diplome_preparer"])  ?>">
									</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label for="text" class="col-lg-4 col-md-4 col-sm-12 col-xm-12 ind">Nom Etablissement:</label>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xm-12">
									<input type="text" class="form-control" name="nometabli" id="nometabli" value="<?= strip_tags($ligne["nom_etablissement"])  ?>">
								</div>
								
								
							</div>
						</div>
					</fieldset>
					
					<div class="form-group">
						</legend><h2 class="op">CYCLES</h2><legend>
						<h3 id="ques">Dans quelle cycle,filiere et sp&eacute;cialit&eacute; souhaiterez vous , vous inscrire ?</h3>
					</div>
					<fieldset>
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-12 col-xm-12">
							<h4 class="fili">Nous proposons plusieurs cycles à savoir:</h4>
							</div>
						</div>
						<div class="row">	
							<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
							<h5 class="fili0">Brevet de technicien supérieur(BTS)</h5>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
                            <h5 class="fili0">Cycle professionnel</h5>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-12 col-xm-12">
                            <h5 class="fili0">Programme grande ecole</h5>
							</div>
							
							<div class="col-lg-2 col-md-2 col-sm-12 col-xm-12">
                            <h5 class="fili0">English Bachelor</h5>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-12 col-xm-12">
                            <h5 class="fili0">DBA</h5>
							</div>
						</div>
						<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-2 col-xm-2">
									<h4 class="fili">modifier votre cycle:</h4>
								</div>

							<div class="col-lg-4 col-md-4 col-sm-4 col-xm-4">
							<input type="text" class="form-control" name="cycle" id="cycle" value="<?= strip_tags($ligne["nom_cycle"])  ?>">
							</div>	
						</div>	
					</fieldset>	
					<fieldset>
						
							<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-12 col-xm-12">
									<h4 class="fili">Nous proposons plusieurs filieres à savoir:</h4>
									</div>
							</div>
							<div class="row">	
									<div class="col-lg-4 col-md-4 col-sm-12 col-xm-12">
									<h5 class="fili0">COMMERCE-VENTE</h5>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-12 col-xm-12">
									<h5 class="fili0">GESTION</h5>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-12 col-xm-12">
									<h5 class="fili0">CARRIERES JURIDIQUES</h5>
									</div>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-2 col-xm-2">
									<h4 class="fili">modifier votre filiere:</h4>
								</div>

							<div class="col-lg-4 col-md-4 col-sm-4 col-xm-4">
							<input type="text" class="form-control" name="filiere" id="filiere" value="<?= strip_tags($ligne["nom_filierebts"])  ?>">
							</div>	
						</div>	
									
						

					</fieldset>
					<fieldset>
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-12 col-xm-12">
							<h4 class="fili">Nous proposons plusieurs spécialités à savoir:</h4>
							</div>
						</div>
						<div class="row">	
							<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
							<h5 class="fili0">COMMERCE INTERNATIONALE</h5>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
                            <h5 class="fili0">MARKETING-COMMERCE-VENTE</h5>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
                            <h5 class="fili0">BANQUE ET FINANCE</h5>
							</div>
							
							<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
                            <h5 class="fili0">COMPTABILITE ET GESTION DES ENTREPRISES</h5>
							</div>
						</div>
						<div class="row">

							<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
                            <h5 class="fili0">GESTION DES RESSOURCES HUMAINES</h5>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
                            <h5 class="fili0">GESTION LOGISTIQUE ET TRANSPORT</h5>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
                            <h5 class="fili0">GESTION FISCALE</h5>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
                            <h5 class="fili0">DOUANE ET TRANSIT</h5>
							</div>
						</div>
						<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-2 col-xm-2">
									<h4 class="fili">modifier votre specialité:</h4>
								</div>

							<div class="col-lg-4 col-md-4 col-sm-4 col-xm-4">
							<input type="text" class="form-control" name="specialite" id="specialite" value="<?= strip_tags($ligne["nom_specialitebts"])  ?>">
							</div>	
						</div>	
					</fieldset>	
					</fieldset>
									<div class="form-group">
										<div class="col-lg-4 col-md-4 col-sm-12 col-xm-12 ">
										<button class="pull-right btn btn-primary" name="modif" type="submit">ENVOYER</button>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-12 col-xm-12 ">
										<input class="pull-right btn btn-primary" name="modif" type="reset" value="EFFACER"/>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-12 col-xm-12 ">
										<a class="pull-right btn btn-primary" href="index.html">ACCUEIL</a>
										</div>
									</div>
							
											
					</fieldset>
					
				<?php } elseif(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['lieu']) && isset($_POST['situation']))
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

                            // table cycle
                            //$cycles=$_POST['cycle'];
                            //foreach($cycles as $valeur)
                            //{
                                $nom_cycle=$idconn->quote($_POST['cycle']);
                            //}
                            // table filiere
                            //$filieres=$_POST['filiere'];
                            //foreach($filieres as $valeur)
                           // {
                                $nom_filierebts=$idconn->quote($_POST['filiere']);
                            //}

                             // table specialite
                            // $specialites=$_POST['specialite'];
                             //foreach($specialites as $valeur)
                             //{
                                 $nom_specialitebts=$idconn->quote($_POST['specialite']);
                             //}
                            $etudiantsbts=$_GET['id_etudiantbts'];

                            //Requete SQL

                            $requete="UPDATE etudiantbts INNER JOIN formationetudiantbts
                                     INNER JOIN    cycle
									 INNER JOIN    filierebts
									 INNER JOIN    specialitebts
                                    ON 
                                    etudiantbts.id_etudiantbts=formationetudiantbts.id_etudiantbts AND etudiantbts.id_cycle = cycle.id_cycle 
									AND cycle.id_cycle = filierebts.id_cycle AND filierebts.id_filierebts = specialitebts.id_filierebts
                                    SET
                                     etudiantbts.nom=$nom,
                                     etudiantbts.prenom=$prenom,
                                     etudiantbts.date_naissance=$date,
                                    etudiantbts.lieu_naissance=$lieu,
                                    etudiantbts.situation_familial=$situation,
                                    etudiantbts.sexe=$sexe,
                                    etudiantbts.adresse=$adresse,
                                    etudiantbts.tel_etudiant=$teletu,
                                    etudiantbts.quartier=$quartier,
                                    etudiantbts.tel_parent=$telpar,
                                    etudiantbts.region_origine=$regionori,
                                    etudiantbts.email=$email,
                                    formationetudiantbts.annee_obtention=$anneeobtention,
                                    formationetudiantbts.diplome_preparer=$diplome,
                                    formationetudiantbts.pays_origine_diplome=$originebac,
                                    formationetudiantbts.nom_etablissement=$nometabli,
									cycle.nom_cycle=$nom_cycle,
                                    filierebts.nom_filierebts=$nom_filierebts,
                                    specialitebts.nom_specialitebts=$nom_specialitebts

                                    WHERE etudiantbts.id_etudiantbts=$etudiantsbts";
                            
                            $result=$idconn->exec($requete);

                            if($result != 1)
                                {
                                    echo "<script type=\"texr/javascript\">
                                        alert('Erreur:".$idconn->errorCode()."')</script>";
                                }
                                else
                                {
                                   header('Location:form_bts.html');
                                    //echo "<h3>Vos modifications sont enregistées</h3>";
                                }

                                $idconn=null;

                     }
                
                ?>
					
				</form>
			</div>
			</section>
		</div>
			
	</body>
</html>