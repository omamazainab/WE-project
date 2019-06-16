<?php   

if(isset($_POST['update_product']))
     {
        require_once '../connection.php'; 

        $id =  $_POST['id'];
        $product_name = $_POST['product_name'];
        $product_description = $_POST['product_description'];
        $product_category = $_POST['product_category'];
        $product_price = $_POST['product_price'];


        $sql = "SELECT * FROM products WHERE id = '$id'";
        $result = mysqli_query($conn, $sql); 
        $row = mysqli_fetch_assoc($result); 

        if(isset($_FILES)){
                    $img_name = $_FILES['product_image']['name'];
                    $img_size = $_FILES['product_image']['size'];
                    $img_type = $_FILES['product_image']['type'];
                    $tmp_name = $_FILES['product_image']['tmp_name'];
         
           
            $extension = substr($name, strpos($name, '.') + 1);
         
            if(isset($name) && !empty($name)){
              if($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png' || $extension == 'gif'){
                $location = "../pictures";
                $filepath = $location.$name;
                if(move_uploaded_file($tmp_name, $filepath)){
                  $smsg = "Uploaded Successfully";
                }else{
                  $fmsg = "Failed to Upload File";
                }
              }else{
                $fmsg = "Only JPG files are allowed and should be less that 1MB";
              }
            }else{
              $fmsg = "Please Select a File";
            }
          }else{
            $filepath = $_POST['filepath'];
          } 


        $sql = "UPDATE products SET product_name = '$product_name', product_description = '$product_description', product_category = '$product_category', product_price = '$product_price', product_image='$product_image' WHERE id = '$id'";
        
        if(mysqli_query($connection, $sql)){
           echo "<script>alert ('record updated sucessfully');</script>";
        }else{
            echo "<script>alert ('Failed to Update Product');</script>";
        }
     
        
       
    }
?>
<form method="POST" enctype="multipart/form-data">
  <div class="form-group">
  <input type="text" name="id">
  <input type="hidden" name="product_image" value="<?php echo $row['product_image']; ?>">
  <input type="text" class="form-control" name="product_name"  placeholder="Product Name" value="<?php echo $row['product_name']; ?>">
  </div>
  <div class="form-group">
    <textarea class="form-control" name="product_description" rows="3"><?php echo $row['product_description']; ?></textarea>
  </div>
 
  <div class="form-group">
    <select class="form-control" id="productcategory" name="product_category">
    <?php   
    $catsql = "SELECT * FROM category";
    $catresult = mysqli_query($conn, $catsql); 
    while ($catrow = mysqli_fetch_assoc($catresult)) {
  ?>
    <option value="<?php echo $catrow['id']; ?>" <?php if( $catrow['id'] == $row['product_category']){ echo "selected"; } ?>><?php echo $catrow['category_name']; ?></option>
  <?php } ?>
  </select>
  </div>
  
 
  <div class="form-group">
    <input type="text" class="form-control" name="product_price" id="productprice" placeholder="update Product Price" value="<?php echo $r['product_price']; ?>">
  </div>
  <div class="form-group">
    
    <?php if(isset($row['product_image']) & !empty($row['product_image'])){ ?>
    <br>
      <img src="<?php echo $row['product_image'] ?>" widht="100px" height="100px">
      <a href="delprodimg.php<?php echo $row['id']; ?>">Delete Image</a>
    <?php }else{ ?>
    <input type="file" name="product_image" id="productimage">
    <p class="help-block">Only jpg/png are allowed.</p>
    <?php } ?>
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>