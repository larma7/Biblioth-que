<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>

	<?php
include "getLivre.php" ;
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
</body>
<?php
include "updateLivre.php" ;
?>

</html>

