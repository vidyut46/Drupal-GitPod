<?php
function like($names){
    if (count($names)==0){
        return 'no one likes this <br>';
    }
    if (count($names)==1){
        return "$names[0] likes this <br>";
    }
    if (count($names)==2){
        return "$names[0] and $names[1] likes this<br>";
    }
    if (count($names)==3){
        return "$names[0],$names[1] and $names[2] likes this<br>";
    }
    $x=count($names)-2;
    if (count($names)>3){
        return "$names[0],$names[1] and $x others likes this";
    }
}
echo like([]); 
echo like(['philips']);
echo like(['philips','zebronics']);
echo like(['philips','zebronics','sony']);