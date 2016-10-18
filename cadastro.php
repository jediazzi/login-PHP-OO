<?php

  if(isset($_POST['cadastrar'])) {
    include ('classes/Conexao.class.php');
    include ('classes/UsuarioDAO.class.php');

    $cadastrar = new UsuarioDAO();

    $login = trim(strip_tags($_POST['login'])); // atribui login à variavel, com funções contra sql inject
    $senha = trim(strip_tags($_POST['senha'])); // atribui login à variavel, com funções contra sql inject
    $rep_senha = trim(strip_tags($_POST['rep_senha'])); // atribui login à variavel, com funções contra sql inject

    // confere se as senhas são iguais
    if($senha === $rep_senha) {
      $consulta = $cadastrar->unico($login);
      // caso o login escolhido já exista no banco retorna erro
      if($consulta == false) {
        header('location:cadastro.php?repetido=senha');
      // caso não haja login parecido, inclui métoro de inserção de dados no banco de dados
      } else {
        $insere = $cadastrar->cadastra($login,$senha);
        // caso o usuario seja cadastrado, exibir mensagem de sucesso
        if($insere == true) {
          header('location:cadastro.php?success=cadastrado');
        }
      }

    } else {
      header('location:cadastro.php?erro=senha');
    }

  }

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login PHP OO</title>

 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src = "http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>

  <div class="container jumbotron">

    <?php
      // mensagem de erro caso as senhas não sejam iguais
      if(isset($_GET['erro'])) {
        echo '<div class="alert alert-danger">As senhas devem ser iguais!</div>';
      }
      // mensagem de erro caso o login escolhido já exista no banco de dados
      if(isset($_GET['repetido'])) {
        echo '<div class="alert alert-danger">Este Login já foi escolhido por outra pessoa!</div>';
      }
      // mensagem de sucesso caso o usuario seja cadastrado corretamente
      if(isset($_GET['success'])) {
        echo '<div class="alert alert-success">Usuario cadastrado!</div>';
      }

    ?>
    <h2>Cadastro</h2>
    <hr>
    <form action="#" method="post">

      <div class="form-group">
        <label for="login">Login</label>
        <input type="text" class="form-control" id="login" name="login" required autofocus>
      </div>

      <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" class="form-control" id="senha" name="senha" required>
      </div>

      <div class="form-group">
        <label for="rep_senha">Repita a Senha:</label>
        <input type="password" class="form-control" id="rep_senha" name="rep_senha" required>
      </div>
      <button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>

    </form>

    <hr>
    <a href="index.php">Voltar</a>

  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script>
    setTimeout(function() {
      $('.alert').fadeOut();
    }, 3000);

  </script>
</body>

</html>
