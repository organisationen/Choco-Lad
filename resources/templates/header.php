<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?= $HostAddress ?>"><img height="100%" class="img d-block" onerror="this.style.display='none'" src="<?= $HostAddress .'/resources/multimedia/images/logo.png'?>" alt="Choco LAD"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li <?php if($_SESSION['NavId'] == 2){echo 'class="active"';}?>><a href="<?= $HostAddress .'/products.php'?>" >Produkter</a></li>
        <li <?php if($_SESSION['NavId'] == 3){echo 'class="active"';}?>><a href="<?= $HostAddress .'/jaok.php'?>">JaoK tools</a></li>
        <li <?php if($_SESSION['NavId'] == 4){echo 'class="active"';}?>><a href="<?= $HostAddress .'/about_us.php'?>">Om oss</a></li>
        <li <?php if($_SESSION['NavId'] == 5){echo 'class="active"';}?>><a href="<?= $HostAddress .'/contact.php'?>">Kontakt</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li <?php if($_SESSION['NavId'] == 6){echo 'class="active"';}?>><a href="<?= $HostAddress .'/login.php';?>"><span class="glyphicon glyphicon-user"></span> 
			<?php if (!isset($_SESSION['username'])) { //Säg inget!
                echo 'logga in';
				}
				else {
					echo $_SESSION['username'];
				}
				?>
            
            </a></li>

        <li <?php if($_SESSION['NavId'] == 7){echo 'class="active"';}?>><a href="<?= $HostAddress .'/shopping_cart.php'?>"><span class="glyphicon glyphicon-shopping-cart text-danger"></span> <span class="text-danger">Kundvagn</span></a></li>
      </ul>
    </div>
  </div>
</nav>