<?php
session_start(); if(!isset($_SESSION["usuario_id"])){header("Location: ../login.php");exit;} require_once "../config/conexao.php";$id=intval($_GET["id"]??0);$s=$conn->prepare("DELETE FROM chamados WHERE id=?");$s->bind_param("i",$id);$s->execute();header("Location: listar.php");exit;
