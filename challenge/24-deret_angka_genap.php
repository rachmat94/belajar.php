<h3>PHP Challenge #deret angka bilangan genap</h3>
<?php

$val = 20;
for ($i=0; $i < $val; $i++) { 
    if($i % 2 == 0 ){
        if($i != 0){
            echo "-";
        }
        echo $i ;
    }
}