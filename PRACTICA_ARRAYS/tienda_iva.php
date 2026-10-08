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
        div{
        display: flex;
  justify-content: center;
  align-items: center;
  
    }
    table{
        
        background-color: lightblue;
        td{
            padding: 20px;
        }
    }
    </style>
</head>
<body>
    <h1>EJERCICIO 3- TIENDA ELECTRODOMESTICOS, CALCULAR IVA Y TOTAL</h1>
    <div>
    <table border="1">
        <tr>
            <td style='background-color: lightsteelblue;'>Produto</td>
            <td style='background-color: lightsteelblue;'>Precio (sin iva)</td>
            <td style='background-color: lightsteelblue;'>Iva a pagar</td>
            <td style='background-color: lightsteelblue;'>Total</td>

        </tr>
    <?php
    $productos = ["Portátil", "Teclado", "Ratón", "Monitor"];
    $precios = [850, 45, 20, 190];
    $tienda=array_combine($productos,$precios);
    foreach( $tienda as $producto  => $precio ){
        $ivapagar=$precio*0.21;
        $precioTotal=$ivapagar+$precio;
        echo"<tr>
            <td style='background-color: lightsteelblue;'>".$producto."</td>
            <td>".$precio."</td>
            <td>".$ivapagar."</td>
            <td>".$precioTotal."</td> </tr>";
    }
    ?>
    </table>
    </div>
</body>
</html>