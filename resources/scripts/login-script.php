<?php

        include($_SERVER['DOCUMENT_ROOT'] . '/resources/scripts/db.php');
    
        if (isset($_POST['submit'])) {
            
            if (isset($_POST['username']) && isset($_POST['password'])) {
                
                $username = $_POST['username'];
                $hashed_password = mysqli_real_escape_string($connection, hash('sha512', $_POST['password']));
                    
                $query = "SELECT * FROM users WHERE Username = '$username' AND Password = '$hashed_password'";
                $result = mysqli_query($connection, $query);
                    
                if(mysqli_num_fields($result) > 0) {
                        $_SESSION['loggedIn'] = true;
                        $username = $_SESSION['username'];
                        echo $username;
                } else {
                    echo "Fack Juu!";    
                    //Kunde inte hitta en användare i databasen med den kombinationen av användarnamn och lösenord        
                }                
            } else {
                $error = '<p class="bg-danger text-danger">Var god fyll i båda fälten</p>';
            }
        }
?>
