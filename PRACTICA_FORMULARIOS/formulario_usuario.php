<?php
$error=false;
$acceso=false;

$sesion=[
    "ana"=>"123",
    "luis"=>"456",
    "admin"=>"pro",
];
$USER="";
if (isset($_GET['orden'])) {
        $msg="";
 if(empty($_GET['nombre']) || empty($_GET['clave'])){
    $msg="ERROR, clave o contraseña se encuentran vacias";
    $error=true;
 }else{
    $USER=$_GET['nombre'];
    $COD=$_GET['clave'];
    /*if(in_array($sesion,$USER) && in_array($sesion,$sesion($USER))){
 }*/
    if (array_key_exists($USER, $sesion) && $sesion[$USER]===$COD){
      $acceso=true;
      $msg="BIENVENIDO";
}else{
    $error=true;
      $msg="Contraseña o usuario incorrecto";
 }
 
 }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<h1>
    <?=   ($acceso) ? "Bienvenido" : "Formulario de acceso"?></h1>

<?php if ($acceso) : ?>
<?= $msg ?>
<?php else :?>
<?=    ($error) ? $msg : ""?>


    <form name="entrada" method="get">
    <table >
        <tr>
            <td>Nombre : </td>
            <td><input type="text" name="nombre" value="<?= $USER ?>" size="20" ?></td>
        </tr>

        <tr>
            <td>Contraseña : </td>
            <td><input type="text" name="clave" size="20" ?></td>
        </tr>
    </table>
      <input type="submit" name="orden" value="Entrar">

</form>
<?php endif ?>
</head>
<body>
    
</body>
</html>