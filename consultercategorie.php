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

    <title>Liste des Categories</title>

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
td, th { padding: 15px;}
table {
    border-spacing: 5px;
}
table {
    width: 100%; 
	
}


 </style>
  
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
    <header class="masthead" style="background-image: url('img/categories.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>Liste des Categories</h1>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="container">
	<body>
	<h3>Cliquer sur une catégorie pour afficher ses livres :</h3>
	<form method="post" action="#" >
	<input type="text" name="nom" placeholder="Search" value="">
	<input type="submit" value="Rechercher">
	</form>
	<?php
require "ConnexionBD.php";

$bd=ConnexionBD::getInstance();
if (count($_POST)==0){
    $req = "SELECT * FROM categorie";
	$res = $bd->prepare($req);
	$res->execute();
echo "<table align = center>";
while ($afficheRes= $res->fetch(PDO::FETCH_BOTH)){
echo "<tr>";
for ($i=1 ; $i<6 ; $i ++) { // 5 categories par ligne
	 
 echo "<td><a href='consulterparcat.php?nom=".$afficheRes['nom']."'>".$afficheRes['nom']."</a></td>";
 if($i<5){ // nbr categorie-1
	$afficheRes=$res->fetch(PDO::FETCH_ASSOC) ; 
	}	
}
echo "</tr>";
} 
}
else{
$param = "%{$_POST['nom']}%";
$req1="SELECT * FROM categorie WHERE nom LIKE :nom " ;
$res2=$bd->prepare($req1);
$res2->execute(array('nom'=>$param)) ;
echo "<table  align = center>";
while ($afficheRes1= $res2->fetch(PDO::FETCH_BOTH)){
echo "<tr>";
for ($i=1 ; $i<6 ; $i ++) { // 5 categories par ligne
	 
 echo "<td><a href='consulterparcat.php?nom=".$afficheRes1['nom']."'>".$afficheRes1['nom']."</a></td>";
 if($i<5){ // nbr categorie-1
	$afficheRes1=$res2->fetch(PDO::FETCH_ASSOC) ; 
	}	
}
echo "</tr>";
}
} 
?>
    