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

    <!-- home -->
    <section id="home">
      <div class="container">
        <h5>NEW ARRIVALS</h5>
        <h1><span>Best Price</span> This Season</h1>
        <p>Eshop offers the best products for the most affordable prices</p>
        <button>Shop Now</button>
      </div>
    </section>

    <!-- brand -->
    <section id="brand" class="container">
      <div class="row">
        <img
          class="img-fluid col-lg-3 col-md-6 col-sm-12 mt-lg-5 mb-lg-5"
          src="asset/imgs/logo1.jpg"
          alt=""
        />
        <img
          class="img-fluid col-lg-3 col-md-6 col-sm-12 mt-lg-5 mb-lg-5"
          src="asset/imgs/logo2.jpg"
          alt=""
        />
        <img
          class="img-fluid col-lg-3 col-md-6 col-sm-12 mt-lg-5 mb-lg-5"
          src="asset/imgs/logo3.jpg"
          alt=""
        />
        <img
          class="img-fluid col-lg-3 col-md-6 col-sm-12 mt-lg-5 mb-lg-5"
          src="asset/imgs/logo4.jpg"
          alt=""
        />
      </div>
    </section>

    <!-- new -->
    <section id="new" class="w-100">
      <div class="row p-0 m-0">
        <!-- one -->
        <div class="one col-lg-4 col-md-12 col-sm-12 p0">
          <img class="img-fluid" src="asset/imgs/acc3.jpeg" alt="" />
          <div class="details">
            <h2>Extreamly Awesome Guitar</h2>
            <button class="text-uppercase">Shop Now</button>
          </div>
        </div>
        <!-- two -->
        <div class="one col-lg-4 col-md-12 col-sm-12 p0">
          <img class="img-fluid" src="asset/imgs/acc2.jpeg" alt="" />
          <div class="details">
            <h2>Awesome Accesories</h2>
            <button class="text-uppercase">Shop Now</button>
          </div>
        </div>
        <!-- three -->
        <div class="one col-lg-4 col-md-12 col-sm-12 p0">
          <img class="img-fluid" src="asset/imgs/acc1.jpg" alt="" />
          <div class="details">
            <h2>50% OOF Clasical Guitar</h2>
            <button class="text-uppercase">Shop Now</button>
          </div>
        </div>
      </div>
    </section>

    <!-- featured -->
    <section id="featured" class="my-5 pb-5">
      <div class="container text-center mt-5 py-5">
        <h3>Our Featured</h3>
        <hr />
        <p>Here you can check out our featured products</p>
      </div>
      <div class="row mx-auto container-fluid">

  <?php include('server/get_featured_products.php');?>

  <?php while($row = $featured_products->fetch_assoc()){?>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="asset/imgs/<?php echo $row['product_image'];?>" />
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name"><?php echo $row['product_name'];?></h5>
          <h4 class="p-name"><?php echo $row['product_price'];?></h4>
          <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-btn">Buy Now</button></a>
        </div>
        <?php }?>
      </div>
    </section>

    <!-- banner -->
    <section id="banner" class="my-5 py-5">
      <div class="container">
        <h4>MID SEASON'S SALE</h4>
        <h1>
          Autumn Collection <br />
          UP to 30% OFF
        </h1>
        <button class="text-uppercase">shop now</button>
      </div>
    </section>

    <!-- Electric guitar -->
    <section id="featured" class="my-5">
      <div class="container text-center mt-5 py-5">
        <h3>Electric Guitar</h3>
        <hr />
        <p>Here you can check out our brand</p>
      </div>
      <div class="row mx-auto container-fluid">
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="asset/imgs/elec1.jpg" alt="" />
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
          <img class="img-fluid mb-3" src="asset/imgs/elec2.jpg" alt="" />
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
          <img class="img-fluid mb-3" src="asset/imgs/elec3.jpg" alt="" />
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
          <img class="img-fluid mb-3" src="asset/imgs/elec4.jpg" alt="" />
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
