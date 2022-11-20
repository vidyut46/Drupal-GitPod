<?php
function isogram($names){
    $result=[];
    $name-strtolower($names);
    $new_name=str_split($name);
 foreach ($new_name as $gold){
    $x=substr_count ($name,$gold);
    if($x==1){
        array_push($result,$gold);
    }
 }
 $y=count($result);
 $z=strlen($name);
 if ($y==$z){
    return "True<br>";}
 else{
    return "False<br>";
    }
 }
}