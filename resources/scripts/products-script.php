<?php
include($_SERVER['DOCUMENT_ROOT'] . '/resources/scripts/db.php');

mysqli_query($connection,"SET NAMES utf8");

$query = "SELECT * FROM products";
$result = mysqli_query($connection, $query);

while($row = mysqli_fetch_array($result)){
?>
    <div class="flex-row row">
        <div class="col-xs-6 col-sm-4">
            <div class="thumbnail">
                <img class="img-responsive" src="<?php echo  htmlspecialchars($HostAddress .'/resources/multimedia/images/prod_img/' .$row['prod_img']); ?>" alt="<?php echo $row['prod_name']; ?>">
                <div class="caption">
                    <h3><?= htmlspecialchars($row['prod_name']); ?></h3>
                    <p class="flex-text text-muted"><?= htmlspecialchars($row['prod_desc']); ?></p>
                    <a href="#" class="btn btn-primary">Lägg till i kundvagn</a>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>