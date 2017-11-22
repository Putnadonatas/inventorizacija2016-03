<?php
class Dbase
{ 
var $link;
 public  $arrayOfText;
 public  $arrayOfID;
 public  $sum;
 public  $visokiek;
//-------------------------------------------------------------------------
function connect(){
    $this->link = mysqli_connect("localhost", user, pass, db);

	if($this->link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
	else
	{
	mysqli_query( $this->link, 'SET NAMES "utf8" COLLATE "utf8_general_ci"' );
	}
}

//------------------------------------------------------------------------
function ms_office(){
 if($this->link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
	else{
    $sql = "SELECT * FROM ms_office";
     $this->arrayOfText=null;
	 $this->arrayOfID=null;
    if($result = mysqli_query($this->link, $sql)){
	     $this->sum =0;
        if(mysqli_num_rows($result) > 0){  
            while($row = mysqli_fetch_array($result)){
                    $this->arrayOfID[$this->sum]= $row['ID'];
                    $this->arrayOfText[$this->sum]=$row['Versija'];
					$this->sum++;
            }
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($this->link);
    }
	}
	}
//-------------------------------------------------------------------------
function busenos(){
unset($this->arrayOfText);
 if($this->link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
	else{
    $sql = "SELECT * FROM busenos";
	$this->arrayOfText=null;
	$this->arrayOfID=null;
	
    if($result = mysqli_query($this->link, $sql)){
		$this->sum =0;
        if(mysqli_num_rows($result) > 0){
           
            while($row = mysqli_fetch_array($result)){
                   $this->arrayOfID[$this->sum]= $row['ID'];
                    $this->arrayOfText[$this->sum]=$row['busena'];
					$this->sum++;
            }
           
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($this->link);
    }
	}
	}
//---------------------------------------------------------------------------
function darbuotojai(){
unset($this->arrayOfText);
 if($this->link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
	else{
    $sql = "SELECT * FROM darbuotojai";
	$this->arrayOfText=null;
	$this->arrayOfID=null;

    if($result = mysqli_query($this->link, $sql)){
		$this->sum =0;
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
			
                    $this->arrayOfID[$this->sum]=$row['ID'];
                    $this->arrayOfText[$this->sum]=$row['darbuotojas'];
					$this->sum++;
            }
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($this->link);
    }
	}
	}
//---------------------------------------------------------------------------
function os(){
unset($this->arrayOfText);
 if($this->link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
	else{
    $sql = "SELECT * FROM os order by ID asc";
	$this->arrayOfText=null;
	$this->arrayOfID=null;

    if($result = mysqli_query($this->link, $sql)){
		$this->sum =0;
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                    $this->arrayOfID[$this->sum]= $row['ID'];
                    $this->arrayOfText[$this->sum]=$row['os_versija'];
					$this->sum++;
            }
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($this->link);
    }
	}
	}
//---------------------------------------------------------------------------
function skyrius(){
unset($this->arrayOfText);
 if($this->link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
	else{
    $sql = "SELECT * FROM skyrius";
	$this->arrayOfText=null;
	$this->arrayOfID=null;

    if($result = mysqli_query($this->link, $sql)){
		$this->sum =0;
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                    $this->arrayOfID[$this->sum]= $row['ID'];
                    $this->arrayOfText[$this->sum]=$row['skyrius'];
					$this->sum++;
            }
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($this->link);
    }
	}
	}
//---------------------------------------------------------------------------
function kompiuteriotipas(){

 if($this->link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
	else{
    $sql = "SELECT * FROM kompiuteriotipas";
	$this->arrayOfText=null;
	$this->arrayOfID=null;

    if($result = mysqli_query($this->link,$sql)){
		$this->sum =0;
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                    $this->arrayOfID[$this->sum]=$row['ID'];
                    $this->arrayOfText[$this->sum]=$row['tipas'];
					$this->sum++;
            }
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($this->link);
    }
	}
	}
//---------------------------------------------------------------------------
function komercine_programa(){

 if($this->link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
	else{
    $sql = "SELECT * FROM tpi";
	$this->arrayOfText=null;
	$this->arrayOfID=null;

    if($result = mysqli_query($this->link,$sql)){
		$this->sum =0;
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                    $this->arrayOfID[$this->sum]=$row['ID'];
                    $this->arrayOfText[$this->sum]=$row['tipas'];
					$this->sum++;
            }
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($this->link);
    }
	}
	}
//---------------------------------------------------------------------------
function visa_info(){
 $i=0;
 if($this->link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
	else{
    $sql = "SELECT * FROM visa_info order by darbuotojasID asc";

    if($result = mysqli_query($this->link, $sql)){

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
			
					$record[$i] = new  Record();
                    $record[$i]->inv_nr = $row['ID'];
                    $record[$i]->darbuotojas=$row['darbuotojasID'];
					$record[$i]->skyrius=$row['skyriusID'];
					$record[$i]->tipas=$row['tipasID'];
					$record[$i]->model=$row['modelis'];
					$record[$i]->kaina=$row['kaina'];
				    $record[$i]->pirkimoData=$row['pirkimo_data'];
					$record[$i]->isdavimoData=$row['isdavimo_data'];
					$record[$i]->nurasymoData=$row['nurasymo_data'];
					$record[$i]->os=$row['osID'];
					$record[$i]->ms_office=$row['ms_officeID'];
					$record[$i]->komercine_programa_0=$row['komercine_programa_0ID'];
					$record[$i]->komercine_programa_1=$row['komercine_programa_1ID'];
					$record[$i]->komercine_programa_2=$row['komercine_programa_2ID'];
					$record[$i]->komercine_programa_3=$row['komercine_programa_3ID'];
					$record[$i]->statusas=$row['busenaID'];
					$record[$i]->pastabos=$row['pastabos'];
					$i++;
            }
            mysqli_free_result($result);
			$this->visokiek=$i;
			return $record;
        } else{
            echo "<p>Irašų nerasta.</p>";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($this->link);
    }
	}
	return 0;
	}
//---------------------------------------------------------------------------
function visa_info_where($type,$value){
 $i=0;
 if($this->link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
	else{
    $sql = "SELECT * FROM visa_info where ".$type."='".$value."'";

    if($result = mysqli_query($this->link, $sql)){

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
			
					$record[$i] = new  Record();
                    $record[$i]->inv_nr = $row['ID'];
                    $record[$i]->darbuotojas=$row['darbuotojasID'];
					$record[$i]->skyrius=$row['skyriusID'];
					$record[$i]->tipas=$row['tipasID'];
					$record[$i]->model=$row['modelis'];
					$record[$i]->kaina=$row['kaina'];
				    $record[$i]->pirkimoData=$row['pirkimo_data'];
					$record[$i]->isdavimoData=$row['isdavimo_data'];
					$record[$i]->nurasymoData=$row['nurasymo_data'];
					$record[$i]->os=$row['osID'];
					$record[$i]->ms_office=$row['ms_officeID'];
					$record[$i]->komercine_programa_0=$row['komercine_programa_0ID'];
					$record[$i]->komercine_programa_1=$row['komercine_programa_1ID'];
					$record[$i]->komercine_programa_2=$row['komercine_programa_2ID'];
					$record[$i]->komercine_programa_3=$row['komercine_programa_3ID'];
					$record[$i]->statusas=$row['busenaID'];
					$record[$i]->pastabos=$row['pastabos'];
					$i++;
            }
            mysqli_free_result($result);
			$this->visokiek=$i;
			return $record;
        } else{
            echo "<p>Irašų nerasta.</p>";
			return 0;
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($this->link);
    }
	}
	}
//---------------------------------------------------------------------------
function OneRecord_info($inv){
 $i=0;
 if($this->link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
	else{
    $sql = 'SELECT * FROM visa_info Where ID="'.$inv.'"';

    if($result = mysqli_query($this->link, $sql)){

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
			
					$rec = new  Record();
                    $rec->inv_nr = $row['ID'];
                    $rec->darbuotojas=$row['darbuotojasID'];
					$rec->skyrius=$row['skyriusID'];
					$rec->tipas=$row['tipasID'];
					$rec->model=$row['modelis'];
					$rec->kaina=$row['kaina'];
				    $rec->pirkimoData=$row['pirkimo_data'];
					$rec->isdavimoData=$row['isdavimo_data'];
					$rec->nurasymoData=$row['nurasymo_data'];
					$rec->os=$row['osID'];
					$rec->ms_office=$row['ms_officeID'];
					$rec->komercine_programa_0=$row['komercine_programa_0ID'];
					$rec->komercine_programa_1=$row['komercine_programa_1ID'];
					$rec->komercine_programa_2=$row['komercine_programa_2ID'];
					$rec->komercine_programa_3=$row['komercine_programa_3ID'];
					$rec->statusas=$row['busenaID'];
					$rec->pastabos=$row['pastabos'];
            }
            mysqli_free_result($result);
			return $rec;
        } else{
            echo "<p>Irašų nerasta.</p>";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($this->link);
    }
	}
	return 0;
	}
//---------------------------------------------------------------------------
function insert_visa_info($record){

if($this->link === false){
     die("ERROR: Could not connect. " . mysqli_connect_error());
    }
 else{

 if($record->isdavimoData!='' && $record->nurasymoData!=''){
	$sql = "INSERT INTO visa_info(ID, darbuotojasID, skyriusID, tipasID, modelis, kaina, pirkimo_data, isdavimo_data, nurasymo_data, osID, ms_officeID, komercine_programa_0ID, komercine_programa_1ID, komercine_programa_2ID, komercine_programa_3ID, busenaID, pastabos) VALUES ('$record->inv_nr', '$record->darbuotojas', '$record->skyrius', '$record->tipas', '$record->model', '$record->kaina', '$record->pirkimoData', '$record->isdavimoData', '$record->nurasymoData', '$record->os', '$record->ms_office', '$record->komercine_programa_0', '$record->komercine_programa_1', '$record->komercine_programa_2', '$record->komercine_programa_3', '$record->statusas', '$record->pastabos')";
	}
	else if($record->isdavimoData!=''){
	$sql = "INSERT INTO visa_info(ID, darbuotojasID, skyriusID, tipasID, modelis, kaina, pirkimo_data, isdavimo_data, osID, ms_officeID, komercine_programa_0ID, komercine_programa_1ID, komercine_programa_2ID, komercine_programa_3ID, busenaID, pastabos) VALUES ('$record->inv_nr', '$record->darbuotojas', '$record->skyrius', '$record->tipas', '$record->model', '$record->kaina', '$record->pirkimoData', '$record->isdavimoData','$record->os', '$record->ms_office', '$record->komercine_programa_0', '$record->komercine_programa_1', '$record->komercine_programa_2', '$record->komercine_programa_3', '$record->statusas', '$record->pastabos')"; // be nurašymo datos
	}
	else {
	$sql = "INSERT INTO visa_info(ID, darbuotojasID, skyriusID, tipasID, modelis, kaina, pirkimo_data, osID, ms_officeID, komercine_programa_0ID, komercine_programa_1ID, komercine_programa_2ID, komercine_programa_3ID, busenaID, pastabos) VALUES ('$record->inv_nr', '$record->darbuotojas', '$record->skyrius', '$record->tipas', '$record->model', '$record->kaina', '$record->pirkimoData','$record->os', '$record->ms_office', '$record->komercine_programa_0', '$record->komercine_programa_1', '$record->komercine_programa_2', '$record->komercine_programa_3', '$record->statusas', '$record->pastabos')"; // be nurašymo datos ir isdavimo
	}
	
	if(mysqli_query($this->link, $sql)){
     echo '<p style="color: green;">Darbas sekmingai atliktas.<p>';
	} 
	else{
     echo "ERROR: Could not able to execute $sql. ".mysqli_error($this->link);
	}
}

}
//----------------------------------------------------------------------------------------
function update_visa_info($record){

if($this->link === false){
     die("ERROR: Could not connect. " . mysqli_connect_error());
    }
 else{
 
if($record->isdavimoData!='' && $record->nurasymoData!=''){
	$sql = "UPDATE visa_info SET darbuotojasID='$record->darbuotojas', skyriusID='$record->skyrius', tipasID='$record->tipas', modelis='$record->model',kaina='$record->kaina', pirkimo_data='$record->pirkimoData', isdavimo_data='$record->isdavimoData', nurasymo_data='$record->nurasymoData', 	osID='$record->os', ms_officeID='$record->ms_office',komercine_programa_0ID='$record->komercine_programa_0',komercine_programa_1ID='$record->komercine_programa_1',komercine_programa_2ID='$record->komercine_programa_2',komercine_programa_3ID='$record->komercine_programa_3', busenaID='$record->statusas',pastabos='$record->pastabos'  WHERE ID='$record->inv_nr'";
	}
	else if($record->isdavimoData!=''){
	$sql = "UPDATE visa_info SET darbuotojasID='$record->darbuotojas', skyriusID='$record->skyrius', tipasID='$record->tipas', modelis='$record->model',kaina='$record->kaina', pirkimo_data='$record->pirkimoData', isdavimo_data='$record->isdavimoData', osID='$record->os', ms_officeID='$record->ms_office',komercine_programa_0ID='$record->komercine_programa_0',komercine_programa_1ID='$record->komercine_programa_1',komercine_programa_2ID='$record->komercine_programa_2',komercine_programa_3ID='$record->komercine_programa_3', busenaID='$record->statusas',pastabos='$record->pastabos'  WHERE ID='$record->inv_nr'"; // be nurašymo datos
	}
	else {
	$sql = "UPDATE visa_info SET darbuotojasID='$record->darbuotojas', skyriusID='$record->skyrius', tipasID='$record->tipas', modelis='$record->model',kaina='$record->kaina', pirkimo_data='$record->pirkimoData', osID='$record->os', ms_officeID='$record->ms_office',komercine_programa_0ID='$record->komercine_programa_0',komercine_programa_1ID='$record->komercine_programa_1',komercine_programa_2ID='$record->komercine_programa_2',komercine_programa_3ID='$record->komercine_programa_3', busenaID='$record->statusas',pastabos='$record->pastabos'  WHERE ID='$record->inv_nr'"; // be nurašymo datos ir isdavimo
	} 
	
	if(mysqli_query($this->link, $sql)){
     echo '<p style="color: green;">Darbas sekmingai atliktas.<p>';
	} 
	else{
     echo "ERROR: Could not able to execute $sql. ".mysqli_error($this->link);
	}
}

}
//---------------------------------------------------------------------------------------------------------
function delete_visa_info($inv){

if($this->link === false){
     die("ERROR: Could not connect. " . mysqli_connect_error());
    }
 else{
	$sql = "DELETE FROM visa_info WHERE ID='".$inv."'";
	
	if(mysqli_query($this->link, $sql)){
     echo '<p style="color: green;">Įrašas sunaikintas.<p>';
	} 
	else{
     echo "ERROR: Could not able to execute $sql. ".mysqli_error($this->link);
	}
}

}
//---------------------------------------------------------------------------
	function close(){
    mysqli_close($this->link);
	}
//------------------------------------------------------------------------

}
?>