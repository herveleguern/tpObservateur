<?php
require_once('Gps.class.php');
$gps=new Gps();
$ecranresume=new EcranResume();
$ecranComplet=new EcranComplet();
$gps->ajouterObservateur($ecranresume);
$gps->ajouterObservateur($ecranComplet);
$gps->setMesures("Nord 48,51,57 Ouest 2,30,0", 3);
$gps->setMesures("Nord 48,52,0  Ouest 2,30,0", 4);        
?>
