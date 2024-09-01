<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <Style>
       form{
      
        position: absolute;
        top: 30%;
        left: 40%;
       
       }
      
       .enviar{
        width: 100%;
       }
       fieldset{
        padding: 15px;
        font-size: 18px;
        
       }
       legend{
        text-align: center;
       }
       
    </Style>
</head>
<body>

<form action="recebeDados.php" method="get">
    <fieldset>
        <legend>Cadastro de Usuario</legend>
        Nome:<br>
        <input class=enviar type="text" name="nome" id=""><br>
        Data de Nascimento:<br>
        <input type="date" name="dataNasc" require><br>
        Cpf:<br>
        <input class=enviar type="text"  name="cpf" id=""><br>
        Sexo:<br>
        <input type="radio" name="sexo" value="masculino">Masculino<br>
        <input type="radio" name="sexo" value="feminino">Feminino<br>
        <input type="radio" name="sexo" value="outros">Outros<br>
        Email:<br>
        <input class=enviar type="email" name="email" required><br>
        Telefone:<br>
        <input class=enviar type="tel" name="telefone" required><br>
        Senha:<br>
        <input class=enviar type="password" name="senha" id=""><br>
        
        Vínculo empregatício:<br>
        <input type="radio" name="trabalho" value="horista">Horista<br>
        Valor da hora trabalhada:<br>
        <input class=enviar type="text" name="diaria" placeholder="ex:60.61 ou 60"><br>
        Número de horas trabalhadas no mês:<br>
        <input class=enviar type="text" name="pagar" ><br>
        <input type="radio" name="trabalho" value="assalariado">Assalariado<br>
        Qual o seu salário atual:<br>
        <input class=enviar type="text" name="sal"  placeholder="ex:2260.61 ou 2260"><br><br>

        <center><input type="submit" value="Enviar"></center>
    </fieldset>
    
    </form>

</body>
</html>