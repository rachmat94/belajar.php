<h3>PHP Challenge #Angka atau Bukan Angka</h3>
<?php 
function angka_bukan($val){
    if(is_int($val)){
        return $val . " = Angka";
    }else{
        return $val ." = Bukan Angka";
    }
}

$val1 = -23;
$val2 = "ac";

echo angka_bukan($val1) ;
echo "<br>";
echo angka_bukan($val2) ;




?>