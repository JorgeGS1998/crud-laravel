<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') -ConstruApp</title>
</head>
<body>

  
        <form action="cadastrar-usuario" method="POST">
            @csrf
            <label for="">Nome:</label>
            <input type="text" placeholder="insira o primeiro nome" name="primeiro_nome_usuario">
            <br>
            <br>
            <label for="">Sobre nome:</label>
            <input type="text" placeholder="insira o sobrenome" name="sobrenome_usuario">
            <br>
            <br>
        
            <label for="">Apelido:</label>
            <input type="text" placeholder="insira o apelido" name="apelido_usuario">
            <br>
            <br>
        
            <label for="">Data de Nascimento:</label>
            <input type="date" name="data_nasc_usuario">
            <br>
            <br>
        
            <label for="">Senha:</label>
            <input type="text" placeholder="insira a senha" name="senha_usuario">
            <br>
            <br>
        
            <label for="">Whatsapp:</label>
            <input type="text" placeholder="insira seu whatsapp" name="telefone_usuario">
            <br>
            <br>
        
            <input type="button" value="Cadastrar">
        </form>


   
    
</body>
</html>