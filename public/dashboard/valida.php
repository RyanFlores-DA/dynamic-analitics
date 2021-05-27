<?php
    session_start();
    include_once('conectar.php');

    if(empty($_POST['usuario']) || empty($_POST['senha'])){   
        header("Location: login.php");
	    exit();
    }
    $usuario = mysqli_real_escape_string($strcon, $_POST['usuario']);
    $senha = mysqli_real_escape_string($strcon, $_POST['senha']);

    $sql = "SELECT * FROM usuario WHERE usuario = '{$usuario}' AND senha = md5('{$senha}')";

    $result = mysqli_query($strcon, $sql);

    $row = mysqli_num_rows($result);

    if($row == 1){
        $usuario_bd = mysqli_fetch_assoc($result);
        $_SESSION['usuario'] = $usuario;
        header('Location: ../graficos.php');
        exit();
    }else{
        $_SESSION['not_authenticated'] = true;
        header("Location: login.php");
        exit();
    }
?>