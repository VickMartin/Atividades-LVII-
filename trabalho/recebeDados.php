<?php
include 'Pessoa.php';

   $nome = $_GET['nome'];
   $senha = $_GET['senha'];
   $idade = $_GET['idade'];
   $cpf = $_GET['cpf'];
   $dataNasc = $_GET['dataNasc'];
   $email = $_GET['email'];
   $telefone = $_GET['telefone'];
   $sexo = $_GET['sexo'];
   $estado = $_GET['estado'];
 

   $Pessoa1 = new Pessoa();
   $Pessoa1->nome = $nome;
   $Pessoa1->senha = $senha;
   $Pessoa1->idade = $idade;
   $Pessoa1->cpf = $cpf;
   $Pessoa1->dataNasc = $dataNasc;
   $Pessoa1->email = $email;
   $Pessoa1->telefone = $telefone;
   $Pessoa1->sexo = $sexo;
  
  
   echo"<br><pre>";
   
   var_dump($nome,$senha,$idade,$cpf,$dataNasc,$email,$telefone,$sexo,$estado,);

    
?>