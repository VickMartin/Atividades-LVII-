<?php

 class Dados{
    public $nome;
    public $senha;
    public $cpf;
    public $dataNasc;
    public $email;
    public $telefone;
    public $sexo;
    public $trabalho;
    public $diaria;
    public $pagar;
    public $sal;

    public function dados($nome,$senha,$cpf,$dataNasc,$email,$telefone,$sexo,$trabalho){
      $this->nome = $nome;
      $this->senha = $senha;
      $this->cpf = $cpf;
      $this->dataNasc = $dataNasc;
      $this->email = $email;
      $this->telefone= $telefone;
      $this->sexo= $sexo;
      $this->trabalho = $trabalho;
    
    
}
public function informa(){
   echo"<br> Nome: ".$this->nome;
   echo"<br> Senha: ".$this->senha;
   echo"<br> CPF: ".$this->cpf;
   echo"<br> Data de nascimento: ".$this->dataNasc;
   echo"<br> E-mail: ".$this->email;
   echo"<br> Telefone: ".$this->telefone;
   echo"<br> Sexo: ".$this->sexo;
   echo"<br> Vínculo empregatício: ".$this->trabalho;
         
}


 
 public function calculo($trabalho,$diaria,$pagar,$sal){
      $this->trabalho = $trabalho;
      $this->diaria = $diaria;
      $this->pagar = $pagar;
      $this-> sal= $sal;
 

         if($trabalho == "horista"){
            $resultado= $diaria*$pagar;
            echo"<br>Valor hora/trabalhada = $diaria
            <br>Números de hora/trabalhada = $pagar <br>";
            echo"O valor que deve ser recebido é: R$ $resultado ";  

         }elseif($trabalho == "assalariado"){

            $res= $sal+($sal/100*15); 
            echo"<br>Salário = $sal <br>";
            echo" Com 15% de reajustre salárial, novo salário é: R$ $res"; 
         }

   }


}      
?>