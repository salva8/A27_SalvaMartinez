<?php
session_start();
include("datos.php");
include("funciones.php");
if (!isset($_SESSION["id"])) {
    echo "<script>alert('Debes iniciar sesion');</script>";
    exit;
}
$user = $_SESSION["id"];
$conexion = conectarBDA($host, $usuario, $pwd, $bda);

$resultado = buscarPokemonDeUsuario($conexion,$user);
if(mysqli_num_rows($resultado) > 0){
    while($fila = mysqli_fetch_assoc($resultado)){
        
    }
}
?>