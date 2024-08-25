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
        
        Qual o seu salário atual:<br>
        <input type="text" name="sal" required placeholder="Exemplo:2260.61 ou 2260"><br>
        
        <center><input type="submit" value="Enviar"></center>
        
        <hr>
    </form>
    <?php
    $salario = $_GET['sal'];

    $resultado= $salario+($salario/100*15);
    
    echo"O reajustre salárial é: R$ $resultado "; 
    
    ?>

    </fieldset>


    <a href="login.php">Voltar</a>
</body>
</html>