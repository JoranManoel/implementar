<?php
session_start();
if (!isset($_SESSION["usuario_id"])) {
    header("Location: ../login.php");
    exit;
}
require_once "../config/conexao.php";
$resultado = $conn->query("SELECT c.*, u.nome tecnico FROM chamados c INNER JOIN usuarios u ON u.id=c.usuario_id ORDER BY c.id DESC");
?>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <title>Chamados - HelpTech</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header class="topbar"><strong>HelpTech</strong>
        <div><a href="../dashboard.php">Dashboard</a> | <a href="../logout.php">Sair</a></div>
    </header>
    <main class="container">
        <div class="page-title">
            <div>
                <h1>Chamados</h1>
                <p>Gerenciamento de solicitações.</p>
            </div><a class="button" href="cadastrar.php">Novo chamado</a>
        </div>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Prioridade</th>
                        <th>Status</th>
                        <th>Técnico</th>
                        <th>Data</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($chamado = $resultado->fetch_assoc()): ?>
                        <tr>
                            <td><?= $chamado["id"] ?></td>
                            <td><?= htmlspecialchars($chamado["titulo"]) ?></td>
                            <td><?= htmlspecialchars($chamado["prioridade"]) ?></td>
                            <td><?= htmlspecialchars($chamado["status"]) ?></td>
                            <td><?= htmlspecialchars($chamado["tecnico"]) ?></td>
                            <td><?= date("d/m/Y H:i", strtotime($chamado["criado_em"])) ?></td>
                            <td><a href="editar.php?id=<?= $chamado["id"] ?>">Editar</a> | <a href="excluir.php?id=<?= $chamado["id"] ?>" onclick="return confirmarExclusao()">Excluir</a></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </main>
    <script src="../js/script.js"></script>
</body>

</html>