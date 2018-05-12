<!DOCTYPE html>
<html lang="fr">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modifier un Livre</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
  

    <link href="css/clean-blog.min.css" rel="stylesheet">

 <style>
 th {
    background-color: #ecc6c6;
    color: white;
	font-family: American Typewriter, serif;
}
tr:hover {background-color: #f5f5f5;
}
td {font-family: DejaVu Sans Mono, monospace;}
td, th { padding: 15px;
}
table {
    border-spacing: 5px;
}
table#t01 {
    width: 100%; 
    background-color: #f1f1c1;
	
}


 </style>
  
  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.html">INSAT BIBLIOTHEQUE</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="BABEL.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="abonné.html">Abonnées</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="post.html">Categories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Livres</a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="contact.html">Liste Noire</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead" style="background-image: url('img/consulter.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>Modifier un livre</h1>
            </div>
          </div>
        </div>
      </div>
    </header>


    <tr>
        <td>
            <?php
            include "getLivre.php" ;
		  include "updateLivre.php" ;
            ?>

            <table>



                <form method="post" >

                    <td>

                        <input type="text" id='myInput' name='monNouveauTitre' value=
                        <?php
                        echo "\"".$afficheRes['titre']."\"" ;
                        ?>
                        >

                    </td>
                    <td >
                        <input type="text" id='myInput' name='maNouvelleCategorie' value=
                        <?php
                        if (isset($categorieHamdi)) {
                            echo $categorieHamdi['nom_cat'] ;
                        }
                        else {
                            echo "Pas De Categorie Pour Ce Livre" ;
                        }
                        ?>
                        >
                    </td>
                    <td >
                        <input type="number" id='myInput' name='monNouveauNombre' value=
                        <?php

                        echo $afficheRes['nbreLivreDispo'] ;
                        ?>
                        >
                    </td>

                    </tr>
                    <tr>
                        <td >Synopsis</td>
                    </tr>
                    <tr>

                        <td rowspan="3"  colspan="2">
<textarea name="MonNouveauSyn">
<?php
echo $afficheRes['synopsis'] ;
?></textarea>
                        </td>
                        <td>
                            <img src=<?php

                            echo "docs/".$afficheRes['nbreLivreDispo'] ;
                            ?>
                            >
                        </td>
                        <input id='myButton' type='submit' value='update' />
                        </td>
                    </tr>
            </table>
            </form>

  </div>
  </body>
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

   

  </body>

</html>
