<?php
require "ConnexionBD.php";
$bd=ConnexionBD::getInstance();
include "ajouter.php";
echo '<script>alert("Membre Ajouté");</script>';
$req="INSERT INTO client (cin,nom, prenom ,adresse,num_tel,mail) VALUES(:cin,:nom ,:prenom ,:adresse ,:num,:mail)";
$res=$bd->prepare($req);
$res->execute(array('cin'=>$_POST["cin"],'nom'=>$_POST ["nom"] ,'prenom'=>$_POST["prenom"] ,'adresse'=>$_POST["adr"],'num'=>$_POST["num"],'mail'=>$_POST["mail"])  );
?>