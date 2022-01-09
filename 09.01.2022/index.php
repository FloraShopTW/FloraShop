<!DOCTYPE html>
<html>
<head>
  <title>Insert image in MySQL database in PHP</title>
</head>
<body>

<?php

include "dbConn.php"; // Using database connection file here

if(isset($_POST["submit"]))
{
    $var1 = rand(1111,9999);  // generate random number in $var1 variable
    $var2 = rand(1111,9999);  // generate random number in $var2 variable
	
    $var3 = $var1.$var2;  // concatenate $var1 and $var2 in $var3
    $var3 = md5($var3);   // convert $var3 using md5 function and generate 32 characters hex number

    $fnm = $_FILES["image"]["name"];    // get the image name in $fnm variable
    $dst = "./images/".$var3.$fnm;  // storing image path into the {all_images} folder with 32 characters hex number and file name
    $dst_db = "images/".$var3.$fnm; // storing image path into the database with 32 characters hex number and file name

    move_uploaded_file($_FILES["image"]["tmp_name"],$dst);  // move image into the {all_images} folder with 32 characters hex number and image name
	
    $check = mysqli_query($db,"insert into plants(name,price,image,category,subcategory,property) values('$_POST[name]','$_POST[price]','$dst_db','$_POST[category]','$_POST[subcategory]','$_POST[property]')");  // executing insert query
		
    if($check)
    {
    	echo '<script type="text/javascript"> alert("Data Inserted Successfully!"); </script>';  // alert message
    }
    else
    {
    	echo '<script type="text/javascript"> alert("Error Uploading Data!"); </script>';  // when error occur
    }
	
    mysqli_close($db);  // close connection 
  }
?>

<h2>Insert Data</h2>

<form method="post" enctype="multipart/form-data">
  <table border="2">
    <tr>
      <td>Enter Name</td>
      <td><input type="text" name="name" placeholder="Enter Name" Required></td>
    </tr>
    <tr>
      <td>Enter Price</td>
      <td><input type="text" name="price" placeholder="Enter Price" Required></td>
    </tr>
    <tr>
      <td>Select Image</td>
      <td><input type="file" name="image" Required></td>
    </tr>
    <tr>
      <td>Enter Category</td>
      <td><input type="text" name="category" placeholder="Enter Category" Required></td>
    </tr>
    <tr>
      <td>Enter Subategory</td>
      <td><input type="text" name="subcategory" placeholder="Enter Subategory" Required></td>
    </tr>
    <tr>
      <td>Enter Property</td>
      <td><input type="text" name="property" placeholder="Enter Property" Required></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="submit" value="Upload"></td>			
    </tr>
  </table>
</form>

</body>
</html>