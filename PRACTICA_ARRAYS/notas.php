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
    <h>EJERCICIO 2 -NOTAS</h>
    <table border="1">

    
    <?php 
    $notas = [4.5, 7, 8.5, 3, 9, 10, 5.5];
    $alumno=["Andrea","Carla","Martin","Hugo","Anis","Paulina","Javi"];
    $clase=array_combine($alumno,$notas);

    foreach ($notas as $nota) {
        if($nota<5){
    echo "<tr><td>-".$nota."-> suspendido</td></tr>";
        }else{
            echo "<tr><td>-".$nota."--> aprobado</td></tr>";
        }
    }


foreach ($clase as $alumno=>$nota) {
if($nota<5){
    echo "<br> -".$alumno." ha <b><span style='color:red;'>suspendido</span></b> con un :".$nota;
}else {
    echo "<br> -".$alumno." Ha <b><span style='color:darkgreen;'>aprobado</span></b> con un :".$nota;
}
}


    ?>
    </table>
</body>
</html>