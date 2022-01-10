<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> Contact </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">
    <div class="hero-bg">
      <img src="images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
            Flora Shop
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
            <li class="nav-item">
                <a class="nav-link" href="Acasa.php">Acasa<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Despre.php"> Despre noi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Plante.php">Plante</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Contact.php">Contacteaza-ne</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="Cos.php"><i class="fa fa-shopping-cart"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=""><i class="fa fa-fw fa-search"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Login.php"><i class="fa fa-user"></i></a>
              </li>
              
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <section class="contact_section layout_padding">
    <div class="container">
      <div class="row">
            <?php
$con = new mysqli('localhost','root','','flora');
$image=$_GET["image"];
$name=$_GET["name"];
$price=$_GET["price"];
?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center" >
                                    <img src="<?php echo $image; ?>" alt="" style="width:200px; height:200px"/>
										<p><?php echo $name; ?></p>
										<h2><?php echo $price; ?></h2>
										<a href="Cos.php?image=<?php echo $data['image']; ?>&name=<?php echo $data['name']; ?>&price=<?php echo $data['price']; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adauga in cos</a>
									</div>
								</div>
							</div>
						</div>

<?php mysqli_close($con); // Close connection ?>
              </div>
            </div>
  </section>

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <a href="" class="footer-brand">
      Flora Shop
      </a>
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="footer_items">
            <div class="row">
              <div class="col-md-4">
                <a href="">
                  <div class="item ">
                    <div class="img-box ">
                      <i class="fa fa-map-marker" aria-hidden="true" style="padding-top:15px;"></i>
                    </div>
                    <p>
                      Strada Primaverii, Nr 65, Craiova
                    </p>
                  </div>
                </a>
              </div>
              <div class="col-md-4">
                <a href="">
                  <div class="item ">
                    <div class="img-box ">
                      <i class="fa fa-phone" aria-hidden="true" style="padding-top:15px;"></i>
                    </div>
                    <p>
                      0734567890
                    </p>
                  </div>
                </a>
              </div>
              <div class="col-md-4">
                <a href="">
                  <div class="item ">
                    <div class="img-box">
                      <i class="fa fa-envelope" aria-hidden="true" style="padding-top:15px;"></i>
                    </div>
                    <p>
                      adina.burcea@gmail.com
                    </p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="social-box">
        <h4>
          Follow Us
        </h4>
        <div class="box">
          <a href="">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-youtube" aria-hidden="true"></i>
          </a>
          <a href="">
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="footer-info">
      <div class="container">
      <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By Flora Shop
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->
  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>