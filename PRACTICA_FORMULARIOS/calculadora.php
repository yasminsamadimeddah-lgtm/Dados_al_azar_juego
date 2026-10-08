<?php
$num1="";
$num2="";
$error=false;
$msg="";
$resu="";
$opcion = $_GET["opcion"] ?? "dec";
 $num1=$_GET["num1"];
$num2=$_GET["num2"];
if (isset($_GET['borrar'])) {
    $num1="";
    $num2="";
    $resu="Campos limpiados correctamente!";
    
}
if(empty($_GET['num1']) || empty($_GET['num2'])){
    
        $msg = "ERROR, debe completar ambos campos";
        $error = true;
 
}else if (isset($_GET['sumar'])) {
   
    $resu=$num1+$num2;
    $resu="- El resultado es ".$resu;

}else if (isset($_GET['restar'])) {
   
    $resu=$num1-$num2;
    $resu="- El resultado es ".$resu;

}else if (isset($_GET['por'])) {
   
    $resu=$num1*$num2;
    $resu="- El resultado es ".$resu;

}else if (isset($_GET['div'])) {
   
if($num2==0){
    $error = true;
    $msg="------No se puede dividir entre 0-------";
}else{
    $resu=$num1/$num2;
    $resu="- El resultado es ".$resu;
}
    

}if(!$error) {
    if($opcion==="bin"){
    $msg==$resu;
    }elseif($opcion==="hex"){
     $msg=dechex($resu);
    }elseif($opcion==="bin"){
     $msg=decbin($resu);
    }
}
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php if ($error): ?>
<?= $msg ?>
<?php endif ?>
<form name="entrada" method="get">
    <h1>FORMULARIO CALCULADORA</h1>
    <table >
        <tr>
            <td>Numero 1 :</td>
            <td><input type="text"  name="num1" size="20" value="<?= $num1 ?>"></td>
        </tr>

        <tr>
            <td>Numero 2 :</td>
            <td><input type="text" name="num2" size="20" value="<?= $num2 ?>"></td>
        </tr>
    

        <tr><td colspan="2">
            
<input type="submit" name="sumar" value="+">
    <input type="submit" name="restar" value="-">
    <input type="submit" name="por" value="*">
    <input type="submit" name="div" value="/">
        <input type="submit" name="borrar" value="borrar">

        </td>


        </tr>



    <tr><td colspan="2">
    <input type="radio" name="opcion" value="dec" onchange="this.form.submit()">Decimal</input>
    <input type="radio" name="opcion" value="bin" onchange="this.form.submit()">Binario</input>
    <input type="radio" name="opcion" value="hex" onchange="this.form.submit()">Hexadecimal</input>
</td></tr>
    
    


</table>
    <?= $msg ?>

</form>
</body>
</html>