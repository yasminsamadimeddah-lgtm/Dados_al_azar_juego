<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: aliceblue;
            
        }
       
    </style>
</head>
<body>
    <h1>EJERCICIO PRACTICA 1</h1>
    <?php
     $lista=["manzana","pera","melocoton","frambuesa"];
    ?>
    <p>LISTA COMPLETA :</p>
<table border="1">    
        <?php

    for( $i= 0; $i<count($lista);$i++){
        if($i%2==0){
            echo "    <tr>
            <td style='background-color: lightcoral'> ".$lista[$i]."</td>    </tr>

             ";            

        }else{
             echo "    <tr>
             <td style='background-color: pink'>".$lista[$i]."</td>    </tr>
             "; 
        }


    }
        ?>
    </table>
    <p>La primera fruta es <?= $lista[0] ?></p>
    <p>La Ultima fruta es <?= $lista[count($lista)-1] ?></p>
    <b>---Remplazar la pera por melocoton---</b>
    <?php
    for( $i= 0; $i<count($lista);$i++){
        if(in_array("manzana",$lista)){
        $lista[$i]="melocoton";
        
    }
    }
    
    ?>
    
<table border="1">    
    <tr>
        <?php
    foreach ($lista as $fruta) {
       echo "<td style='background-color: pink'>".$fruta."</td>";
    }
        ?>
    </tr>
    </table>
        <b>---eliminar melocoton de la tabla---</b>
        <?php
        for( $i= 0; $i<count($lista);$i++){
        if($lista[$i]== "melocoton"){
        unset($lista[$i]);
        }

        }

          $lista=array_values($lista);
          for( $i= 0; $i<count($lista);$i++){
            echo "<br>-".$i." - ".$lista[$i]."";
          }
        
          $lista[]="melocoton";
          $lista[]="fresa";
       $precio=["1.50","2.00","3.50","5.00"];
       $fruteria=array_combine($lista,$precio);
        ?>
<table border="1">
     <tr style='background-color: lightcoral'>
     <td>FRUTA</td>
    <td>PRECIO</td>
    </tr>
    <?php
    foreach($fruteria as $lista =>$precio){
        
    echo "<tr>";
    echo "<td style='background-color: pink'>".$lista."</td>";
    echo "<td style='background-color: white'>".$precio."</td>";
    echo "</tr>";
    }
    ?>
</table>
</body>
</html>