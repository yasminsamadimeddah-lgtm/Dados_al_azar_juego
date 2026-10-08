<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>EJERCICIO 04</h1>
    
    <table border="1">
    <?php
    $deporte=[
        "karate"=>"deportes/karate.png",
        "natacion"=>"deportes/natacion.jpg",
        "baloncesto"=>"deportes/baloncesto.jpg",
        "tennis"=>"deportes/tennis.jpg"
    ];

    echo "<tr> <td>deporte</td><td>logo</td></tr>";

   
    
    
for($i=0; $i<4;$i++){
    $deporte_aleatorio=array_rand($deporte);
echo"
<tr>
    <td>".$deporte_aleatorio."</td>
    <td><img src='" . $deporte[$deporte_aleatorio] . "' width='100'></td>
    </tr>";
    unset($deporte[$deporte_aleatorio]);
}

?>
</table>
</body>
</html>