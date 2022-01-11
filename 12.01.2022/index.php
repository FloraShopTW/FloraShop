<!DOCTYPE html>
<html>
<head>
  <title>Insert image in MySQL database in PHP</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/2ab25fe11c.js" crossorigin="anonymous"></script>
<style>
   th, td {
  border-color: #96D4D4;
}
h4{
  margin-right:10px;
}
  </style>
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
$description=mysqli_real_escape_string($db, $_POST['description']);
    $fnm = $_FILES["image"]["name"];    // get the image name in $fnm variable
    $dst = "./images/".$var3.$fnm;  // storing image path into the {all_images} folder with 32 characters hex number and file name
    $dst_db = "images/".$var3.$fnm; // storing image path into the database with 32 characters hex number and file name

    move_uploaded_file($_FILES["image"]["tmp_name"],$dst);  // move image into the {all_images} folder with 32 characters hex number and image name
	
    $check = mysqli_query($db,"insert into plants(name,price,image,category,subcategory,property,description) values('$_POST[name]','$_POST[price]','$dst_db','$_POST[category]','$_POST[subcategory]','$_POST[property]','$description')");  // executing insert query
		
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
<h4>Choose from below:</h4>
<h2 >Categorii</h2>
<table border="2" cellspacing="5">
<tr>
<td>
								<h4><img src="images/buchet.PNG">Buchete cu flori</h4>
</td>
							<td>
									<h4><img src="images/ghiveci.PNG">Ghivece cu flori</h4>
</td>
<td>
									<h4><img src="images/zambila.PNG">Flori de primavara</h4>
</td>
<td>
									<h4><img src="images/floarea_soarelui.PNG">Flori de vara</h4>
</td>
<td>
									<h4><img src="images/brandusa.PNG">Flori de toamna</h4>
</td>
<td>
									<h4><img src="images/ghiocei.PNG">Flori de iarna</h4>
</td>
<td>
									<h4><img src="images/plante_carnivore.PNG">Plante carnivore/insectivore</h4>
</td>
<td>
									<h4><img src="images/baby_plants.PNG">Baby plants</h4>
</td>
<td>
									<h4><img src="images/plante_birou.PNG">Plante de birou</h4>
</td>
<td>
									<h4><img src="images/plante_rare.PNG">Plante rare</h4>
</td>
</tr>
<tr>
  <td>Trandafiri</td>
  <td>Decorative prin flori</td>
</tr>
  <tr>
  <td>Frezii</td>
  <td>Bonsai</td>
</tr>
  <tr>
  <td>Crizanteme</td>
  <td>Cactusi</td>
</tr>
  <tr>
  <td>Orhidee</td>
  <td>Citrice</td>
</tr>
  <tr>
  <td>Garoafe</td>
  <td>Decorative prin frunze</td>
</tr>
  <tr>
  <td>Crini</td>
  <td></td>
</tr>
  <tr>
  <td>Irisi</td>
  <td></td>
</tr>
  

</table>
<h2>Proprietati</h2>
<table border="2" cellspacing="5">
<tr>
<td>
								<h4><i class="fa fa-sun-o" ></i>Conditii de lumina ridicata</h4>
</td>
							<td>
									<h4><i class="fas fa-cloud-sun" style="font-size:20px; margin:10px 20px 0px;"></i>Conditii de lumina medie</h4>
</td>
<td>
									<h4><i class="fa fa-cloud" style="font-size:20px; margin:10px 20px 0px;"></i>Conditii de lumina scazuta</h4>
</td>
<td>
									<h4><i class="fas fa-hands" style="font-size:20px; margin:10px 20px 0px;"></i>Usor de ingrijit</h4>
</td>
<td>
									<h4 ><i class="fas fa-wind" style="font-size:20px; margin:10px 20px 0px;"></i>Purifica aerul</h4>
</td>
<td>
									<h4><i class="fa fa-paw" style="font-size:20px; margin:10px 20px 0px;"></i>Prietenoase cu animalele</h4>
</td>
</tr>
</table>

<form method="post" enctype="multipart/form-data" style="margin-top:50px;">
  <table border="2" cellspacing="5">
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
      <td>Enter Description</td>
      <td><input type="text" name="description" placeholder="Enter Description" Required></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="submit" value="Upload"></td>			
    </tr>
  </table>
</form>

</body>
</html>