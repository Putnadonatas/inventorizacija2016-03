<?php
class Dbase
{ 
var $link;
//-------------------------------------------------------------------------
function connect(){
    $this->link = mysqli_connect("localhost", "root", "vertrigo", "vpb_devices");
}
//------------------------------------------------------------------------
function ms_office(){
 if($this->link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
	else{
    $sql = "SELECT * FROM ms_office";

    if($result = mysqli_query($this->link, $sql)){

        if(mysqli_num_rows($result) > 0){
            echo "<table>";
                echo "<tr>";
                    echo "<th>id</th>";
                    echo "<th> Versija </th>";
                echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>" . $row['ID'] . "</td>";
                    echo "<td>" .$row['Versija']. "</td>";
                echo "</tr>";
            }
            echo "</table>";
         /*  echo ' <select>';
		   for($j=0;$j<$i;$j++){
		   echo '<option value="'.$j.'">'.$a[$j].'</option>';
		   }
			echo'</select> '; */
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
	}
	}
//-------------------------------------------------------------------------
function busenos(){
 if($this->link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
	else{
    $sql = "SELECT * FROM busenos";

    if($result = mysqli_query($this->link, $sql)){

        if(mysqli_num_rows($result) > 0){
            echo "<table>";
                echo "<tr>";
                    echo "<th>id</th>";
                    echo "<th> Versija </th>";
                echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>" . $row['ID'] . "</td>";
                    echo "<td>" .$row['busena']. "</td>";
                echo "</tr>";
            }
            echo "</table>";
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
	}
	}
//---------------------------------------------------------------------------
function darbuotojai(){
 if($this->link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
	else{
    $sql = "SELECT * FROM darbuotojai";

    if($result = mysqli_query($this->link, $sql)){

        if(mysqli_num_rows($result) > 0){
            echo "<table>";
                echo "<tr>";
                    echo "<th>id</th>";
                    echo "<th> Versija </th>";
                echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>" . $row['ID'] . "</td>";
                    echo "<td>" .$row['darbuotojas']. "</td>";
                echo "</tr>";
            }
            echo "</table>";
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
	}
	}
//---------------------------------------------------------------------------
function os(){
 if($this->link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
	else{
    $sql = "SELECT * FROM os";

    if($result = mysqli_query($this->link, $sql)){

        if(mysqli_num_rows($result) > 0){
            echo "<table>";
                echo "<tr>";
                    echo "<th>id</th>";
                    echo "<th> Versija </th>";
                echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>" . $row['ID'] . "</td>";
                    echo "<td>" .$row['os_versija']. "</td>";
                echo "</tr>";
            }
            echo "</table>";
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
	}
	}
//---------------------------------------------------------------------------
function skyrius(){
 if($this->link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
	else{
    $sql = "SELECT * FROM skyrius";

    if($result = mysqli_query($this->link, $sql)){

        if(mysqli_num_rows($result) > 0){
            echo "<table>";
                echo "<tr>";
                    echo "<th>id</th>";
                    echo "<th> Versija </th>";
                echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>" . $row['ID'] . "</td>";
                    echo "<td>" .$row['skyrius']. "</td>";
                echo "</tr>";
            }
            echo "</table>";
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
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

    if($result = mysqli_query($this->link, $sql)){

        if(mysqli_num_rows($result) > 0){
            echo "<table>";
                echo "<tr>";
                    echo "<th>id</th>";
                    echo "<th> Versija </th>";
                echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>" . $row['ID'] . "</td>";
                    echo "<td>" .$row['tipas']. "</td>";
                echo "</tr>";
            }
            echo "</table>";
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
	}
	}
//---------------------------------------------------------------------------
function visa_info(){
 if($this->link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
	else{
    $sql = "SELECT * FROM visa_info";

    if($result = mysqli_query($this->link, $sql)){

        if(mysqli_num_rows($result) > 0){
            echo "<table>";
                echo "<tr>";
                    echo "<th>id&nbsp;</th>";
                    echo "<th> Versija </th>";
                echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>&nbsp;" . $row['ID'] . "</td>";
                    echo "<td>&nbsp;" .$row['darbuotojasID']. "</td>";
					 echo "<td>&nbsp;" .$row['skyriusID']. "</td>";
					  echo "<td>&nbsp;" .$row['tipasID']. "</td>";
					   echo "<td>&nbsp;" .$row['modelis']. "</td>";
					    echo "<td>&nbsp;" .$row['kaina']. "</td>";
						echo "<td>&nbsp;" .$row['pirkimo_data']. "</td>";
						echo "<td>&nbsp;" .$row['isdavimo_data']. "</td>";
						echo "<td>&nbsp;" .$row['nurasymo_data']. "</td>";
						echo "<td>&nbsp;" .$row['osID']. "</td>";
						echo "<td>&nbsp;" .$row['ms_officeID']. "</td>";
						echo "<td>&nbsp;" .$row['komercine_programa_0ID']. "</td>";
						echo "<td>&nbsp;" .$row['komercine_programa_1ID']. "</td>";
						echo "<td>&nbsp;" .$row['komercine_programa_2ID']. "</td>";
						echo "<td>&nbsp;" .$row['komercine_programa_3ID']. "</td>";
						echo "<td>&nbsp;" .$row['pastabos']. "</td>";
                echo "</tr>";
            }
            echo "</table>";
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
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