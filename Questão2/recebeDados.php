<?php
include 'Dados.php';

   $nome = $_GET['nome'];
   $senha = $_GET['senha'];
   $cpf = $_GET['cpf'];
   $dataNasc = $_GET['dataNasc'];
   $email = $_GET['email'];
   $telefone = $_GET['telefone'];
   $sexo = $_GET['sexo'];
   echo "Seus Dados:";

   $Pessoa1 = new Pessoa();
   $Pessoa1->nome = $nome;
   $Pessoa1->senha = $senha;
   $Pessoa1->cpf = $cpf;
   $Pessoa1->dataNasc = $dataNasc;
   $Pessoa1->email = $email;
   $Pessoa1->telefone = $telefone;
   $Pessoa1->sexo = $sexo;
  
  
   
   
   echo"<br>$nome<br>$senha<br>$cpf<br>$dataNasc<br>$email<br>$telefone<br>$sexo";

   

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>

   
</head>
<body>
<h2>Você é:</h2>
      <form action="cal.php">
         <input  type="submit" value="Funcionário Horista">
      </form>
      
     <form action="cal1.php">
         <input type="submit" value="Funcionário Assalariado">
     
     </form>
      
</body>
</html>