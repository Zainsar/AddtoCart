<header class="header">

   <section class="flex">
      <a href="index.php" style="text-decoration: none;" class="logo">Logo</a>

      <nav class="navbar">
         <a style="text-decoration: none;" href="add_product.php">add product</a>
         <a style="text-decoration: none;" href="view_products.php">view products</a>
         <a style="text-decoration: none;" href="orders.php">my orders</a>
         <?php
         $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
         $count_cart_items->execute([$user_id]);
         $total_cart_items = $count_cart_items->rowCount();
         ?>
         <a href="shopping_cart.php" style="text-decoration: none;" class="cart-btn">cart<span>
               <?= $total_cart_items; ?>
            </span></a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>
   </section>

</header>