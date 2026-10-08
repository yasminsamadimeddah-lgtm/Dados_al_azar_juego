<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            padding: 20px;
        }
    </style>
</head>
<body>
    
    <h1>EJERCICIO INFO PAISES</h1>
    <table border="1">
        <tr>
        <td style='background-color: lightsteelblue;'>Pais</td>
        <td style='background-color: lightsteelblue;'>Capital</td>
        <td style='background-color: lightsteelblue;'>Poblacion</td>
        <td style='background-color: lightsteelblue;'>Bandera</td>
        <td style='background-color: lightsteelblue;'>Ciudades</td>
        <td style='background-color: lightsteelblue;'>Enlaces a Google Map</td>
    </tr>
    <?php
    $enlaces=[
    "Francia"=>"https://www.google.com/maps/place/Francia/@45.6393299,-7.9437965,5z/data=!3m1!4b1!4m6!3m5!1s0xd54a02933785731:0x6bfd3f96c747d9f7!8m2!3d46.227638!4d2.213749!16zL20vMGY4bDlj?entry=ttu&g_ep=EgoyMDI2MDkzMC4wIKXMDSoASAFQAw%3D%3D",
    "España"=>"https://www.google.com/maps/place/Espa%C3%B1a/@33.9376713,-28.2240292,4z/data=!3m1!4b1!4m6!3m5!1s0xc42e3783261bc8b:0xa6ec2c940768a3ec!8m2!3d40.463667!4d-3.74922!16zL20vMDZta2o?entry=ttu&g_ep=EgoyMDI2MDkzMC4wIKXMDSoASAFQAw%3D%3D",
    "Italia"=>"https://www.google.com/maps/place/Italia/@40.8234969,2.1591341,5z/data=!3m1!4b1!4m6!3m5!1s0x12d4fe82448dd203:0xe22cf55c24635e6f!8m2!3d41.87194!4d12.56738!16zL20vMDNyamo?entry=ttu&g_ep=EgoyMDI2MDkzMC4wIKXMDSoASAFQAw%3D%3D",
    "Argentina"=>"https://www.google.com/maps/place/Argentina/@-36.4846449,-84.7607734,4z/data=!3m1!4b1!4m6!3m5!1s0x95bccaf5f5fdc667:0x3d2f77992af00fa8!8m2!3d-38.416097!4d-63.616672!16zL20vMGpnZA?entry=ttu&g_ep=EgoyMDI2MDkzMC4wIKXMDSoASAFQAw%3D%3D",
    "Colombia"=>"https://www.google.com/maps/place/Colombia/@5.8427378,-84.9812866,5z/data=!3m1!4b1!4m6!3m5!1s0x8e15a43aae1594a3:0x9a0d9a04eff2a340!8m2!3d4.570868!4d-74.297333!16zL20vMDFsczI?entry=ttu&g_ep=EgoyMDI2MDkzMC4wIKXMDSoASAFQAw%3D%3D",
    "Chile"=>"https://www.google.com/maps/place/Chile/@-28.8168299,-131.2259875,3z/data=!3m1!4b1!4m6!3m5!1s0x9662c5410425af2f:0x505e1131102b91d!8m2!3d-35.675147!4d-71.542969!16zL20vMDFwMXY?entry=ttu&g_ep=EgoyMDI2MDkzMC4wIKXMDSoASAFQAw%3D%3D",
    "Suecia"=>"https://www.google.com/maps/place/Suecia/@61.6426074,6.902088,5z/data=!3m1!4b1!4m6!3m5!1s0x465cb2396d35f0f1:0x22b8eba28dad6f62!8m2!3d60.128161!4d18.643501!16zL20vMGQwdnFu?entry=ttu&g_ep=EgoyMDI2MDkzMC4wIKXMDSoASAFQAw%3D%3D"
    ];
include_once 'infopaises.php';


foreach($paises as $pais => $info){
    
    echo "<tr><td>".$pais."</td>";
    echo "<td>".$info["Capital"]."</td>";
    echo "<td>".number_format($info["Poblacion"],0,",",".")."</td>";
    echo "<td><img src='".$info["bandera"]."' style='width:100px;heigth:40px'></td>";
    echo "<td>".implode(", ", $ciudades[$pais])."</td>";
    echo "<td><a href='".$enlaces[$pais]."'> Ubicacion de ".$pais."</td></tr>";
    $nombciudades="";
}
    ?></table>



<h1>EJERCICIO INFO PAISES</h1>
    <table border="1">
        
        <tr><td style='background-color: lightsteelblue;'>Pais</td>
    
    <?php
foreach($paises as $pais => $info){
    
    echo "<td>".$pais."</td>";
}
    ?>
    </tr>
        <tr><td style='background-color: lightsteelblue;'>Capital</td>
    <?php
foreach($paises as $pais => $info){
    
    echo "<td >".$info["Capital"]."</td>";
}
    ?></tr>
        <tr><td style='background-color: lightsteelblue;'>Poblacion</td>
        <?php
             foreach($paises as $pais => $info){
                   echo "<td >".number_format($info["Poblacion"],0,",",".")."</td>";
                  }
           ?>
    </tr>
        <tr><td  style='background-color: lightsteelblue;'>Bandera</td>
    <?php
foreach($paises as $pais => $info){
    
    echo "<td><img src='".$info["bandera"]."' style='width:100px;heigth:40px'></td>";
}
    ?>
    </tr>

<tr><td  style='background-color: lightsteelblue;'>Bandera</td>
    <?php
    foreach($paises as $pais => $info){
 
    echo "<td>".implode(", ", $ciudades[$pais])."</td>";
    $nombciudades="";
}

    ?>
    </tr>


    <tr><td  style='background-color: lightsteelblue;'>Enlace Google Map</td>
    <?php
foreach($paises as $pais => $info){
    
    echo "<td><a href='".$enlaces[$pais]."'> Ubicacion de ".$pais."</td>";
}
    ?>
    </tr>
    </table>
</body>
</html>