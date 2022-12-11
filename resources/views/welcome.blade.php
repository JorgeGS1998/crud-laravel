<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="cadastrar-usuario" method="POST">
        @csrf
        <label for="">Nome:</label>
        <input type="text" placeholder="insira o primeiro nome" name="primeiro_nome" value="teste">
        <br>
        <br>
        <label for="">Sobre nome:</label>
        <input type="text" placeholder="insira o sobrenome" name="sobrenome" value="teste">
        <br>
        <br>
    
        <label for="">Apelido:</label>
        <input type="text" placeholder="insira o apelido" name="apelido" value="teste">
        <br>
        <br>
    
        <label for="">Data de Nascimento:</label>
        <input type="date" name="data_nascimento">
        <br>
        <br>

        <label for="">Email:</label>
        <input type="text" placeholder="insira o email" name="email" value="teste@teste.com ">
        <br>
        <br>
    
    
        <label for="">Senha:</label>
        <input type="text" placeholder="insira a senha" name="senha" value="teste">
        <br>
        <br>
    
        <label for="">Whatsapp:</label>
        <input type="text" placeholder="insira seu whatsapp" name="whatsapp" value="11111">
        <br>
        <br>
    
       <button>Cadastrar</button>
    </form>


    
    
</body>
</html>