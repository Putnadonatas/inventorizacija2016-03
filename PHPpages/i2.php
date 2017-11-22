
<?php 
  echo '<div class="container-fluid" style="background-color: white; padding: auto audio auto auto;margin:auto auto auto auto;"> 
<div style="background-color: white; max-width: 690px; margin:auto auto auto auto; padding: auto auto auto auto;">';

echo '<h1>Visų duomenų rodymas</h1>'; 

echo '</div></div>';

if(isset($_GET['ison'])==true){
 if($_GET['ison']==0){
   echo '<div class="container-fluid" style="background-color: white; padding: auto audio auto auto;margin:auto auto auto auto;"> 
<div style="background-color: white; max-width: 690px; margin:auto auto auto auto; padding: auto auto auto auto;">';

    echo '<a href="?page=4&ison=1"  ><div style="Background-image: url('."images/greenblueE.png".')" class="buttons"> Rodyk</div></a>';
	 echo '</div></div>';
	// lentele slept

	
 }
 else if($_GET['ison']==1){
  echo '<div class="container-fluid" style="background-color: white; padding: auto audio auto auto;margin:auto auto auto auto;"> 
<div style="background-color: white; max-width: 690px; margin:auto auto auto auto; padding: auto auto auto auto;">';

  echo '<a href="?page=4&ison=0"  ><div style="Background-image: url('."images/redP.png".')" class="buttons"> Slėpk</div></a>';
  echo '</div></div>';
  
   echo '<div class="container-fluid" style="background-color: white; padding: auto audio auto auto;margin:auto auto auto auto; width: auto;" > 
<div style="background-color: white; max-width: auto; margin:auto auto auto auto; padding: auto auto auto auto;">';

	include('config/getRecords.php');
	
	
	echo '<div style="clear: both;"><table style="border: 1px solid green;">';
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
	foreach($rec as $item){
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
	echo '</table></div>';
	echo '</div></div>';
 }
 else{
   echo'<p>Įvyko klaida!!!</p>';
 }
}
else{
 echo '<div class="container-fluid" style="background-color: white; padding: auto audio auto auto;margin:auto auto auto auto;"> 
<div style="background-color: white; max-width: 690px; margin:auto auto auto auto; padding: auto auto auto auto;">';

 echo '<a href="?page=4&ison=1"  ><div style="Background-image: url('."images/greenblueE.png".')" class="buttons"> Rodyk</div></a>';
 
 	echo '</div></div>';
 
}
 ?>
</div>
</div> 

