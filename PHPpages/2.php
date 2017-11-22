<div class="container-fluid" style="background-color: white; padding: auto audio auto auto;margin:auto auto auto auto;"> 
<div style="background-color: white; max-width: 690px; margin:auto auto auto auto; padding: auto auto auto auto;">
<h1>Techninė informacija</h1>
<h3>Failų strūktūra</h3> 
<div style="max-width: 689px;">
 <img style="margin: 4px" src="images/file_structure.png" alt="failu struktura" />
 <dl>
<dt>index.php</dt>
  <dd>- Atlieka turinio valdyklio f-ją, jame atvaizduojamas fiksutas turinis(layout) ir sprenžiama kurį turinio failą reik atvaizduot. </dd>
  <dt>/PHPpages</dt>
  <dd>- Turinio atvaizdavimo failai. Betkoks turinio koregavimas atliekamas čia.</dd> 
  <dt>/images</dt>
  <dd>- saugoma vaizdinė informacija. Pastaba. Nesvarbu, kad turinys atvaizduojamas iš PHPpage aplanko. Paveikslelių ar kitų elementų adresą nurodome iš index.php pozicijos. PVZ. Jei norime turinio faile PHPpages/error.php atvaizduot paveikslėlį jo vieta aprašome 'images/paveikslelis.jpg' tas pat galioja ir daugeliui kitų failų.</dd>
  <dt>/config</dt>
  <dd>- čia laikoma konfiguracinė informacija. Duomenų bazės prisijungimai, kiti objektai skirti atvaizdavimui ar duomenų traukimui iš duomenų bazės. Pasikeitus duomenų bazės prisijungimams keičiamas config.php failas. </dd>
  <dt>/VPBstyle</dt>
  <dd>- styliaus failų aplankas.</dd>
</dl>
<p>Sistema iškart reaguoja į pakeitimus duomenų bazėje. T.y. jei atsiranda naujas darbuotojas, tai  duomenų bazėje lentelėje 'darbuotojai' užtenka įvest darbuotojo vardą ir pavardę ir jis automatiškai atsiras saraše. Analogiškai užpildomos visos lentelės (išsskyrus visu irašų lentelę). Visų irašų bendra lentelė pildoma per sistemos formą.</p>
</div>
 </div>
 </div> 
 
 <!--<div class="container-fluid" style="background-color: white; padding: auto audio auto auto;margin:auto auto auto auto;"> 
<div style="background-color: white; max-width: 690px; margin:auto auto auto auto; padding: auto auto auto auto;">
<?php 
//echo '<h1>Techninė informacija</h1>';
 ?> 
 <img style="margin:auto; width:690px" src="images/file_structure.png" alt="failu struktura" /><br>
 <p><b>index.php </b>Atlieka turinio valdyklio f-ją, jame atvaizduojamas fiksutas turinis(layout) ir sprenžiama kurį turinio failą reik atvaizduot.</p>
 <p><b>/PHPpages </b>Turinio atvaizdavimo failai. Betkoks turinio koregavimas atliekamas čia.</p>
 <p><b>/config </b>čia laikoma konfiguracinė informacija. Duomenų bazės prisijungimai, kiti objektai skirti atvaizdavimui ar duomenų traukimui iš duomenų bazės. Pasikeitus duomenų bazės prisijungimams keičiamas config.php failas.</p>
 <p><b>/VPBstyle </b> styliaus failų aplankas.</p>
 <p><b>/images </b>saugoma vaizdinė informacija. Pastaba. Nesvarbu, kad turinys atvaizduojamas iš PHPpage aplanko. Paveikslelių ar kitų elementų adresą nurodome iš index.php pozicijos. PVZ. Jei norime turinio faile PHPpages/error.php atvaizduot paveikslėlį jo vieta aprašome 'images/paveikslelis.jpg' tas pat galioja ir daugeliui kitų failų.</p>
 
 </div>
 </div> -->