<?php
//----------------------------------------------------------------------
function getStringSQL($arrayText, $arrayID, $id){
$i=0;
 foreach($arrayID as $item){
 if($arrayID[$i]==$id){ 
 return $arrayText[$i];
 break;
 }
 $i++;
 }
return " "; 
}
//--------------------------------------------------------------------
function js_str($s)
{
    return '"' . addcslashes($s, "\0..\37\"\\") . '"';
} 
function js_array($array)
{
    $temp = array_map('js_str', $array);
    return '[' . implode(',', $temp) . ']';
}
//--------------------------------------------------------------------
function getSumOf(Record $record, $id){
$sum=0;
 foreach($record as $item){
 if($record->ms_office==$id){ 
 $sum++;
 }
 }
return $sum; 
}
//--------------------------------------------------------------------

?>