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

<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">
<link rel="stylesheet" type="text/css" href="css/slick.css">
<link rel="stylesheet" type="text/css" href="css/nouislider.css">
<link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

</head>
<body>
<div id="wpf-loader-two">
  <div class="wpf-loader-two-inner"> <span>Loading</span> </div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a> 

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
                <li><a href="index.php">Cuenta Admin</a></li>
                <?php
					if(isset($_SESSION['customer_email'])){
						echo "<li><a href='../index.php' >Salir</a></li>" ;	
					}
					else{
						echo "<li><a href='' data-toggle='modal' data-target='#login-modal'>Login</a></li>";
 
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
					echo "Welcome " . $_SESSION['customer_email'];
				}
				else{
					echo "Welcome Guest";
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
<!-- insert_products section -->
 <section id="checkout">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="checkout-area">
		<form method="post" action="insert_product.php" enctype="multipart/form-data">            
			<div class="row">
              <div class="col-md-8">
                <div class="checkout-left">
                  <div class="panel-group" id="accordion">
                    <!-- Shipping Address -->
                    <div class="panel panel-default aa-checkout-billaddress">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                            Fill form to Register
                          </a>
                        </h4>
                      </div>
                        <div class="panel-body">
                         <div class="row">
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="text" name="product_title" placeholder="Product Name*">                              
                              </div>                             
                            </div>
                         	</div>
                          <div class="row">
                          	<div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                 <select name="product_cat">
                	<option>Select a Category</option>
                	<?php
              		$get_cats = "select * from category";
					$run_cats = mysqli_query($conn,$get_cats);
				
					while($row_cats = mysqli_fetch_array($run_cats)){
					
						$cat_id = $row_cats['cat_id'];
						$cat_title = $row_cats['cat_title'];
					
						echo "<option value='$cat_id'>$cat_title</option>";
					}
	
            		?>
                </select>
                             </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <select name="product_brand">
                					<option>Select a Brand</option>
                		<?php
              		$get_brand = "select * from brands";
					$run_brand = mysqli_query($conn,$get_brand);
				
					while($row_brand = mysqli_fetch_array($run_brand)){
					
						$brand_id = $row_brand['brand_id'];
						$brand_title = $row_brand['brand_title'];
					
						echo "<option value='$brand_id'>$brand_title</option>";
					}
	
            		?>
                			</select>
                              </div>                             
                            </div>                           
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                              <input type="file" name="product_img1" placeholder="Image 1*"/>
                              </div>                             
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                              <input type="file" name="product_img2" placeholder="Image 2*"/>
                              </div>                             
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                              <input type="file" name="product_img3" placeholder="Image 3*"/>
                              </div>                             
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <input type="text"  name="product_price" placeholder="Price*">
                              </div>                             
                            </div>
                          </div>
                          <div class="row">
                          <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <textarea name="product_desc" cols="20" rows="10" placeholder="Product Description*" ></textarea>
                              </div>                             
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <input type="text"  name="product_keywords" placeholder="Product Keywords*">
                              </div>                             
                            </div>
                          </div>   
						<input type="submit" name="insert_product" value="Insert"  class="aa-browse-btn"/>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </form>
          
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->

<?php
	
	if(isset($_POST['insert_product'])){
	
	//text data variables
		$product_title = $_POST['product_title'];
		$product_cat   = $_POST['product_cat'];
		$product_brand = $_POST['product_brand'];
		$product_price = $_POST['product_price'];
		$product_desc = $_POST['product_desc'];
		$status = 'on';
		$product_keywords = $_POST['product_keywords'];
		
	//image names
		$product_img1 = $_FILES['product_img1']['name'];
		$product_img2 = $_FILES['product_img2']['name'];
		$product_img3 = $_FILES['product_img3']['name'];
		
	//image temp names
		$temp_img1 = $_FILES['product_img1']['tmp_name'];
		$temp_img2 = $_FILES['product_img2']['tmp_name'];
		$temp_img3 = $_FILES['product_img3']['tmp_name'];
	
	//uploading images to its folder
		move_uploaded_file($temp_img1,"product_images/$product_img1");
		move_uploaded_file($temp_img2,"product_images/$product_img2");
		move_uploaded_file($temp_img3,"product_images/$product_img3");
	
	//insert query
		$insert_product = "insert into products (cat_id,brand_id,date,product_title, price, product_desc, status,product_img1,product_img2,product_img3) values ('$product_cat','$product_brand',NOW(),'$product_title','$product_price','$product_desc','$status','$product_img1','$product_img2','$product_img3') ";
	
		$run_product= mysqli_query($conn,$insert_product); 
		
		if($run_product){
			echo "<script>alert('Product Inserted successfully')</script>";
		}
		
	}

?>

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

          $_SESSION['customer_email']=$c_email;
          
          if($check_customer==0){
            echo"<script>alert('Contraseña o correo incorrecto, verifique e intente otra vez.')</script>";
          } 
          else{
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
					echo "<script>window.open('customer/myaccount.php','_self')</script>";
					
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