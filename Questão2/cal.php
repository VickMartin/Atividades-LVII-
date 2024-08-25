<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    form{
      
      position: absolute;
      top: 35%;
      left: 32%;
      font-size: 30px;
      
     }
     input{
        padding: 4px;
     }
</style>

</head>
<body>
    <form action="" method="get">


    <fieldset>
        
        Valor da hora trabalhada:<br>
        <input type="text" name="diaria" placeholder="Exemplo:60.61 ou 60"><br>
        Número de horas trabalhadas no mês:<br>
        <input type="text" name="pagar" placeholder="Exemplo:40"><br>
        <center><input type="submit" value="Enviar"></center>
        
        <hr>
    </form>
    <?php
    $diaria = $_GET['diaria'];
    $pagar = $_GET['pagar'];

    

    $resultado= $diaria*$pagar;
    
    echo"O valor que deve ser recebido é: R$ $resultado "; 
    
    ?>

    </fieldset>


    <a href="login.php">Voltar</a>
</body>
</html>


    
    