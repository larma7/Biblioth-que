<?php
session_start();
if(!isset($_SESSION['babel']))
   header("Location:authentifier.php");
?>
<!DOCTYPE html>
<html lang="fr">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modifier Catégorie</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
  

    <link href="css/clean-blog.min.css" rel="stylesheet">
      
  </head>

  <body>

     <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="BABEL.php">INSAT BIBLIOTHEQUE</a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="BABEL.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropbtn" >Abonnées</a>
                <div class="dropdown-content" ><ul>
                <li> <a href="consulter.php">Consulter</a></li>
                <li><a href="ajouter.php">Ajouter</a></li>
                </ul> </div>
            </li>
            <li class="nav-item dropdown">
              <a id="cat" class="nav-link dropbtn" >Categories</a> 
                <div class="dropdown-content" ><ul>
                <li> <a href="consultercategorie.php">Consulter</a></li>
                <li><a href="ajouterCategorie.php">Ajouter</a></li>
                <li> <a href="modifiercategorie.php">Modifier</a></li>
                <li> <a href="supprimerCategorie.php">Supprimer</a></li>
                </ul> </div>
            </li>
             
            <li class="nav-item dropdown">
              <a class="nav-link dropbtn" >Livres</a>
                <div class="dropdown-content" ><ul>
                <li><a href="ajoutlivre.php">Ajouter</a></li>
                <li> <a href="afficherlivres.php">Afficher</a></li>
                <li> <a href="emettre.php">Emettre</a></li>
                <li> <a href="retour.php">Retour</a></li>
                <li> <a href="livredelivre.php">Délivrées</a></li>
                </ul> </div>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="blacklist.php">Liste Noire</a>
            </li>
			 </li>
              <li class="nav-item">
              <a class="nav-link" href="logout.php">Log out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/modifcat.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1 style="font-size:4rem;">Modifier Catégorie</h1>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <h3>Modifier une Categorie :</h3>
          <form name="sentMessage" id="contactForm" novalidate method="POST" action="modifiercat.php">
            <div class="form-group floating-label-form-group controls">
                <label>Categories</label> <br>
              <?php
              require "ConnexionBD.php";
                $bd=ConnexionBD::getInstance();
              $req=("Select * from categorie");
              $res=$bd->query($req);
              $details = $res->fetchAll(PDO::FETCH_OBJ);
              foreach($details as $detail)
              {
                  echo (' <input type="radio"  class="form-control" id="'.$detail->nom.'" name="radiobox" required data-validation-required-message="Enter les categories." value ="'.$detail->nom.'" >');
                  echo ($detail->nom);
              }

              ?>
                <p class="help-block text-danger"></p>
              </div>
			<div class="control-group">
              <div class="form-group floating-label-form-group controls">
			  <h3>Entrez le nouveau nom:</h3>
                <label>Nom</label>
                <input type="text" class="form-control" placeholder="Nom" id="nom" name="nom" required data-validation-required-message="Enter le nom.">
                <p class="help-block text-danger"></p>
              </div>
                
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" id="sendMessageButton">Modifier</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Babel 2018</p>
          </div>
        </div>
      </div>
    </footer>

   
<script src="js/javas.js"></script>
  </body>

</html>
