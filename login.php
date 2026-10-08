<?php
session_start();
require_once "config/conexao.php";
$erro = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
 $email = trim($_POST["email"] ?? ""); $senha = trim($_POST["senha"] ?? "");
 $stmt = $conn->prepare("SELECT id,nome,email,senha,perfil FROM usuarios WHERE email=? AND senha=? LIMIT 1");
 $stmt->bind_param("ss", $email, $senha); $stmt->execute(); $resultado = $stmt->get_result();
 if ($resultado->num_rows === 1) { $u=$resultado->fetch_assoc(); $_SESSION["usuario_id"]=$u["id"]; $_SESSION["usuario_nome"]=$u["nome"]; $_SESSION["usuario_perfil"]=$u["perfil"]; header("Location: dashboard.php"); exit; }
 $erro="E-mail ou senha inválidos.";
}
?>
<!doctype html><html lang="pt-BR"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>HelpTech - Login</title><link rel="stylesheet" href="css/style.css"></head><body class="login-page"><div class="login-card"><h1>HelpTech</h1><p>Gestão de Chamados de TI</p><?php if($erro): ?><div class="alert error"><?=htmlspecialchars($erro)?></div><?php endif; ?><form method="post"><label>E-mail</label><input type="email" name="email" required><label>Senha</label><input type="password" name="senha" required><button type="submit">Entrar</button></form></div></body></html>
