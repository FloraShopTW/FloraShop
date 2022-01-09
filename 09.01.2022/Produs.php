<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/2ab25fe11c.js" crossorigin="anonymous"></script>

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

  <title> Plante </title>

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
              <li class="nav-item active">
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

  <!-- plants section -->
  <section style="margin-top: 50px; margin-left:70px;">
		
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar" >
					<span><a style="font-family: 'Roboto', sans-serif; color: #696763;">Sorteaza:</a></span>
					<select style="border: 1px solid #F7F7F0; font-family: 'Roboto', sans-serif; color: #696763;" onchange="fetch_select(value);">
						<option value="recomandate" >Recomandate</option>
						<option value="nume_ascendent" >Nume: ascendent</option>
						<option value="nume_descendent">Nume: descendent</option>
						<option value="pret_ascendent">Pret: mic spre mare</option>
						<option value="pret_descendent">Pret: mare spre mic</option>
					</select>
						<h2 style="margin-top: 50px;">Categorii</h2>
						<div class="panel-group category-products" id="accordian" style="padding-left:20px;">
						<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title" onclick="fetch_select('buchet');">
										<a data-toggle="collapse" data-parent="#accordian" href="#buchete" >
											<span class="badge pull-right"><i class="fa fa-plus"></i></span><img src="images/buchet.PNG" style="margin-right:15px;">
											Buchete cu flori
										</a>
									</h4>
								</div>
								<div id="buchete" class="panel-collapse collapse">
									<div class="panel-body">
									<ul>
                                    <li><a style="cursor:pointer" onclick="fetch_select('buchet_trandafiri');">Trandafiri</a></li>
											<li><a style="cursor:pointer" onclick="fetch_select('buchet_frezii');">Frezii</a></li>
											<li><a style="cursor:pointer" onclick="fetch_select('buchet_crizanteme');">Crizanteme</a></li>
											<li><a style="cursor:pointer" onclick="fetch_select('buchet_orhidee');">Orhidee</a></li>
											<li><a style="cursor:pointer" onclick="fetch_select('buchet_garoafe');">Garoafe</a></li>
											<li><a style="cursor:pointer" onclick="fetch_select('buchet_crini');">Crini</a></li>
											<li><a style="cursor:pointer" onclick="fetch_select('buchet_irisi');">Irisi</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title" onclick="fetch_select('ghiveci');">
										<a data-toggle="collapse" data-parent="#accordian" href="#ghivece">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span><img src="images/ghiveci.PNG" style="margin-right:15px;">
											Ghivece cu flori
										</a>
									</h4>
								</div>
								<div id="ghivece" class="panel-collapse collapse">
									<div class="panel-body">
									<ul>
                                    <li><a style="cursor:pointer" onclick="fetch_select('ghiveci_decorative_flori');">Decorative prin flori</a></li>
											<li><a style="cursor:pointer" onclick="fetch_select('ghiveci_bonsai');">Bonsai</a></li>
											<li><a style="cursor:pointer" onclick="fetch_select('ghiveci_cactusi');">Cactusi</a></li>
											<li><a style="cursor:pointer" onclick="fetch_select('ghiveci_citrice');">Citrice</a></li>
											<li><a style="cursor:pointer" onclick="fetch_select('ghiveci_decorative_frunze');">Decorative prin frunze</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title" onclick="fetch_select('primavara');"><a href="#"><img src="images/zambila.PNG" style="margin-right:15px;">Flori de primavara</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title" onclick="fetch_select('vara');"><a href="#"><img src="images/floarea_soarelui.PNG" style="margin-right:15px;">Flori de vara</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title" onclick="fetch_select('toamna');"><a href="#"><img src="images/brandusa.PNG" style="margin-right:15px;">Flori de toamna</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title" onclick="fetch_select('iarna');"><a href="#"><img src="images/ghiocei.PNG" style="margin-right:15px;"> Flori de iarna</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title" onclick="fetch_select('carnivore');"><a href="#"><img src="images/plante_carnivore.PNG" style="margin-right:15px;"> Plante carnivore/insectivore</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title" onclick="fetch_select('baby_plants');"><a href="#"><img src="images/baby_plants.PNG" style="margin-right:15px;"> Baby plants</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title" onclick="fetch_select('birou');"><a href="#"><img src="images/plante_birou.PNG" style="margin-right:15px;"> Plante de birou</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title" onclick="fetch_select('rare');"><a href="#"><img src="images/plante_rare.PNG" style="margin-right:15px;"> Plante rare</a></h4>
								</div>
							</div>
							
						</div><!--/category-products-->
					
						<div class="proprietati">
							<h2>Proprietati</h2>
							<div class="panel-group category-products" id="accordian">
							<div class="panel panel-default">

								<div class="panel-heading">
								<h4 class="panel-title" ><a href="#"><i class="fa fa-sun-o" style="font-size:20px; margin:10px 20px 0px;"></i>Conditii de lumina ridicata
								<input type="checkbox" id="switch1" class="checkbox" onclick="fetch_select('lumina_ridicata');"/>
        						<label for="switch1" class="toggle" ></label>
								</a></h4>
								</div>
								
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title" ><a href="#"><i class="fas fa-cloud-sun" style="font-size:20px; margin:10px 20px 0px;"></i>Conditii de lumina medie
									<input type="checkbox" id="switch2" class="checkbox" onclick="fetch_select('lumina_medie');" />
        						<label for="switch2" class="toggle"></label>
								</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#"><i class="fa fa-cloud" style="font-size:20px; margin:10px 20px 0px;"></i>Conditii de lumina scazuta
									<input type="checkbox" id="switch3" class="checkbox" onclick="fetch_select('lumina_scazuta');"/>
        						<label for="switch3" class="toggle"></label>
								</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#"><i class="fas fa-hands" style="font-size:20px; margin:10px 20px 0px;"></i>Usor de ingrijit
									<input type="checkbox" id="switch4" class="checkbox" onclick="fetch_select('usor_ingrijit');"/>
        						<label for="switch4" class="toggle"></label>
								</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#"><i class="fas fa-wind" style="font-size:20px; margin:10px 20px 0px;"></i>Purifica aerul
									<input type="checkbox" id="switch5" class="checkbox" onclick="fetch_select('purifica_aerul');"/>
        						<label for="switch5" class="toggle"></label>
								</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#"><i class="fa fa-paw" style="font-size:20px; margin:10px 20px 0px;"></i>Prietenoase cu animalele
									<input type="checkbox" id="switch6" class="checkbox" onclick="fetch_select('prietenoase');"/>
        						<label for="switch6" class="toggle"></label>
								</a></h4>
								</div>
							</div>
							
						</div>
						</div>
						
						<div class="price-range"><!--price-range-->
							<h2>Pret</h2>
							<div class="well">
							<div class="price-input">
							<div class="range-slider">
	<span>
		<input class="input1" type="number" value="0" min="0" max="500" />
		<span>-</span>
		<input class="input1" type="number" value="500" min="0" max="500"/>
	</span>
	<input class="input1" value="0" min="0" max="500" step="10" type="range"/>
	<input class="input1" value="500" min="0" max="500" step="10" type="range"/>
</div>
</div>
    
    <script src="js/price_slider.js"></script>
							</div>
						</div>
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center" style="margin-top: 75px;">Plante</h2>

<p id="print-ajax"></p><!--Result will print here-->
<?php
$con = new mysqli('localhost','root','','flora');
$image=$_GET["image"];
$name=$_GET["name"];
$price=$_GET["price"];
$description=$_GET["description"];
?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center" >
                                    <a href="Produs.php?image=<?php echo $image; ?>&name=<?php echo $name; ?>&price=<?php echo $price; ?>&description=<?php echo $description; ?>"><img src="<?php echo $image; ?>" alt="" style="width:200px; height:200px"/></a>
										<p><?php echo $name; ?></p>
										<h2><?php echo $price; ?></h2>
                                        <h2><?php echo $description; ?></h2>
										<a href="Cos.php?image=<?php echo $image; ?>&name=<?php echo $name; ?>&price=<?php echo $price; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adauga in cos</a>
									</div>
								</div>
							</div>
						</div>
						<?php
	?>
<?php mysqli_close($con); // Close connection ?>

					</div><!--features_items-->
				</div>
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
  <script src="js/myFunction.js"></script>
		
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