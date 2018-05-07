<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<button onclick="location.href='AjouterLivre.php';" >Ajouter Livre</button> 
	<br>
	<form method="post" action="#" >
	<input type="text" name="titre" placeholder="titre" value="">
	<input type="submit" value="Rechercher">
	</form>
<?php
require "ConnexionBD.php";
include "selectionLivre.php"
?>

<table>
<tr>
	<th>titre</th>
	<th>Categorie</th>
	<th>Nombre De Copies</th>
</tr>
<?php
while ($afficheRes=$res->fetch(PDO::FETCH_ASSOC)){
//var_dump($afficheRes) ;
$chercherCategorie->execute(array('ref'=>$afficheRes["reference"])) ;
$categorieHamdi=$chercherCategorie->fetch(PDO::FETCH_ASSOC) ;
//var_dump($categorieHamdi) ;
?>
<form method="get" action='modifierLivre.php'>
<tr>
	<td>
<?php
	echo "\"".$afficheRes['titre']."\"" ;	
?>

	</td>
	<td >
<?php
if (isset($categorieHamdi)) {
 		echo $categorieHamdi['nom_cat'] ;
 		}
 else {
 	echo "Pas De Categorie Pour Ce Livre" ;
 }
?>
	</td>
	<td >
<?php
		echo $afficheRes['nbreLivreDispo'] ;
?>
	</td>	
	<td >

	<?php
	echo "
	<input type='text' name='reference' class='supp'"
	."style='visibility:hidden'"
	.
	" value=".$afficheRes['reference'].">" ;
	echo "<input type='submit' formaction='afficheLivre.php' value='suppimer'>" ;
	echo "
<input id='myButton' type='submit' value='update' />
"
//<input type='submit' value='Confirmer'>
	 ;

?> 	</td>	
</tr>

</form>
<?php	
}
$_POST=null ; 
?>

<?php
$req="DELETE FROM appartient_cat WHERE ref_livre =:reference " ;


$res=$bd->prepare($req);
//var_dump($_GET) ;

$res1=$res->execute(array('reference'=>$_GET["reference"]));

if($res1) {
	echo "Suppression Effectuée" ;
}

$req1="DELETE FROM livre WHERE reference =:ref " ;

$res2=$bd->prepare($req1);
//var_dump($_GET) ;

$res3=$res2->execute(array('ref'=>$_GET["reference"]));

if($res3) {
	echo "Suppression Effectuée" ;
}
?>
<?
}
?>
<br>
<br>
<br>
<br>
<br>
</body>


</html>

