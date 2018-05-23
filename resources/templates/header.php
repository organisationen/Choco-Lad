<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="../"><img height="100%" class="img d-block" onerror="this.style.display='none'" src="http://privat.bahnhof.se/wb361158/burk/logo.png" alt="Choco LAD"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#">Produkter</a></li>
        <li><a href="#">Deals</a></li>
        <li><a href="#">Om oss</a></li>
        <li><a href="#">Kontakt</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> 
			<?php if (isset($_SESSION['username'])) {
				echo $_SESSION['username'];
				}
				else {
					echo 'logga in';
				}
				?></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>