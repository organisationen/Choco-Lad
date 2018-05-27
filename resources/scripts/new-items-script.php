<?php
include($_SERVER['DOCUMENT_ROOT'] . '/resources/scripts/db.php');

    /*$1WeekAgo = date('Y-m-d', time() + (60 * 60 * 24 * -7) );*/

$query = "SELECT * FROM products ORDER BY prod_id DESC LIMIT 2"; //min databas är inte så välfylld, så jag begränsar aggressivt :)
$result = mysqli_query($connection, $query);



while($row = mysqli_fetch_array($result)) {
?>
    <div class="flex-row row">
        <div class="col-xs-6 col-sm-4 text-center">
            <div class="thumbnail">
                <img class="img-responsive" src="<?php echo  htmlspecialchars($HostAddress .'/resources/multimedia/images/prod_img/' .$row['prod_img']); ?>" alt="<?php echo $row['prod_name']; ?>">
                <div class="caption">
                    <h3><?= htmlspecialchars($row['prod_name']); ?></h3>
                    <p class="flex-text text-muted"><?= htmlspecialchars($row['prod_desc']); ?></p>
                    <h3 class="text-danger font-weight-bold"><?= htmlspecialchars($row['prod_cost']); ?>:- SEK</h3>
                    <form action="<?= $root .'/resources/scripts/order-script.php'?>" method="post">
                        <input class="btn btn-primary" type="submit" name="prod_id" value="Beställ" data-toggle="modal" data-target="#VeriBuy">
                        
                      
                        <!-- Dialogruta -->
                        <div id="VeriBuy" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Dess innehåll-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Logga in</h4>
                              </div>
                              <div class="modal-body">
                                <form action="products.php" method="post">

                                <div class="form-group">
                                    <label for="username">Användarnamn</label>
                                    <input type="text" name="username" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="password">Lösenord</label>
                                    <input type="password" name="password" class="form-control">
                                </div>

                                <input class="btn btn-primary" type="submit" name="submit" value="Logga in">
                                    
                                </form>            
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>