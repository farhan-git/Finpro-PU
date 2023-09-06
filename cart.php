<?php 

session_start();

if(isset($_POST['add_to_cart'])) {

  // if already add to cart
if(isset($_SESSION['cart'])) {

  $products_array_ids = array_column($_SESSION['cart'],"product_id");
  // if the product add to cart or not
  if(!in_array($_POST['product_id'], $products_array_ids)) {
     
    $product_id = $_POST['product_id'];

      $product_array = array(
                        'product_id' => $_POST['product_id'],
                        'product_name' => $_POST['product_name'],
                        'product_price' => $_POST['product_price'],
                        'product_image' => $_POST['product_image'],
                        'product_quantity' => $_POST['product_quantity']

      );

      $_SESSION['cart'][$product_id] = $product_array;

    // product added
  }else {
    echo '<script>alert("Porduct was already to cart");</script>';
  }
  // if this is teh first product
}else{
  $product_id = $_POST['product_id'];
  $product_name = $_POST['product_name'];
  $product_price =$_POST['product_price'];
  $product_image = $_POST['product_image'];
  $product_quantity = $_POST['product_quantity'];

  $product_array = array(
                    'product_id' => $product_id,
                    'product_name' => $product_name,
                    'product_price' => $product_price,
                    'product_image' => $product_image,
                    'product_quantity' => $product_quantity

  );

  $_SESSION['cart'][$product_id] = $product_array;

}

// calculate total 
calculateTotalCart();



// remove product
}else if (isset($_POST['remove_product'])) {


  $product_id = $_POST['product_id'];
  unset($_SESSION['cart'][$product_id]);


  // calculate total
  calculateTotalCart();


}else if (isset($_POST['edit_quantity'])) {

  // get the id and the quantity from the form
  $product_id = $_POST['product_id'];
  $product_quantity = $_POST['product_quantity'];
  // get the product array from the session
  $product_array = $_SESSION['cart'][$product_id];
  // update product quantity
  $product_array['product_quantity'] = $product_quantity;
  // return array back its place
  $_SESSION['cart'][$product_id] = $product_array;



  // calculate total
  calculateTotalCart();

}else{
  header('location: index.php');
}



function calculateTotalCart() {

  $total = 0;

  foreach($_SESSION['cart'] as $key => $value) {
    $product = $_SESSION['cart'][$key];
    $price = $product['product_price'];
    $quantity = $product['product_quantity'];

    $total = $total + ($price * $quantity);
  }

  $_SESSION['total'] = $total;

}



?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MWU || music with us</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link rel="stylesheet" href="asset/css/style.css" />
  </head>
  <body>
      <!-- navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
      <div class="container">
        <a href=""><img src="./asset/imgs/logo.png" alt="" class="logo"/></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse nav-buttons"
          id="navbarSupportedContent"
        >
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop.html">Shop</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact Us</a>
            </li>

            <li class="nav-item">
              <a href="cart.php"><i class="fas fa-solid fa-bag-shopping"></i></a>
              <a href="account.html"><i class="fas fa-solid fa-user"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
      <!-- navbar end -->

    <!-- cart -->
    <section class="cart container my-5 py5">
      <div class="container mt-5">
        <h2 class="font-weight-bolde">Your Cart</h2>
        <hr />
      </div>

      <table class="mt-5 pt-5">
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Subtotal</th>
        </tr>

      <?php foreach($_SESSION['cart'] as $key => $value) {?>

        <tr>
          <td>
            <div class="product-info">
              <img src="asset/imgs/<?php echo $value['product_image'];?>" alt="" />
              <div>
                <p><?php echo $value['product_name']; ?></p>
                <small><span>$</span><?php echo $value['product_price'];?></small>
                <br />
                <form method="POST" action="cart.php">
                  <input type="hidden" name="product_id" value="<?php echo $value['product_id'];?>">
                  <input type="submit" name="remove_product" class="remove-btn" value="remove">
               </form>
                
              </div>
            </div>
          </td>

          <td>
            <form method="POST" action="cart.php">
              <input type="hidden" name="product_id" value="<?php echo $value['product_id'];?>"/>
              <input type="number" name="product_quantity" value="<?php echo $value['product_quantity'];?>" />
              <input type="submit" class="edit-btn" value="edit" name="edit_quantity">
            </form>
            
          </td>

          <td>
            <span>$</span>
            <span class="product-price"><?php echo $value['product_quantity'] * $value['product_price'];?></span>
          </td>
        </tr>

        <?php }?>

      </table>

      <div class="cart-total">
        <table>
          <!-- <tr>
            <td>Subtotal</td>
            <td>$155</td>
          </tr> -->
          <tr>
            <td>Total</td>
            <td>$ <?php echo $_SESSION['total']; ?></td>
          </tr>
        </table>
      </div>


      <div class="checkout-container">
        <form method="POST" action="checkout.php">
          <input type="submit" class="btn checkout-btn" value="Checkout" name="checkout">
        </form>
      </div>


    </section>

    <!-- Footer Start -->
    <footer class="mt-5 py-5">
      <div class="row container mx-auto pt-5">
        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
          <img src="./asset/imgs/logo.png" alt="" class="logo" />
          <p class="pt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab esse
            fugit totam nobis harum ex possimus ipsum deserunt doloremque id.
          </p>
        </div>
        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
          <h5 class="pb-2">Featured</h5>
          <ul class="text-uppercase">
            <li><a href="#">men</a></li>
            <li><a href="#">women</a></li>
            <li><a href="#">boys</a></li>
            <li><a href="#">girls</a></li>
            <li><a href="#">new arrivals</a></li>
            <li><a href="#">clothes</a></li>
          </ul>
        </div>

        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
          <h5 class="pb-2">Contact Us</h5>
          <div>
            <h6 class="text-uppercase">Address</h6>
            <p>1234 Street Name, City</p>
          </div>
          <div>
            <h6 class="text-uppercase">Address</h6>
            <p>1234 Street Name, City</p>
          </div>
          <div>
            <h6 class="text-uppercase">Email</h6>
            <p>fandamenfarhan0@gmail.com</p>
          </div>
        </div>
        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
          <h5 class="pb-2">Instagram</h5>
          <div class="row">
            <img
              src="asset/imgs/elec2.jpg"
              alt=""
              class="img-fluid w-25 h-100 m-2"
            />
            <img
              src="asset/imgs/elec1.jpg"
              alt=""
              class="img-fluid w-25 h-100 m-2"
            />
            <img
              src="asset/imgs/akustik1.jpg"
              alt=""
              class="img-fluid w-25 h-100 m-2"
            />
            <img
              src="asset/imgs/akustik4.jpg"
              alt=""
              class="img-fluid w-25 h-100 m-2"
            />
            <img
              src="asset/imgs/akustik3.jpg"
              alt=""
              class="img-fluid w-25 h-100 m-2"
            />
          </div>
        </div>
      </div>

      <div class="copyright mt-5">
        <div class="row container mx-auto">
          <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
            <img src="asset/imgs/pay.png" alt="" />
            <div class="col-lg-3 col-md-5 col-sm-12 mb-4 text-nowrap mb-2">
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
              <a href="#"><i class="fa-brands fa-facebook"></i></a>
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
              <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer End -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
