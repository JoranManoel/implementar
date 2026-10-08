<?php
session_start();
header("Location: " . (isset($_SESSION['usuario_id']) ? 'dashboard.php' : 'login.php'));
exit;
