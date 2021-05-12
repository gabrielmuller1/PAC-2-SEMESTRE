<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Boas Vindas</title>
    <link rel="stylesheet" href="./styles/telaBoasVindas.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    
    <header>
        <img src="./img/grenalmovies.png" width="100px">
    </header>

    <div class="container">
        <div class="quadrado">
            <pre>Filmes, séries e muito
mais.
Sem Limites.
</pre> <!--
        <p id="subtitulo">Assista onde quiser. Cancele quando quiser.</p>
        <p id="subtitulo">Pronto para assistir? Informe o seu email para criar ou reiniciar sua assinatura.</p>

        <form action="">
            <input type="email" placeholder="E-mail" id="inputemail">
        </form>
        <a href="./telaLogin.html" target="_blank"><button id="inputsubmit">Vamos lá</button></a>
        <a href="./telaCadastro.html" target="_blank"><button id="inputsubmitAlternative">Não tem cadastro? Faça agora!</button></a>
        
         <a href="http:www.google.com.br/" target="_blank"><input type="submit" value="Vamos lá" id="inputsubmit"></a> -->

         <p id="subtitulo">Assista onde quiser. Cancele quando quiser.</p>
        <p id="subtitulo">Pronto para assistir? Informe o seu email para criar ou reiniciar sua assinatura.</p>


        <!-- Informar no ACTION o arquivo a ser enviado os dados e o método utilizado -->

        <form action="telaLogin.php" method="post">
            <input type="email" placeholder="E-mail" name="inputemail" id="inputemail">

            <!-- Criar uma div ou outra tag para organizar os botões. Substituir a tag "a" por "input" -->

            <div>
            <input type="submit" id="inputsubmit" value="Vamos lá!">

            <a href="telaCadastro.php" target="_blank"><button id="inputsubmitAlternative">Não tem cadastro? Faça agora!</button></a>

            </div>
        </form>
    </div>
    </div>
  
</body>
</html>

<?php

$connection = mysqli_connect("localhost", "root", "", "pac");
 
// executa a consulta
$sqlConsult = "SELECT email, senha FROM login";
$answer = mysqli_query($connection, $sqlConsult);

$usuarioEnviado = 'gabrielmuller708@gmail.com';
$senhaEnviado = 12345;


while ($columns = mysqli_fetch_array($answer)){
    
    if($columns['email'] == $usuarioEnviado && $columns['senha'] == $senhaEnviado){
        echo "<p>Funcionou. Pode realizar o login</p>";
        $status = true;
        break;
    }
    $status = false;
}

if($status){
    echo "<p>Tela de Login</p>";
}else{
    echo "<p>Tela de Cadastro</p>";
}
 
// fecha a conexão
mysqli_close($connection);

?>
