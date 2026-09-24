<?php header("refresh,2")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta http-equiv="refresh" content="5"> 
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
   <?php
    $num1=random_int(100,500);
    $num2=random_int(100,500);
    $num3=random_int(100,500);

    ?>
<table style="width:<?php echo $num1 ?>px;background-color:red"> 
<thead>
    <tr>
        <th>Rojo <?php echo $num1 ?></th>
    </tr>
</thead>
</table>


<table style="width:<?php echo $num2 ?>px;background-color:green"> 
<thead>
    <tr>
        <th>Verde <?php echo $num2 ?></th>
    </tr>
</thead>
</table>

<table style="width:<?php echo $num3 ?>px;background-color:blue" > 
<thead>
    <tr>
        <th>Azul <?php echo $num3 ?></th>
    </tr>
</thead>
</table>
   
</body>
</html>