<?php

        include($_SERVER['DOCUMENT_ROOT'] . '/resources/scripts/db.php');
    
        if (isset($_POST['submit'])) {
            
            if (isset($_POST['username']) && isset($_POST['password'])) {
                
                $username = $_POST['username'];
                $hashed_password = mysqli_real_escape_string($connection, hash('sha512', $_POST['password']));
                    
                $query = "SELECT * FROM users WHERE Username = '$username' AND Password = '$hashed_password'";
                $result = mysqli_query($connection, $query);
                
                $row = mysqli_fetch_array($result);
                
                
                if($row) {
                        $_SESSION['loggedIn'] = true;
                        $username = $row['username'];
                        echo $username;
                } else {
                    $error = '<p class="bg-danger text-danger">kunde ej logga in</p>';    
                    //Kunde inte hitta en användare i databasen med den kombinationen av användarnamn och lösenord        
                }                
            } else {
                $error = '<p class="bg-danger text-danger">Var god fyll i båda fälten</p>';
            }
        }
?>
