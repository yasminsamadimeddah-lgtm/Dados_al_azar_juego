<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pirámide en PHP</title>
    <style>
        /* El estilo CSS con la etiqueta <code> para que mantenga el mismo ancho de fuente */
        code {
            font-family: monospace;
            
        }
    </style>
</head>
<body>

<code>
    <pre>
<?php
  $num = random_int(1, 9);


  for ($i = 1; $i <= $num; $i++) {
      for ($e = 1; $e <= ($num - $i); $e++) {
          echo " " ;
      }
    
      for ($j = 1; $j <= (2 * $i - 1); $j++) {
          echo "*";
      }
      echo "<br>";
  }
?>
</code>
</pre>

</body>
</html>