<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>EJERCICIO 08</h1>
    <table border="1">
    <?php
include_once 'infopaises.php';
echo "<tr>
<td>Pais</td>
<td>Capital</td>
<td>Poblacion</td>
<td>Ciudades</td>
</tr>";




foreach($paises as $pais => $info ){
    $infocompleta="";
foreach($ciudades[$pais] as $informacion) {
$infocompleta .= $informacion;
}

echo "<tr>
<td>".$pais."</td>
<td>".$info["Capital"]."</td>
<td>".number_format($info["Poblacion"],0,",",".")."</td>
<td>".
$infocompleta
.
"</td>
</tr>";
$infoComleta="";
}
?>
</table>
</body>
</html>