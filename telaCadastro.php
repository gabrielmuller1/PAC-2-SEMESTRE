<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="./styles/telaCadastro.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    
    <header>
        <img src="./img/grenalmovies.png" width="100px">
    </header>


    <div class="container">
       <center> <div class="quadrado"> 
            
        <h1>Cadastro de Usuário</h1>
        
        <h3>Dados de Acesso</h3>
        <form action="">
            <input type="email" name="email" id="email" placeholder="Email"><br>
            <input type="password" name="senha" id="senha" placeholder="senha"><br>
            <input type="email" name="cemail" id="cemail" placeholder="confirmar email"><br>
            <input type="password" name="csenha" id="csenha" placeholder="confimar senha"><br>
            <br>
            <h3>Dados Pessoais</h3>
            <input type="email" name="nome" id="nome" placeholder="email"><br>
            <input type="text" name="sobrenome" id="sobrenome" placeholder="sobrenome"><br>
            <input type="number" name="cpf" id="cpf" placeholder="cpf"><br><br>
            <input type="number" name="nascimento" id="nascimento" placeholder="nascimento"><br>
            <input type="number" name="dede1" id="dede1" placeholder="ddd"><br>
            <input type="number" name="telefone" id="telefone" placeholder="telefone"><br>
            <br><br>
            <h3>Endereço</h3>
            <input type="number" name="cep" id="cep" placeholder="seu cep"><br>
            <input type="text" name="endereco" id="endereco" placeholder="endereço"><br>
            <input type="number" name="numero" id="numero" placeholder="numero"><br>
            <input type="text" name="complemento" id="complemento" placeholder="complemento"> <br>
            <input type="text" name="bairro" id="bairro" placeholder="bairro"><br>
            <input type="text" name="cidade" id="cidade" placeholder="cidade"><br>
            <input type="text" name="estado" id="estado" placeholder="estado"><br>
<br>
           Homem <input type="radio" name="genre" id="male">
           Mulher <input type="radio" name="genre" id="female">
           <br><br>
           Boleto <input type="radio" name="payment" id="boleto">
           Cartão <input type="radio" name="payment" id="cartao">
            <br><br>
           <input type="submit" value="Enviar">
        </form>


        <!-- <a href="./telaCadastro.html"><p id="merchan">Novo por aqui? Se cadastre e faça parte da família!</p></a> -->
        </div>
    </div>
  
</body>
</html>

<?php

$connection = mysqli_connect("localhost", "root", "", "pac");
 
// executa a consulta
$sqlConsult = "SELECT email, senha FROM login";
$answer = mysqli_query($connection, $sqlConsult);

$usuarioEnviado = 'sansanfleitas@gmail.com';
$senhaEnviado = '43215';

while ($columns = mysqli_fetch_array($answer)){
    if($columns['email'] == $usuarioEnviado && $columns['senha'] == $senhaEnviado){
        echo "<p>Funcionou. Pode realizar o login</p>";
        break;

    }else{
        echo "<p>Mensagem de erro: senha ou usuário inválidos.</p>";
        break;
    }

    // echo "<p>" . $columns['email'] . "- Senha: " . $columns['senha'] ."</p>";

}

 
// fecha a conexão
mysqli_close($connection);

?>

