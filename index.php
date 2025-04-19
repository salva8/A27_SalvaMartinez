<?php
include("datos.php");
include("funciones.php");

$conexion = conectarBDA($host, $usuario, $pwd, $bda);

// Login
if (isset($_POST['login'])) {
    $nombre = $_POST['nombre'];
    $password = $_POST['pwd'];

    $user = buscarUsuario($conexion, $nombre, $password);
    if ($user) {
        session_start();
        $_SESSION["id"] = $user["id"];
        header("Location: procesa.php");
        exit();
    } else {
        $error = "El usuario no existe";
        echo "<script> alert('" . $error . "'); </script>";
    }
}
// registro
if (isset($_POST['registro'])) {
    $nombre = $_POST['nombre'];
    $password = $_POST['pwd'];

    $usuarioExiste = buscarUsuario($conexion, $nombre, $password);
    if ($usuarioExiste) {
        $error = "El usuario ya existe";
        echo "<script> alert('" . $error . "'); </script>";
    } else {
        registrarUsuario($conexion, $nombre, $password);
        $nuevoUsuario = buscarUsuario($conexion, $nombre, $password);
        if ($nuevoUsuario) {
            session_start();
            $_SESSION["id"] = $nuevoUsuario["id"];
            header("Location: procesa.php");
            exit();
        } else {
            $error = "No se pudo registrar el usuario.";
            echo "<script> alert('" . $error . "'); </script>";
        }
    }
}
$conexion->close();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal - Pokémon</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
     rel="stylesheet">
</head>

<body>
    <div class="container">
        <?php include("titulo.html"); ?>

        <h2 class="form_title">¡Únete al mundo Pokémon!</h2>
        <p class="form_subtitle">Caza, entrena y colecciona Pokémon a través de nuestro juego interactivo.</p>

        <div class="form_options">
            <!-- Formulario de Registro -->
            <div class="form_wrapper">
                <h3>Registrarse</h3>
                <form class="form" action="index.php" method="POST">
                    <label class="form_label">
                        <input type="text" placeholder="Nombre de Usuario" name="nombre" class="form_input" required>
                    </label>
                    <label class="form_label">
                        <input type="password" placeholder="Contraseña" name="pwd" class="form_input" required>
                    </label>
                    <input type="submit" value="Registrarse" class="form_submit" name="registro">
                </form>
            </div>

            <!-- Formulario de Login -->
            <div class="form_wrapper">
                <h3>Iniciar Sesión</h3>
                <form class="form" action="index.php" method="POST">
                    <label class="form_label">
                        <input type="text" placeholder="Nombre de Usuario" name="nombre" class="form_input" required>
                    </label>
                    <label class="form_label">
                        <input type="password" placeholder="Contraseña" name="pwd" class="form_input" required>
                    </label>
                    <input type="submit" value="Iniciar Sesión" class="form_submit" name="login">
                </form>
            </div>
        </div>
    </div>
</body>

</html>