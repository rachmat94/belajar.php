<?php 
/* menentukan ganjil atau genap

*/
function ganjilGenap($value){
    if($value % 2 == 0 ){
        return $value . " adalah Genap.";
    }else{
        return $value . " adalah Ganjil.";
    }
}

echo ganjilGenap(3);
echo "<br>";
echo ganjilGenap(4);