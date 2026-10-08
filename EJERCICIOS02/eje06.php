<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <h1>EJERCICIO 06</h1>
    <table border="1">
<?php

include_once 'infopaises.php';

uasort($paises, function($menor,$mayor){
 return $mayor["Poblacion"] <=> $menor["Poblacion"];
});

echo "TODOS LOS PAISES: <br>".print_r($paises);



$num_mayor_poblacion="";
$nomb_pais_mayor_poblacion="";
$nomb_capital_mayor_poblacion="";
foreach($paises as $pais => $info){
    if($info["Poblacion"]>$num_mayor_poblacion){
    $num_mayor_poblacion=$info["Poblacion"];
      $nomb_pais_mayor_poblacion=$pais;
      $nomb_capital_mayor_poblacion=$info["Capital"];
    }

}
echo "<table border=1>";
echo "<tr>
<td>".$nomb_pais_mayor_poblacion."</td>
<td>".$nomb_capital_mayor_poblacion."</td>
<td>".number_format($num_mayor_poblacion,0,',','.')."</td></tr>";
   echo "</table>";

echo "<table border=1>";
echo "<tr>";
echo "<td>CIUDADES</td>";

foreach($paises as $pais => $info){
 echo"   
<td>".$info["Capital"]."</td>";
}
echo "</tr></table>";




echo "<table border=1>";
echo "<tr>";
echo "<td>CIUDADES</td>";

foreach($ciudades as $pais => $info){
 echo"   
<td>".$info[0]."</td>";
}
echo "</tr></table>";



echo "<table border=1>";
echo "<tr>";
echo "<td>CIUDADES</td>";


 ?>
</body>
</html>