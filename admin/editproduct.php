<?php 

require_once 'connection.php'; 

    if(isset($_GET) & !empty($_GET)){
      $id = $_GET['id'];
    }else{
      header('location: products.php');
    }

    $msg = "";

    if(isset($_POST['edit_product'])){

      $product_name = $_POST['product_name'];
      $product_description = $_POST['product_description'];
      $product_price = $_POST['product_price'];
      $product_category = $_POST['product_category'];
      // $product_image = $_POST['product_image'];

      if(isset($_FILES) & !empty($_FILES)){

        $img_name = $_FILES['product_image']['name'];
        $img_size = $_FILES['product_image']['size'];
        $img_type = $_FILES['product_image']['type'];
        $tmp_name = $_FILES['product_image']['tmp_name'];
        $extension = substr($img_name, strpos($img_name, '.') + 1);

        if(isset($img_name) && !empty($img_name)){
          if($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png' || $extension == 'gif'){
            $location = "../pictures/";
            $filepath = $location.$img_name;
            if(move_uploaded_file($tmp_name, $filepath)){
              $msg = "Uploaded Successfully";
            }else{
              $msg = "Failed to Upload File";
            }
          }else{
            $msg = "Only JPG files are allowed and should be less that 1MB";
          }
        }else{
          $msg = "Please Select a File";
        }
      }else{
        $filepath = $_POST['filepath'];
      } 

        $sql = "UPDATE products SET product_name='$product_name', product_description='$product_description', product_category='$product_category', product_price='$product_price', product_image='$filepath' WHERE id = $id";
        $query = mysqli_query($conn, $sql);
        if($query){
            echo "<script>
            alert ('Updated Sucessfully ');
        </script>";
        header('location: products.php');
        }else{
            echo "<script>
            alert ('Failed to update');
        </script>";
        header('location: products.php');
        }

    }

    $product_sql = "SELECT * FROM products WHERE id='$id'";
    $product_query = mysqli_query($conn,$product_sql);
    $current_product = mysqli_fetch_assoc($product_query);

    $category_sql = "SELECT * FROM category";
    $cart_query = mysqli_query($conn,$category_sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="navbar.css">
  <style>
   body{
            background-image: url(../pictures/admin_panel_backgorund.jpg);
            text-align: center;
            font-family:arial;
        }
        input,select{
    border-radius: 6px 6px 6px 6px;
    padding: 1% 5%;
    margin: 2% auto;
    width: 80%;
    display: block;
}

input[type="submit"]{
    color: white;
    background-color: rgba(70,50,50,.9);
    border-width: 0px;
    border-radius: 0px;
}

  </style>

</head>
<body>
<?php include ('admin_navbar.php'); ?>



<div style=" background-color: rgba(0,0,0,0.5);
    width: 80%;
    margin: 3% auto;padding: 1%;
">
<h1 style="color:white;">Edit the product</h1>
<form action="" method="POST"  enctype="multipart/form-data">
    <!-- <h4><?php //echo $current_product['id']; ?></h4> -->
    <input type="hidden" name="filepath" value="<?php echo $current_product['product_image']; ?>">
    <input type="text" name="product_name" value="<?php echo $current_product['product_name'] ?>" >
    <input type="text" name="product_description" value="<?php echo $current_product['product_description']; ?>" >
    <input type="text" name="product_price" value="<?php echo $current_product['product_price']; ?>">

  
    <select name="product_category" id="" style="width:89%;">
          <?php while($cart_row = mysqli_fetch_assoc($cart_query)){ ?>
          <option value="<?php echo $cart_row['id'] ?>" <?php if($id=$current_product['product_category']){echo "selected";} ?> > <?php echo $cart_row['category_name']; ?> </option>
          <?php } ?>
    </select>

    <?php if(isset($current_product['product_image']) & !empty($current_product['product_image'])){ ?>
    <br>
      <img src="<?php echo $current_product['product_image'] ?>" widht="100px" height="100px">
      <a style="padding: 1%;
    background-color: rgba(0,0,0,0.6);
    color: white;
    text-decoration: none;" href="deleteproductimage.php?id=<?php echo $current_product['id']; ?>">Delete Image</a>
    <?php }else{ ?>
    <input type="file" name="product_image" id="product_image">
    <p>Only jpg/png are allowed.</p>
    <?php } ?>
    <span><?php echo $msg; ?></span>


    <input type="submit" name="edit_product" value="edit_product">
  </form>
</div>

</body>
</html>