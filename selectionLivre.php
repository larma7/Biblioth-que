<?php
$bd=ConnexionBD::getInstance();
if (count($_POST)==0){
$req="SELECT * FROM livre" ;
$res=$bd->query($req);
}
else{
$param = "%{$_POST['titre']}%";
$req="SELECT * FROM livre WHERE titre LIKE :titre " ;
$res=$bd->prepare($req);

$res->execute(array('titre'=>$param)) ;
}

$maRequette="SELECT * FROM appartient_cat WHERE ref_livre=:ref " ;
$chercherCategorie=$bd->prepare($maRequette) ;	
?>