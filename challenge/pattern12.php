<h3>PHP Challenge #Pattern 12</h3>
<?php 
for ($i=0; $i <= 10; $i++) { 
    for ($j=0; $j <= 10; $j++) { 
        if($i == 5){
            echo "*";
        }else{
            if($j=="5"){
                echo "*";
            }else{
                echo "&nbsp;&nbsp;";
            }
        }
    }
    echo "<br>";
}