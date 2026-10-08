<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Filtracion de numero POSITIVOS y NEGATIVOS</h1>
    <?php
   // $numeros = [12, -5, 8, 0, -14, 25, 33, -2, 7, -10];

$numeros=[];
    for($i=0; $i<20;$i++){
        $numazar=random_int(-50,50);
$numeros[]=$numazar;
    }
    $positivo=[];
    $negativo=[];
    for ($i = 0; $i < count($numeros); $i++) {
        if($numeros[$i]>=0) {
            $positivo[]=$numeros[$i];
        }else{
    $negativo[]=$numeros[$i];
        }
    }
    sort($positivo);
    sort($negativo);
    ?>
    <table border="1">
        <tr><td style="background-color: gray;"><span style="color: aliceblue;">Positivo</span> </td>
    <?php
foreach ($positivo as $numpos) {
echo "<td>".$numpos."</td>";
}
    ?>
    </tr>
        <tr></tr><td style="background-color: gray;"><span style="color: aliceblue;">Negativo</span> </td>
    <?php
foreach ($negativo as $numpos) {
echo "<td>".$numpos."</td>";
}
    ?></tr>
        
        
    </table>
    <p>- Hay un total de <?= count($positivo)?> numeros positivos</p>
    <p>- Hay un total de <?= count($negativo)?> numeros negativos</p>
    <p>- El numero mas grande es el <?= max($numeros)?> , y el mas pequeño el <?= min($numeros)?></p>
</body>
</html>