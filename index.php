 <?php
 include ('config/config.php');
 include ('config/functions.php');
 include ('config/recordClass.php');
 include('config/DBclass.php');
 include('PHPpages/inputForm.php');
 $dbase = new Dbase();
 include('config/getRecords.php');
 ?>
 <!DOCTYPE html>
<html>
 <head>
	<title>Lietuvos Respublikos valstybinis patentų biuras</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="patent, dizain,  prekių ženkl ">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<?php
	echo '<script type="text/javascript">';
	echo 'function setValueDrop(){';
	echo ' this.MS = ', js_array($msText), ';';
	echo ' this.MSid = ', js_array($msID), ';';
	echo ' this.Sk = ', js_array($skText), ';';
	echo ' this.Skid = ', js_array($skID), ';';
	echo ' this.OS = ', js_array($osText), ';';
	echo ' this.OSid = ', js_array($osID), ';';
	echo ' this.Db = ', js_array($dbText), ';';
	echo ' this.Dbid = ', js_array($dbID), ';}';
	echo '</script>'; 
	?>
	<style type="text/css">
	span.bold{
	font-weight: bold;
	font-size: 18px;
	}
	</style>
	<link rel="stylesheet" type="text/css" href="VPBstyle/style.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src="javascript/vpb.js"></script>
</head>
<body style="min-width:300px; overflow-y: scroll;">  
  <div class="jumbotron" style="margin: 0px 0px 25px 0px;  border-radius: 0px 0px 0px 0px; width: auto;"> 
   <div class="container" Style="max-width: 685px;">
  <div class="row">
	<div class="col-md-12">
    <a href="index.php" ><img style="float:left; margin-right:20px;"  src="images/logo.png" alt="logoVPB"></a>
	 <div style="margin-top: 35px; float: left;">
	 <span  id="headerLT">Lietuvos Respublikos valstybinis patentų biuras</span><br>
	 <span  id="headerEN">The State Patent Bureau of the Republic of Lithuania</span>
	 </div>
    </div>
   </div>
   </div>
<div class="container" Style="max-width: 685px;" > 
 <nav class="navbar navbar-default" style="background: none; font-size:12px; text-transform: uppercase;border:none; margin:10px 0px 0px 0px; padding: 0px 0px 0px 0px; clear:both; "> 
  <div class="container-fluid" style="margin:0px 0px 0px 0px; padding: 0px 0px 0px 0px;" > 
      <ul class="nav navbar-nav" style="margin:0px 0px 0px 0px; padding: padding: 0px 0px 0px 0px;text-align: center;" >
	  <li style="padding:0px 0px 0px 0px;">&nbsp;</li>
        <li><a class="naviVPB" href="index.php" style="padding: 0px 40px 0px 40px" ><img style="height:17px;" src="images/home.png" alt="home"></a></li>
        <li><a class="naviVPB" href="?page=1">Apie puslapį</a></li>
        <li><a class="naviVPB" href="?page=2">Techninė informacija</a></li>   
      </ul> 
  </div>
</nav>
  </div> 
  </div>
<?php
if (isset($_GET['page']) && (($_GET['page']<1) || ($_GET['page']>8))){include('PHPpages/error.php');}
		    elseif(isset($_GET['page'])&& ($_GET['page']==1)){include('PHPpages/1.php');}
			  elseif(isset($_GET['page']) && ($_GET['page']==2)){include('PHPpages/2.php');}
			  elseif(isset($_GET['page']) && ($_GET['page']==3)){include('PHPpages/i1.php');}
			  elseif(isset($_GET['page']) && ($_GET['page']==4)){include('PHPpages/i2.php');}
			  elseif(isset($_GET['page']) && ($_GET['page']==5)){include('PHPpages/i3.php');}
			  elseif(isset($_GET['page']) && ($_GET['page']==6)){include('PHPpages/i4.php');}
			  elseif(isset($_GET['page']) && ($_GET['page']==7)){include('PHPpages/i5.php');} 
			  elseif(isset($_GET['page']) && ($_GET['page']==8)){include('PHPpages/i6.php');}
			    else{include('PHPpages/main.php');} 
?>
<footer> 
<div class="jumbotron" style="text-align: center; border-radius: 0px 0px 0px 0px;  overflow: hidden;clear: both; margin: 25px auto auto auto;">
<p style="font-size:12px;" >Biudžetinė įstaiga, Kalvarijų g. 3, LT-09310 Vilnius, Lietuva (žemėlapis), tel. (8 5) 2780250, faks. (8 5) 2750723, el. paštas spb@vpb.gov.lt<br>
Duomenys apie įstaigą kaupiami ir saugomi Juridinių asmenų registre. Juridinio asmens kodas: 188708943</p>
</div>
</footer>
</div>
</body>
</html> 