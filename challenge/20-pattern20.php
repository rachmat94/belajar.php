<h3>PHP Challenge #Pattern 20</h3>
<?php 
for ($a=0; $a <= 10; $a++) { 
    for ($b=10; $b > $a; $b--) { 
        echo "&nbsp;&nbsp;";
    }
    for ($c=0; $c < $a; $c++) { 
        echo "+";
    }
    for ($c=0; $c < $a; $c++) { 
        echo "+";
    }
    echo "<br>";
}
for ($i=0; $i <= 10; $i++) { 
    for ($j=0; $j < 20; $j++) { 
        if($i==0 || $i == 10){
            echo "=";
        }else{
            if($i > 4 && $i < 10){
                if($j == 0){
                    echo "=";
                }else if($j> 5 && $j < 14 ){
                    echo "=";
                }else if($j == 19){
                    echo "=";
                }else{
                    echo "+";
                }
            }else{
                if($j==0 ){
                    echo "=";
                }else if($j == 19){
                    echo "=";
                }else{
                    echo "+";
                }
            }
        }
    }
    echo "<br>";
}