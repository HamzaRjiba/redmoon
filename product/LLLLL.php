<!DOCTYPE html>
<?php
require('../login/connexion.php');
$str=basename($_SERVER['PHP_SELF']);
        $tt=explode(".",$str);
$stm = $bdd->prepare("SELECT  DISTINCT nom  FROM produit WHERE type=?");
$stm->execute([$tt[0]]);
?>
<html>
<head>
  <link rel="icon" type="image/jpg" href="images/fortnite.jpg">
	<title><?php echo $tt[0]?></title>
   <link rel="stylesheet" href="css1/bootstrap.min.css"/>
  <link rel="stylesheet" href="css1/font-awesome.min.css"/>
  <link rel="stylesheet" href="css1/flaticon.css"/>
  <link rel="stylesheet" href="css1/slicknav.min.css"/>
  <link rel="stylesheet" href="css1/jquery-ui.min.css"/>
  <link rel="stylesheet" href="css1/owl.carousel.min.css"/>
  <link rel="stylesheet" href="css1/animate.css"/>
  <link rel="stylesheet" href="css1/style.css"/>
   
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/styleb.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<script>
    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!-- //Meta-Tags -->
  <!-- Index-Page-CSS -->
  <link rel="stylesheet" href="css/stylec.css" type="text/css" media="all">
  <!-- //Custom-Stylesheet-Links -->
  <!--fonts -->
  <link href="//fonts.googleapis.com/css?family=Marcellus+SC" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
  <!-- //fonts -->

  <!-- Font-Awesome-File-Links -->
  <!-- CSS -->
  <link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all">
</head>
<body>
<?php
require('../homepage/test.php');
require('ajout.php');

?>
	
 <div id="preloder">
  <div class="loader"></div>
</div>







<div class="banner">
    
    <!-- cart's-Product-Display -->
    
      <div class='flex-container'>
      <?php
         while ($row = $stm->fetch()) {
			$st = $bdd->prepare("SELECT *  FROM produit WHERE nom=? LIMIT 1");
			$st->execute([$row['nom']]);
			$qt = $st->rowCount();

		
    echo "
     
          <div class='cart-grid' id='cart-1'>
            <div class='img'>
              <img src='images/".$row['image']."' alt='img'>
            </div>
            <ul class='info'>
			  <h5>".$row['description']."</h5>
			  <h5>in stock: ".$qt."</h5>
              <li>".$row['price']."$</li>
            </ul>
            <div class='snipcart-details '>
              <form action='' method='post'>
                <input type='hidden' name='cmd' value='_cart'>
                <input type='hidden' name='add' value='1'>
				<input type='hidden' name='w3l_item' value='Striped Top '>
				<input type='hidden' name='amount' value='".$row['price']."'>
				<input type='hidden' name='image' value='".$row['image']."'>
				<input type='hidden' name='item_name' value='".$row['nom']."' />
				";
				if(isset($_SESSION['role'])){
					if($_SESSION['role'] === "admin"){
						
						echo "
						<input type='number' name='quantity'  value='1' max='".$qt."' hidden>
						<textarea name='contenu' rows='1' cols='30' ></textarea>

						<button type='submit' name='addstock' class='button w3l-cart' data-id='cart-1'>add to stock</button>";

					}
					else{
						echo  "
						<input type='number' name='quantity' min='1' max='".$qt."' required>
						<button type='submit' name='add' class='button w3l-cart' data-id='cart-1'>add to cart</button>";
						}
				}
				else if(!isset($_SESSION['role'])) {
					echo  "
					<input type='number' name='quantity' min='1' required>
					<button type='submit' name='add' class='button w3l-cart' data-id='cart-1'>add to cart</button>";
				}
				echo "
              </form>
            </div>
          </div>
          
          

          <div class='clear'></div>
        ";
         }
    ?>   
    </div>
    
  
    <div class="copyright text-center">
    
    </div>

  </div>

  <!-- Default-JavaScript -->
  <script src="js/jquery-2.2.3.js"></script>
  <!-- Custom-JavaScript-File-Links -->
<!-- /newsletter-->
	<div class="newsletter_w3layouts_agile">
		<div class="col-sm-6 newsleft">
			<h3>Sign up for Newsletter !</h3>
		</div>
		<div class="col-sm-6 newsright">
			<form action="#" method="post">
				<input type="email" placeholder="Enter your email..." name="email" required="">
				<input type="submit" value="Submit">
			</form>
		</div>

		<div class="clearfix"></div>
	</div>
	<!-- //newsletter-->
	<!-- footer -->
	<div class="footer_agileinfo_w3">
		<div class="footer_inner_info_w3ls_agileits">
			<div class="col-md-3 footer-left">
				<h2><a href="index.html"><span>R</span>EDMOON </a></h2>
				<p>We are RedMoon shop number ONE account seller in the market we provide quality accounts of over 100+ sites in the world easy to use easy to pay with just one click buy now and save you money !.</p>
				<ul class="social-nav model-3d-0 footer-social social two">
					<li>
						<a href="#" class="facebook">
							<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="twitter">
							<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="instagram">
							<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="pinterest">
							<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-9 footer-right">
				<div class="sign-grds">
					<div class="col-md-4 sign-gd">
						<h4>Our <span>Information</span> </h4>
						<ul>
							<li><a href="">Home</a></li>
							<li><a href="">About</a></li>
							<li><a href="">Services</a></li>
							<li><a href="">shooping</a></li>
							<li><a href="">help</a></li>
						</ul>
					</div>

					<div class="col-md-5 sign-gd-two">
						<h4>Store <span>Information</span></h4>
						<div class="address">
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Phone Number</h6>
									<p>111111111111</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Email Address</h6>
									<p>Email :<a href=""> mail@example.com</a></p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								
							
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>

			
		</div>
	</div>
	</div>
<script src="js1/main.js"></script>
  <script src="js1/bootstrap.min.js"></script>
  <script src="js1/jquery.slicknav.min.js"></script>
</body>
</html>