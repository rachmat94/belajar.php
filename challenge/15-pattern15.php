<h3>PHP Challenge #Pattern 15</h3>
<?php 
for ($i=0; $i < 20; $i++) { 
    for ($j=20; $j > $i; $j--) { 
        echo "+";
        
    }
    for ($k=0; $k < $i; $k++) { 
        echo "=";
    }
    

    echo "<br>";
}