<?php
include('Pdo.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu email";
    }else if(strlen($_POST['senha']) == 0){
        echo "Preencha sua senha";
    } else {
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução:" . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['user'] = $usuario['id'];

            header("Location: index.php");


        }else {
            echo "Falha ao logar! email ou senha incorretos";
        }

    }
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTATO</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="css/index.css">
    <header>
        <input type="checkbox" name="" id="toggler">

        <label for="toggler" class="fa fa-bars"></label>

    <a href="#" class="logo"><img src="imagem/logo1.png" width="200px" ></a>
    <nav class="navbar">

        <a href="index.php">home</a>
        <a href="generos.php">generos</a>
</nav>

<body>
<div class="search-box">
    <input type="text" class="search-txt" placeholder="Pesquisar"
    <a href="#" class="serch-bnt">
        <img src="imagem/loupe.png" alt="lupa" height="30px">
    </a>
</div>
</body>
<div class="ícons">
    <a href="carrinho.php" class="fas fa-shopping-cart"></a>
    <a href="login.php" class="fas fa-user"></a>

</div>
</header>
<br>
<h2>
    <main>
        <form method="POST">
        <label>email</label>
        <input type="email" name="email" value="<?= $email?> " required/>
        <label>senha</label>
        <input type="password" name="senha" value="<?= $senha ?> " required />
        <button type="submit">Entrar</button><br>
        <button type="submit">Inscreva-se</button><br>

</main>
</h2>
</html>
</body>