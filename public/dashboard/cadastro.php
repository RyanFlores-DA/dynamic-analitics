<?php
session_start();
include("conectar.php");

$id = mysqli_real_escape_string($strcon, trim($_POST['cpf']));
$nome = mysqli_real_escape_string($strcon, trim($_POST['name']));
$usuario = mysqli_real_escape_string($strcon, trim($_POST['usuario']));
$email = mysqli_real_escape_string($strcon, trim($_POST['email']));
$senha = mysqli_real_escape_string($strcon, trim(md5($_POST['senha'])));

$sql = "SELECT COUNT(*) AS total FROM usuario WHERE id = '$id'";
$result = mysqli_query($strcon,$sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['usuario_exist'] = true;
    header('Location: register.php');
    exit;
}

$sql = "INSERT INTO usuario (id, nome, usuario, email, senha, prioridade) VALUES ('$id','$nome','$usuario','$email','$senha', 1)";
if($strcon->query($sql) === TRUE){
    $_SESSION['status_cadastro'] = true;
    header('Location: register.php');
}

$strcon-> close();
exit;

?>