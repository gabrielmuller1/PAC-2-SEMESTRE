<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="./styles/telaLogin.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    
    <header>
        <img src="./img/grenalmovies.png" width="100px">
    </header>


    <div class="container">
        <div class="quadrado">
            
        <h1 style="color: red;">Pagamento</h1>
        <h3>Confirme sua forma de pagamento</h3>

        <form action="">
            <input type="radio" name="payment" id="boleto" value="boletinho">
            <img src="./img/boleto.png" width="160px">
            <br><br>
            <input type="radio" name="payment" id="cartao" value="cartaosinho"> 
            <img src="./img/cartao.png" width="160px">
            <br><br><br>
            <input type="submit" value="Entrar" id="botaoSubmit" ><br>
        </form>

               
        </div>
    </div>
  
</body>
</html>

<?php

$connection = mysqli_connect("localhost", "root", "", "pac");
 
// executa a consulta
$sqlConsult = "SELECT * FROM pagcartao";
$answer = mysqli_query($connection, $sqlConsult);

$usuarioEnviado = 'Matheus Ferreira';
$cvv = 123;


while ($columns = mysqli_fetch_array($answer)){

    if($columns['titular'] == $usuarioEnviado && $columns['cvv'] == $cvv){
        echo "<p>Funcionou. Pode validar o cartão. Direciona para a página. Usuário: ".$columns['titular']."-".$columns['cvv']."</p>";
        $status = true;
        break;
    }
    $status = false;
}

if($status){
    echo "<p>Tela do Cartão</p>";
}else{
    echo "<p>Tela de Cadastro</p>";
}
 
// fecha a conexão
mysqli_close($connection);

?>
