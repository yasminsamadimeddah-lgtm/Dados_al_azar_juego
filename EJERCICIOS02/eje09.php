<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        td{
            padding-left: 20px;
            width: 200px;
            height: 30px;
        }
        
    </style>
</head>
<body>
    <h1>EJRCICIO 09</h1>
    <table border="1">
    <?php
$temperaturas =  [ 6, 10, 12, 14,16 ,20 ,25 , 30, 18, 15, 14, 8];
 $meses = ['enero','febrero', 'marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre' ];

$mestemperatura =array_combine($meses, $temperaturas);
//$i=0; $i<count($temperaturas);$i++
foreach($mestemperatura as $mes=>$temp){
    echo "<tr>";
echo "<td>".$mes."</td>";
echo "<td><img src='img/barraverde.png' style='width:".$temp."mm' ; height='20'>".$temp."ºC</td>";
    echo "</tr>";
}
?>
</table>
</body>
</html>