<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Ejecicio 4</p>
    <?php
    $cont=0; //contador de nums que han salido
    $seis_seguidos=0;
    $grupo_6_seguidos=0;

    while(true){
        $num = random_int(1, 10);
        $cont++;
        
        if($num==6){
         $seis_seguidos++;
        }else{
          $seis_seguidos=0;
        }

        if($seis_seguidos==3){
        $grupo_6_seguidos++;
        $seis_seguidos=0;
        }

        if($grupo_6_seguidos==3){
            break;
        }
        
    }

    echo "Han salido tres 6 seguidos tras genera ".$cont." números en ".microtime(true) . " milisegundos"
    ?>
</body>
</html>