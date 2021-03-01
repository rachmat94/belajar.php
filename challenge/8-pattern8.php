<h3>PHP Challenge #Pattern 8</h3>
<?php 
for ($i=0; $i < 10; $i++) { 
    if($i==9){
        for ($j=0; $j <= 20; $j++) { 
            echo "*";
        }
    }else{
        echo "*";
    }
    echo "<br>";
}