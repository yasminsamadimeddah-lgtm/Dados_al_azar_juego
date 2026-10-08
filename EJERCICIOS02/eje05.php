<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>EJERCICIO 05</h1>
    <table border="1">
    <?php
echo "<tr>";
$lista=[];
for($i=0; $i<5;$i++){
$num_random = rand(1,49);
if(in_array($num_random, $lista)){
    $i--;
    echo "NUM REPE IBA A SER:".$num_random;
    continue;
}
$lista[]=$num_random;
}
sort($lista);
for($i=0; $i<count($lista);$i++){
echo "<td>".$lista[$i]."</td>";
}
echo "<td> complementatio ".$num_random = rand(1,49)." </td>";
echo "</tr>";

?>
</table>
</body>
</html>