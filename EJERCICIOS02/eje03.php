<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>EJERCICIO 03</h1>
    <?php 
$lista=[
    "El Pais"=> "https://elpais.com/",
    "El Mundo"=>"https://elmundo.es/",
    "El Abc"=>"https://abc.es/",
    "BBC"=>"https://bbc.com/",
    "20Minutos"=>"https://20minutos.com/"
];

$nombre=array_rand($lista);
$url=$lista[$nombre];

echo "<a href=".$url.">".$nombre."<br>";

?>
</body>
</html>