<?php

 class Notas{
    public $nome;
    public $nota1;
    public $nota2;
    public $nota3;
    public $media;
   

    

// Um professor precisa armazenar 3 notas de um estudante, calcular e apresentar a média final. Crie um formulário para inserção  dos dados do aluno (nome, nota1, nota2, nota3) e apresente as informações (nome e média final) na tela. A média será calculada considerando que a nota1 terá peso 3, a nota2 terá peso 3 e a nota3 terá peso 4. -->
 

public function dados($nome,$nota1,$nota2,$nota3){
      $this->nome = $nome;
      $this->nota1 = $nota1;
      $this->nota1 = $nota2;
      $this->nota1 = $nota3;

   echo"<br>Nome: $nome";
   echo"<br>1º Nota: $nota1";
   echo"<br>2º Nota: $nota2";
   echo"<br>3º Nota: $nota3";
  
    
}
public function cal($nota1, $nota2, $nota3) {
  // Atribuindo as notas como propriedades da classe
  $this->nota1 = $nota1;
  $this->nota2 = $nota2;
  $this->nota3 = $nota3;
  
  // Definindo os pesos
  $peso1 = 3;
  $peso2 = 3;
  $peso3 = 4;
  
  // Calculando a média ponderada
  $media = (($nota1 * $peso1) + ($nota2 * $peso2) + ($nota3 * $peso3)) / ($peso1 + $peso2 + $peso3);
  
  // Exibindo o resultado
  echo "<br>A sua média final é:".$media;
}



}      
?>