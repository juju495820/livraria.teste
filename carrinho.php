<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<link rel="stylesheet" href="css/carrinho.css">
<header>
        <input type="checkbox" name="" id="toggler">

        <label for="toggler" class="fa fa-bars"></label>

    <a class="logo"><img src="imagem/logo1.png" width="200px" ></a>
    <nav class="navbar">

        <a href="index.php">home</a>
        <a href="generos.php">generos</a>
</nav>

<body>
<div class="search-box">
    <input type="text" class="search-txt" placeholder="Pesquisar">
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


<div class="cart">
    <h2>Carrinho de Compras</h2>
    <div id="item-list">
      <!-- Itens serão adicionados dinamicamente aqui -->
    </div>
    <div class="payment-options">
      <button onclick="checkout()" disabled>Finalizar Compra</button>
      <button onclick="clearCart()">Limpar Carrinho</button>
    </div>
  </div>
  
  <script>
    var itemList = document.getElementById('item-list');
    var checkoutButton = document.querySelector('.payment-options button:first-child');
    
    var cartItems = [];
    
    function addItem() {
      var itemName = prompt('Digite o nome do item:');
      if (itemName) {
        var item = {
          name: itemName,
          price: 10 // Defina o preço do item conforme necessário
        };
        cartItems.push(item);
        renderCart();
      }
    }
    
    function removeItem() {
      if (cartItems.length > 0) {
        cartItems.pop();
        renderCart();
      }
    }
    
    function clearCart() {
      cartItems = [];
      renderCart();
    }
    
    function renderCart() {
      itemList.innerHTML = '';
      
      for (var i = 0; i < cartItems.length; i++) {
        var item = cartItems[i];
        
        var cartItem = document.createElement('div');
        cartItem.classList.add('cart-item');
        
        var itemName = document.createElement('span');
        itemName.textContent = item.name;
        
        var itemPrice = document.createElement('span');
        itemPrice.textContent = 'R$' + item.price;
        
        cartItem.appendChild(itemName);
        cartItem.appendChild(itemPrice);
        
        itemList.appendChild(cartItem);
      }
      
      updateButtons();
    }
    
    function updateButtons() {
      if (cartItems.length > 0) {
        checkoutButton.disabled = false;
      } else {
        checkoutButton.disabled = true;
      }
    }
    
    function checkout() {
      alert('Obrigado por sua compra!');
      clearCart();
    }
  </script>
</body>
</html>