<?php 

include('server/connection.php');

if(isset($_GET['product_id'])) {

  $product_id = $_GET['product_id'];


  $stmt = $conn->prepare("SELECT * FROM products WHERE product_id = ?");
  $stmt->bind_param("i",$product_id);

  $stmt->execute();



  $products = $stmt->get_result();


}else{
  header('location: index.php');
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
        <a href="index.php"><img src="./asset/imgs/logo.png" alt="" class="logo"/></a>
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
              <a class="nav-link" href="index.html">Home</a>
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
              <a href="cart.html"><i class="fas fa-solid fa-bag-shopping"></i></a>
              <a href="account.html"><i class="fas fa-solid fa-user"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- navbar end -->
    <!-- single Product -->
    <section class="container single-product my-5 pt-5">
      <div class="row mt-5">

      <?php while($row = $products->fetch_assoc()){?>

       
        <div class="col-lg-5 col-md-6 col-sm-12">
          <img
            src="asset/imgs/<?php echo $row['product_image'];?>"
            id="mainImg"
            alt=""
            class="img-fluid w-100 pb-1"
          />
          <div class="small-img-group">
            <div class="small-img-col">
              <img
                src="asset/imgs/<?php echo $row['product_image'];?>"
                alt=""
                width="100%"
                class="small-img"
              />
            </div>
            <div class="small-img-col">
              <img
                src="asset/imgs/<?php echo $row['product_image2'];?>"
                alt=""
                width="100%"
                class="small-img"
              />
            </div>
            <div class="small-img-col">
              <img
                src="asset/imgs/<?php echo $row['product_image3'];?>"
                alt=""
                width="100%"
                class="small-img"
              />
            </div>
            <div class="small-img-col">
              <img
                src="asset/imgs/<?php echo $row['product_image4'];?>"
                alt=""
                width="100%"
                class="small-img"
              />
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12">
          <h6>Men/Shoes</h6>
          <h3 class="py4"><?php echo $row['product_name'];?></h3>
          <h2><?php echo $row['product_price'];?></h2>

          <form method="POST" action="cart.php">
        <input type="hidden" name="product_id" value="<?php echo $row['product_id'];?>"/>
        <input type="hidden" name="product_image" value="<?php echo $row['product_image'];?>"/>
        <input type="hidden" name="product_name" value="<?php echo $row['product_name'];?>"/>
        <input type="hidden" name="product_price" value="<?php echo $row['product_price'];?>"/>


          <input type="number" name="product_quantity" value="1" />
          <button class="buy-btn" type="submit" name="add_to_cart">Add To Cart</button>
          </form>
          <h4 class="mt-5 mb-5">Product Details</h4>
          <span><?php echo $row['product_description'];?></span>
        </div>
        <?php }?>

      </div>
    </section>
    <!-- related product -->
    <section id="realted-product" class="my-5 pb-5">
      <div class="container text-center mt-5 py-5">
        <h3>Related Products</h3>
        <hr />
      </div>
      <div class="row mx-auto container-fluid">
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="asset/imgs/akustik1.jpg" alt="" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">Sports Shoes</h5>
          <h4 class="p-name">$199.8</h4>
          <button class="buy-btn">Buy Now</button>
        </div>

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="asset/imgs/akustik2.jpg" alt="" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">Sports Shoes</h5>
          <h4 class="p-name">$199.8</h4>
          <button class="buy-btn">Buy Now</button>
        </div>

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="asset/imgs/akustik3.jpg" alt="" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">Sports Shoes</h5>
          <h4 class="p-name">$199.8</h4>
          <button class="buy-btn">Buy Now</button>
        </div>

        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="asset/imgs/akustik4.jpg" alt="" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name">Sports Shoes</h5>
          <h4 class="p-name">$199.8</h4>
          <button class="buy-btn">Buy Now</button>
        </div>
      </div>
    </section>

    <!-- Footer Start -->
    <footer class="mt-5 py-5">
      <div class="row container mx-auto pt-5">
        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
          <a href="#" class="logo">THEGuit</a>
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
            <img src="asset/imgs/" alt="" class="img-fluid w-25 h-100 m-2" />
            <img src="asset/imgs/" alt="" class="img-fluid w-25 h-100 m-2" />
            <img src="asset/imgs/" alt="" class="img-fluid w-25 h-100 m-2" />
            <img src="asset/imgs/" alt="" class="img-fluid w-25 h-100 m-2" />
            <img src="asset/imgs/" alt="" class="img-fluid w-25 h-100 m-2" />
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

    <script>
      var mainImg = document.getElementById("mainImg");
      var smallImg = document.getElementsByClassName("small-img");

      for (let i = 0; i < 4; i++) {
        smallImg[i].onclick = function () {
          mainImg.src = smallImg[i].src;
        };
      }
    </script>
  </body>
</html>
