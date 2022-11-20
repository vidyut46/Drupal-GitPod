<?php
function check($string,$substring){
    $upper_string=strtolower($string)
    $upper_substring=strtolower($substring);
    if(str_ends_with($upper_string,$upper_substring)){
        return"True<br>";
    } else {
        return "False<br>";
    }
}
echo check("sabarirajan","AN");
echo check("vasanth","va");
?>