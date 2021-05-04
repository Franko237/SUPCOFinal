<?php
        session_start();
       // if(isset($_SESSION["user"]))
       // {
         //   header("Location: profil.php");
           // exit;
        //}

        include("connectionpdo.php");
        $idconn=connec('supdeco','myparam');

        if(isset($_POST['email'],$_POST['pass']) && !empty($_POST['email']) && !empty($_POST['pass']))

        {
            //on récupère les données

            
            
            if( !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                die("l'adresse email est incorrecte");
            }

            // on va hasher le mot de passe
            $pass=password_hash($_POST['pass'], PASSWORD_BCRYPT) ;

            $sql= "SELECT * FROM users WHERE email= :email ";

            $reqpre= $idconn->prepare($sql);
            $reqpre->bindParam(':email',$_POST['email'],PDO::PARAM_STR);
            $reqpre->execute();

            $user= $reqpre->fetch();

            if(!$user){ die("L'utilisateur et/ou le mot de passe est incorrecte");}

            //On vérifie si le mot de passe est correcte
            if(!password_verify($_POST['pass'],$user['pass'])){
                die("L'utilisateur et/ou le mot de passe est incorrecte");
            }

            // ici l'utilisateur et le mot de passe sont correctes
            // on va pouvoir connecter l'utilisateur
            // on demarre la session PHP
            

            //on va stocker dans $_SESSION les informations de l'utilisateur
            $_SESSION["user"]= [
                "id"=> $user["id_users"],
                "username"=> $user["username"],
                "email"=> $user["email"],
                "roles"=> $user["roles"] 
            ];

            //var_dump($_SESSION);   

            //on redirige vers la page d'accueil
            header("Location:profil.php");
            


            //$query->bindValue(":usernme",$username, PDO::PARAM_STR);
            //$query->bindValue(":email",$_POST['email'], PDO::PARAM_STR);

            
        }else{
            //die("Le formualire est incomplet");
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
                                            <legend><h2 class="op">Formulaire d'inscription des utilisateurs</h2></legend>
                                        </div>

                                        <fieldset>
                                        <div class="row">
                                            <div class="form-group">
                                                
                                                   
                                                    <label for="text" class="col-lg-2 col-md-2 col-sm-12 col-xm-12 ind">Email:</label>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xm-12">
                                                        <input type="email" class="form-control" name="email" id="email">
                                                    </div>
                                                    <label for="text" class="col-lg-2 col-md-2 col-sm-12 col-xm-12 ind">Mot de passe:</label>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xm-12">
                                                        <input type="password" class="form-control" name="pass" id="pass">
                                                    </div>
                                            </div>
                                        </div>
                                        </fieldset>

                                        <fieldset>
                                                <div class="form-group">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 ">
                                                    <button class="pull-right btn btn-primary" type="submit">Me connecter</button>
                                                    </div>
                                                  
                                                </div>
							
											
							            </fieldset>

                                    </form> 
                                </div>

                        </section>

</body>
</html>
                                