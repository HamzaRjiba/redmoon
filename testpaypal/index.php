<html>
<head>
<title>PayPal IPN Message in PHP</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="main">
<center><h1>PayPal IPN Example Using PHP</h1></center>
<div id="container">
<h2>PayPal IPN Message in PHP</h2>
<hr/>
<div id="left">
<form action="process.php" method="post" >
<center>
<h3>SONY HEADPHONE</h3>
</center>
<img src="images/headphones.jpg" />
<center><input type="submit" name="submit" value=" Buy Now $80" ></center>
</form>
</div>
<div id="right">
<p style="text-align: justify;">Instant Payment Notification (IPN) is a message service that automatically notifies merchants of events related to PayPal transactions.</p>
<center>
<hr class="style-four">
</center>
<ul>
<li>Enable the IPN (Instant Payment Notification) from your PayPal account if it is not enable then IPN Message will not we POST.</li>
<li>IPN Message only generate on the server, at the local server IPN message will not generate.</li>
<li>We can send IPN message to merchant's Email Address as long as We can Store IPN message in the database.</li>
</ul>
</div>
</div>
</div><img id="paypal_logo" src="images/secure-paypal-logo.jpg">
</body>
</html>