<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
  //  function(array $v1){
//llamar a metodo dentro de metodo $metodo llevaria $ por que si no buscaria otra cosa que no es???
//ver diferencia entre uasort y usort
    //}
$datos = [["Pepe",34],["Juan",23],["Ana",45]];
usort($datos,'compedad');
print_r($datos);
?>
</body>
</html>