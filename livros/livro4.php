<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    *{
    margin: 0px; padding:0px;
    box-sizing: border-box;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    outline:none; border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
    justify-content: space-between;
}

.search-box { /*posição da barra de pesquisa*/
    color: black 
    position: absolute;
    width: 45%; /*tamanho da borda*/
    margin-left: -70%;
    margin-right: -6%;
    margin-top: 10%;
    background-color: white;
    color: white;
    height: 50px; /*para centralizar*/
    padding: 18px; /*para centralizar*/
    border-radius: 40px; /*para curvar a borda*/
    display: flex;
    justify-content: space-between; /*para colocar na direita e esquerda*/
    align-items: center;
}

.search-txt { /*para estilizar a barra*/
    border: none;
    background: none;
    outline: none;
    padding: 0;
    color: rgb(255, 255, 255);
    font-size: 16px;
    line-height: 48px;
}

.search-bnt {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: rgb(255, 255, 255);
}

html{
    font-size: 62.5%;
    scroll-behavior: smooth;
    scroll-padding-top: 6rem;
    overflow-x: hidden;
}
body{
    background-color: rgb(0, 0, 0); /* color para o fundo da pagina*/
}
header{
    position: fixed;
    top:0; left: 0; right: 0;
    background: rgba(0, 0, 0, 0.973); /*para o fundo do menu*/
    padding: 2rem 9%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 1000;
    box-shadow: 0 ,5rem 1rem rgba(0, 0, 0, 0.1);
}
header .logo span{
    color:var(rgb(0, 0, 0));

}
header .navbar a{
    margin-right: 100px;
    font-size: 2rem;
    padding: 0 1.5rem;
    color:rgb(255, 255, 255); /*para as letras do menu*/
}
header .navbar a:hover{
    color:var(blueviolet);
}
header .ícons a{
    font-size: 2.5rem;
    color:rgb(255, 255, 255); /*para os icons*/
    margin-left: 1.5rem;
}
header .ícons a:hover{
    color:var(rgb(255, 255, 255));
}
header #toggler{
    display: none;
}
header .fa-bars{
    font-size: 3rem;
    color: black;
    border-radius: .5rem;
    padding: 5rem 1.5rem;
    cursor:pointer;
    border:.1rem solid blueviolet;
    display: none;
}

/*livro*/
body{
    background-color: purple;
    font-family: Arial, Helvetica, sans-serif;
    margin-top: 300px
  }
  .protudo{
    max-width:800px;
    margin: 0 auto;
    padding: 20px;
    background-color: white;
    border: 1px solid white;
    border-radius: 5px;
  }
  .protudo{
    display: flex;
    align-items: center;
    margin-bottom: 20px;
  }
  .protudo_img{
    width: 150px;
    margin-right: 20px;
  }
  .protudo_preço{
    font-size: 20px;
    font-weight: bold;
  }
  .protudo_descrição{
    margin-top: 10px;
  }
  .add-to-cart-btn{
    background-color: purple;
    color:white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
  }
</style>


<header>
        <input type="checkbox" name="" id="toggler">

        <label for="toggler" class="fa fa-bars"></label>

    <a  class="logo"><img src="imagem/logo1.png" width="200px" ></a>
    <nav class="navbar">

        <a href="index.php">home</a>
        <a href="generos.php">generos</a>
</nav>
<body>
<div class="search-box">
    <input type="text" class="search-txt" placeholder="Pesquisar">
    <a  class="serch-bnt">
    <img src="imagem/loupe.png" alt="" height="30px">
    </a>
</div>
</body>
<div class="ícons">
    <a href="carrinho.php" class="fas fa-shopping-cart"></a>
    <a href="login.php" class="fas fa-user"></a>

</div>
</header>
</head>


<body>
  <div class="protudo">
    <img class="protudo_img" src="imagem/foto1.jpg">
    <div class="protudo_info">
      <h2><?php echo "nome do livro"; ?></h2>
      <p class="protudo_preço"><?php echo "R$ 59,00"; ?></p>
      <p class="protudo_descrição"><?php echo "descrição"?></p>
      <form method="POST" action="carrinho.php">
        <input type="hidden" name="protudo" value="<?php echo "nome do livro"; ?>">
        <input type="hidden" name="preço" value="<?php echo "R$ 59,00"; ?>">
        <button class="add-to-cart-btn" type="submit">adicionar ao carrinho </button>
      </form>
    </div>
  </div>
</body>
</body>
</html>