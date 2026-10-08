<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>EJERCICIO 01</h1>
    <table border="1">
        <tr>
        <?php
        $num=rand(1,10);
        $lista=[];
        for( $i = 0; $i < 20; $i++ ){
            $num=rand(1,10);
            echo "<td>$num</td> ";
            $lista[]=$num;
        }
        ?>
        </tr>
    </table>
    <p>El numero mas grande es el : <?= max($lista);?></p>
    <p>El numero mas pequeño es el : <?= min($lista);?></p>
    <p>Lista ordenada de meor a mayor : 
        <?php 
        sort($lista); 
        for($i=0; $i<count($lista);$i++){ 
            echo $lista[$i]." ,";
            }?></p>
    <p>Lista ordenada de meor a mayor : 
        <?php
        sort($lista);
        echo implode(", ",$lista);
        ?>
        </p>
    <p>Lista ordenada de meor a mayor : 
        <?php 
        $contar=array_count_values($lista);
        $lista_repe[]=0;
        $mas_repe=0;
        $num_repe=0;
        foreach($contar as $num => $veces){
            echo "El numero ".$num." se ha repetido ".$veces ."<br>";
            
            
            if ($veces > $mas_repe) {
        $mas_repe = $veces; // Actualizamos el récord de veces
        $num_repe = $num;   // Guardamos cuál es ese número
    }
        
        }
               echo "El numero mas repetido es el ".$num_repe." que se repite ".$mas_repe." veces";

        ?>
    </p>
    <p>El moda es de :</p>
</body>
</html>