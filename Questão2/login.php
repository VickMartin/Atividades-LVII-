<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <Style>
       form{
      
        position: absolute;
        top: 20%;
        left: 40%;
        
       }
      
       
       
    </Style>
</head>
<body>

<form action="recebeDados.php" method="get">
    <fieldset>
        <h2>Cadastro de Usuario</h2>
        Nome:<br>
        <input type="text" name="nome" id=""><br>
        Data de Nascimento:<br>
        <input type="date" name="dataNasc" require><br>
        Cpf:<br>
        <input type="text" name="cpf" id=""><br>
        Sexo:<br>
        <input type="radio" name="sexo" value="masculino">Masculino
        <input type="radio" name="sexo" value="feminino">Feminino
        <input type="radio" name="sexo" value="outros">Outros<br>
        Email:<br>
        <input type="email" name="email" required><br>
        Telefone:<br>
        <input type="tel" name="telefone" required><br>
        Senha:<br>
        <input type="password" name="senha" id=""><br><br>
        <center><input type="submit" value="Enviar"><br></center>
    </fieldset>
    
    </form>

</body>
</html>