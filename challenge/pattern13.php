<h3>PHP Challenge #Pattern 13</h3>
<?php 
for ($i=0; $i < 10; $i++) { 
    for ($j=0; $j < $i; $j++) { 
        echo "*";
    }
    echo "<br>";
}
for ($i=10; $i > 0; $i--) { 
    for ($j=0; $j < $i; $j++) { 
        echo "*";
    }
    echo "<br>";
}