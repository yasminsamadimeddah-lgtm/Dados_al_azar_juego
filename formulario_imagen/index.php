<?php
// Si la petición es GET, se muestra el formulario
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    include 'captura.html';
    exit;
}

// Si la petición es POST, procesamos los datos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Control de inyección de código (XSS)
    $nombre = isset($_POST['nombre']) ? htmlspecialchars(trim($_POST['nombre']), ENT_QUOTES, 'UTF-8') : '';
    $alias = isset($_POST['alias']) ? htmlspecialchars(trim($_POST['alias']), ENT_QUOTES, 'UTF-8') : '';
    $edad = isset($_POST['edad']) ? (int)$_POST['edad'] : '';
    
    $armas = isset($_POST['armas']) && is_array($_POST['armas']) 
        ? implode(', ', array_map(function($a) { return htmlspecialchars($a, ENT_QUOTES, 'UTF-8'); }, $_POST['armas'])) 
        : 'Ninguna';
        
    $magia = isset($_POST['magia']) ? htmlspecialchars($_POST['magia'], ENT_QUOTES, 'UTF-8') : 'No';

    // Variables para la imagen
    $ruta_imagen = 'imagenes/calavera.png';
    $mensaje_imagen = '';
    $directorio_upload = 'upload/';

    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] !== UPLOAD_ERR_NO_FILE) {
        $archivo = $_FILES['imagen'];

        // Obtener la extensión del archivo subido
        $extension = strtolower(pathinfo($archivo['name'], PATHINFO_EXTENSION));
        $extensiones_permitidas = ['png', 'jpg', 'jpeg', 'jpe'];

        // Límite ampliado a 5 MB para evitar fallos de tamaño
        $formato_valido = in_array($extension, $extensiones_permitidas);
        $tamano_valido = $archivo['size'] <= (5 * 1024 * 1024); // 5 MB

        if ($archivo['error'] === UPLOAD_ERR_OK && $formato_valido && $tamano_valido) {
            // Si la carpeta upload no existe, se crea con permisos 0777
            if (!file_exists($directorio_upload)) {
                mkdir($directorio_upload, 0777, true);
            }

            $nombre_archivo_seguro = time() . '_' . basename($archivo['name']);
            $destino = $directorio_upload . $nombre_archivo_seguro;

            if (move_uploaded_file($archivo['tmp_name'], $destino)) {
                $ruta_imagen = $destino;
                $mensaje_imagen = '';
            } else {
                $mensaje_imagen = 'Error al subir la imagen';
            }
        } else {
            $mensaje_imagen = 'Error al subir la imagen';
        }
    } else {
        $mensaje_imagen = 'No se subió ninguna imagen.';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos del Jugador</title>
    <style>
        body {
            background-color: #eceff1;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            padding: 40px;
        }
        .card {
            background-color: #ffff00;
            width: 480px;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
        }
        h2 {
            text-align: center;
            margin-top: 0;
            margin-bottom: 20px;
            font-size: 22px;
            font-weight: bold;
            color: #000;
        }
        .content-container {
            display: flex;
            justify-content: space-between;
        }
        .info {
            width: 58%;
            font-size: 14px;
            line-height: 1.8;
            color: #000;
        }
        .info p {
            margin: 6px 0;
        }
        .image-container {
            width: 38%;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .image-container img {
            width: 140px;
            height: 150px;
            object-fit: contain;
            border: 1px solid #000;
            background-color: white;
        }
        .mensaje-superior {
            font-weight: bold;
            font-size: 13px;
            margin-bottom: 8px;
            color: #000;
        }
        .mensaje-inferior {
            color: #000;
            font-size: 12px;
            margin-top: 8px;
            font-weight: normal;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Datos del Jugador</h2>

    <div class="content-container">
        <div class="info">
            <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
            <p><strong>Alias:</strong> <?php echo $alias; ?></p>
            <p><strong>Edad:</strong> <?php echo $edad; ?></p>
            <p><strong>Armas seleccionadas:</strong> <?php echo $armas; ?></p>
            <p><strong>¿Practica artes mágicas?:</strong> <?php echo $magia; ?></p>
        </div>

        <div class="image-container">
            <?php if ($mensaje_imagen === 'No se subió ninguna imagen.'): ?>
                <div class="mensaje-superior">No se subió ninguna imagen.</div>
            <?php elseif ($mensaje_imagen === '' && $ruta_imagen !== 'imagenes/calavera.png'): ?>
                <div class="mensaje-superior">Imagen subida:</div>
            <?php endif; ?>

            <img src="<?php echo $ruta_imagen; ?>" alt="Imagen del jugador">

            <?php if ($mensaje_imagen === 'Error al subir la imagen'): ?>
                <div class="mensaje-inferior">Error al subir la imagen</div>
            <?php endif; ?>
        </div>
    </div>
</div>

</body>
</html>