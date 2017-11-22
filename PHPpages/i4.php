<div class="container-fluid" style="background-color: white; padding: auto audio auto auto;margin:auto auto auto auto;"> 
<div style="background-color: white; max-width: 690px; margin:auto auto auto auto; padding: auto auto auto auto;">
<?php 
echo '<h1>Įrašo koregavimas</h1>';

 
 if(isset($_POST['ID']) && $_POST['ID']!='' && isset($_POST['modelis']) && $_POST['modelis']!='' && $_POST['pirkimo_data']!='' && isset($_POST['pirkimo_data']) && isset($_POST['admin']) && $_POST['admin']==AdminPassw)
   {
   $rec_update = new Record();
   
    $rec_update->inv_nr=$_POST['ID'];
	//echo  $rec_update->inv_nr."<br>";
	$rec_update->darbuotojas=$_POST['darbuotojasID'];
	//echo  $rec_update->darbuotojas."<br>";
	$rec_update->skyrius=$_POST['skyriusID'];
	//echo  $rec_update->skyrius."<br>";
	$rec_update->tipas=$_POST['tipasID'];
	//echo  $rec_update->tipas."<br>";
	$rec_update->model=$_POST['modelis'];
	//echo  $rec_update->model."<br>";
	$rec_update->kaina=$_POST['kaina'];
	//echo  $rec_update->kaina."<br>";
	$rec_update->pirkimoData=$_POST['pirkimo_data'];
	//echo  $rec_update->pirkimoData."<br>";
	$rec_update->isdavimoData=$_POST['isdavimo_data'];
	//echo  $rec_update->isdavimoData."<br>";
	$rec_update->nurasymoData=$_POST['nurasymo_data'];
//	echo  $rec_update->nurasymoData."<br>";
	$rec_update->os=$_POST['osID'];
	//echo  $rec_update->os."<br>";
	$rec_update->ms_office=$_POST['ms_officeID'];
	//echo  $rec_update->ms_office."<br>";
	$rec_update->komercine_programa_0=$_POST['tpi_0'];
	//echo  $rec_update->komercine_programa_0."<br>";
	$rec_update->komercine_programa_1=$_POST['tpi_1'];
   // echo  $rec_update->komercine_programa_1."<br>";
	$rec_update->komercine_programa_2=$_POST['tpi_2'];
	//echo  $rec_update->komercine_programa_2."<br>";
	$rec_update->komercine_programa_3=$_POST['tpi_3'];
    //echo  $rec_update->komercine_programa_3."<br>";
	$rec_update->statusas=$_POST['busenaID'];
	//echo  $rec_update->statusas."<br>";
	if($_POST['pastabos']!='' && isset($_POST['pastabos'])){
	$rec_update->pastabos=$_POST['pastabos'];
	}
	else{
	$rec_update->pastabos='-';
	}
	//echo  $rec_update->pastabos."<br>";
    //echo  $_POST['admin']." -Adminas <br>";
	
    $dbase->connect();
	$dbase->update_visa_info($rec_update);
    $dbase->close();
	$_POST['ID']='';
	$_POST['admin']='';
	
  echo '<form action="index.php?page=6" method="post">';
  echo '<table style="width: 100%;">';
  echo '<tr>';
  echo '<td class="newData">Inventorius numeris:</td><td class="newData"><input type="text" name="ID"></td></tr>';
 //echo '<tr><td class="newData" style="font-weight: bold;">Administratoriaus slaptažodis:</td><td class="newData"><input type="password" name="admin"></td></tr>';
 echo '</table>';
 echo '<input type="submit" value="Rast įrašą" >';
 echo '</form>';  	
 }
 else if(isset($_POST['ID']) && $_POST['ID']!='' && isset($_POST['modelis']) && $_POST['modelis']!='' && $_POST['pirkimo_data']!='' && isset($_POST['pirkimo_data']) && ((isset($_POST['admin']) && $_POST['admin']!=AdminPassw) || !isset($_POST['admin']))){
   echo '<p style="color: red;">Neteisingas administratoriaus slaptažodis.</p>';
   $dbase->connect();
   $oneRecord=$dbase->OneRecord_info($_POST['ID']);
   $dbase->close();
    inputForm('index.php?page=6');
	}
  else if(isset($_POST['ID']) && $_POST['ID']!=''){
   $dbase->connect();
   $oneRecord=$dbase->OneRecord_info($_POST['ID']);
   $dbase->close();
   inputForm('index.php?page=6');
  }
 else{
  echo '<form action="index.php?page=6" method="post">';
  echo '<table style="width: 100%;">';
  echo '<tr>';
  echo '<td class="newData">Inventorius numeris:</td><td class="newData"><input type="text" name="ID"></td></tr>';
// echo '<tr><td class="newData" style="font-weight: bold;">Administratoriaus slaptažodis:</td><td class="newData"><input type="password" name="admin"></td></tr>';
 echo '</table>';
 echo '<input type="submit" value="Rast įrašą" >';
 echo '</form>';  
 }
 
 ?> 
<script type="text/javascript">
  <?php
if($oneRecord->inv_nr!=null) { 
  echo 'setValue("ID","'.$oneRecord->inv_nr.'");';
  echo 'setValue("darbuotojasID","'.$oneRecord->darbuotojas.'");';
  echo 'setValue("skyriusID","'.$oneRecord->skyrius.'");';
  echo 'setValue("tipasID","'.$oneRecord->tipas.'");';
  echo 'setValue("modelis","'.$oneRecord->model.'");';
  echo 'setValue("kaina","'.$oneRecord->kaina.'");';
  echo 'setValue("pirkimo_data","'.$oneRecord->pirkimoData.'");';
  echo 'setValue("isdavimo_data","'.$oneRecord->isdavimoData.'");';
  echo 'setValue("nurasymo_data","'.$oneRecord->nurasymoData.'");';
  echo 'setValue("osID","'.$oneRecord->os.'");';
  echo 'setValue("ms_officeID","'.$oneRecord->ms_office.'");';
  echo 'setValue("tpi_0","'.$oneRecord->komercine_programa_0.'");';
  echo 'setValue("tpi_1","'.$oneRecord->komercine_programa_1.'");';
  echo 'setValue("tpi_2","'.$oneRecord->komercine_programa_2.'");';
  echo 'setValue("tpi_3","'.$oneRecord->komercine_programa_3.'");';
  echo 'setValue("busenaID","'.$oneRecord->statusas.'");';
  echo 'setValue("pastabos","'.$oneRecord->pastabos.'");';
  }
  ?>
 </script>
 
 </div>
 </div>