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

    <title>BABEL</title>

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

    <header class="masthead" style="background-image: url('img/home-bg2.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div id="line1" class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading" >
              <a href="BABEL.php" class="aec" style="text-decoration: none ; font-size: 110px ; color : white">Babel</a>
<script language="JavaScript">
var marqueewidth=330;
var marqueeheight=20;
var speed=6;
var marqueecontents='<font face=Arial size=6 color=#ACBED8>Votre Bibliotheque En Ligne </font>';
document.write('<marquee scrollAmount='+speed+' style="width:'+marqueewidth+'">'+marqueecontents+'</marquee>');
function regenerate2(){
if (document.layers){
setTimeout("window.onresize=regenerate",450);
intializemarquee();
}
}
function intializemarquee(){
document.cmarquee01.document.cmarquee02.document.write('<nobr>'+marqueecontents+'</nobr>');
document.cmarquee01.document.cmarquee02.document.close();
thelength=document.cmarquee01.document.cmarquee02.document.width;
scrollit();
}
function scrollit(){
if (document.cmarquee01.document.cmarquee02.left>=thelength*(-1)){
document.cmarquee01.document.cmarquee02.left-=speed;
setTimeout("scrollit()",100);
}
else{
document.cmarquee01.document.cmarquee02.left=marqueewidth;
scrollit();
}
}

window.onload=regenerate2;
</script>
            </div>
          </div>
        </div>
      </div>
       
    </header>

    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            
              <h2 class="post-title">
                L'homme doit explorer, et c'est l'exploration à son meilleur
              </h2>
              <h5>
                QU'EST CE QUE BABEL ?
              </h5>
            
            <p class="post-meta">Babel est un site rapide , élégant et fiable realisé par notre equipe de developpement web .</p>
          </div>
          <hr>
          <div class="post-preview">
            
              <h2>
                Beaucoup disent que l'exploration fait partie de notre destin, mais c'est en fait notre devoir envers les générations futures.
              </h2>
              <p class="post-meta">
                Nous Vous souhaitons La Bienvenue parmis nous et souhaitons vous avoir aider et rendu votre travail plus facile .
              </p>
            
            
          </div>
          <hr>
          
        </div>
      </div>
    </div>

    <hr>

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
            <p class="copyright text-muted">Copyright &copy; Babel 2018 </p>
          </div>
        </div>
      </div>
    </footer>



<script src="js/javas.js"></script>
  </body>
    

</html>
