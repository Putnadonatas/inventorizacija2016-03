 function textHeader()
	{
	if($( window ).width()>490){
	$("#textPos").css( "margin-top", "27px");
	$("#searchMenu").css( "margin-top", "27px");
	$("#logoVPB").css( "margin-bottom:", "0px");
	}
	else{
	$("#textPos").css( "margin-top", "0px");
		$("#searchMenu").css( "margin-top", "0px");
	$("#logoVPB").css( "margin-bottom:", "60px");
	}
	}
	//------------------------------------------------------------
	function Nav()
	{
	if($( window ).width()<1100){
	$("#naviVPBlast").css( "border-right", "0px solid transparent");
	$("#naviVPBlast").css( "border-left", "0px solid transparent");
	$(".naviVPB").css( "border-left", "0px solid transparent");
    $("#naviVPBlast").css( "display", "list-item");
	$(".naviVPB").css( "display", "list-item");
	}
	else{
	$("#naviVPBlast").css( "border-right", "1px solid black");
	$("#naviVPBlast").css( "border-left", "1px solid black");
	$("#naviVPBlast").css( "display", "inline-block");
	$(".naviVPB").css( "display", "inline-block");
	$(".naviVPB").css( "border-left", "1px solid black");
	}
	}
	//------------------------------------------------------------------
	function Blocks()
	{
	if($( window ).width()<=490){
	   $(".shadowBox").css( "height", "0px");
	    $(".shadowBoxTop").css( "height", "0px");
	    $(".emptyBox").css( "height", "0px");
	    $(".shadowBox").css( "width", "97%");
	    $(".shadowBoxTop").css( "width", "97%");
	    $(".emptyBox").css( "width", "97%");
		$("#textMessage").css( "width", "97%");
		$("#news").css( "width", "97%");
		$("#topography").css( "width", "97%");
		$("#trademarks").css( "width", "97%");
		$("#information").css( "width", "97%");
		$("#eServices").css( "width", "97%");
		$("#Official").css( "width", "97%");
		$("#design").css( "width", "97%");
		$("#inventions").css( "width", "97%");
		$(".menuButton").css( "width", "97%");
	    }
		else if($( window ).width()>490){
		$(".shadowBox").css( "width", "202px");
	    $(".shadowBoxTop").css( "width", "202px");
	    $(".emptyBox").css( "width", "202px");
		$("#textMessage").css( "width", "202px");
		$("#news").css( "width", "202px");
		$("#topography").css( "width", "202px");
		$("#trademarks").css( "width", "202px");
		$("#information").css( "width", "202px");
		$("#eServices").css( "width", "202px");
		$("#Official").css( "width", "202px");
		$("#design").css( "width", "202px");
		$("#inventions").css( "width", "202px");
		$(".menuButton").css( "width", "202px");
		$(".shadowBox").css( "height", "165px");
	    $(".shadowBoxTop").css( "height", "165px");
	   $(".emptyBox").css( "height", "165px");
	}
	}
	//-----------------------------------------------------	
	$(window).resize(function() {
	Blocks();
	Nav();
	textHeader();
	});
	//----------------------------------------------------
	$(window).ready(function() {
	Blocks();
	Nav();
	textHeader();
	});
	//----------------------------
	function setValue(name, value){
	 document.getElementsByName(name)[0].value = value;
	 }
	//-----------------------------------------------------
	function setVar(setNr) {
       this.oldNumber=setNr;
	   }
	//---------------------------------------------------
	function setSubmit(){
	var z = document.createElement("input");
    z.setAttribute("type", "submit");
	z.setAttribute("id", "pateikti");
    document.getElementById("forma").appendChild(z); 
	}
