<?php
session_start();
$_SESSION['current']=$_SERVER['REQUEST_URI'];
require('../login/connexion.php');
$count=0;
if(isset($_SESSION['user_id'])){
$stmt = $bdd->prepare("SELECT *  FROM cart WHERE iduser=?");
$stmt->execute([$_SESSION['user_id']]);
$count = $stmt->rowCount();
}
$music = $bdd->prepare("SELECT DISTINCT type  FROM produit WHERE category=?");
$music->execute(['Music']);
$streaming = $bdd->prepare("SELECT DISTINCT type  FROM produit WHERE category=?");
$streaming->execute(['Streaming']);
$sport = $bdd->prepare("SELECT DISTINCT type  FROM produit WHERE category=?");
$sport->execute(['Sport']);
$media = $bdd->prepare("SELECT DISTINCT type  FROM produit WHERE category=?");
$media->execute(['Media']);
$food = $bdd->prepare("SELECT DISTINCT type  FROM produit WHERE category=?");
$food->execute(['Food']);
$shopping = $bdd->prepare("SELECT DISTINCT type  FROM produit WHERE category=?");
$shopping->execute(['Shopping']);
$security = $bdd->prepare("SELECT DISTINCT type  FROM produit WHERE category=?");
$security->execute(['Security']);
$education = $bdd->prepare("SELECT DISTINCT type  FROM produit WHERE category=?");
$education->execute(['Education']);
$gaming = $bdd->prepare("SELECT  DISTINCT type  FROM produit WHERE category=?");
$gaming->execute(['Gaming']);
$vpn = $bdd->prepare("SELECT DISTINCT type  FROM produit WHERE category=?");
$vpn->execute(['Vpn']);
?>
<!-- Stylesheets -->
<link rel="stylesheet" href="css1/bootstrap.min.css"/>
<link rel="stylesheet" href="css1/font-awesome.min.css"/>
<link rel="stylesheet" href="css1/flaticon.css"/>
<link rel="stylesheet" href="css1/slicknav.min.css"/>
<link rel="stylesheet" href="css1/jquery-ui.min.css"/>
<link rel="stylesheet" href="css1/owl.carousel.min.css"/>
<link rel="stylesheet" href="css1/animate.css"/>
<link rel="stylesheet" href="css1/style.css"/>
<link rel="stylesheet" href="css_contact/main.css"/>
<link rel="stylesheet" href="css_contact/util.css"/>
<link rel="stylesheet" href="css/font-awesome2.css" type="text/css" media="all">
<link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="css/styleb.css">
<link rel="stylesheet" type="text/css" href="css/style2.css">

            <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
<link rel="stylesheet" href="css/poposlides.css">

<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

<link href="//fonts.googleapis.com/css?family=Marcellus+SC" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Montserrat:200,200i,300,400,400i,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="css/styleh.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Header section -->
<header class="header-section">
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 text-center text-lg-left">
            <!-- logo -->
            <a  class="navbar-brand" id="titre" href="index.html">
              <span id="red haut">Red</span><span>Moon</span>
            </a> 
  
          </div>
          <div class="col-xl-6 col-lg-5">
            <form class="header-search-form"  action="../product/search.php" method="post">
              <input type="text" name="search" placeholder="Search on REDMOON ...." required>
              <button><i class="flaticon-search"></i></button>
            </form>
          </div>
          <div class="col-xl-4 col-lg-5">
            <div class="user-panel">
              <div class="up-item">
                <i class="flaticon-profile"></i>
                <?php
                if(isset($_SESSION['user_id'])){
                  
                  echo '<a href="../login/login.php">Logout </a>';

                }
                else{
                  echo '
                  
                  <a  href="../login/login.php">Sign In </a> or <a href="../login/inscription/inscription.php">Create Account</a>';

                }
                ?>
              </div>
              <?php
              if(isset($_SESSION['role'])){
                if($_SESSION['role'] != "admin"){
                  echo '
              <div class="up-item">
                <div class="shopping-card">
                  <i class="flaticon-bag"></i>
                  <span id="shopcart">'.$count.'</span>
                </div>
                <a href="../cart/mycart.php">Shopping Cart</a>
              </div>';
                }}
              ?>
              <?php
              if(isset($_SESSION['role'])){
					if($_SESSION['role'] === "admin"){
						
						echo "
          
            <a href='http://localhost/redmoon/redmoon/product/add.php' style='color:black;' target='_blank'><U>Add new product</u></a>"
					;

					}
          
          }?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="main-navbar">
      <div class="container">
        <!-- menu -->
        <ul class="main-menu">
          <li class="nav-item active">
            <a class="nav-link" href="../homepage/home.php" id="home" >Home <span class="sr-only">(current)</span></a>
          </li>
          <li><a href="#">Music</a>
            <ul class="sub-menu">
              <?php
            while ($row = $music->fetch()) {
              echo "
              <li><a href='../product/".$row['type'].".php'>".$row['type']."</a></li>
              ";
            }
              ?>
            </ul>
          </li>
          <li><a href="#">Streaming</a>
            <ul class="sub-menu">
            <?php
            while ($row = $streaming->fetch()) {
              echo "
              <li><a href='../product/".$row['type'].".php'>".$row['type']."</a></li>
              ";
            }
              ?>
            </ul>
          </li>
          <li><a href="#">Sport</a>
            <ul class="sub-menu">
            <?php
            while ($row = $sport->fetch()) {
              echo "
              <li><a href='../product/".$row['type'].".php'>".$row['type']."</a></li>
              ";
            }
              ?>
             
            </ul>
          </li> <li><a href="#">Media</a>
            <ul class="sub-menu">
            <?php
            while ($row = $media->fetch()) {
              echo "
              <li><a href='../product/".$row['type'].".php'>".$row['type']."</a></li>
              ";
            }
              ?>
              
            </ul>
          </li> <li><a href="#">Food</a>
            <ul class="sub-menu">
            <?php
            while ($row = $food->fetch()) {
              echo "
              <li><a href='../product/".$row['type'].".php'>".$row['type']."</a></li>
              ";
            }
              ?>
             
            </ul>
          </li> <li><a href="#">Shopping</a>
            <ul class="sub-menu">
            <?php
            while ($row = $shopping->fetch()) {
              echo "
              <li><a href='../product/".$row['type'].".php'>".$row['type']."</a></li>
              ";
            }
              ?>
             
            </ul>
          </li> <li><a href="#">Security</a>
            <ul class="sub-menu">
            <?php
            while ($row = $security->fetch()) {
              echo "
              <li><a href='../product/".$row['type'].".php'>".$row['type']."</a></li>
              ";
            }
              ?>
            </ul>
          </li> <li><a href="#">Education</a>
            <ul class="sub-menu">
            <?php
            while ($row = $education->fetch()) {
              echo "
              <li><a href='../product/".$row['type'].".php'>".$row['type']."</a></li>
              ";
            }
              ?>
         
            </ul>
          </li> <li><a href="#">Gaming</a>
            <ul class="sub-menu">
            <?php
            while ($row = $gaming->fetch()) {
              echo "
              <li><a href='../product/".$row['type'].".php'>".$row['type']."</a></li>
              ";
            }
              ?>
            </ul>
          </li> <li><a href="#">Vpn</a>
            <ul class="sub-menu">
            <?php
            while ($row = $vpn->fetch()) {
              echo "
              <li><a href='../product/".$row['type'].".php'>".$row['type']."</a></li>
              ";
            }
              ?>
            </ul>
          </li>
          
      </div>
    </nav>
  </header>
  <!-- Header section end -->