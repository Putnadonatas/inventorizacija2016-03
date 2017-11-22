<?php 
 echo '<div class="container-fluid" style="background-color: white; padding: auto audio auto auto;margin:auto auto auto auto;"> 
<div style="background-color: white; max-width: 690px; margin:auto auto auto auto; padding: auto auto auto auto;">';
?>
<form style="margin: 5px 5px 5px 5px;" action="index.php?page=5" method="post" id="forma">
Filtrai: <select name="filter" id="filter" onchange="drop_list()">
    <option value="0"></option> 
	<option value="1">Inventoriaus nr.</option>  
	<option value="2">Skyrius</option>
	<option value="3">Darbuotojas</option>  
	<option value="4">Pirkimo metai</option>	 
	<option value="5">Išdavimo data</option>
	<option value="6">Operac. sist.</option>  
	<option value="7">MS Office versija</option>
</select>
</form>
<?php
echo '</div></div>';

echo '<div class="container-fluid" style="background-color: white; padding: auto audio auto auto;margin:auto auto auto auto; width: auto;" > 
<div style="background-color: white; max-width: auto; margin:auto auto auto auto; padding: auto auto auto auto;">';

$recW=0;

if(isset($_POST['filter']) && $_POST['filter']>0){
$dbase->connect();
switch($_POST['filter']){
 case 1:
  if(isset($_POST['inv_nr']) && $_POST['inv_nr']!=''){
  $type="ID";
  $value=$_POST['inv_nr'];
  $recW=$dbase->visa_info_where($type,$value);
  }
  break;
 case 2:
 if(isset($_POST['skyrius']) && $_POST['skyrius']!=''){
  $type="skyriusID";
  $value=$_POST['skyrius'];
  $recW=$dbase->visa_info_where($type,$value);
  }
  break;
 case 3:
 if(isset($_POST['darb']) && $_POST['darb']!=''){
  $type="darbuotojasID";
  $value=$_POST['darb'];
  $recW=$dbase->visa_info_where($type,$value);
  }
  break;
  case 4:
  if(isset($_POST['pirki_Data']) && $_POST['pirki_Data']!=''){
  $type="pirkimo_data";
  $value=$_POST['pirki_Data'];
  $recW=$dbase->visa_info_where($type,$value);
  }
  break;
  case 5:
  if(isset($_POST['isdav_Data']) && $_POST['isdav_Data']!=''){
  $type="isdavimo_data";
  $value=$_POST['isdav_Data'];
  $recW=$dbase->visa_info_where($type,$value);
  }
  break;
  case 6:
  if(isset($_POST['os']) && $_POST['os']!=''){
  $type="osID";
  $value=$_POST['os'];
  $recW=$dbase->visa_info_where($type,$value);
  }
  break;
  case 7:
  if(isset($_POST['ms']) && $_POST['ms']!=''){
  $type="ms_officeID";
  $value=$_POST['ms'];
  $recW=$dbase->visa_info_where($type,$value);
  }
  break; 
}
$dbase->close();

echo '<div style="clear: both;margin 5px;"><table style="border: 1px solid green;">';
	echo '<tr style="font-weight: bold;border-bottom: 1px solid green;">';
                echo "<td>Inv. nr. </td>";
                echo "<td>Darbuotojas </td>";
                echo "<td>Skyrius </td>";
				echo "<td>Tipas </td>";
                echo "<td>Modelis </td>";
				echo '<td>Kaina(Eurai)</td>';
				echo "<td>Pirkimo data</td>";
				echo "<td>Išdavimo data</td>";
				echo "<td>Nurašymo data</td>";
				echo "<td>Busena</td>";
				echo "<td>Opr. sist.</td>";
				echo "<td>MS Office</td>";
				echo "<td>Taikomoji pį.</td>";
				echo "<td>Taikomoji pį.</td>";
				echo "<td>Taikomoji pį.</td>";
				echo "<td>Taikomoji pį.</td>";
				echo "<td>Pastabos</td>";
    echo "</tr>";
	if(count($recW)>0 && $recW!=null ){
	foreach($recW as $item){
	echo '<tr style="font-style: italic; text-align: center;">';
				echo '<td>'.$item->inv_nr.'</td>';
				echo '<td>'.(getStringSQL($dbText, $dbID, $item->darbuotojas)).'</td>';
				echo '<td>'.(getStringSQL($skText, $skID, $item->skyrius)).'</td>';
				echo '<td>'.(getStringSQL($ktText, $ktID, $item->tipas)).'</td>';
				echo '<td>'.$item->model.'</td>';
				echo '<td style="text-align: center;">'.$item->kaina.'</td>';
				echo '<td>'.$item->pirkimoData.'</td>';
				echo '<td>'.$item->isdavimoData.'</td>';
				echo '<td>'.$item->nurasymoData.'</td>';
				echo '<td>'.(getStringSQL($bsText, $bsID, $item->statusas)).'</td>';
				echo '<td>'.(getStringSQL($osText, $osID, $item->os)).'</td>';
				echo '<td>'.(getStringSQL($msText, $msID, $item->ms_office)).'</td>';
				echo '<td>'.(getStringSQL($kpText, $kpID, $item->komercine_programa_0)).'</td>';
				echo '<td>'.(getStringSQL($kpText, $kpID, $item->komercine_programa_1)).'</td>';
				echo '<td>'.(getStringSQL($kpText, $kpID, $item->komercine_programa_2)).'</td>';
				echo '<td>'.(getStringSQL($kpText, $kpID, $item->komercine_programa_3)).'</td>';
				echo '<td>'.$item->pastabos.'</td>';
	echo "</tr>";
	}
	}
	echo '</table></div>';
	
}	
echo '</div></div>';
 ?>
</div>
</div> 

