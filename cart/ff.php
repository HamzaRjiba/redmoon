<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paypal Integration Test</title>
</head>
<body>
    <?php
    $amount=1;
  
    

    ?>

    <form class="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" id="paypal_form">
        <input type="hidden" name="cmd" value="_xclick" />
        <input type="hidden" name="business" value="customer@example.com" />
        <input type="hidden" name="item_name" value="customer name" />
        <input type="hidden" name="amount" value='<?php echo $amount ?>' />
        <input type="hidden" name="notify_url" value="notify.php">
        <input type="hidden" name="currency_code" value="USD" />
        <input type="hidden" name="return" value="http://www.example.com/success.html" />
        <input type="hidden" name="cacel_return" value="http://www.example.com/cancel.html" />
        <input type="submit" name="submit" value="Submit Payment"/>
    </form>

</body>
</html>
