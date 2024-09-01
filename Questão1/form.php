<!-- Um professor precisa armazenar 3 notas de um estudante, calcular e apresentar a média final. Crie um formulário para inserção  dos dados do aluno (nome, nota1, nota2, nota3) e apresente as informações (nome e média final) na tela. A média será calculada considerando que a nota1 terá peso 3, a nota2 terá peso 3 e a nota3 terá peso 4. -->
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
        <legend>Cálculo de Média</legend>
        Nome:<br>
        <input class=enviar type="text" name="nome" id=""><br>
        1ºNota:<br>
        <input class=enviar type="nota1" name="email" required><br>
        2ºNota:<br>
        <input class=enviar type="nota2" name="telefone" required><br>
        3ºNota:<br>
        <input class=enviar type="nota3" name="senha" id=""><br>
        
       

        <center><input type="submit" value="Enviar"></center>
    </fieldset>
    
    </form>

</body>
</html>