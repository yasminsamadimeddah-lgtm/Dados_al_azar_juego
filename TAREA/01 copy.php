<?php
function sumar(int $valor1,int $valor2):int{ //estoy pasndo una copia no el valor original, por lo que si luego de la suma cambio el valor1 a 100 , este no podria cambiar el valor original PERO LA COSA CAMBIA SI PONGO (INT & VALOR1), A PARTIR DE ESO TODOS LOS VALORES1 SE CONVIERTEN EN 100)
  $resu= $valor1 + $valor2; 
  return $resu;
}

function sumar2(int $valor1,int $valor2, int & $resu):int{ 
  $resu= $valor1 + $valor2; 
  return $resu;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num1=random_int(1,10);
        $num2=random_int(1,10);
$resusuma=0;
sumar2($num1,$num2,$resusuma);
        echo $num1.'+'.$num2. "=".sumar($num1,$num2)."<br>";
        echo $num1.'-'.$num2. "=".$num1-$num2."<br>";
        $resusuma=sumar2($num1,$num2,$resusuma);
        echo $num1.'*'.$num2. "=".$num1*$num2."<br>";
        echo $num1.'/'.$num2. "=".$num1/$num2."<br>";
        echo $num1.'%'.$num2. "=".$num1%$num2."<br>";
        echo $num1.'**'.$num2. "=".$num1**$num2."<br>";


        /*
        5+3=7
        5-2=3
        5*2=10
        5/2=2.5
        5%2=1
        5**5=25
        */

    ?>
    <hr>
    <?php show_source(__FILE__);?>
</hr>
</body>
</html>