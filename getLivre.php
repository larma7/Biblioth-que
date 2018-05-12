	<?php

require "ConnexionBD.php";

$bd=ConnexionBD::getInstance();
$req="SELECT * FROM livre WHERE reference=:ref " ;
$res=$bd->prepare($req);

$res->execute(array('ref'=>$_GET["reference"])) ; 
$afficheRes=$res->fetch(PDO::FETCH_ASSOC) ;	
$myRefValue=$_GET["reference"] ;


$maRequette="SELECT * FROM appartient_cat WHERE ref_livre=:ref " ;
$chercherCategorie=$bd->prepare($maRequette) ;	

$chercherCategorie->execute(array('ref'=>$afficheRes["reference"])) ;
$categorieHamdi=$chercherCategorie->fetch(PDO::FETCH_ASSOC) ;

	?>	
