<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Ejercicio 2 <br></br>
    <?php
    $cont=0;
    $num2=random_int(1,9);

    for($i=1 ; $i<$num2 ; $i++){
        while($cont<$i){
            if($i%2==0){
               echo "<b style='color: blue'> $i </b>";
            }else{
                echo "<b style='color: red'> $i </b>";
            }
            
            $cont++;
        }
        $cont=0;
        echo "<br></br>";
    }
    ?>
</body>
</html>