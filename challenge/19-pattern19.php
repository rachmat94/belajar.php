<h3>PHP Challenge #Pattern 19</h3>
<?php 
for ($i=0; $i <= 10; $i++) { 
    for ($j=0; $j < 20; $j++) { 
        if($i==0 || $i == 10){
            echo "=";
        }else{
            if($j==0  ){
                    echo "=";
                }else if($j == 19){
                    echo "=";
                }else{
                    echo "+";
                }
            
        }
        
    }
    echo "<br>";
}