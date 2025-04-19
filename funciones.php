<?php

use Dom\Document;

include("datos.php");

function conectarBDA($host,$usuario,$pwd,$bda){
    $conexion = mysqli_connect($host,$usuario,$pwd,$bda);

    if (!$conexion) {
        die("Error al conectarse a la base de datos: " . mysqli_connect_error());
    }

    return $conexion;
}

function buscarUsuario($conexion,$nombre,$pwd){

    $consulta = "SELECT * FROM usuarios WHERE nombre = '$nombre' AND pwd = '$pwd'";
    $datos = mysqli_query($conexion,$consulta);
    
    if(mysqli_num_rows($datos) > 0){
        $usuarioEncontrado = mysqli_fetch_assoc($datos);
        return $usuarioEncontrado;
    } 
}

function registrarUsuario($conexion,$nombre,$pwd){
    $consulta = "INSERT INTO usuarios(nombre,pwd) VALUES ('$nombre','$pwd')";

    return mysqli_query($conexion,$consulta);
}

// insertar un pokemon al  usuario que tiene la sesion inciada
function registrarPokemon($conexion,$nombre,$tipo,$vida,$ataque,$defensa,$user_id){

    $consulta = "INSERT INTO pokemon(nombre, tipo, salud, ataque, defensa, usuario_id) VALUES ('$nombre', '$tipo', $vida, $ataque, $defensa, $user_id)";
    return mysqli_query($conexion,$consulta);

}

function buscarPokemonDeUsuario($conexion,$id){
    $consulta = "SELECT * FROM pokemon.nombre AS pokemon_name, pokemon.tipo, pokemon.nivel,pokemon.experiencia,pokemon.salud,pokemon.ataque,pokemon.defensa,usuarios.nombre AS entrenador_name
                FROM pokemon JOIN usuarios ON pokemon.usuario_id = $id ";

    return mysqli_query($conexion,$consulta);
    
}
?>