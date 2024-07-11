<?php
session_start();

require('../../login/connexion.php');
$stmt = $bdd->prepare("SELECT id  FROM user WHERE email=?");
$stmt->execute([$_SESSION['username']]); 
$user = $stmt->fetch();
if(isset($_POST['add'])){
	$name=$_POST['item_name'];
	$price=$_POST['amount'];
	try{
	// set the PDO error mode to exception
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt1 = $bdd->prepare("SELECT id ,quantity FROM cart WHERE productname=?");
    $stmt1->execute([$name]); 
    $prod = $stmt1->fetch();
    if ($prod['id'] != null){

      $qt=$prod['quantity']+1;
      $total=$qt*$price;
      $idp=$prod['id'];
      $sql = "UPDATE cart SET quantity='$qt' , total='$total' WHERE id='$idp'";
      $bdd->exec($sql);
      header("Refresh:0");

    }
    else {
  $sql = "INSERT INTO cart (iduser,productname,price,quantity,total) VALUES ('$user[id]','$name','$price',1,'$price')";
  $bdd->exec($sql);
  header("Refresh:0");

    }
	}
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
	
	


}
