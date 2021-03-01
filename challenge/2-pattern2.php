<h3>PHP Challenge #Pattern 2</h3>
<?php 
for ($i=0; $i < 10; $i++) { 
    echo "|";
    
    if($i==9){
        for ($j=0; $j < 10; $j++) { 
            echo "_";
        }
    }else{
        echo "<br>";
    }
    
}