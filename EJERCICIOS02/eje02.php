<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>EJERCICIO 02</h1>
    <?php
    $enlaces=[
      "El Pais"=> "https://elpais.com/",
       "El Mundo"=>"https://elmundo.es/",
    "El Abc"=>"https://abc.es/"

    ];
foreach($enlaces as $nombre=>$url){
echo "<a href='".$url."'>".$nombre."<br>";
}

?>
</body>
</html>