<?php
include 'Dados.php';

   $nome = $_GET['nome'];
   $senha = $_GET['senha'];
   $cpf = $_GET['cpf'];
   $dataNasc = $_GET['dataNasc'];
   $email = $_GET['email'];
   $telefone = $_GET['telefone'];
   $sexo = $_GET['sexo'];
   $trabalho = $_GET['trabalho'];
   $diaria = $_GET['diaria'];
   $pagar = $_GET['pagar'];
   $sal = $_GET['sal'];

   echo "Seus Dados:";

   $pessoa1 = new Dados();

  

   $pessoa1->dados($nome,$senha,$cpf,$dataNasc,$email,$telefone,$sexo,$trabalho);

   $pessoa1->informa();

   $pessoa1->calculo($trabalho,$diaria,$pagar,$sal)
   

   

    
?>
