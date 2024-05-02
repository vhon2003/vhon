<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Menu</title>
</head>
<body>

    <header>
        <a href="home.php"><img src="https://static.vecteezy.com/system/resources/thumbnails/002/399/795/small/tiger-head-illustration-tiger-design-for-t-shirt-mascot-logo-team-sport-vector.jpg" class="logo"></a>
        <ul class="navlist">
            <li><a href="index.php">Home</a></li>
            <li><a href="menu.php">Product</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="account.php">Log out</a></li>
        </ul>
    </header>
      
      <div id="cart">
        <h2>Shopping Cart</h2>
        <ul id="cart-items"></ul>
        <p>Total Price: ₱<span id="total-price">0.00</span></p>
        <label for="payment-method">Select Payment Method:</label>
        <select id="payment-method">
          <option value="G-Cash">G-Cash</option>
          <option value="Cash on Delivery">Cash on Delivery</option>
          <option value="Credit-card">Credit-card</option>
        </select>
        <button id="checkout-btn" onclick="checkout()">Checkout</button>
      </div>

      <div class="product-h2">
      <h2>Classic T-shirt</h2>
      </div>

      <div id="products">
       
        <div class="product" id="product1">
          <img src="https://img.freepik.com/premium-vector/best-t-shirt-designer-quote-logo_676084-27.jpg" alt="Product 1">
          <p>Price: ₱250.00</p>
          <input type="number" id="quantity1" value="1" min="1">
          <button onclick="addToCart('product1','', 250.00)">Add to Cart</button>
        </div>
      
        <div class="product" id="product2">
          <img src="https://static.vecteezy.com/system/resources/thumbnails/008/757/927/small/mountain-wildlife-forest-nature-retro-t-shirt-design-free-vector.jpg" alt="Product 2">
          <p>Price: ₱250.00</p>
          <input type="number" id="quantity2" value="1" min="1">
          <button onclick="addToCart('product2','', 250.00)">Add to Cart</button>
        </div>
      
        <div class="product" id="product3">
          <img src="https://img.freepik.com/premium-vector/typography-t-shirt-design_1040537-4.jpg?w=2000" alt="Product 3">
          <p>Price: ₱250.00</p>
          <input type="number" id="quantity3" value="1" min="1">
          <button onclick="addToCart('product3','', 250.00)">Add to Cart</button>
        </div>
      
        <div class="product" id="product4">
          <img src="https://i.etsystatic.com/25635574/r/il/97badc/2648222935/il_300x300.2648222935_69gr.jpg" alt="Product 4">
          <p>Price: ₱250.00</p>
          <input type="number" id="quantity4" value="1" min="1">
          <button onclick="addToCart('product4','',  250.00)">Add to Cart</button>
        </div>
      
      </div>

      <div class="product-h2">
        <h2>Basic T-shirt</h2>
      </div>

      <div id="products-2">
       
        <div class="product" id="product1">
          <img src="https://ae01.alicdn.com/kf/S671702d3e9484180b4e2542b8eed2ab5M.jpg_640x640Q90.jpg_.webp" alt="Product 1">
          <p>Price: ₱300.00</p>
          <input type="number" id="quantity1" value="1" min="1">
          <button onclick="addToCart('product1','', 300.00)">Add to Cart</button>
        </div>
      
        <div class="product" id="product2">
          <img src="https://res.cloudinary.com/teepublic/image/private/s--IA5DYHEC--/t_Resized%20Artwork/c_crop,x_10,y_10/c_fit,w_441/c_crop,g_north_west,h_588,w_441,x_0,y_0/g_north_west,u_upload:v1446840601:production:blanks:wahaid4l0xhexez2gwtn,x_-409,y_-299/b_rgb:eeeeee/c_limit,f_auto,h_630,q_auto:good:420,w_630/v1672465043/production/designs/37904697_0.jpg" alt="Product 2">
          <p>Price: ₱300.00</p>
          <input type="number" id="quantity2" value="1" min="1">
          <button onclick="addToCart('product2','',  300.00)">Add to Cart</button>
        </div>
      
        <div class="product" id="product3">
          <img src="https://threadheads.com.au/cdn/shop/products/black-solar-system-80s-mens-tshirt.jpg?v=1630945902&width=1000" alt="Product 3">
          
          <p>Price:₱300.00</p>
          <input type="number" id="quantity3" value="1" min="1">
          <button onclick="addToCart('product3','', 300.00)">Add to Cart</button>
        </div>
      
        <div class="product" id="product4">
          <img src="https://m.media-amazon.com/images/I/A1DMKATZUiL._CLa%7C2140%2C2000%7C91ixsgpdVSL.png%7C0%2C0%2C2140%2C2000%2B0.0%2C0.0%2C2140.0%2C2000.0_AC_SL1500_.png" alt="Product 4">
          
          <p>Price: ₱300.00</p>
          <input type="number" id="quantity4" value="1" min="1">
          <button onclick="addToCart('product4','', 300.00)">Add to Cart</button>
        </div>
      
      
      </div>

      <div class="product-h2">
        <h2>Most Wanted Shirt</h2>
      </div>

      <div id="products-2">
       
        <div class="product" id="product1">
          <img src="https://i.ebayimg.com/images/g/1qEAAOSwxylj9iaO/s-l400.png" alt="Product 1">
          
          <p>Price: ₱350.00</p>
          <input type="number" id="quantity1" value="1" min="1">
          <button onclick="addToCart('product1','', 350.00)">Add to Cart</button>
        </div>
      
        <div class="product" id="product2">
          <img src="https://image.spreadshirtmedia.com/image-server/v1/products/T121A54PA4057PT17X0Y36D1010967657W24892H23316/views/1,width=378,height=378,appearanceId=54,backgroundColor=F2F2F2/50-years-of-being-awesome.jpg" alt="Product 2">
          
          <p>Price: ₱350.00</p>
          <input type="number" id="quantity2" value="1" min="1">
          <button onclick="addToCart('product2','',  350.00)">Add to Cart</button>
        </div>
      
        <div class="product" id="product3">
          <img src="https://i.ebayimg.com/images/g/XekAAOSwdP9krlDA/s-l400.jpg" alt="Product 3">
         
          <p>Price: ₱350.00</p>
          <input type="number" id="quantity3" value="1" min="1">
          <button onclick="addToCart('product3', '', 350.00)">Add to Cart</button>
        </div>
      
        <div class="product" id="product4">
          <img src="https://www.thebigad.com/wp-content/uploads/2021/07/best-tshirt-designs-mountainclimbingclub.jpg" alt="Product 4">
          
          <p>Price: ₱350.00</p>
          <input type="number" id="quantity4" value="1" min="1">
          <button onclick="addToCart('product4','',  350.00)">Add to Cart</button>
        </div>
      
      
      </div>
      <div class="product-h2">
        <h2>Choose your design</h2>
      </div>

      <div id="products-2">
       
        <div class="product" id="product1">
          <img src="https://m.media-amazon.com/images/I/A1nYNISnPeL._CLa%7C2140%2C2000%7CA1g%2BDXNiayL.png%7C0%2C0%2C2140%2C2000%2B0.0%2C0.0%2C2140.0%2C2000.0_AC_UY1000_.png" alt="Product 1">
         
          <p>Price: ₱550.00</p>
          <input type="number" id="quantity1" value="1" min="1">
          <button onclick="addToCart('product1','',  550.00)">Add to Cart</button>
        </div>
      
        <div class="product" id="product2">
          <img src="https://down-ph.img.susercontent.com/file/c3b72d0f01c2369cf174a7bb2c9c4c84" alt="Product 2">
          
          <p>Price: ₱550.00</p>
          <input type="number" id="quantity2" value="1" min="1">
          <button onclick="addToCart('product2','', 550.00)">Add to Cart</button>
        </div>
      
        <div class="product" id="product3">
          <img src="https://down-ph.img.susercontent.com/file/80ae3dfca59c4af56ef99bc0cff0d662" alt="Product 3">
         
          <p>Price: ₱550.00</p>
          <input type="number" id="quantity3" value="1" min="1">
          <button onclick="addToCart('product3','',  550.00)">Add to Cart</button>
        </div>
      
        <div class="product" id="product4">
          <img src="https://i0.wp.com/ae01.alicdn.com/kf/HTB1UhanXOjrK1RjSsplq6xHmVXan/New-2018-font-b-Women-b-font-font-b-Compression-b-font-font-b-T-b.jpg" alt="Product 4">
          
          <p>Price: ₱550.00</p>
          <input type="number" id="quantity4" value="1" min="1">
          <button onclick="addToCart('product4','', 550.00)">Add to Cart</button>
        </div>
      
      
      </div>
      
      <script>
        let cartItems = [];
      
        function addToCart(productId, productName, productPrice) {
          const quantity = document.getElementById(`quantity${productId.charAt(productId.length - 1)}`).value;
          const totalPrice = (quantity * productPrice).toFixed(2);
      
          const item = {
            id: productId,
            name: productName,
            price: productPrice,
            quantity: quantity,
            total: totalPrice,
          };
      
          cartItems.push(item);
          updateCart();
        }
      
        function removeFromCart(itemId) {
          cartItems = cartItems.filter(item => item.id !== itemId);
          updateCart();
        }
      
        function updateCart() {
          const cartItemsList = document.getElementById('cart-items');
          const totalPriceElement = document.getElementById('total-price');
      
          cartItemsList.innerHTML = '';
          let totalPrice = 0;
      
          cartItems.forEach(item => {
            const listItem = document.createElement('li');
            const removeButton = document.createElement('button');
            removeButton.textContent = 'Remove';
            removeButton.className = 'remove-btn';
            removeButton.onclick = () => removeFromCart(item.id);
            
            listItem.textContent = item.name + " x " + item.quantity +  " = " + "₱" + item.total;
            listItem.appendChild(removeButton);
      
            cartItemsList.appendChild(listItem);
      
            totalPrice += parseFloat(item.total);
          });
      
          totalPriceElement.textContent = totalPrice.toFixed(2);
        }
      
        function checkout() {
          if (cartItems.length === 0) {
            alert('Sorry but your cart is empty. Order items before checking out. :-)');
            return;
          }
          
          const paymentMethod = document.getElementById('payment-method').value;
          const totalPrice = document.getElementById('total-price').textContent;
      
          const confirmation = confirm("Total Price: ₱" + totalPrice + "\nPayment Method: " + paymentMethod + "\n\nConfirm Order?");
      
          if (confirmation) {
            alert('Order has been Confirmed!'); 
            clearCart();
          } else {
            alert('Order has been Cancelled!');
          }
        }
      
        function clearCart() {
          cartItems = [];
          updateCart();
        }
      </script>

</body>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App</h3>
                <p>Download App for Android and ios mobile phone</p>
                <div class="app-logo">
                    <img src="https://static-00.iconduck.com/assets.00/google-play-icon-1024x1024-ntijeqxd.png">
                    <img src="https://logowik.com/content/uploads/images/ios1780.logowik.com.webp" width="150" height="120">
                </div>
            </div>
            <div class="footer-col-2">
                <img src="https://e7.pngegg.com/pngimages/919/310/png-clipart-iphone-google-play-app-store-apple-mobile-apple-store-and-google-play-logo-electronics-text-thumbnail.png" alt="">
                <p>Our Purpose is to sustainably make the pleasure and Benefits of 
                    Sports Accessible to the many</p>
            </div>
            <div class="footer-col-3">
                <h3>Useful Links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Join Affiliate</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow Us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>YouTube</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">Copyright 2020 - Easy Tutorials</p>
    </div>
</div> 

</html>
