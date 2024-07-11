<?php

/*
	* Config for PayPal specific values
*/

// Urls
if(isset($_SERVER['SERVER_NAME'])) {
    $url = @($_SERVER["HTTPS"] != 'on') ? 'http://' . $_SERVER["SERVER_NAME"] : 'https://' . $_SERVER["SERVER_NAME"];
    $url .= ($_SERVER["SERVER_PORT"] !== 80) ? ":" . $_SERVER["SERVER_PORT"] : "";
    $url .= $_SERVER["REQUEST_URI"];
}
else {
    $url = "";
}

define("URL", array(

    "current" => $url,

    "services" => array(
        "orderCreate" => 'api/createOrder.php',
        "orderGet" => 'api/getOrderDetails.php',
		"orderPatch" => 'api/patchOrder.php',
		"orderCapture" => 'api/captureOrder.php'
    ),

	"redirectUrls" => array(
        "returnUrl" => 'pages/success.php',
		"cancelUrl" => 'pages/cancel.php',
    )
));

// PayPal Environment 
define("PAYPAL_ENVIRONMENT", "live");

// PayPal REST API endpoints
define("PAYPAL_ENDPOINTS", array(
	"live" => "https://api.paypal.com"
));

// PayPal REST App credentials
define("PAYPAL_CREDENTIALS", array(
	"live" => [
		"client_id" => "ASnUa4_eMkIZPulBBkonTiNEz4yF1B4AHm3TbE_w9dKQDUwzRv33fo62IiRPV4PJGTIrFl54mvyd-msg",
		"client_secret" => "EJpTT8PH_JYdn6Ojl0YelzwXxdy-zGGnGHLLpYgyKaOwUqcNRd771_MA8N8K8X3g3dUXSsJXDv7PyNl4"
	]
));

// PayPal REST API version
define("PAYPAL_REST_VERSION", "v2");

// ButtonSource Tracker Code
define("SBN_CODE", "PP-DemoPortal-EC-Psdk-ORDv2-php");