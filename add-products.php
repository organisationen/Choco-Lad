<?php
$title = 'Lägg till produkter';

require($_SERVER['DOCUMENT_ROOT'] . '/resources/config.php');
require($root . '/resources/scripts/db.php');
require($root . '/resources/templates/start.php');
require($root . '/resources/templates/head.php');
require($root . '/resources/templates/main_start.php');

if(isset($_GET['submit'])) {
    
    $pnam = mysqli_real_escape_string($connection, $_GET['prod_name']);
    $pdsc = mysqli_real_escape_string($connection, $_GET['prod_desc']);
    $pimg = mysqli_real_escape_string($connection, $_GET['prod_img']);
    $pcst = mysqli_real_escape_string($connection, $_GET['prod_cost']);
    
    $query = "INSERT INTO products(prod_name,prod_desc,prod_img,prod_cost)";
    $query .= "VALUES ('$pnam', '$pdsc', '$pimg' ,'$pcst')";
    
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die('Något gick fel' . mysqli_error());
    }
}


?>
<h1 class="text-primary">Mata in data i databasen <span class="text-danger">products</span></h1>
<div class="container">
<form action="add-products.php" method="get">
            <label class="text-primary" for="prod_name">Namn på produkten</label>
            <input type="text" name="prod_name" class="form-control">
            <label class="text-primary" for="prod_desc">Produktbeskrivning</label>
            <input type="text" name="prod_desc" class="form-control">
            <label class="text-primary" for="prod_img"><abbr title="Exempel: jacka.png">Bildfil</abbr></label>
            <input type="text" name="prod_img" class="form-control">
            <label class="text-primary" for="prod_cost">Produktens pris</label>
            <input type="number" name="prod_cost" class="form-control">
            <br/>
            <input class="btn btn-danger" type="submit" name="submit" value='Mata in i "products"'>
        </form>
</div>
<br/>
<?php
require($root . '/resources/templates/main_end.php');
require($root . '/resources/templates/end.php');
//made by Jonatan Nogrell, I guess
?>