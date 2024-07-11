<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
require('../connexion.php');
session_start();
if(isset($_POST['sign'])){
	$name=$_POST['firstname'] . " " . $_POST['lastname'];
	$mail=$_POST['mail'];
	$pass=$_POST['pass'];
	try{
	// set the PDO error mode to exception
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$st = $bdd->prepare("SELECT email  FROM user WHERE email=?  ");
	$st->execute([$mail]);
	$result = $st->fetchAll();
	$count = $st->rowCount();


	echo $mail;
	if($count !== 0){
		echo "
		<script>
		alert('cet email  existe')
		</script>";
	  }
	  else {
	$sql = "INSERT INTO user (nom,email,password) VALUES ('$name','$mail', '$pass')";
	if($bdd->exec($sql)){
		echo "<script>alert('There are no fields to generate a report');</script>";
		header('Location: ../login.php');
	}
}
	}
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
	
	


}
?>
<!DOCTYPE html>
<html>
<head>
	
<title>Inscription </title>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Inscription and login forms,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Copse|Roboto' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body>
<!--/start-main-->
<div class="main">
	<div class="wrap">
	<!--/start-topo-one-->
	<div class="top-one">
	<!--/start-login-->
	<div class="login-one">
		<div class="create-account">
			<div class="login-head">
					<h2>Create Account</h2>
					<span class="line">
						<span class="sub-line"></span>
					</span>

			</div>
				<form action="inscription.php" method="post">
					<p>First Name <lable> *</lable></p>
					<input type="text" name="firstname" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required >
					<p>Last Name <lable> *</lable></p>
					<input type="text" name="lastname" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required >
					<p>Email Address <lable> *</lable></p>
					<input type="email" name="mail" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required >
					<p>Password <lable> *</lable></p>
					<input type="password" name="pass" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required>
					
				<div class="sign-up">
					<input type="reset" value="Clear">
					<input type="submit" name="sign" onclick="myFunction()" value="Register" >

					<!-- pop-up-box -->  
				<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
				<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
			<script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>
		</div>
		</form>
		
		
	</div>
	</div>

		</div>
	</div>
</div>
	
</html>