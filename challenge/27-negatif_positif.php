<h3>PHP CHallange #menentukan bilangan Negatif, 0 , Positif, Bukan angka</h3>
<?php 
function bilangan($val){
    if (is_int($val)) {
        if($val < 0 ){
            echo " = Bilangan Negatif";
        }else if($val > 0){
            echo " = Bilangan Positif";
        }else {
            echo " = 0";
        }
    }else{
        echo  " = Bukan angka";
    }
}
$val1 = -90;
$val2 = 90;
$val3 = 0;
$val4 = "abc";

echo $val1;
echo bilangan($val1);
echo "<br>";

echo $val2;
echo bilangan($val2);
echo "<br>";

echo $val3;
echo bilangan($val3);
echo "<br>";

echo $val4;
echo bilangan($val4);
echo "<br>";



?>