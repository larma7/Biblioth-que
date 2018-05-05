<?php
require "ConnexionBD.php";
$bd=ConnexionBD::getInstance();
include "retour.php";
$req="SELECT * FROM `prendre_livre` WHERE ref_livre='".$_POST['ref']."' AND cin_client='".$_POST['cin']."'";
$rep=$bd->query($req);
$result=$rep->fetchAll(PDO::FETCH_ASSOC);
if (count ($result)==0)
{echo '<script>alert("Livre non enregistré en tant qu emprunté par ce client");</script>';}
else 
{
$req="DELETE FROM `prendre_livre` WHERE ref_livre='".$_POST['ref']."' AND cin_client='".$_POST['cin']."'";
$rep=$bd->query($req);
$r=$bd->prepare("SELECT nbreLivreDispo FROM livre WHERE reference=:ref");
$r->execute(array('ref'=>$_POST['ref'])) ;

$newvalue = $r->fetch(PDO::FETCH_ASSOC);
$request="UPDATE livre SET nbreLivreDispo=:nbreLivreDispo WHERE reference=:ref";
$res1=$bd->prepare($request);
$res1->execute(array('nbreLivreDispo'=>$newvalue['nbreLivreDispo']+1,'ref'=>$_POST['ref']));
$bd->query($request);
}
?>
