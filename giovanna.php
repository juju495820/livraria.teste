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