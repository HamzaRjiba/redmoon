
<!DOCTYPE HTML>
<html>
	<?php

	//login.php
	/**
	 * Start the session.
	 */
	
	session_start();
	if(isset($_SESSION['user_id'])){
		session_destroy();
		session_start();

	}	
	/**
	 * Include our MySQL connection.
	 */
	require 'connexion.php';
	
	
	//If the POST var "login" exists (our submit button), then we can
	//assume that the user has submitted the login form.
	if(isset($_POST['login'])){
		
		//Retrieve the field values from our login form.
		$_SESSION['username'] = !empty($_POST['username']) ? trim($_POST['username']) : null;
		$_SESSION['password'] = !empty($_POST['password']) ? trim($_POST['password']) : null;
		
		//Retrieve the user account information for the given username.
		$sql = "SELECT id,nom, email,password,role FROM user WHERE email = :username";
		$stmt = $bdd->prepare($sql);
		
		//Bind value.
		$stmt->bindValue(':username', $_SESSION['username']);
		
		//Execute.
		$stmt->execute();
		
		//Fetch row.
		$user = $stmt->fetch(PDO::FETCH_ASSOC);
		//If $row is FALSE.
		$passerror="";

		if($user === false){

			$existing="*wrong mail";
			

			//Could not find a user with that username!
			//PS: You might want to handle this error in a more user-friendly manner!
		
		} else{
			$existing="";
			//User account found. Check to see if the given password matches the
			//password hash that we stored in our users table.
			
			//Compare the passwords.
			$validPassword = $_SESSION['password'] == $user['password'];
			
			//If $validPassword is TRUE, the login has been successful.
			if($validPassword){
				
				//Provide the user with a login session.
			  
				$_SESSION['user_id'] = $user['id'];
				$_SESSION['role'] = $user['role'];
				$_SESSION['logged_in'] = time();
				
				//Redirect to our protected page, which we called home.php
				if(isset($_SESSION['current']))
				header('Location:'.$_SESSION['current']);
				else
				header('Location: ../homepage/home.php');
				exit;
				
			} else{
				$passerror="*wrong password";
				//$validPassword was FALSE. Passwords do not match.
	
			}
		}
		

	}
	 
	?>
	
<head>
	<title>Login Form </title>
	<!-- Meta-Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Spin Login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta-Tags -->
	<!-- Stylesheets -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!--// Stylesheets -->
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!--//fonts-->
</head>

<body>
	<h1>Login Form </h1>
	<div class="clear-loading spinner">
		<span></span>
	</div>
	<div class="w3ls-login box box--big">
		<!-- form starts here -->
		<form action="login.php" method="post">
			<div class="agile-field-txt">
				<label><i class="fa fa-user" aria-hidden="true"></i> Username </label>
				<input type="text" name="username" placeholder="Enter Email" required="" />
			<P class="error">
			<?php
			if(isset($_POST['login'])){
				echo $existing;
			}
			?>
			</p>
			</div>
			<div class="agile-field-txt">
				<label><i class="fa fa-unlock-alt" aria-hidden="true"></i> password </label>
				<input type="password" name="password" placeholder="Enter Password" required="" id="myInput" />
				<P class="error">
					<?php
						if(isset($_POST['login'])){
							echo $passerror;
													}
					?>
			</p>
				<div class="agile_label">
					<input id="check3" name="check3" type="checkbox" value="show password" onclick="myFunction()">
					<label class="check" for="check3">Show password</label>
				</div>
				<div class="agile-right">
					<a href="#">forgot password?</a>
				</div>
			</div>
			<!-- script for show password -->
			<script>
				function myFunction() {
					var x = document.getElementById("myInput");
					if (x.type === "password") {
						x.type = "text";
					} else {
						x.type = "password";
					}
				}
			</script>
			<!-- //end script -->
				<input type="submit" name="login" value="LOGIN">
				
				
				
		</form>
	</div>
	<!-- //form ends here -->
	
</body>
</html>