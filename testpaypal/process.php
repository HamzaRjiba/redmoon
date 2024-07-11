<?php
require('Connection.php');
$sql = "INSERT INTO test (nom) VALUES ('hhhhh')";
if (isset($_POST['submit'])) {
    

   



//Here we can use PayPal URL or sandbox URL.
$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
//Here we can used seller email id.
$merchant_email = 'test712@example.com';
//here we can put cancel URL when payment is not completed.
$cancel_return = "http://".$_SERVER['HTTP_HOST'].'/paypal-ipn-php';
//here we can put cancel URL when payment is Successful.
$success_return = "http://localhost/redmoon/redmoon/testpaypal/success.php";
//PayPal call this file for ipn
$notify_url = "http://localhost/redmoon/redmoon/testpaypal/notify.php";
?>
<div style="margin-left: 38%"><img src="images/ajax-loader.gif"/><img src="images/processing_animation.gif"/></div>
<form name="myform" action="<?php echo $paypal_url;?>" method="post">
<input type="hidden" name="business" value="<?php echo $merchant_email;?>" />
<input type="hidden" name="notify_url" value="<?php echo $notify_url;?>" />
<input type="hidden" name="cancel_return" value="<?php echo $cancel_return;?>" />
<input type="hidden" name="return" value="<?php echo $success_return;?>" />
<input type="hidden" name="rm" value="2" />
<input type="hidden" name="lc" value="" />
<input type="hidden" name="no_shipping" value="1" />
<input type="hidden" name="no_note" value="1" />
<input type="hidden" name="currency_code" value="EUR" />
<input type="hidden" name="page_style" value="paypal" />
<input type="hidden" name="charset" value="utf-8" />
<input type="hidden" name="item_name" value="HeadPhone" />
<input type="hidden" name="cbt" value="Back to FormGet" />
<input type="hidden" value="_xclick" name="cmd"/>
<input type="hidden" name="amount" value="1" />
<script type="text/javascript">
document.myform.submit();
</script>
<?php
}