<?php

  class Conexao {
    private $usuario = 'root'; //usuario banco de dados
    private $senha = ''; //senha banco de dados
    private $caminho = 'localhost'; //servidor banco de dados
    private $banco = 'login';  //nome do banco de dados
    private $con;

    public function __construct() {
      $this->con = mysqli_connect($this->caminho, $this->usuario, $this->senha) or die("Conexão com o banco de dados falhou!" . mysqli_error($this->con));

      mysqli_select_db($this->con, $this->banco) or die("Conexão com o banco de dados falhou!" . mysqli_error($this->con));

    }

    public function getCon() {
      return $this->con;
    }
  }
