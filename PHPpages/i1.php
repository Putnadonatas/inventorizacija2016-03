<div class="container-fluid" style="background-color: white; padding: auto audio auto auto;margin:auto auto auto auto;"> 
<div style="background-color: white; max-width: 690px; margin:auto auto auto auto; padding: auto auto auto auto;">
<?php 
echo '<h1>Naujo įrašo kūrimas</h1>';
 
 $dbase->connect();
 
 if(isset($_POST['admin']) && $_POST['admin']==AdminPassw){
   $_POST['admin']='';
   $rec_insert = new Record();
   
   if(isset($_POST['ID']) && $_POST['ID']!='' && isset($_POST['modelis']) && $_POST['modelis']!='' && $_POST['pirkimo_data']!='' && isset($_POST['pirkimo_data']))
   {
    $rec_insert->inv_nr=$_POST['ID'];
	//echo  $rec_insert->inv_nr."<br>";
	$rec_insert->darbuotojas=$_POST['darbuotojasID'];
	//echo  $rec_insert->darbuotojas."<br>";
	$rec_insert->skyrius=$_POST['skyriusID'];
	//echo  $rec_insert->skyrius."<br>";
	$rec_insert->tipas=$_POST['tipasID'];
	//echo  $rec_insert->tipas."<br>";
	$rec_insert->model=$_POST['modelis'];
	//echo  $rec_insert->model."<br>";
	$rec_insert->kaina=$_POST['kaina'];
	//echo  $rec_insert->kaina."<br>";
	$rec_insert->pirkimoData=$_POST['pirkimo_data'];
	//echo  $rec_insert->pirkimoData."<br>";
	$rec_insert->isdavimoData=$_POST['isdavimo_data'];
	//echo  $rec_insert->isdavimoData."<br>";
	$rec_insert->nurasymoData=$_POST['nurasymo_data'];
	//echo  $rec_insert->nurasymoData."<br>";
	$rec_insert->os=$_POST['osID'];
	//echo  $rec_insert->os."<br>";
	$rec_insert->ms_office=$_POST['ms_officeID'];
//	echo  $rec_insert->ms_office."<br>";
	$rec_insert->komercine_programa_0=$_POST['tpi_0'];
	//echo  $rec_insert->komercine_programa_0."<br>";
	$rec_insert->komercine_programa_1=$_POST['tpi_1'];
//	echo  $rec_insert->komercine_programa_1."<br>";
	$rec_insert->komercine_programa_2=$_POST['tpi_2'];
//	echo  $rec_insert->komercine_programa_2."<br>";
	$rec_insert->komercine_programa_3=$_POST['tpi_3'];
//	echo  $rec_insert->komercine_programa_3."<br>";
	$rec_insert->statusas=$_POST['busenaID'];
	//echo  $rec_insert->statusas."<br>";
	if(isset($_POST['pastabos']) && $_POST['pastabos']!=''){
	$rec_insert->pastabos=$_POST['pastabos'];
	}
	else {
	$rec_insert->pastabos='-';
	}
//	echo  $rec_insert->pastabos."<br>";
//	echo  $_POST['admin']." -Adminas <br>";
	

	$dbase->insert_visa_info($rec_insert);
   }
 }
 else if(isset($_POST['admin'])){
 echo '<p style="color: red;">Neteisingas administratoriaus slaptažodis.</p>';
 }
  inputForm('index.php?page=3');
 ?> 
 </div>
 </div>