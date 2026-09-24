<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: antiquewhite;
        }
        #tabla{
            background-color: aliceblue;
            width: 500px;
            margin: auto;
            
            border: 1px solid black;
        } 
        #titulo{
            background-color: blue;
            text-align: center;
            color: beige;
            margin-top: 0px;
            font-size: 30px;
            padding: 15px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }


        #titulo h1 {
          margin: 0;
}
        p{
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;  
        
            }



        table{
             margin: 30px;
             font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        th,td{
            padding: 10px;
        }

    </style>
</head>
<body>
    <div id="tabla">
        <div id="titulo">
          <h1>TABLA DE MULTIPLICAR</h1>  
        </div>
        <?php $num=random_int(1,10); ?>
        
        <table border="1px":>
            <thead>
                <tr>
                    <th>Tabla del <?php echo $num; ?></th>
                    <th>Resultado</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            for($i=1; $i<=10;$i++){
                $resu=$num*$i;
              echo"<tr>
                     <td>$num x  $i</th>
                     <td> $resu  </th>
                </tr>";
            }
            
            ?>

            </tbody>
        </table>
    </div>

</body>
</html>