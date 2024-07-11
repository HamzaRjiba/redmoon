

<?php
session_start();
require_once('../Common/Constants.php');
define("DEFAULT_SELECT", "- Select -");
$returnUrl = "http://localhost/redmoon/redmoon/paytest/success.php";
$cancelUrl = "https://www.formget.com/tutorial/paypal-adaptive-payment/parallel/index.php";
$memo = "Adaptive Payment";
$actionType = "PAY";
$currencyCode = "USD";

if ($_POST['booking'] == 'f') {
$receiverEmail = array("test812@example.com");
$receiverAmount = array("1.00");
$primaryReceiver = array("false");
$_SESSION['facilty_provider'] = array("AirGo Airline's Test Store");
} elseif ($_POST['booking'] == 'h') {
$receiverEmail = array("hotel@outlook.com");
$receiverAmount = array("200.00");
$primaryReceiver = array("false");
$_SESSION['facilty_provider'] = array("Hotel TheCompany's Test Store");
} elseif ($_POST['booking'] == 'c') {
$receiverEmail = array("car-merchants@outlook.com");
$receiverAmount = array("100.00");
$primaryReceiver = array("false");
$_SESSION['facilty_provider'] = array("MyCar Car Company's Test Store");
} elseif ($_POST['booking'] == 'fh') {
$receiverEmail = array("airline@outlook.com", "hotel@outlook.com");
$receiverAmount = array("300.00", "200.00");
$primaryReceiver = array("false", "false");
$_SESSION['facilty_provider'] = array("AirGo Airline's Test Store", "Hotel TheCompany's Test Store");
} elseif ($_POST['booking'] == 'fc') {
$receiverEmail = array("airline@outlook.com", "car-merchants@outlook.com");
$receiverAmount = array("300.00", "100.00");
$primaryReceiver = array("false", "false");
$_SESSION['facilty_provider'] = array("AirGo Airline's Test Store", "MyCar Car Company's Test Store");
} elseif ($_POST['booking'] == 'hc') {
$receiverEmail = array("hotel@outlook.com", "car-merchants@outlook.com");
$receiverAmount = array("200.00", "100.00");
$primaryReceiver = array("false", "false");
$_SESSION['facilty_provider'] = array("Hotel TheCompany's Test Store", "MyCar Car Company's Test Store");
} elseif ($_POST['booking'] == 'fhc') {
$receiverEmail = array("airline@outlook.com", "hotel@outlook.com", "car-merchants@outlook.com");
$receiverAmount = array("295.00", "195.00", "95.00");
$primaryReceiver = array("false", "false", "false");
$_SESSION['facilty_provider'] = array("AirGo Airline's Test Store", "Hotel TheCompany's Test Store", "MyCar Car Company's Test Store");
} else {
$receiverEmail = array("airline@outlook.com");
$receiverAmount = array("300.00");
$primaryReceiver = array("false");
$_SESSION['facilty_provider'] = array("AirGo Airline's Test Store");
}
if (isset($receiverEmail)) {
$receiver = array();
/*
* A receiver's email address
*/
for ($i = 0; $i < count($receiverEmail); $i++) {
$receiver[$i] = new Receiver();
$receiver[$i]->email = $receiverEmail[$i];
/*
* Amount to be credited to the receiver's account
*/
$receiver[$i]->amount = $receiverAmount[$i];
/*
* Set to true to indicate a chained payment; only one receiver can be a primary receiver. Omit this field, or set it to false for simple and parallel payments.
*/
$receiver[$i]->primary = $primaryReceiver[$i];
}
$receiverList = new ReceiverList($receiver);
}
$payRequest = new PayRequest(new RequestEnvelope("en_US"), $actionType, $cancelUrl, $currencyCode, $receiverList, $returnUrl);
// Add optional params
if ($memo != "") {
$payRequest->memo = $memo;
}
/*
* ## Creating service wrapper object
Creating service wrapper object to make API call and loading
Configuration::getAcctAndConfig() returns array that contains credential and config parameters
*/
$service = new AdaptivePaymentsService(Configuration::getAcctAndConfig());
try {
/* wrap API method calls on the service object with a try catch */
$response = $service->Pay($payRequest);
$ack = strtoupper($response->responseEnvelope->ack);
if ($ack == "SUCCESS") {
$_SESSION['pay_key'] = $payKey = $response->payKey;
$payKey = $response->payKey;
$payPalURL = PAYPAL_REDIRECT_URL . '_ap-payment&paykey=' . $payKey;
header('Location: ' . $payPalURL);
}
} catch (Exception $ex) {
require_once '../Common/Error.php';
exit;
}