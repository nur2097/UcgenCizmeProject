<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function ucgen($sayi){
    $a = 0;
    
    while($a <= $sayi){
        for($i = 0; $i<= $a; $i++){
            echo "0";
            echo " ";
        }
        $a++;
        echo "<br>";
    }

}

ucgen(15);


?>
</body>
</html>


