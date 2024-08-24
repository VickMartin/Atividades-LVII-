<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <Style>
       form{
      
        position: absolute;
        top: 10%;
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
        Senha:<br>
        <input type="password" name="senha" id=""><br>
        Idade:<br>
        <input type="text" name="idade" id=""><br>
        Cpf:<br>
        <input type="text" name="cpf" id=""><br>
        Data de Nascimento:<br>
        <input type="date" name="dataNasc" require><br>
        Email:<br>
        <input type="email" name="email" required><br>
        Telefone:<br>
        <input type="number" name="telefone" required><br>
        <div>
        <input type="radio" name="sexo" value="masculino">Masculino<br>
        <input type="radio" name="sexo" value="feminino">Feminino<br>
        <input type="radio" name="sexo" value="outros">Outros<br>

        </div>
        
        Estado:<br>
        <select name="estado" id=""><br>
        <option value="Selecione">Selecione:</option><br>
        <option value="mg">MG</option><br>
        <option value="df">DF</option><br>
        <option value="go">GO</option><br>
        </select><br><br>

        
        <input type="submit" value="Cadastrar"><br>
    </fieldset>
    </form>

</body>
</html>