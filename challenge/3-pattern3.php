<h3>PHP Challenge #Pattern 3</h3>
<?php 
for ($i=0; $i < 10; $i++) { 
    if($i==0 || $i==9){
        for ($j=0; $j <= 10; $j++) { 
            if($j == 0 || $j == 10){
                echo "||";
            }else{
                echo "==";
            }
        }
        echo "<br>";
    }else if($i == 4){
        for ($k=0; $k <= 10; $k++) { 
            if($k==4){
                echo "P";
            }else if($k == 5){
                echo "H";
            }else if($k == 6){
                echo "P";
            }else{
                echo "==";
            }
        }
    }else{
        echo "<br>";
    }
    
}