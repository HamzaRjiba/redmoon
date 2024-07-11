<?php

require('../login/connexion.php');
if(isset($_SESSION['user_id'])){
$stmt = $bdd->prepare("SELECT id  FROM user WHERE email=?");
$stmt->execute([$_SESSION['username']]); 
$user = $stmt->fetch();
if(isset($_POST['add'])){
	$name=$_POST['item_name'];
  $price=$_POST['amount'];
  $image=$_POST['image'];
  $qty=$_POST['quantity'];
  $tot=$qty*$price;

	try{
  // set the PDO error mode to exception
  
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt1 = $bdd->prepare("SELECT id ,quantity FROM cart WHERE productname=?");
    $stmt1->execute([$name]); 
    $prod = $stmt1->fetch();
    $stmt2 = $bdd->prepare("SELECT id ,quantity FROM produit WHERE nom=?");
    $stmt2->execute([$name]); 
    $prodqt = $stmt2->fetch();
    $maxqt=$prodqt['quantity'];
    if ($prod['id'] != null){
      $qta=$prod['quantity'];
      $qt=$prod['quantity']+$qty;
      $total=$qt*$price;
      $idp=$prod['id'];
      if($qt<=$maxqt){
      $sql = "UPDATE cart SET quantity='$qt' , total='$total' WHERE id='$idp'";
      $bdd->exec($sql);
    }
      else{
        echo "<script>alert(\"You cannot add that amount to the cart — we have $maxqt in stock and you already have $qta in your cart.\")</script>";

      }

    }
    else {
  $sql = "INSERT INTO cart (iduser,productname,price,quantity,total,image) VALUES ('$user[id]','$name','$price','$qty','$tot','$image')";
  $bdd->exec($sql);

    }
	}
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
}




if(isset($_POST['addstock'])){
  $name=$_POST['item_name'];
  $ct=$_POST['contenu'];
    $sm = $bdd->prepare("SELECT  * FROM produit WHERE nom=? LIMIT 1");
    $sm->execute([$name]);
  $row = $sm->fetchAll();
      $price=$row[0][2];
      $desc=$row[0][4];
      $img=$row[0][6];
      $cat=$row[0][7];
      $type=$row[0][8];
      $qt=$row[0][3];
      $qt=$qt+1;
      $sq = "INSERT INTO produit (nom,price,quantity,description,contenu,image,category,type) VALUES 
       ('$name', '$price','$qt','$desc','$ct','$img','$cat','$type')";
        $bdd->exec($sq);
        $sq2 = "UPDATE produit SET quantity='$qt' WHERE nom='$name'";
        $bdd->exec($sq2);

    
}
}


