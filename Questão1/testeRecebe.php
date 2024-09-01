<?php
include 'Notas.php';

   $nome = $_GET['nome'];
   $nota1 = $_GET['nota1'];
   $nota2 = $_GET['nota2'];
   $nota3 = $_GET['nota3'];

  
   echo "Seus Dados";

   $notas = new Notas();


   $notas->dados($nome,$nota1,$nota2,$nota3);

   $notas->cal($nota1, $nota2, $nota3);

  
   

   

    
?>