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
				<form class="form-horizontal col-lg-12 col-md-12 col-sm-12 col-xm-12" action="form_bts.php" method="POST" enctype="multipart/form-data">
						<?php if(array_key_exists('errors', $_SESSION)){ ?>
							<div class="alert alert-danger">
								<?= implode('<br>',$_SESSION['errors']); ?>
							</div>
						<?php 
						 } 
						?>

						<?php if(array_key_exists('success', $_SESSION)){ ?>
							<div class="alert alert-success">
								Votre inscription à été enregistré avec succès.
							</div>
						<?php 
						 } 
						?>

					<div class="form-group">
						<legend><h2 class="op">IDENTIFICATION</h2></legend>
					</div>
					
						<fieldset>
									<legend class="ind">Votre photo</legend>
									<div class="row">
										<div class="form-group">
											
											<div class="col-lg-10 col-md-10 col-sm-10 col-xm-10">
												<input type="file" class="form-control" name="fichier"  id=""/>
												<input type="hidden" name="MAX_FILE_SIZE" value="2000000"/>
												
											</div>
										</div>
									</div>
						</fieldset>
					
						
					
				
					<fieldset>
						<div class="row">
							<div class="form-group">
								
									<label for="text" class="col-lg-1 col-md-1 col-sm-12 col-xm-12 ind">Nom:</label>
									<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
										<input type="text" class="form-control" name="nom" id="nom" value="<?= isset($_SESSION['inputs']['nom'])?$_SESSION['inputs']['nom']: '' ?>">
									</div>
									<label for="text" class="col-lg-1 col-md-1 col-sm-12 col-xm-12 ind">Pr&eacute;nom:</label>
									<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
										<input type="text" class="form-control" name="prenom" id="prenom"  value="<?= isset($_SESSION['inputs']['prenom'])?$_SESSION['inputs']['prenom']: '' ?>">
									</div>
									<label for="text" class="col-lg-1 col-md-1 col-sm-12 col-xm-12 ind">Date de Naissance:</label>
									<div class="col-lg-2 col-md-2 col-sm-12 col-xm-12">
										<input type="date" class="form-control" name="date" id="date"  value="<?= isset($_SESSION['inputs']['date'])?$_SESSION['inputs']['date']: '' ?>">
									</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								
								<label for="text" class="col-lg-1 col-md-1 col-sm-12 col-xm-12 ind">Lieu de naissance:</label>
								<div class="col-lg-2 col-md-2 col-sm-12 col-xm-12">
									<input type="text" class="form-control" name="lieu" id="lieu"  value="<?= isset($_SESSION['inputs']['lieu'])?$_SESSION['inputs']['lieu']: '' ?>">
								</div>
							
								<label for="text" class="col-lg-1 col-md-1 col-sm-12 col-xm-12 ind">Situation familiale:</label>
								<div class="col-lg-2 col-md-2 col-sm-12 col-xm-12">
									<input type="text" class="form-control" name="situation" id="situation"  value="<?= isset($_SESSION['inputs']['situation'])?$_SESSION['inputs']['situation']: '' ?>">
								</div>
								<label for="text" class="col-lg-1 col-md-1 col-sm-2 col-xm-2 ind">Sexe:</label>
								<div class="col-lg-2 col-md-2 col-sm-12 col-xm-12">
									<input type="text" class="form-control" name="sexe" id="sexe"  value="<?= isset($_SESSION['inputs']['sexe'])?$_SESSION['inputs']['sexe']: '' ?>">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label for="text" class="col-lg-1 col-md-1 col-sm-12 col-xm-12 ind">Adresse:</label>
								<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
									<input type="text" class="form-control"  name="adresse" id="adresse"  value="<?= isset($_SESSION['inputs']['adresse'])?$_SESSION['inputs']['adresse']: '' ?>">
								</div>
								<label for="text" class="col-lg-1 col-md-1 col-sm-12 col-xm-12 ind">Tel(etudiant):</label>
								<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
									<input type="number" class="form-control" name="teletu" id="teletu"  value="<?= isset($_SESSION['inputs']['teletu'])?$_SESSION['inputs']['teletu']: '' ?>">
								</div>
								<label for="text" class="col-lg-1 col-md-1 col-sm-12 col-xm-12 ind">Quartier:</label>
								<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
									<input type="text" class="form-control" name="quartier" id="quartier"  value="<?= isset($_SESSION['inputs']['quartier'])?$_SESSION['inputs']['quartier']: '' ?>">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label for="text" class="col-lg-1 col-md-1 col-sm-12 col-xm-12 ind">Tel(parent):</label>
								<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
									<input type="number" class="form-control" name="telpar" id="telpar"  value="<?= isset($_SESSION['inputs']['telpar'])?$_SESSION['inputs']['telpar']: '' ?>">
								</div>
								<label for="text" class="col-lg-1 col-md-1 col-sm-12 col-xm-12 ind">R&eacute;gion d'origine:</label>
								<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
									<input type="text" class="form-control" name="regionori" id="regionori"  value="<?= isset($_SESSION['inputs']['regionori'])?$_SESSION['inputs']['regionori']: '' ?>">
								</div>
								<label for="text" class="col-lg-1 col-md-1 col-sm-12 col-xm-12 ind">E-mail:</label>
								<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
									<input type="text" class="form-control" name="email" id="email"  value="<?= isset($_SESSION['inputs']['email'])?$_SESSION['inputs']['email']: '' ?>">
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
										<input type="text" class="form-control" name="originebac" id="originebac"  value="<?= isset($_SESSION['inputs']['originebac'])?$_SESSION['inputs']['originebac']: '' ?>">
									</div>
							
						
						
									<label for="text" class="col-lg-1 col-md-1 col-sm-12 col-xm-12 ind">Ann&eacute;e d&#39;obtention:</label>
									<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
										<input type="date" class="form-control" name="anneeobtention" id="anneeobtention"  value="<?= isset($_SESSION['inputs']['anneeobtention'])?$_SESSION['inputs']['anneeobtention']: '' ?>">
									</div>
									<label for="text" class="col-lg-1 col-md-1 col-sm-12 col-xm-12 ind">Diplome préparé:</label>
									<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
										<input type="text" class="form-control" name="diplome" id="diplome"  value="<?= isset($_SESSION['inputs']['diplome'])?$_SESSION['inputs']['diplome']: '' ?>">
									</div>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<label for="text" class="col-lg-4 col-md-4 col-sm-12 col-xm-12 ind">Nom Etablissement:</label>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xm-12">
									<input type="text" class="form-control" name="nometabli" id="nometabli"  value="<?= isset($_SESSION['inputs']['nometabli'])?$_SESSION['inputs']['nometabli']: '' ?>">
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
							<div class="col-lg-2 col-md-2 col-sm-2 col-xm-2">
							<h4 class="fili">CYCLES</h4>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xm-4">
								<select name="cycle[]" id="" size="1">
									<option value="Brevet de technicien supérieur(BTS)">Brevet de technicien supérieur(BTS)</option>
									<option value="Cycle professionnel">Cycle professionnel</option>
									<option value="Programme grande ecole">Programme grande ecole</option>
									<option value="English Bachelor">English Bachelor</option>
									<option value="DBA">DBA</option>
								</select> 
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xm-2">
							<h4 class="fili">FILIERES</h4>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xm-4">
								<select name="filiere[]" id="" size="1">
									<option value="COMMERCE-VENTE">COMMERCE-VENTE</option>
									<option value="GESTION">GESTION</option>
									<option value="CARRIERES JURIDIQUES">CARRIERES JURIDIQUES</option>
									
								</select>
							</div>
						
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-4 col-xm-4">
								<h4 class="fili">SPECIALITES</h4>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xm-6">
								<select name="specialite[]" id="" size="1">
									<option value="COMMERCE INTERNATIONALE">COMMERCE INTERNATIONALE</option>
									<option value="MARKETING-COMMERCE-VENTE">MARKETING-COMMERCE-VENTE</option>
									<option value="BANQUE ET FINANCE">BANQUE ET FINANCE</option>
									<option value="COMPTABILITE ET GESTION DES ENTREPRISES">COMPTABILITE ET GESTION DES ENTREPRISES</option>
									<option value="GESTION DES RESSOURCES HUMAINES">GESTION DES RESSOURCES HUMAINES</option>
									<option value="GESTION LOGISTIQUE ET TRANSPORT">GESTION LOGISTIQUE ET TRANSPORT</option>
									<option value="GESTION FISCALE">GESTION FISCALE</option>
									<option value="DOUANE ET TRANSIT">DOUANE ET TRANSIT</option>
								</select>
								
							</div>
						</div>
						
					</fieldset>
					
					
					



					<!--
							<div class="form-group">
						<legend><h3 class="op">Informations compl&eacute;mentaires</h3></legend>
					</div>
					<fieldset>
						<div class="row">
							<div class="form-group">
								<label for="text" class="col-lg-1 col-md-1 col-sm-12 col-xm-12 ind">Montant total des droits universitaire:</label>
								<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
									<input type="text" class="form-control" id="text">
								</div>
							
						
						
									<label for="text" class="col-lg-1 col-md-1 col-sm-12 col-xm-12 ind">Montant Inscription:</label>
									<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
										<input type="text" class="form-control" id="text">
									</div>
									<label for="select" class="col-lg-1 col-md-1 col-sm-12 col-xm-12 ind">Type D&#39;inscription:</label>
									<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
										<select id="select" class="form-control">
											<option>Nouvelle inscription</option>
											<option>Inscription classe sup&eacute;rieure</option>
											<option>Inscription pour redoublement</option>
										</select>
									</div>
							</div>
						</div>
							<div class="form-group">
							<legend><h3 class="op">Date des differentes tranches et montants</h3></legend>
							</div>
							<div class="form-group">
							<legend><h3 class="ind">premi&egrave;re tranche</h3></legend>
							</div>
							<fieldset>
							<div class="row">
										<div class="form-group">
											<label for="text" class="col-lg-3 col-md-3 col-sm-12 col-xm-12 ind">Montant:</label>
											<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
												<input type="text" class="form-control" id="text">
											</div>
											<label for="text" class="col-lg-3 col-md-3 col-sm-12 col-xm-12 ind">Pay&eacute; le:</label>
											<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
												<input type="text" class="form-control" id="text">
											</div>
										</div>
							</div>
							</fieldset>
							<fieldset>
							<div class="form-group">
							<legend><h3 class="ind">Deuxi&egrave;me tranche</h3></legend>
							</div>
							<div class="row">
										<div class="form-group">
											<label for="text" class="col-lg-3 col-md-3 col-sm-12 col-xm-12 ind">Montant:</label>
											<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
												<input type="text" class="form-control" id="text">
											</div>
									        <label for="text" class="col-lg-3 col-md-3 col-sm-12 col-xm-12 ind">Pay&eacute; le:</label>
											<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
												<input type="text" class="form-control" id="text">
											</div>
										</div>
							</div>
							</fieldset>
							<div class="form-group">
							<legend><h3 class="ind">Troisi&egrave;me tranche</h3></legend>
							</div>
							<fieldset>
							<div class="row">
										<div class="form-group">
											<label for="text" class="col-lg-3 col-md-3 col-sm-12 col-xm-12 ind">Montant:</label>
											<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
												<input type="text" class="form-control" id="text">
											</div>
									        <label for="text" class="col-lg-3 col-md-3 col-sm-12 col-xm-12 ind">Pay&eacute; le:</label>
											<div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
												<input type="text" class="form-control" id="text">
											</div>
										</div>
							</div>
					
					-->
					
							</fieldset>
									<div class="form-group">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xm-12 ">
										<button class="pull-right btn btn-primary" type="submit">ENVOYER</button>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xm-12 ">
										<a class="pull-right btn btn-primary" href="index.html">ACCUEIL</a>
										</div>
									</div>
							
											
							</fieldset>
					
				
					
				</form>
				<h2>Debug:</h2>
				<?= var_dump($_SESSION); ?>
			</div>
			</section>
		</div>
			
	</body>
</html>

<?php 
	unset($_SESSION['inputs']);
	unset($_SESSION['errors']);
	unset($_SESSION['success']);
?>