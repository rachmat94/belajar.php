<h3>PHP Challenge #Pattern 17</h3>
<?php 
for ($i=0; $i < 20; $i++) { 
    for ($j=20; $j > $i; $j--) { 
        echo "&nbsp;";
    }
    for ($k=0; $k < $i; $k++) { 
        echo "+";
    }
    echo "<br>";
}
for ($i=20; $i > 0; $i--) { 
    for ($j=20; $j > $i; $j--) { 
        echo "&nbsp;";
    }
    for ($k=0; $k < $i; $k++) { 
        echo "+";
    }
    
    echo "<br>";
}