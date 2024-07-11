<html>
<head>
<style type="text/css">
#my_centered_buttons { display: flex; justify-content: center;
margin-left:50px;
}
</style>
  <!-- Google Font -->
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
   
  
</head>
<body>
<?php

require('../homepage/test.php');
require('../login/connexion.php');
if(!isset($_SESSION['user_id'])){
?>
<script>
  window.location.assign("../login/login.php")

</script>
<?php
}
if(isset($_POST['delete'])){
	$del=$_POST['delete'];
	$sql = "DELETE FROM cart WHERE productname='$del'";
	$bdd->exec($sql);
	echo"
	<<script>
	window.location.replace('../cart/mycart.php');
	</script>
	"; 
	}
if(isset($_SESSION['user_id'])){
$stmt = $bdd->prepare("SELECT id  FROM user WHERE email=?");
$stmt->execute([$_SESSION['username']]); 
$user = $stmt->fetch();
$id=$user['id'];
$stmt = $bdd->prepare("SELECT *  FROM cart WHERE iduser=?");
$stmt->execute([$id]); 

/*while ($row = $stmt->fetch()) {
  echo $row['quantity']."<br />\n";
}*/

?>

	<section class="cart-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="cart-table">
						<h3>Your Cart</h3>
						<div class="cart-table-warp">
            <table>
							<thead>
								<tr>
									<th class="product-th">Product</th>
									<th class="quy-th">Quantity</th>
									<th class="total-th">Price</th>
									<th class="supp">supprimer</th>

								</tr>
              </thead>
              
							<tbody>
              <?php
              $tot=0;
              while ($row = $stmt->fetch()) {
				  
                $tot=$tot+$row['total'];
                echo
								"<tr>
									<td class='product-col'>
										<img src='../product/images/".$row['image']."' alt=''>
										<div class='pc-title'>
											<h4>".$row['productname']."</h4>
											<p>".$row['price']."$</p>
										</div>
									</td>
                  <td class='quy-col'>
    
										<div class='quantity'>
					                        <div class='pro-qty'>
                                  <input  type='text' id='qt'  value='".$row['quantity']." '>
											</div>
                    					</div>
									</td>
									<td class='total-col'  value='".$row['total']."' ><h4  id='tot'>".$row['total']."$</h4></td>
									<td>
									<form action='mycart.php' method='post'>
									<button  name='delete' value=".$row['productname']." id='my_centered_buttons' class='btn btn-default btn-sm '>
									 Remove 
								  </button>
								  </form>
								  </td>
                </tr>
                ";
              }
              ?>
              </tbody>
            </table>
            </div>
						<div class="total-cost">
							<h6>Total <span style="color:black;"><?php echo $tot."$" ?></span></h6>
							
						</div>
						
					</div>
				</div>
			</div>
		</div>
		
		<div id="smart-button-container">
		<div id="payp" style="text-align: center;padding-left: 400px;
		width:200px;padding-top: 50px;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
  <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'pill',
          color: 'gold',
          layout: 'vertical',
          label: 'paypal',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"USD","value":1}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            
            // Full available details
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

            // Show a success message within this page, e.g.
            const element = document.getElementById('paypal-button-container');
            element.innerHTML = '';
            element.innerHTML = '<h3>Thank you for your payment!</h3>';

            // Or go to another URL:  actions.redirect('thank_you.html');
            
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>
      
<h2 style="padding-left: 500px;">or</h1>    
  <div style="padding-left: 430px;">
	
	<script src="https://www.blockonomics.co/js/pay_button.js"></script>
	
	<a href="" class="blockoPayBtn" data-toggle="modal" data-uid=38dbe398ca5011e9 data-price=<?php echo $tot?>><img width=160 src="https://www.blockonomics.co/img/pay_with_bitcoin_medium.png"></a>
							</div>
  </section>
  
  <div>
  
  <?php


			}
?>
  
  
  

 



</body>
</html>