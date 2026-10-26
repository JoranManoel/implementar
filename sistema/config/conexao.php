<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "helptech";
$porta = 3306;
$conn = new mysqli($servidor, $usuario, $senha, $banco, $porta);
if ($conn->connect_error) {
    die("Erro ao conectar ao banco de dados: " . $conn->connect_error);
}
$conn->set_charset("utf8mb4");