//-----------------------------------------------------
function removeSubmit(){
document.getElementById("pateikti").remove();
}
//----------------------------------
function drop_list(){
	setValueDrop();
	//removeElementById(oldNumber)
	var sk=document.getElementById("filter").value;
	//alert(sk.toString());
	/*if(this.oldNumber!='0' || this.oldNumber==document.getElementById("filter").value.toString()){
	}
	else if(this.oldNumber!='0') {
	removeSubmit();
	//removeElementById(this.oldNumber);
	createElement();
	}
	else{
	createElement();
	} */
	if(this.oldNumber=="undefined"){setVar('0');}
	else if(this.oldNumber!=0){
	removeElementById();
	}
	createElement();	
    this.oldNumber=document.getElementById("filter").value
}
//-----------------------------------------------------
function createElement(){
switch(document.getElementById("filter").value){
 case '1':
  var x = document.createElement("input");
    x.setAttribute("type", "text");
	x.setAttribute("id", "inv_nr");
	x.setAttribute("name", "inv_nr");
    x.setAttribute("value", "");
    document.getElementById("forma").appendChild(x);
	setSubmit();
	setVar('1');
	
  break;
 case '2':
 var x = document.createElement("select");
	x.setAttribute("id", "skyrius");
	x.setAttribute("name", "skyrius");
	document.getElementById("forma").appendChild(x);
	for(var i=0;i<this.Skid.length;i++){
	var y = document.createElement("option");
	y.text=this.Sk[i];
    y.setAttribute("value",this.Skid[i]);
    document.getElementById("skyrius").appendChild(y);
	}
	setSubmit();
	setVar('2');
  break;
 case '3':
  var x = document.createElement("select");
	x.setAttribute("id", "darb");
	x.setAttribute("name", "darb");
	document.getElementById("forma").appendChild(x);
	var y=0;
	for(var i=0;i<this.Dbid.length;i++){
	var y = document.createElement("option");
	y.setAttribute("value",this.Dbid[i]);
	y.text=this.Db[i];
    document.getElementById("darb").appendChild(y);
	}
	setSubmit();
	setVar('3');
  break;
  case '4':
  var x = document.createElement("input");
    x.setAttribute("type", "number");
	x.setAttribute("id", "pirki_Data");
	x.setAttribute("name", "pirki_Data");
	x.setAttribute("min", "1991");
    x.setAttribute("value", "");
    document.getElementById("forma").appendChild(x);
	setSubmit();
	setVar('4');
  break;
  case '5':
  var x = document.createElement("input");
    x.setAttribute("type", "number");
	x.setAttribute("id", "isdav_Data");
	x.setAttribute("name", "isdav_Data");
	x.setAttribute("min", "1991");
    x.setAttribute("value", "");
    document.getElementById("forma").appendChild(x);
	setSubmit();
	setVar('5');
  break;
  case '6':
   var x = document.createElement("select");
	x.setAttribute("id", "os");
	x.setAttribute("name", "os");
	document.getElementById("forma").appendChild(x);
	for(var i=0;i<this.OSid.length;i++){
	var y = document.createElement("option");
	y.text=this.OS[i];
    y.setAttribute("value",this.OSid[i]);
    document.getElementById("os").appendChild(y);
	}
	setSubmit();
	setVar('6');
  break;
  case '7':
  var x = document.createElement("select");
	x.setAttribute("id", "ms");
	x.setAttribute("name", "ms");
	document.getElementById("forma").appendChild(x);
	for(var i=0;i<this.MSid.length;i++){
	var y = document.createElement("option");
	y.text=this.MS[i];
    y.setAttribute("value",this.MSid[i]);
    document.getElementById("ms").appendChild(y);
	}
	setSubmit();
	setVar('7');
  break; 
}
}
//-----------------------------------------------------------------------
function removeElementById(){
switch(this.oldNumber){
 case '1':
   document.getElementById("inv_nr").remove();
   removeSubmit();
  break;
 case '2':
    document.getElementById("skyrius").remove();
	removeSubmit();
  break;
 case '3':
    document.getElementById("darb").remove();
	removeSubmit();
  break;
  case '4':
    document.getElementById("pirki_Data").remove();
	removeSubmit();
  break;
  case '5':
    document.getElementById("isdav_Data").remove();
	removeSubmit();
  break;
  case '6':
	document.getElementById("os").remove();
	removeSubmit();
  break;
  case '7':
	document.getElementById("ms").remove();
	removeSubmit();
  break; 
}
}
//----------------------------------------------

	
	
	