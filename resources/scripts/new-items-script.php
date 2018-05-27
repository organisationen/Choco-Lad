<?php
include($_SERVER['DOCUMENT_ROOT'] . '/resources/scripts/db.php');

    /*$1WeekAgo = date('Y-m-d', time() + (60 * 60 * 24 * -7) );*/

$query = "SELECT * FROM products ORDER BY id DESC LIMIT 7";
$result = mysqli_query($connection, $query);



while($row = mysqli_fetch_array($result)){
?>
    <div class="flex-row row">
        <div class="col-xs-6 col-sm-4">
            <div class="thumbnail">
                <img class="img-responsive" src="<?php echo  htmlspecialchars('http://privat.bahnhof.se/wb361158/burk/choco-lad_deps/prod_img/' .$row['prod_img']); ?>" alt="<?php echo $row['prod_name']; ?>">
                <div class="caption">
                    <h5><?= htmlspecialchars($row['prod_name']); ?></h5>
                    <p class="flex-text text-muted"><?= htmlspecialchars($row['prod_desc']); ?></p>
                    <a href="#" class="btn btn-primary">Lägg till i kundvagn</a>
                </div>
            </div>
        </div>
    </div>  
<?php
}
?>