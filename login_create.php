
<?php
        require($_SERVER['DOCUMENT_ROOT'] . '/resources/config.php');
        include($root . '/resources/scripts/db.php');

        $_SESSION['NavId'] = 6;

        include($root .'/resources/scripts/login_create-script.php');

        $title = 'Registrera dig';

        require($root . '/resources/templates/above.php');
        //efter detta kommer innehållet i dokumentet (main).
?>

<div class="container">

	<form class="" action="login_create.php" method="post">
        
            <div class="form-group">
                <label for="username">Användarnamn</label>
                <input type="text" value="Kvadevack95" name="username" class="form-control">
            </div> 
            <div class="form-group">
                <label for="first_name">Förnamn</label>
                <input type="text" value="Kalle" name="first_name" class="form-control">
            </div> 
            <div class="form-group">
                <label for="last_name">Efternamn</label>
                <input type="text" value="Anka" name="last_name" class="form-control">
            </div> 

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" value="kalle@margarinfabriken.ab" name="email" class="form-control">
            </div>
        
            <div class="form-group">
                <label for="birthdate">Födelsedatum</label>
                <input type="date" value="1940-05-13" name="birthdate" class="form-control">
            </div>
            <br/>
        
            <div class="form-inline  row">
                <label for="street">Gatuadress:</label>
                <input type="text" value="Paradisäppelvägen" name="street" class="form-control">
                
                <label for="street_nr">Gatunummer:</label>
                <input type="text" value="13" name="street_nr" class="form-control">
                
                <label for="zip_code">Postkod:</label>
                <input type="text" value="12313" name="zip_code" class="form-control">

                <label for="city">Postort:</label>
                <input type="text" value="Ankeborg" name="city" class="form-control">
            </div>
            <br/>

            <div class="form-group">
                <label for="password">Lösenord</label>
                <input type="password" value="kajsa" name="password" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Återbekräfta Lösenord</label>
                <input type="password" value="kajsa" name="password_confirm" class="form-control">
            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="Skapa konto">

        </form>    
        </div>

        <div class="container-fluid">
            <br/>
            <img class="img-responsive" src="http://via.placeholder.com/960x150"/>
        </div>
        <br/>

<?php
require($root . '/resources/templates/below.php');
//made by Jonatan Nogrell, I guess;
?>