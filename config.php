<?php

$hostname = "127.0.0.1";
$bancodedados = "Cadastro";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno) {
    echo "Falha ao Conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}