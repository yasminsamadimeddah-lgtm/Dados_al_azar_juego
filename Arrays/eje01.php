
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 01</h1>
    
    <?php
    $num_max=0;
    $num_min=11;
    $lista[]=0;
    for( $i = 1; $i <=20; $i++ ){
    $lista[$i]=random_int(1,10);

    if ($lista[$i]>$num_max){
        $num_max=$lista[$i];
        } 

        if ($lista[$i]<$num_min){
        $num_min=$lista[$i];
        }
    }

    $num_mas_repe = 0;
    $num = 0;
for ($i = 1; $i <= 20; $i++) {
    $cont = 0; 
    for ($j = 1; $j <= 20; $j++) {
        if ($lista[$i] == $lista[$j]) {
            $cont++;
        }
    }
    if ($cont > $num_mas_repe) {
        $num_mas_repe = $cont;
        $num = $lista[$i];
    }
}

echo "El numero mas repetido es ".$num." repitiendose un total de ".$num_mas_repe." veces.<br>";
    ?>
   
<table border="1">
  <tr>
    <?php for($i = 1; $i <= 20; $i++): ?>
      <td><?= $lista[$i] ?></td>
    <?php endfor; ?>
  </tr>
</table>

<?php 
 echo "El numero mas grande es : ".$num_max."<br>";
  echo "El numero mas pequeño es : ".$num_min."<br>";
?> 
</body>
</html>