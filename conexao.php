<?php

$hostname = "localhost";
$bancodedados = "site01";
$usuario = "root";
$senha = "";

$mysqli = new mysqli ($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno){
    echo "Falha ao conectar : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}else{
    echo "<br> Conectado!";
}

