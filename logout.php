<?php

  include ('classes/Conexao.class.php');
  include ('classes/UsuarioDAO.class.php');

  $usuario = new UsuarioDAO();

  $logout = $usuario->logout();

 ?>
