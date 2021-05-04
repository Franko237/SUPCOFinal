<?php
        if(session_status()== PHP_SESSION_NONE)
		{
			session_start();
		}
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

	<head>
		<meta http-equiv= "Content type" content = "text/html; charset= utf-8"/>
		<title> SUP DE CO YAOUNDE</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/stylee.css" />
		
	</head>
	
	<!--Contenu du site -->
	<body>
		<div class = "container-fluid ">
			<!--header-->
			
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

									<ul>
											<?php if(!isset($_SESSION["user"])){ ?>
											<li><a href="users_inscription.php" id="ac44" >INSCRIPTION</a></li>
											<li><a href="connection.php" id="ac5" >CONNECTION</a></li>
											<?php }else{ ?>
											<li><a href="deconnection.php" id="ac6" >DECONNECTION</a></li>
											<?php } ?>
											<?php if(is_array($_SESSION["user"]["roles"]) && 
											in_array("ROLE_ADMIN",$_SESSION["user"]["roles"])){ ?>
											
											<li><a href="list_bts.php" id="ac7" >Tableau de bord</a></li>
											<?php } ?>
									</ul>
								</nav>
							</div>
							   <?php //var_dump($_SESSION); ?>
									
						
						 </div>
					
				
			</header>
			<!--End header-->
			
            <h3 id="pro">Profil de <?= $_SESSION["user"]["username"] ?></h3> 
			<!--Bannière-->
			<section class="banner">
			<div class="ban">
				<!--<marquee>-->
				<img src="img/2.jpg" class="bannieresit" alt="bannière du site" />
				<!--<img src="img/1.jpg" alt=""bannière du site/>-->
				<!--</marquee>-->
			</div>
           
			<div class="inner-banner">
					  <h1>Bienvenu sur le site de SUP DE CO YAOUNDE</h1>
					  <a class="btn btn-custom" href="contact.html">CONTACTER NOUS!</a>
			</div>
			</section>
			<!--End bannière-->
			<!--A propos-->
			<section class="about">
				<div class="row">
					<div class="col-lg-12">
						<h2 id="cycle">NOS PROGRAMMES</h2>
							<div class="row span">
							   <div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
								 <a class="btn btn-custom" href="cycle1.html">	<img src="img/bts.jpg" alt="BTS" id="bt"/></a>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xm-12 span5">
								 <a class="btn btn-custom" href="cycle2.html">	<img src="img/lipro2.jpg" alt="LIPRO" id="lip"/></a>
								</div>
								<div class="col-lg-4 col-lg-offset-1 col-md-4 col-sm-12 col-xm-12 span3">
								 <a class="btn btn-custom" href="cycle3.html"><img src="img/mba.jpg" alt="MBA" id="mb"/></a>
								</div>
							</div>
							<div class="row span">
							   <div class="col-lg-4 col-md-4 col-sm-12 col-xm-12">
								 <a class="btn btn-custom" href="cycle4.html">	<img src="img/bapf.jpg" alt="BTS" id="bapf"/></a>
								</div>
								<div class="col-lg-offset-2 col-lg-5 col-md-4 col-sm-12 col-xm-12 span5">
								 <a class="btn btn-custom" href="cycle5.html">	<img src="img/dbapf.jpg" alt="LIPRO" id="dbapf"/></a>
								</div>
								
							</div>
							<!--<div class="row">
								<marquee><h1 id="sup">SUP DE CO - YAOUNDE</h1></marquee>
								<div class="col-lg-6"><img src="img/home-small.jpg" alt="image_sup_de_co" id="supco"/></div>
								<aside class=" col-lg-6">
								<h3 id="des">Description de l'ecole</h3>
								<p id="pa">Universite international de commerce SUP DE CO est une prestigieuse ecole<br/>
								   qui possedent de nombreuses filières professionnel grantissant une meilleur insertion<br/>
								   sociaux professionnel.
								</p>
								</aside>
							</div>-->
					</div>
				</div>
			</section>
			<!--<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
					<img src="img/1.jpg" alt="image_sup_de_co" id="in"/>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
					<a href="mot.html" class="anc"><h3 id="ine">Mot Du Directeur G&eacute;n&eacute;ral</h3></a>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
					<a href="per.html" class="anc"><h4 id="ine1">Personnel D&#39;encadrement</h4></a>
				</div>
			</div>-->
			
			<!--A propos-->
			
			<!--portfolio-->
			<!--<section class="portfolio">
				<div class="row">
					<marquee><h1 id="fil">NOS FILIERES</h1></marquee>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12 table-responsive">
						
						<table class="table table-bordered table-striped table-condensed">
							<caption>
								<h4 id="li">Licence et Master 1 et 2</h4>
							</caption>
							
							<tbody id="file">
								<tr>
									<td>Administration des entreprises</td>
									<td>Comptabilité, Controle Audit</td>
								</tr>
								<tr>
									<td>Finance Comptabilité</td>
									<td>Gestion des établissements Financiers</td>
								</tr>
								<tr>
									<td>Gestion des ressources humaines</td>
									<td>Gestion Logistique et Transport</td>
								</tr>
								<tr>
									<td>Managment des opérations de commerce</td>
									<td>Marketing Manager Opérationnel</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12 table-responsive">
						
						<table class="table table-bordered table-striped table-condensed">
							<caption>
								<h4 id="spe1">Specialites du cycle BTS</h4>
							</caption>
							
							<tbody id="file">
								<tr>
									<td>Gestion des ressources humaines</td>
									<td>Marketing-Commerce-Vente</td>
									<td>Douane et transit</td>
								</tr>
								<tr>
									<td>Banque Finance</td>
									<td>Commerce International</td>
								</tr>
								<tr>
									<td>Comptabilité et gestion des Entreprises</td>
									<td>Gestion Logistique et Transport</td>
								</tr>
								<tr>
									<td>Génie logiciel</td>
									<td>Gestion Fiscale</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-12 col-xm-12 table-responsive">
						<table class="table table-bordered table-striped table-condensed">
							<caption>
								<h4 id="spe2">Specialites du MBA Francophone</h4>
							</caption>
							
							<tbody id="file">
								<tr>
									<td>Marketing et vente</td>
									<td>Finance</td>
									<td>Finance/Controle de Gestion</td>
								</tr>
								<tr>
									<td>Marketing et distribution</td>
									<td>Gestion des ressources humaines</td>
								</tr>
								<tr>
									<td>Comptabilité Controle Audit</td>
									<td>Audit et Controle interne</td>
								</tr>
								<tr>
									<td>Marketing et Publicité</td>
						
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-12 col-xm-12 table-responsive">
						<table class="table table-bordered table-striped table-condensed">
							<caption>
								<h4 id="spe3">Specialites du MBA Anglophone</h4>
							</caption>
							
							<tbody id="file">
								<tr>
									<td>Marketing</td>
									<td>Finance</td>
									<td>International commerce</td>
								</tr>
								
							</tbody>
						</table>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-12 col-xm-12 table-responsive">
						<table class="table table-bordered table-striped table-condensed">
							<caption>
								<h4 id="spe4">Specialites du DBA</h4>
							</caption>
							<thead>
								<tr>
									<th>Specialites du  DBA</th>
								</tr>
							</thead>
							<tbody id="file">
								<tr>
									<td>A venir</td>
									 
								</tr>
								
							</tbody>
						</table>
					</div>
				</div>
				
			</section>-->
			<!--End portfolio-->
			
			<!--footer-->
			<!--<div class="row part">
			<h1 id="part">TUTELLE ACADEMIQUE</h1>
			<div class = "col-lg-12 col-md-12 col-sm-12 col-xm-12 par">
						<a href="https://www.univ-yaounde2.org/" title="lien vers uy2"><img src="img/uy2.png" alt="image_partenaire"/></a>
					</div>
			</div>-->
			<div class="row part01">
					<h2 id="part1">NOS PRINCIPAUX PARTENAIRES</h2>
					<div class = "col-lg-2 col-md-2 col-sm-12 col-xm-12 par">
						<a href="https://www.univ-yaounde2.org/" title="lien vers uy2"><img src="img/uy2.jpg" alt="image_partenaire"/></a>
					</div>
					<div class = "col-lg-2 col-md-2 col-sm-12 col-xm-12 par">
						<a href="https://www.esc-clermont.fr/en/" title="lien vers uy2"><img src="img/clermont.png" alt="image_partenaire"/></a>
					</div>
					<div class = "col-lg-2 col-md-2 col-sm-12 col-xm-12 par">
						<a href="https://www.studialisedu.net/" title="lien vers uy2"><img src="img/studialis.jpg" alt="image_partenaire"/></a>
					</div>
					<div class = "col-lg-2 col-md-2 col-sm-12 col-xm-12 par">
							<a href="https://international.iscparis.com/" title="lien vers uy2"><img src="img/isc.jpg" alt="image_partenaire"/></a>
					</div>
					<div class = "col-lg-2 col-md-2 col-sm-12 col-xm-12 par">
							<a href="http://www.ieam-paris.fr/index.php/show-86.html" title="lien vers uy2"><img src="img/asmp.jpg" alt="image_partenaire"/></a>
					</div>
					<div class = "col-lg-2 col-md-2 col-sm-12 col-xm-12 par">
						<a href="https://www.studycheck.de/hochschulen/hs-pforzheimc" title="lien vers hochschule"><img src="img/pfo.jpg" alt="image_partenaire"/></a>
					</div>
					
					
			</div>
			<div class="row part02">
				<div class = "col-lg-2 col-md-2 col-sm-12 col-xm-4 par">
						<a href="https://www.excelia-group.com/en/schools-programmes/la-rochelle-business-school" title="lien vers la rochelle-business-school"><img src="img/rohel.jpg" alt="image_partenaire"/></a>
					</div>
					<div class = "col-lg-3 col-md-3 col-sm-12 col-xm-4 par">
							<a href="https://www.zju.edu.cn/english/" title="lien vers uy2"><img src="img/hinoi.png" alt="image_partenaire"/></a>
					</div>
					
					<div class = "col-lg-3 col-md-3 col-sm-12 col-xm-4 par">
							<a href="www.ihet.ens.tn/" title="lien vers uy2"><img src="img/instit.jpg" alt="image_partenaire"/></a>
					</div>
					
					<div class = "col-lg-4 col-md-4 col-sm-12 col-xm-4 par">
							<a href="www.ibs.iscte-iul.pt/" title="lien vers uy2"><img src="img/a.jpg" alt="image_partenaire"/></a>
					</div>
			</div>
            <!--<div class="row part">
			
				<div class = "col-lg-12 col-md-12 col-sm-12 col-xm-12 par">
						<a href="ibs.iscte-iul.pt/en/" title="lien vers iscte"><img src="img/isct.jpg" alt="image_partenaire"/></a>
					</div>
			</div>-->
			<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
							<p id="rem">UN LABEL D&#39;EXCELLENCE</p>
						</div>
			</div>
			<footer class="footer">
					<p id="cop"> Copyright (c) 2019 holder All Rights Reserved </p>
				
			</footer>
		</div>
	</body>
</html>