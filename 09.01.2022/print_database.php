<script src="js/product_data.js"></script>
<?php
$con = new mysqli('localhost','root','','flora');
$records = mysqli_query($con,"select * from plants"); 
$option=$_POST['option'];

if(!$con)
{
    die("Connection failed: " . mysqli_connect_error());
}

if ($option=="recomandate1") {
    $records = mysqli_query($con,"select * from plants"); 
} elseif ($option=="nume_ascendent") {
    $records = mysqli_query($con,"select * from plants ORDER BY name ASC");
} elseif ($option=="nume_descendent") {
    $records = mysqli_query($con,"select * from plants ORDER BY name DESC");
} elseif ($option=="pret_ascendent") {
    $records = mysqli_query($con,"select * from plants ORDER BY price ASC");
} elseif ($option=="price_descendent") {
    $records = mysqli_query($con,"select * from plants ORDER BY price DESC");
} elseif ($option=="buchet") {
    $records = mysqli_query($con,"select * from plants where category='Buchete cu flori'");
} elseif ($option=="buchet_trandafiri") {
    $records = mysqli_query($con,"select * from plants");
} elseif ($option=="ghiveci") {
    $records = mysqli_query($con,"select * from plants where category='Ghivece cu flori'");
} elseif ($option=="primavara") {
    $records = mysqli_query($con,"select * from plants where category='Flori de primavara'");
} elseif ($option=="vara") {
    $records = mysqli_query($con,"select * from plants where category='Flori de vara'");
} elseif ($option=="toamna") {
    $records = mysqli_query($con,"select * from plants where category='Flori de toamna'");
} elseif ($option=="iarna") {
    $records = mysqli_query($con,"select * from plants where category='Flori de iarna'");
} elseif ($option=="carnivore") {
    $records = mysqli_query($con,"select * from plants where category='Plante carnivore/insectivore'");
} elseif ($option=="baby_plants") {
    $records = mysqli_query($con,"select * from plants where category='Baby plants'");
} elseif ($option=="birou") {
    $records = mysqli_query($con,"select * from plants where category='Plante de birou'");
} elseif ($option=="rare") {
    $records = mysqli_query($con,"select * from plants where category='Plante rare'");
} elseif ($option=="lumina_ridicata") {
    $records = mysqli_query($con,"select * from plants where property='Conditii de lumina ridicata'");
} elseif ($option=="lumina_medie") {
    $records = mysqli_query($con,"select * from plants where property='Conditii de lumina medie'");
} elseif ($option=="lumina_scazuta") {
    $records = mysqli_query($con,"select * from plants where property='Conditii de lumina scazuta'");
} elseif ($option=="usor_de_ingrijit") {
    $records = mysqli_query($con,"select * from plants where property='Usor de ingrijit'");
} elseif ($option=="purifica_aerul") {
    $records = mysqli_query($con,"select * from plants where property='Purifica aerul'");
} elseif ($option=="prietenoase") {
    $records = mysqli_query($con,"select * from plants where property='Prietenoase cu animalele'");
}
if($option)
{
while($data = mysqli_fetch_array($records))
{
	?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center" >
                                    <a href="Produs.php?image=<?php echo $data['image']; ?>&name=<?php echo $data['name']; ?>&price=<?php echo $data['price']; ?>&description=<?php echo $data['description']; ?>"><img src="<?php echo $data['image']; ?>" alt="" style="width:200px; height:200px"/></a>
										<p><?php echo $data['name']; ?></p>
										<h2><?php echo $data['price']; ?></h2>
										<a href="Cos.php?image=<?php echo $data['image']; ?>&name=<?php echo $data['name']; ?>&price=<?php echo $data['price']; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Adauga in cos</a>
									</div>
								</div>
							</div>
						</div>
                        
						<?php
}}

?>

<?php mysqli_close($con); // Close connection ?>