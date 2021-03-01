<h3>PHP Challenge #Pattern 6</h3>
<?php 
for ($i=0; $i < 10; $i++) { 
    for ($j=0; $j <= 40; $j++) { 
        if($j % 2 == 0){
            if($i % 2 == 0){
                echo "/\\";
            }else{
                echo "\/";
            }
        }else{
            echo "/\\";
        }
    }
    echo "<br>";
}