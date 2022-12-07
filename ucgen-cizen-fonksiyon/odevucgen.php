<?php
function ucgen($value){
    $str="";
    $k=0;
    while ($k <=$value){
        for($j=0;$j<=$k;$j++){
            $str .= "0 ";

        }
        $str .='<br>';
        $k++;
    }
    return $str;
}
echo ucgen(10);