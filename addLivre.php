<?php
require "ConnexionBD.php";
//require "ajouterLivre.php";

$bd=ConnexionBD::getInstance();

// On ajoute une entrée dans la table jeux_video
$req="INSERT INTO livre ( titre, categorie, nbreLivreDispo) VALUES( :titre , :cat , :nbre)";

$res=$bd->prepare($req);
$res->execute(array('titre'=>$_POST ["titre"] ,'cat'=>$_POST["Cat"] ,'nbre'=>$_POST["nbreDeCopies"]) );
//$res->execute($_POST) ;
//var_dump($_POST) ;
	if(!$res){
		echo "error";
	}

echo 'Le livre a bien été ajouté !';
?>