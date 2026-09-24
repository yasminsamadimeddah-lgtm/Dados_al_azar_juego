<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
        
        th{
            width: 100px;
            padding: 8px;
        }
    </style>
</head>
<body>

<?php
        $num1=random_int(1,10);
        $num2=random_int(1,10);

        /*
        5+3=7
        5-2=3
        5*2=10
        5/2=2.5
        5%2=1
        5**5=25
        */

    ?>
    


<p>Operacion con numeros <?php echo $num1; ?> y <?php echo $num2; ?></p>


 <table border="1px":>
  <thead>
    <tr style="background-color: darkgray;">
      <th style="color: dimgray;">Operacion</th>
      <th style="color: dimgray;">Resultado</th>
</tr>
  </thead>

  <tbody>
    <tr>
      <td><?php echo $num1.'+'.$num2; ?></th>
      <td><?php echo $num1+$num2; ?></th>
      
    </tr>
      <tr style="background-color: lightgray;">
      <td><?php echo $num1.'-'.$num2; ?></th>
      <td><?php echo $num1-$num2; ?></th>
      
    </tr>
     <tr>
      <td><?php echo $num1.'*'.$num2; ?></th>
      <td><?php echo $num1*$num2; ?></th>
      
    </tr>
     <tr style="background-color: lightgray;">
      <td><?php echo $num1.'/'.$num2; ?></th>
      <td><?php echo $num1/$num2; ?></th>
      
    </tr>
     <tr>
      <td><?php echo $num1.'%'.$num2; ?></th>
      <td><?php echo $num1%$num2; ?></th>
      
    </tr>
     <tr style="background-color: lightgray;">
      <td><?php echo $num1.'**'.$num2; ?></th>
      <td><?php echo $num1**$num2; ?></th>
      
    </tr>



</tbody>
  
</body>
</html>