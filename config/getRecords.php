<?php
$dbase->connect();
	
	$dbase->ms_office();
	 $msText = $dbase->arrayOfText;
     $msID = $dbase->arrayOfID;

	$dbase->busenos();
	 $bsText = $dbase->arrayOfText;
	 $bsID= $dbase->arrayOfID;
	 
	
	$dbase->darbuotojai();
	 $dbText=$dbase->arrayOfText;
	 $dbID= $dbase->arrayOfID;
	 
	$dbase->os();
	 $osText=$dbase->arrayOfText;
	 $osID= $dbase->arrayOfID;
	 
	$dbase->skyrius();
	 $skText=$dbase->arrayOfText;
	 $skID=$dbase->arrayOfID;
	 
	$dbase->kompiuteriotipas();
	 $ktText=$dbase->arrayOfText;
	 $ktID= $dbase->arrayOfID;
	 
	 $dbase->komercine_programa();
	  $kpText=$dbase->arrayOfText;
	  $kpID=$dbase->arrayOfID;
	$rec=$dbase->visa_info();
	
$dbase->close();
?>