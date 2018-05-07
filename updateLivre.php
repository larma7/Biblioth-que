<?php

if(count($_POST)>0) {

$reqUpdate="UPDATE livre SET titre=:monNouveauTitre , synopsis=:MonNouveauSyn , nbreLivreDispo=:monNouveauNbre
  WHERE id =:reference " ;
$ResUpdate=$bd->prepare($reqUpdate);
var_dump($_POST) ;
var_dump($myRefValue) ;

$res1Update=$ResUpdate->execute(array( 'monNouveauNbre'=>$_POST["monNouveauNombre"] ,
'monNouveauTitre'=>$_POST	["monNouveauTitre"] ,'MonNouveauSyn'=>$_POST["MonNouveauSyn"] , 'reference'=> $myRefValue)) ;

if($res1Update) {
	echo "Modification Effectuée" ;
}
}
if (count($_POST)>0) {
$reqUpdate1="UPDATE appartient_cat SET nom_cat=:cat  WHERE id =:reference " ;
$ResUpdate1=$bd->prepare($reqUpdate1);
$res1Update1=$ResUpdate1->execute(array('cat'=>$_POST["maNouvelleCategorie"] , 'reference'=> $myRefValue)) ;

}
?>
