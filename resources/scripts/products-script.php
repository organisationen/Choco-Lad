<?php
include($_SERVER['DOCUMENT_ROOT'] . '/resources/scripts/db.php');

mysqli_query($connection,"SET NAMES utf8");

$query = "SELECT * FROM products";
$result = mysqli_query($connection, $query);

while($row = mysqli_fetch_array($result)){
?>
    <div class="col-xs-3 col-lg-3">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top img-responsive" src="http://privat.bahnhof.se/wb361158/burk/choco-lad_deps/prod_img/kokosboll.png <?php //echo  htmlspecialchars($root .'/resources/multimedia/images/prod_img/' .$row['prod_img']); ?>" alt="<?php echo $row['prod_name']; ?>">
            <div class="card-body">
                <h5 class="card-title"><?= htmlspecialchars($row['prod_name']); ?></h5>
                <p class="card-text"><?= htmlspecialchars($row['prod_desc']); ?></p>
                <a href="#" class="btn btn-primary">Lägg till i kundvagn</a>
            </div>
        </div>
    </div>    

<?php
}
?>