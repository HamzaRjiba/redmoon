<?php
require('connexion.php');
$stmt = $bdd->prepare("SELECT *  FROM cart WHERE iduser=?");
$stmt->execute([$_SESSION['user_id']]);
$tot=0;
$items="";
while ($row = $stmt->fetch()) {
$tot=$tot+$row['total'];
$items=$items.$row['productname'];


}
$SampleCart = array(
    "item_amt" => 0.5,
    "tax_amt" => 0,
    "insurance_fee" => 0,
    "handling_fee" => 0,
    "shipping_amt" => 0,
    "shipping_discount" => 0,
    "currency" => "USD",
    "shipping_info" => array(
        "recipient_name" => "John Doe",
        "line1" => "55 East 52nd Street",
        "line2" => "21st Floor",
        "city" => "New York",
        "state" => "NY",
        "postal_code" => "10022"
    )
);
