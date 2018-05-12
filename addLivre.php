<?php
require "ConnexionBD.php";

$bd=ConnexionBD::getInstance();

//Requéte d'ajout d'un livre
$req="INSERT INTO livre ( titre, categorie, nbreLivreDispo) VALUES( :titre , :cat , :nbre)";

$res=$bd->prepare($req);
$res->execute(array('titre'=>$_POST ["titre"] ,'cat'=>$_POST["Cat"] ,'nbre'=>$_POST["nbreDeCopies"]) );

	if(!$res){
		echo "Livre non ajouté, vérifier les champs";
	}

echo 'Le livre a bien été ajouté !';
?>
