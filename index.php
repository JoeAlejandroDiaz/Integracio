<?php

session_start();
include("includes/db.php");
include("funcs/funcs.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>TSP Shop | Home</title>

<!-- Font awesome -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<!-- SmartMenus jQuery Bootstrap Addon CSS -->
<link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
<!-- Product view slider -->
<link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">
<!-- slick slider -->
<link rel="stylesheet" type="text/css" href="css/slick.css">
<!-- price picker slider -->
<link rel="stylesheet" type="text/css" href="css/nouislider.css">
<!-- Theme color -->
<link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">

<!-- Main style sheet -->
<link href="css/style.css" rel="stylesheet">

<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- wpf loader Two -->
<div id="wpf-loader-two">
  <div class="wpf-loader-two-inner"> <span>Cargando...</span> </div>
</div>
<!-- / wpf loader Two --> 
<!-- SCROLL TOP BUTTON --> 
<a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a> 
<!-- END SCROLL TOP BUTTON --> 

<!-- Start header section -->
<header id="aa-header"> 
  <!-- start header top  -->
  <div class="aa-header-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-header-top-area"> 
            <!-- start header top left -->
            <div class="aa-header-top-left"> 
              <!-- start language -->
              <div class="aa-language">
                <div class="dropdown"> <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <img src="img/flag/Colombia.png" alt="Colombia flag">ESPAÑOL <span class="caret"></span> </a>
                </div>
              </div>
              <!-- / language --> 
              
              <!-- start currency -->
              <div class="aa-currency">
                <div class="dropdown"> <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fa fa-usd"></i>COP <span class="caret"></span> </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#"><i class="fa fa-usd"></i>USD</a></li>
                  </ul>
                </div>
              </div>
              <!-- / currency --> 
              <!-- start cellphone -->
              <div class="cellphone hidden-xs">
                <p><span class="fa fa-phone"></span>(+57)300 567 2345</p>
              </div>
              <!-- / cellphone --> 
            </div>
            <!-- / header top left -->
            
            <div class="aa-header-top-right">
              <ul class="aa-head-top-nav-right">
                <?php
					if(isset($_SESSION['customer_email'])){
						echo "<li><a href='logout.php' >Logout</a></li>" ;	
					}
					else{
						echo "<li><a href='' data-toggle='modal' data-target='#login-modal'>Ingreso</a></li>";
 
					}
				?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / header top  --> 
  
  <!-- start header bottom  -->
  <div class="aa-header-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-header-bottom-area"> 
            <!-- logo  -->
            <div class="aa-logo"> 
              <!-- Text based logo --> 
              <a href="index.php"> <span class="fa fa-shopping-cart"></span>
              <p>TSP<strong>Shop</strong> <span>Su aliado de Compras</span></p>
              </a> 
              <!-- img based logo --> 
                <!--<a href="index.php"><img src="img/logo.jpg" alt="logo img"></a>-->
            </div>
            <!-- / logo  --> 
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / header bottom  --> 
</header>
<!-- / header section --> 
<!-- menu -->
<section id="menu">
  <div class="container">
    <div class="menu-area"> 
      <!-- Navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="navbar-collapse collapse"> 
          <!-- Left nav -->
          
          <?php getIp(); ?>
          <?php cart(); ?>
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            
			<?php getCatsMainNav(); ?>
            
            <li style="float:right"><a>
            <?php
				if(isset($_SESSION['customer_email'])){
					echo "Bienvenido " . $_SESSION['customer_email'];
				}
				else{
					echo "Bienvenido Invitado";
				}
				
			?></a>
            </li>
          </ul>
        </div>
        <!--/.nav-collapse --> 
      </div>
    </div>
  </div>
</section>
<!-- / menu --> 

<!-- Start slider -->
<section id="aa-slider">
  <div class="aa-slider-area">
    <div id="sequence" class="seq">
      <ul class="seq-canvas">
        <!-- single slide item -->
        <li>
          <div class="seq-model"> <img data-seq src="img/slider/slider-1.jpg" alt="Men slide img" /> </div>
          <div class="seq-title"> <span data-seq>Decuentos hasta del 75%</span>
            <h2 data-seq>La mejor colección</h2>
            <p data-seq>Compra con los precios MAS BAJOS.</p>
            <!--<a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">COMPRAR AHORA</a> </div>-->
        </li>
        
      </ul>
      <!-- slider navigation btn --> 
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
    </div>
  </div>
</section>
<!-- / slider --> 
<!-- Products section -->
<section id="aa-product">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="aa-product-area">
            <div class="aa-product-inner"> 
              <!-- start prduct navigation -->
              <ul class="nav nav-tabs aa-products-tab">
             
              </ul>
              
              <!-- Tab panes -->
              <div class="tab-content"> 
                <!-- Start men product category -->
                <div class="tab-pane fade in active" id="men">
                  
                  
                  <ul class="aa-product-catg">
                    <!-- start single product item -->
                    <?php getPro(); ?>
				  </ul>                    
                  <a class="aa-browse-btn" href="index.php">Browse all Product <span class="fa fa-long-arrow-right"></span></a> </div>
             
                <!-- / men product category --> 
                </div>
              </div>
              
              <!-- quick view modal -->
              <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                  		<!------------------->
                  		<!------------------->
                        <!-- From modal.php-->
                        <!------------------->
                        <!------------------->
                  </div>
                  <!-- /.modal-content --> 
                </div>
                <!-- /.modal-dialog --> 
              </div>
              <!-- / quick view modal --> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / Products section --> 
<!-- Support section -->
<section id="aa-support">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aa-support-area"> 
          <!-- single support -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="aa-support-single"> <span class="fa fa-truck"></span>
              <h4>ENVIO GRATIS</h4>
              <P>En todos sus pedidos de mas de $100.000</P>
            </div>
          </div>
          <!-- single support -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="aa-support-single"> <span class="fa fa-clock-o"></span>
              <h4>GARANTIA DE DEVOLUCION DE 30 DIAS</h4>
              <P>Si su producto no es el esperado o tiene algun problema tiene una garantia de 30 días.</P>
            </div>
          </div>
          <!-- single support -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="aa-support-single"> <span class="fa fa-phone"></span>
              <h4>SOPORTE 24/7</h4>
              <P>Nuestros canales de atencion prestan atencion las 24/7.</P>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / Support section --> 


<!-- Client Brand -->
<!--<section id="aa-client-brand">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aa-client-brand-area">
          <ul class="aa-client-brand-slider">
            <li><a href="#"><img src="img/client-brand-java.png" alt="java img"></a></li>
            <li><a href="#"><img src="img/client-brand-jquery.png" alt="jquery img"></a></li>
            <li><a href="#"><img src="img/client-brand-html5.png" alt="html5 img"></a></li>
            <li><a href="#"><img src="img/client-brand-css3.png" alt="css3 img"></a></li>
            <li><a href="#"><img src="img/client-brand-wordpress.png" alt="wordPress img"></a></li>
            <li><a href="#"><img src="img/client-brand-joomla.png" alt="joomla img"></a></li>
            <li><a href="#"><img src="img/client-brand-java.png" alt="java img"></a></li>
            <li><a href="#"><img src="img/client-brand-jquery.png" alt="jquery img"></a></li>
            <li><a href="#"><img src="img/client-brand-html5.png" alt="html5 img"></a></li>
            <li><a href="#"><img src="img/client-brand-css3.png" alt="css3 img"></a></li>
            <li><a href="#"><img src="img/client-brand-wordpress.png" alt="wordPress img"></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>-->

<!-- Subscribe section -->
<!-- <section id="aa-subscribe">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aa-subscribe-area">
          <h3>Subscribe our newsletter </h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
          <form action="" class="aa-subscribe-form">
            <input type="email" name="" id="" placeholder="Enter your Email">
            <input type="submit" value="Subscribe">
          </form>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- / Subscribe section --> 

<!-- footer -->
<footer id="aa-footer"> 
  <!-- footer bottom -->
  <div class="aa-footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-top-area">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                  <h3>Contactenos</h3>
                    <address>
                    <p> Calle26 # 1 -21, Bogotá, Colombia</p>
                    <p><span class="fa fa-phone"></span>+57 300-567-2345</p>
                    <p><span class="fa fa-envelope"></span>tspshop@gmail.com</p>
                    </address>
                    <div class="aa-footer-social"> <a href="#"><span class="fa fa-facebook"></span></a> <a href="#"><span class="fa fa-twitter"></span></a> <a href="#"><span class="fa fa-google-plus"></span></a> <a href="#"><span class="fa fa-youtube"></span></a> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer-bottom -->
  <div class="aa-footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-bottom-area">
            <p>Designed by <a href=#>TSP Team</a></p>
            <div class="aa-footer-payment"> <span class="fa fa-cc-mastercard"></span> <span class="fa fa-cc-visa"></span> <span class="fa fa-paypal"></span></span> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- / footer --> 

<!-- Login Modal -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4>Login o Registro</h4>
        <form class="aa-login-form" action="" method="post">
          <label for="">Usuario o Correo Electronico<span>*</span></label>
          <input type="text" name="email" placeholder="Usuario o Correo" required>
          <label for="">Contraseña<span>*</span></label>
          <input type="password" name="pass" placeholder="Contraseña" required>
          <button class="aa-browse-btn" name="login" type="submit">Login</button>
          <label for="rememberme" class="rememberme">
            <input type="checkbox" id="rememberme">
            Recuerdame </label>
          <!--<p class="aa-lost-password"><a href="#">Lost your password?</a></p>-->
          <div class="aa-register-now"> No tienes una cuenta?<a href="register.php">Registrate aqui!</a> </div>
        </form>
        <?php
		
			if(isset($_POST['login'])){
				
				$c_email=$_POST['email'];
				$c_pass=$_POST['pass'];
			
				$sel_c = "select * from customers where customer_email='$c_email' AND customer_pass='$c_pass'";
				$run_c = mysqli_query($conn,$sel_c);
				
				$check_customer = mysqli_num_rows($run_c);
				
				if($check_customer==0){

          $sel_c = "select * from admins where user_email='$c_email' AND user_pass='$c_pass'";
          $run_c = mysqli_query($conn,$sel_c);

          $check_customer = mysqli_num_rows($run_c);
          
          if($check_customer==0){
            echo"<script>alert('Contraseña o correo incorrecto, verifique e intente otra vez.')</script>";
          } 
          else{

            $_SESSION['customer_email']=$c_email;
            echo "<script>window.open('admin_area/insert_product.php','_self')</script>";
          }

				}
				else{
				$ip=getIp();
				$sel_cart ="select * from cart where ip_add='$ip'";
				$run_cart = mysqli_query($conn,$sel_cart);
				
				$check_cart = mysqli_num_rows($run_cart);
				
				$_SESSION['customer_email']=$c_email;
				echo "<script>alert('Login Successful !')</script>";
				}
				
				if($check_customer>0 AND $check_cart==0){
					echo "<script>window.open('index.php','_self')</script>";
					
				}
				else{
					echo "<script>window.open('index.php','_self')</script>";
				}
				
			}
		?>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>

<!-- jQuery library --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script> 
<!-- SmartMenus jQuery plugin --> 
<script type="text/javascript" src="js/jquery.smartmenus.js"></script> 
<!-- SmartMenus jQuery Bootstrap Addon --> 
<script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script> 
<!-- Product view slider --> 
<script type="text/javascript" src="js/jquery.simpleGallery.js"></script> 
<script type="text/javascript" src="js/jquery.simpleLens.js"></script> 
<!-- slick slider --> 
<script type="text/javascript" src="js/slick.js"></script> 
<!-- Price picker slider --> 
<script type="text/javascript" src="js/nouislider.js"></script> 

<!-- Custom js --> 
<script src="js/custom.js"></script>
</body>
</html>