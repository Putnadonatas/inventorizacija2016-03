
 <?php
 function inputForm($link){
 $dbase = new Dbase();
 $dbase->connect();
 //--------------------------------------------------------------------
  echo '<form action="'.$link.'" method="post">';
  echo '<table style="width: auto;">';
  echo '<tr>';
  echo '<td class="newData">Inventoriaus numeris:</td><td class="newData"><input type="text" name="ID"></td>';
  //-----------------------
  $dbase->darbuotojai();
	echo '<tr>';
	 echo '<td class="newData">Darbuotojas</td><td class="newData">
	 <select name="darbuotojasID" >';
		   for($j=0;$j<$dbase->sum;$j++){
		   echo '<option value="'.$dbase->arrayOfID[$j].'">'.$dbase->arrayOfText[$j].'</option>';
		   }
	echo'</select><br>'; 
	echo '</tr>';
//----------------------------------
$dbase->skyrius();
	echo '<tr>';
	 echo '<td class="newData">Skyrius:</td><td class="newData">
	 <select name="skyriusID">';
		   for($j=0;$j<$dbase->sum;$j++){
		   echo '<option value="'.$dbase->arrayOfID[$j].'">'.$dbase->arrayOfText[$j].'</option>';
		   }
	echo'</select></td></tr>';
//-------------------------------------	
$dbase->kompiuteriotipas();
	echo '<tr>';
	 echo '<td class="newData">Kompiuterio tipas:</td><td class="newData">
	 <select name="tipasID">';
		   for($j=0;$j<$dbase->sum;$j++){
		   echo '<option value="'.$dbase->arrayOfID[$j].'">'.$dbase->arrayOfText[$j].'</option>';
		   }
	echo'</select></td>'; 
	echo '</tr>';
//-------------------------------------
 echo '<tr><td class="newData">Modelis:</td><td class="newData"><input type="text" name="modelis" ></td></tr>';
 //------------------------------------
 echo '<tr><td class="newData">Kaina:</td><td class="newData"><input type="number" step="0.01" min="0" name="kaina"> Eur</td></tr>';
 //------------------------------------
  echo '<tr><td class="newData">Pirkimo data:</td><td class="newData"><input type="number" name="pirkimo_data" min="1991" max="'.date("Y").'"  onchange="setMinValue(\'pirkimo_data\',\'isdavimo_data\')"> metai</td></tr>';
 //------------------------------------
   echo '<tr><td class="newData">Išdavimo data:</td><td class="newData"><input type="number"  name="isdavimo_data" min="1991" max="'.date("Y").'" onchange="setMinValue(\'isdavimo_data\',\'nurasymo_data\')"> metai</td></tr>';
 //------------------------------------
   echo '<tr><td class="newData">Nurašymo data:</td><td class="newData"><input type="number" name="nurasymo_data" min="1991" max="'.date("Y").'"> metai</td></tr>';
 //------------------------------------
   	$dbase->os();
	echo '<tr>';
	 echo '<td class="newData">OS:</td><td class="newData">
	 <select name="osID" >';
		   for($j=0;$j<$dbase->sum;$j++){
		   echo '<option value="'.$dbase->arrayOfID[$j].'">'.$dbase->arrayOfText[$j].'</option>';
		   }
	echo'</select><br>';
   echo '</tr>';
 //------------------------------------   
	$dbase->ms_office();
	echo '<tr>';
	  echo ' <td class="newData">Microsoft Office:</td><td class="newData">
	  <select name="ms_officeID">';
		   for($j=0;$j<$dbase->sum;$j++){
		   echo '<option value="'.$dbase->arrayOfID[$j].'">'.$dbase->arrayOfText[$j].'</option>';
		   }
	echo'</select></td></tr>'; 
//------------------------------------
$dbase->komercine_programa();
	for($k=0;$k<4;$k++){
	echo '<tr>';
	echo ' <td class="newData">Taikomoji programa '.($k+1).':</td><td class="newData">
	<select name="tpi_'.$k.'">';
		   for($j=0;$j<$dbase->sum;$j++){
		   echo '<option value="'.$dbase->arrayOfID[$j].'">'.$dbase->arrayOfText[$j].'</option>';
		   }
	echo'</select></td></tr>'; 
	}
//------------------------------------
	$dbase->busenos();
	echo '<tr>';
	 echo '<td class="newData">Kompiuterio busena:</td><td class="newData">
	 <select name="busenaID">';
		   for($j=0;$j<$dbase->sum;$j++){
		   echo '<option value="'.$dbase->arrayOfID[$j].'">'.$dbase->arrayOfText[$j].'</option>';
		   }
	echo'</select></td>';
echo '</tr>';	
//-------------------------------------------------------------
	$dbase->close();
	 echo '<tr><td class="newData">Pastabos:</td><td class="newData"><input style="width: 100%;" type="textarea" name="pastabos"></td></tr>';
	 echo '<tr><td class="newData" style="font-weight: bold;">Administratoriaus slaptažodis:</td><td class="newData"><input type="password" name="admin"></td></tr>';
	 echo '</table>';
	echo '<input type="submit" value="Pateikt" >
</form>';
}
 ?>