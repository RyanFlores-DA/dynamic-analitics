<?php
    include_once("conectar.php");
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];


  // Validação do usuário/senha digitados
  $sql = "SELECT 'id', 'nome', 'nivel' FROM 'usuarios' WHERE ('usuario' = '".$usuario ."') AND ('senha' = '". SHA1($senha) ."') AND ('ativo' = 1) LIMIT 1";
  $query = mysqli_query($strcon,$sql);   
  if (mysqli_num_rows($query) != 1) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
      echo "Login inválido!"; exit;
  } else {
      // Salva os dados encontados na variável $resultado
      $resultado = mysqli_fetch_assoc($query);
  }

  ?>