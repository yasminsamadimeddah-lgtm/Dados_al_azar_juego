<?php
// Array asociativo con usuarios y contraseñas válidas
$usuariosValidos = [
    "admin" => "1234",
    "ana" => "secreto",
    "pepe" => "qwerty"
];

// Comprobamos si el formulario ha sido enviado por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Guardamos lo que ha escrito el usuario en variables
    $user = $_POST['usuario'] ?? '';
    $pass = $_POST['clave'] ?? '';

    // Comprobamos si el usuario existe y si su contraseña coincide
    if (array_key_exists($user, $usuariosValidos) && $usuariosValidos[$user] === $pass) {
        echo "<h2 style='color: green;'>¡Bienvenido/a, " . htmlspecialchars($user) . "!</h2>";
    } else {
        $msj = "Error: Usuario o contraseña incorrectos.";
        echo "<h2 style='color: red;'>" . $msj . "</h2>";
        
        // Volvemos a mostrar el formulario dejando el usuario escrito (Persistencia)
        ?>
        <form action="01.php" method="POST">
            <label>Usuario:</label><br>
            <!-- Usamos la variable $user dentro del atributo value -->
            <input type="text" name="usuario" value="<?php echo htmlspecialchars($user); ?>" required><br><br>

            <label>Contraseña:</label><br>
            <input type="password" name="clave" required><br><br>

            <input type="submit" value="Volver a intentar">
        </form>
        <?php
    }
} else {
    // Si entran directamente a 01.php sin pasar por el HTML
    header("Location: 01.html");
    exit();
}
?>