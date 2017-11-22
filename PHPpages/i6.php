<div class="container-fluid" style="background-color: white; padding: auto audio auto auto;margin:auto auto auto auto;"> 
<div style="background-color: white; max-width: 690px; margin:auto auto auto auto; padding: auto auto auto auto;">
<?php 
echo '<h1>Ataskaita</h1>';
include('config/getRecords.php');
//---------------------------------------------------------------------------------------	
echo '<table style="margin: auto; border: 1px solid green; float; left;">';
	echo '<tr style="font-weight: bold;border-bottom: 1px solid green;">';
                foreach($ktText as $item){
				echo "<td>".$item."</td>";
				}
    echo "</tr>";
    echo '<tr style="font-style: italic; text-align: center;">';
	$i=0;
	foreach($ktID  as $item){

				$arrayOfSum[$item]=0;
				foreach($rec as $itemTs){
				 if($itemTs->tipas==$item){
				  $arrayOfSum[$item]++;
				 }
				}
	$i++;
	}
	foreach($ktID  as $item){echo '<td>'.$arrayOfSum[$item].'</td>';}
	echo "</tr>";
	echo '</table>';
	
	//-----------------------------------------------------------------------	
	
	
 echo '<div style="clear: both; border: none;">';
   

   echo '<table style="margin:auto; border: 1px solid green;">';
	echo '<tr style="font-weight: bold;border-bottom: 1px solid green;">';
                echo "<td>Skyrius </td>";
				foreach($ktText as $item){
				echo "<td>".$item."</td>";
				}
				echo "<td>Viso</td>";
    echo "</tr>";
	$i=0;
	foreach($skID  as $item){
	echo '<tr style="font-style: italic; text-align: center; float; left;">';
				echo '<td>'.$skText[$i].'</td>';
				foreach($ktID as $itemKtID){
					$arrayOfValueSum[$skText[$i]][$itemKtID]=0;
					
					foreach($rec as $itemRec){
						if($item==$itemRec->skyrius && $itemKtID==$itemRec->tipas){
						$arrayOfValueSum[$skText[$i]][$itemKtID]++; 
					}
				 }
				}
				$suma=0;
			foreach($ktID as $itemKtID){
				echo '<td>'.$arrayOfValueSum[$skText[$i]][$itemKtID].'</td>';
				$suma+=$arrayOfValueSum[$skText[$i]][$itemKtID];
				}
				echo '<td>'.$suma.'</td>';
				
	echo "</tr>";
	$i++;
	}
	echo '</table>';
	//-----------------------------------------------------------------------
	echo '<table style="margin: 10px 10px 10px 10px; border: 1px solid green;">';
	echo '<tr style="font-weight: bold;border-bottom: 1px solid green;">';
                echo "<td>Darbuotojas </td>";
				foreach($ktText as $item){
				echo "<td>".$item."</td>";
				}
				echo "<td>Viso</td>";
    echo "</tr>";
	$i=0;
	foreach($dbID  as $item){
	echo '<tr style="font-style: italic; text-align: center; float; left;">';
				echo '<td>'.$dbText[$i].'</td>';
				foreach($ktID as $itemKtID){
					$arrayOfValueSum[$dbText[$i]][$itemKtID]=0;
					
					foreach($rec as $itemRec){
						if($item==$itemRec->darbuotojas && $itemKtID==$itemRec->tipas){
						$arrayOfValueSum[$dbText[$i]][$itemKtID]++; 
					}
				 }
				}
				$suma=0;
			foreach($ktID as $itemKtID){
				echo '<td>'.$arrayOfValueSum[$dbText[$i]][$itemKtID].'</td>';
				$suma+=$arrayOfValueSum[$dbText[$i]][$itemKtID];
				}
				echo '<td>'.$suma.'</td>';
				
	echo "</tr>";
	$i++;
	}
	echo '</table>';
	

	
	//--------------------------------------------------------------------------------
	echo '<table style="margin: auto; border: 1px solid green; float; left;">';
	echo '<tr style="font-weight: bold;border-bottom: 1px solid green;">';
                echo "<td>MS office versijos </td>";
				echo "<td>kiekis</td>";
    echo "</tr>";
	$i=0;
	foreach($msID  as $item){
	echo '<tr style="font-style: italic; text-align: center;">';
				echo '<td>'.$msText[$i].'</td>';
				$arrayOfSum[$msText[$i]]=0;
				foreach($rec as $itemMs){
				 if($itemMs->ms_office==$item){
				  $arrayOfSum[$msText[$i]]++;
				 }
				}
				echo '<td>'.$arrayOfSum[$msText[$i]].'</td>';
	echo "</tr>";
	$i++;
	}
	echo '</table>';
	
	
	//-----------------------------------------------------------------------	
	echo '<table style="margin: auto; border: 1px solid green; float; left;">';
	echo '<tr style="font-weight: bold;border-bottom: 1px solid green;">';
                echo "<td>Operacinės sistemos </td>";
				echo "<td>Kiekis</td>";
    echo "</tr>";
	$i=0;
	foreach($osID  as $item){
	echo '<tr style="font-style: italic; text-align: center;">';
				echo '<td>'.$osText[$i].'</td>';
				$arrayOfSum[$osText[$i]]=0;
				foreach($rec as $itemOs){
				 if($itemOs->os==$item){
				  $arrayOfSum[$osText[$i]]++;
				 }
				}
				echo '<td>'.$arrayOfSum[$osText[$i]].'</td>';
	echo "</tr>";
	$i++;
	}
	echo '</table>';
	
	//-----------------------------------------------------------------------	
	echo '</div></div>';
 ?> 
 </div>
 </div>