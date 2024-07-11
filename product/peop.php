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
      $name=$_POST["user_name"];
      $price=$_POST["prod_price"];
      $desc=$_POST["prod_description"];
      $contenu=$_POST["prod_contenu"];
      $cat=$_POST["cat"];

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO produit (nom,price,description,contenu,image,category) VALUES 
      ('$name', '$price','$desc', '$contenu','$image', '$cat')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
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
<body>
  <form method="POST" action="add.php" enctype="multipart/form-data">
  <div class="flex-container">
    <div>
      <input type="hidden" name="size" value="1000000">
    </div>
      <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
    <label for="categorie">Categorie</label>
        <select id="categorie" name="cat">
            <?php
                while($row = $result->fetch_assoc()) {
                    echo "
                    <option value=". $row["nom"].">". $row["nom"]."</option>
                    ";
                }

            ?>
        </select>
    </div>
    <div>
        <label for="price">price :</label>
        <input type="price" id="price" name="prod_price">
    </div>
    <div>
        <label for="description">description :</label>
        <textarea id="description" name="prod_description"></textarea>
    </div>
    <div>
        <label for="contenu">contenu :</label>
        <textarea id="contenu" name="prod_contenu"></textarea>
    </div>
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
  		<button type="submit" name="upload">Add</button>
      </div>
    </div>
  </form>
</div>
</body>
</html>