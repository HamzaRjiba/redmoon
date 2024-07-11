<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "redmoon");

  // Initialize message variable
  $msg = "";
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
      // Get text
      $name=$_POST["nom_prod"];
      $price=$_POST["prod_price"];
      $desc=$_POST["prod_description"];
      $contenu=$_POST["prod_contenu"];
      $cat=$_POST["cat"];
      $type=$_POST["type"];

      $test = "SELECT * FROM produit where nom='$name'";
      $res = $db->query($test);
      $rowcount = mysqli_num_rows($res);
      


      
      

    
  	// image file directory
    $target = "images/".basename($image);
    
    if($rowcount !== 0){
      echo "
      <script>
      alert('ce nom de produit existe')
      </script>";
    }
   else { 
  	$sql = "INSERT INTO produit (nom,price,description,contenu,image,category,type) VALUES 
      ('$name', '$price','$desc', '$contenu','$image', '$cat','$type')";
  	// execute query
    mysqli_query($db, $sql);
   }

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
      }
      $file = 'product.php';
// Open the file to get existing content
$current = file_get_contents($file);

$myfile = fopen("".$type.".php", "w");
         fwrite($myfile, $current);
        fclose($myfile);
        


  }
  $result = mysqli_query($db, "SELECT * FROM images");

  $sql = "SELECT * FROM categorie";
$result = $db->query($sql);
  



?>
<!DOCTYPE html>
<html>
<head>
<title>Add product</title>
<style>
.flex-container {
  display: flex;
  flex-direction: column;
}
</style>
</head>
<body style="background-color:powderblue;">
<?php

?>
  <form method="POST" action="add.php" enctype="multipart/form-data">
  
    <div>
      <input type="hidden" name="size" value="1000000">
    </div>
      <table>
        <tr>
        <td><label for="name">Nom :</label></td>
        <td><input type="text" id="name" name="nom_prod"></td>
        </tr>

        <tr>
    
    <td><label for="categorie">Categorie</label></td>
       <td> <select id="categorie" name="cat">
            <?php
                while($row = $result->fetch_assoc()) {
                    echo "
                    <option value=". $row["nom"].">". $row["nom"]."</option>
                    ";
                }

            ?>
        </select></td>
              </tr>
   
        <tr>
        <td ><label for="type">type :</label></td>
        <td ><input type="text" id="type" name="type"></td>
        </tr>
        <tr>
        <td><label for="price">price :</label></td>
        <td><input type="price" id="price" name="prod_price"></td>
        </tr>
        <tr>
        <td><label for="description">description :</label></td>
        <td><textarea id="description" name="prod_description"></textarea></td>
        </tr>
        <tr>
        <td><label for="contenu">contenu :</label></td>
        <td><textarea id="contenu" name="prod_contenu"></textarea></td>
        </tr>
        <tr>
  	
        <td><input type="file" name="image"></td>
        </tr>
  	
        <tr>
        <td><button type="submit" name="upload">Add</button></td>
        </tr>
      
    
  </form>
  <br>
  <a href='http://localhost/redmoon/redmoon/homepage/home.php'>Homepage</a>

</body>
</html>