<h3>PHP Challenge #deret angka bilangan ganjil</h3>
<?php

$val = 20;
for ($i=0; $i < $val; $i++) { 
    if($i % 2 == 1 ){
        if($i != 1){
            echo "-";
        }
        echo $i ;
    }
}