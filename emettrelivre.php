<?php
require "ConnexionBD.php";
$bd=ConnexionBD::getInstance();
include "emettre.php";
$existe="SELECT * FROM livre WHERE (reference='".$_POST['ref']."')";
$que=$bd->query($existe);
$result=$que->fetchAll(PDO::FETCH_ASSOC);
$existe2="SELECT * FROM client WHERE (cin='".$_POST['cin']."')";
$que2=$bd->query($existe2);
$result2=$que2->fetchAll(PDO::FETCH_ASSOC);
if (count ($result)==0 && count ($result2)==0)
{echo '<script>alert("Reference livre et CIN client non existants dans la base");</script>';
}
else if (count ($result)==0)
{echo '<script>alert("Reference livre non existante dans la base");</script>';
}
else if (count ($result2)==0)
{echo '<script>alert("CIN client non existante dans la base");</script>';
}
else{
	$r=$bd->prepare("SELECT nbreLivreDispo FROM livre WHERE reference=:ref");
	$r->execute(array('ref'=>$_POST['ref'])) ;
	$newvalue = $r->fetch(PDO::FETCH_ASSOC);
	if ($newvalue['nbreLivreDispo']>0)
		{
		$today = date("Y,m,d");
		$req="INSERT INTO prendre_livre (ref_livre,cin_client,date) VALUES(:ref,:cin,:date)";
		$res=$bd->prepare($req);
		$res->execute(array('ref'=>$_POST['ref'],'cin'=>$_POST['cin'],'date'=>$today));


		$request="UPDATE livre SET nbreLivreDispo=:nbreLivreDispo WHERE reference=:ref";
		$res1=$bd->prepare($request);
		$res1->execute(array('nbreLivreDispo'=>$newvalue['nbreLivreDispo']-1,'ref'=>$_POST['ref']));
		$bd->query($request);
		}
		else 
		{echo '<script>alert("livre non disponible");</script>';}
}
?>