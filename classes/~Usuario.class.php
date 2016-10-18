<?php

  private $codUsuario;
  private $nome;
  private $login;
  private $senha;
  private $logado;

  function getCodUsuario() {
    return $this->codUsuario;
  }

  function getNome() {
    return $this->nome;
  }

  function getLogin() {
    return $this->login;
  }

  function getSenha() {
    return $this->senha;
  }

  function getLogado() {
    return $this->logado;
  }

  function setCodUsuario($codUsuario) {
    $this->codUsuario = $codUsuario;
  }

  function setNome($nome) {
    $this->nome = $nome;
  }

  function setLogin($login) {
    $this->login = $login;
  }

  function setSenha($senha) {
    $this->senha = $senha;
  }

  function setLogado($logado) {
    $this->logado = $logado;
  }
