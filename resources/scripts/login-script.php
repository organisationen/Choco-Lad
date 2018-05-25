<?php

        include($_SERVER['DOCUMENT_ROOT'] . '/resources/scripts/db.php');
    
        if (isset($_POST['submit'])) {
            
            if (isset($_POST['username']) || isset($_POST['password'])) {
                
                $username = $_POST['username'];
                $hashed_password = mysqli_real_escape_string($connection, hash('sha512', $_POST['password']));
                
               
                
                if($username && $hashed_password) {
                    $query = "SELECT * FROM users WHERE Username = '$username' AND Password = '$hashed_password'";
                    $result = mysqli_query($connection, $query);
                    
                    if (mysqli_fetch_array($result)){
                        $_SESSION['loggedIn'] = true;
                        $_SESSION['username'] = $username;
                        echo $username;
                    } else if (mysqli_num_fields($result)){
                        $error = '<p class="bg-danger text-danger">Var god fyll i båda fälten</p>';
                    } else {
                        
                    }
                } 
                
            }
        }
?>