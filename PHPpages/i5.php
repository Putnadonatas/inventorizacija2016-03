<div class="container-fluid" style="background-color: white; padding: auto audio auto auto;margin:auto auto auto auto;"> 
<div style="background-color: white; max-width: 690px; margin:auto auto auto auto; padding: auto auto auto auto;">
<?php 
echo '<h1>Įrašų naikinimas</h1>';

if(isset($_POST['admin']) && $_POST['admin']==AdminPassw){
   $_POST['admin']='';
   if(isset($_POST['ID']) && $_POST['ID']!=''){
   $dbase->connect();
   $dbase->delete_visa_info($_POST['ID']);
   $dbase->close();
   }
 }
  echo '<form action="index.php?page=7" method="post">';
  echo '<table style="width: 100%;">';
  echo '<tr>';
  echo '<td class="newData">Inventorius numeris:</td><td class="newData"><input type="text" name="ID"></td></tr>';
 echo '<tr><td class="newData" style="font-weight: bold;">Administratoriaus slaptažodis:</td><td class="newData"><input type="password" name="admin"></td></tr>';
 echo '</table>';
 echo '<input type="submit" value="Naikinti įrašą" >';
 echo '</form>';
 ?> 
 </div>
 </div>