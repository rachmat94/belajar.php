<h3>PHP Challenge #Pattern 11</h3>
<?php 
for ($i=10; $i >= 0; $i--) { 
    echo "*";
    for ($j=0; $j < $i; $j++) { 
        echo "*";
    }
    echo "<br>";
}