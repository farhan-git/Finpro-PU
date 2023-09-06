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










<!-- Chechkout -->
<section class="my-5 py-5">
    <div class="container text-center mt-3 pt-5">
        <h2 class="form-weight-bold">Check Out</h2>
        <hr class="mx-auto">
    </div>
    <div class="mx-auto container">
        <form id="checkout-form" action="place_order.php" method="POST">
            <div class="form-group checkout-small-element">
                <label>Name</label>
                <input type="text" class="form-control" id="checkout-name" name="name" placeholder="Name" required>
            </div>
            <div class="form-group checkout-small-element">
                <label>Email</label>
                <input type="text" class="form-control" id="checkout-email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group checkout-small-element">
                <label>Phone</label>
                <input type="tel" class="form-control" id="register-password" name="password" placeholder="Phone" required>
            </div>
            <div class="form-group checkout-small-element">
                <label>City</label>
                <input type="text" class="form-control" id="checkout-city" name="city" placeholder="City" required>
            </div>
            <div class="form-group checkout-large-element">
                <label>Address</label>
                <input type="text" class="form-control" id="checkout-address" name="address" placeholder="Address" required>
            </div>
            <div class="form-group checkout-btn-container">
                <input type="submit" class="btn" id="checkout-btn" name="Place_order" value="Place Order">
            </div>
          
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
