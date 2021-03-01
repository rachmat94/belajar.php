<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papan catur</title>
</head>
<body>
<?php 
function blackWhite($val){
    if($val % 2 == 0 ){
        return "black";
    }else{
        return "white";
    }
}
?>
    <table border="1px" >
        <?php 
        $c = 0;
        for ($row=0; $row < 8; $row++) { 
            echo '<tr>';
            for ($col=0; $col < 8; $col++) { 
                $color = blackWhite($c);
                echo '<td style="width:50px;height:50px;background-color:'.$color.'"></td>';
                $c++;
            }
            echo '</tr>';
            $c++;
        }
        ?>
    </table>
</body>
</html>