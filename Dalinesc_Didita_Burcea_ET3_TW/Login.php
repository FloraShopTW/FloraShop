<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign up</title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
    <!-- bootstrap core css -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

<!--owl slider stylesheet -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

<!-- font awesome style -->
<link href="css/font-awesome.min.css" rel="stylesheet" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
<div class="hero_area">
<div class="hero-bg">
      <img src="images/hero-bg.jpg" alt="">
    </div>
	<header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="Home.php">
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
              <li class="nav-item">
                <a class="nav-link" href="Cos.php"><i class="fa fa-shopping-cart"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=""><i class="fa fa-fw fa-search"></i></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="Login.php"><i class="fa fa-user"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
<div class="main" >  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="connect.php" method="post">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" placeholder="User name" required="" name="username">
					<input type="email" placeholder="Email" required="" name="email">
					<input type="password" placeholder="Password" required="" name="password">
					<button>Sign up</button>
				</form>
			</div>
			
			<div class="login">
				<form action="reconnect.php" method="post">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button>Login</button>
				</form>
			</div>
	</div>
	</div>

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
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>


</body>
</html>