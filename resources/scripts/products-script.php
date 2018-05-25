<?php
include($_SERVER['DOCUMENT_ROOT'] . '/resources/scripts/db.php');

mysqli_query($connection,"SET NAMES utf8");

$query = "SELECT * FROM products";
$result = mysqli_query($connection, $query);

while($row = mysqli_fetch_array($result)){
?>
	<div class="shopItem">

		<img class = "itemImage" src="bilder/<?php echo $row['prod_img']; ?>" />
		<p class = "itemName" > <?php echo $row['prod_name']; ?> </p>
		<p class = "itemDesc" > <?php echo $row['prod_desc']; ?></p>

		<div class = "itemContainer">
		
			<p class = "itemPrice"> <?php echo $row['prod_cost']; ?> kr </p>
			<p class = "itemBuy"> <input class="itemNumber" type="number"/>Lägg till i kundvagn</p>
		
		</div>

	</div>
<?php
}
?>