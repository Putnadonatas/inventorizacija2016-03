
<div style="clear: both;">
    <?php
 $i=0;
    $link = mysqli_connect("localhost", "root", "vertrigo", "vpb_devices");
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $sql = "INSERT INTO visa_info (ID, darbuotojasID, skyriusID, tipasID, modelis, kaina, pirkimo_data, isdavimo_data,nurasymo_data, osID, ms_officeID, komercine_programa_0ID, komercine_programa_1ID, komercine_programa_2D,komercine_programa_3ID, pastabos) VALUES('$name', '$email', '$city','$phonNr','$problemTxt','$phoneOn','$quality','$date')";

    if($result = mysqli_query($link, $sql)){
        //darbas atliktas
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    mysqli_close($link);
    ?>
	</div>

