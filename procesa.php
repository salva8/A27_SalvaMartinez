<?php
session_start();
include("datos.php");
include("funciones.php");
if (!isset($_SESSION["id"])) {
    echo "<script>alert('Debes iniciar sesión');</script>";
    exit;
}
$user = $_SESSION["id"];
$conexion = conectarBDA($host, $usuario, $pwd, $bda);

if (isset($_POST["pokemon_id"])) {
    if ($_POST["pokemon_id"] == "1") {
        $nombre = $_POST["nombre"];
        $tipo = $_POST["tipo"];
        $vida = $_POST["vida"];
        $ataque = $_POST["ataque"];
        $defensa = $_POST["defensa"];

        $resultado = registrarPokemon($conexion, $nombre, $tipo, $vida, $ataque, $defensa, $user);

        if ($resultado) {
            echo "<script>alert('Pokémon $nombre registrado correctamente');</script>";
        } else {
            echo "<script>alert('Error al registrar Pokémon: " . mysqli_error($conexion) . "');</script>";
        }
    } else if ($_POST["pokemon_id"] == "2") {
        $nombre = $_POST["nombre"];
        $tipo = $_POST["tipo"];
        $vida = $_POST["vida"];
        $ataque = $_POST["ataque"];
        $defensa = $_POST["defensa"];

        $resultado = registrarPokemon($conexion, $nombre, $tipo, $vida, $ataque, $defensa, $user);

        if ($resultado) {
            echo "<script>alert('Pokémon $nombre registrado correctamente');</script>";
        } else {
            echo "<script>alert('Error al registrar Pokémon: " . mysqli_error($conexion) . "');</script>";
        }
    } else if ($_POST["pokemon_id"] == "3") {
        $nombre = $_POST["nombre"];
        $tipo = $_POST["tipo"];
        $vida = $_POST["vida"];
        $ataque = $_POST["ataque"];
        $defensa = $_POST["defensa"];

        $resultado = registrarPokemon($conexion, $nombre, $tipo, $vida, $ataque, $defensa, $user);

        if ($resultado) {
            echo "<script>alert('Pokémon $nombre registrado correctamente');</script>";
        } else {
            echo "<script>alert('Error al registrar Pokémon: " . mysqli_error($conexion) . "');</script>";
        }
    } else if ($_POST["pokemon_id"] == "4") {
        $nombre = $_POST["nombre"];
        $tipo = $_POST["tipo"];
        $vida = $_POST["vida"];
        $ataque = $_POST["ataque"];
        $defensa = $_POST["defensa"];

        $resultado = registrarPokemon($conexion, $nombre, $tipo, $vida, $ataque, $defensa, $user);

        if ($resultado) {
            echo "<script>alert('Pokémon $nombre registrado correctamente');</script>";
        } else {
            echo "<script>alert('Error al registrar Pokémon: " . mysqli_error($conexion) . "');</script>";
        }
    } else if ($_POST["pokemon_id"] == "5") {
        $nombre = $_POST["nombre"];
        $tipo = $_POST["tipo"];
        $vida = $_POST["vida"];
        $ataque = $_POST["ataque"];
        $defensa = $_POST["defensa"];

        $resultado = registrarPokemon($conexion, $nombre, $tipo, $vida, $ataque, $defensa, $user);

        if ($resultado) {
            echo "<script>alert('Pokémon $nombre registrado correctamente');</script>";
        } else {
            echo "<script>alert('Error al registrar Pokémon: " . mysqli_error($conexion) . "');</script>";
        }
    } else if ($_POST["pokemon_id"] == "6") {
        $nombre = $_POST["nombre"];
        $tipo = $_POST["tipo"];
        $vida = $_POST["vida"];
        $ataque = $_POST["ataque"];
        $defensa = $_POST["defensa"];

        $resultado = registrarPokemon($conexion, $nombre, $tipo, $vida, $ataque, $defensa, $user);

        if ($resultado) {
            echo "<script>alert('Pokémon $nombre registrado correctamente');</script>";
        } else {
            echo "<script>alert('Error al registrar Pokémon: " . mysqli_error($conexion) . "');</script>";
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
    <title>Document</title>
    <link rel="stylesheet" href="css/styleProcesa.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <header class="page_header">
        <?php include("titulo.html") ?>
    </header>
    <article>
        <form action="procesa.php" method="POST" class="card">
            <input type="hidden" name="pokemon_id" value="1">
            <div class="card_name">
                <h2 class="card_title">Pikachu</h2><input type="text" name="nombre" value="Pikachu" hidden>
            </div>
            <ul class="card_text">
                <li>Tipo: Electrico</li><input type="text" name="tipo" value="Electrico" hidden>
                <li>Vida: 35</li><input type="text" name="vida" value="35" hidden>
                <li>Ataque: 55</li><input type="text" name="ataque" value="55" hidden>
                <li>Defensa: 40</li><input type="text" name="defensa" value="40" hidden>
                <li>Nivel: 1</li>
                <li>Experiencia: 1000</li>
            </ul>
            <figure class="card_figure">
                <img src="imgs/pikachu.png" class="card_img">
            </figure>
            <button type="submit" class="card_button">Guardar</button>
        </form>
    </article>

    <article>
        <form action="procesa.php" method="POST" class="card card_charmander">
            <input type="hidden" name="pokemon_id" value="2">
            <div class="card_name">
                <h2 class="card_title">Charmander</h2><input type="text" name="nombre" value="Charmander" hidden>
            </div>
            <ul class="card_text">
                <li>Tipo: Fuego</li><input type="text" name="tipo" value="Fuego" hidden>
                <li>Vida: 39</li><input type="text" name="vida" value="39" hidden>
                <li>Ataque: 52</li><input type="text" name="ataque" value="52" hidden>
                <li>Defensa: 43</li><input type="text" name="defensa" value="43" hidden>
                <li>Nivel: 1</li>
                <li>Experiencia: 1000</li>
            </ul>
            <figure class="card_figure">
                <img src="imgs/charmander.png" class="card_img">
            </figure>
            <button type="submit" class="card_button">Guardar</button>
        </form>
    </article>

    <article>
        <form action="procesa.php" method="POST" class="card card_eive">
            <input type="hidden" name="pokemon_id" value="3">
            <div class="card_name">
                <h2 class="card_title">Eevee</h2><input type="text" name="nombre" value="Eevee" hidden>
            </div>
            <ul class="card_text">
                <li>Tipo: Normal</li><input type="text" name="tipo" value="Normal" hidden>
                <li>Vida: 55</li><input type="text" name="vida" value="55" hidden>
                <li>Ataque: 55</li><input type="text" name="ataque" value="55" hidden>
                <li>Defensa: 50</li><input type="text" name="defensa" value="50" hidden>
                <li>Nivel: 1</li>
                <li>Experiencia: 1000</li>
            </ul>
            <figure class="card_figure">
                <img src="imgs/eive.png" class="card_img">
            </figure>
            <button type="submit" class="card_button">Guardar</button>
        </form>
    </article>

    <article>
        <form action="procesa.php" method="POST" class="card card_bulbasur">
            <input type="hidden" name="pokemon_id" value="4">
            <div class="card_name">
                <h2 class="card_title">Bulbasur</h2><input type="text" name="nombre" value="Bulbasur" hidden>
            </div>
            <ul class="card_text">
                <li>Tipo: Planta</li><input type="text" name="tipo" value="Planta" hidden>
                <li>Vida: 45</li><input type="text" name="vida" value="45" hidden>
                <li>Ataque: 49</li><input type="text" name="ataque" value="49" hidden>
                <li>Defensa: 49</li><input type="text" name="defensa" value="49" hidden>
                <li>Nivel: 1</li>
                <li>Experiencia: 1000</li>
            </ul>
            <figure class="card_figure">
                <img src="imgs/bulbasur.png" class="card_img">
            </figure>
            <button type="submit" class="card_button">Guardar</button>
        </form>
    </article>

    <article>
        <form action="procesa.php" method="POST" class="card card_duck">
            <input type="hidden" name="pokemon_id" value="5">
            <div class="card_name">
                <h2 class="card_title">Psyduck</h2><input type="text" name="nombre" value="Psyduck" hidden>
            </div>
            <ul class="card_text">
                <li>Tipo: Agua</li><input type="text" name="tipo" value="Agua" hidden>
                <li>Vida: 50</li><input type="text" name="vida" value="50" hidden>
                <li>Ataque: 52</li><input type="text" name="ataque" value="52" hidden>
                <li>Defensa: 48</li><input type="text" name="defensa" value="48" hidden>
                <li>Nivel: 1</li>
                <li>Experiencia: 1000</li>
            </ul>
            <figure class="card_figure">
                <img src="imgs/psyduck.png" class="card_img">
            </figure>
            <button type="submit" class="card_button">Guardar</button>
        </form>
    </article>

    <article>
        <form action="procesa.php" method="POST" class="card card_snorlax">
            <input type="hidden" name="pokemon_id" value="6">
            <div class="card_name">
                <h2 class="card_title">Snorlax</h2><input type="text" name="nombre" value="Snorlax" hidden>
            </div>
            <ul class="card_text">
                <li>Tipo: Normal</li><input type="text" name="tipo" value="Normal" hidden>
                <li>Vida: 160</li><input type="text" name="vida" value="160" hidden>
                <li>Ataque: 110</li><input type="text" name="ataque" value="110" hidden>
                <li>Defensa: 65</li><input type="text" name="defensa" value="65" hidden>
                <li>Nivel: 1</li>
                <li>Experiencia: 1000</li>
            </ul>
            <figure class="card_figure">
                <img src="imgs/snorlax.png" class="card_img">
            </figure>
            <button type="submit" class="card_button">Guardar</button>
        </form>
    </article>
    <div class="container">
        <button class="btn_avanzar" onclick="avanzar()">MIS POKEMON</button>
    
    </div>
    <script src="alerta.js"></script>
</body>

</html>