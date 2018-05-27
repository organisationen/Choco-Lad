<?php
include($_SERVER['DOCUMENT_ROOT'] . '/resources/scripts/db.php');
if(!isset($_SESSION['LoggedIn'])){
	$_SESSION['loggedIn'] = false;
}

if (isset($_session['LogOff'])) {
    
    if (session_status() == PHP_SESSION_ACTIVE) {
        
        session_destroy();
    }
}

if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}

$root = $_SERVER['DOCUMENT_ROOT'];

$HostAddress = 'http://' .$_SERVER['HTTP_HOST'];
//Din publika adress till servern eg. 'https://google.com'

require($root .'/resources/scripts/db.php');
    
mysqli_query($connection,"SET NAMES utf8");

$query = "SELECT * FROM products";
$result = mysqli_query($connection, $query);

while($row = mysqli_fetch_array($result)){
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
                        <input class="btn btn-primary" type="submit" name="prod_id" value="Beställ" data-toggle="modal" data-target="<?php if (!isset($_SESSION['LoggedIn'])) { echo "#PlzLogIn";} else{ echo "#VeriBuy";}?>">
                        
                      
                        <!-- Dialogruta -->
                        <div id="PlzLogIn" class="modal fade" role="dialog">
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
                        <div id="VeriBuy" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Dess innehåll-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title text-danger">Varning</h4>
                              </div>
                              <div class="modal-body">
                                <form action="products.php" method="post">

                                <label for="username">Är du säker på att du vill köpa 1: <?= $_SESSION['username'];?>?</label>
                                
                                <div class="form-group">
                                    <input type="submit" name="VeriBuy" value="Ja" class="btn btn-success">
                                    <input type="submit" data-dismiss="modal" value="Nej" class="btn btn-danger">
                                </div>   
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