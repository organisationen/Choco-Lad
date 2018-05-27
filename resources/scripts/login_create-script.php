<?php
        if(isset($_POST['submit'])) {
    
        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $hashed_password = mysqli_real_escape_string($connection, hash('sha512', $_POST['password']));
        $birthdate = mysqli_real_escape_string($connection, $_POST['birthdate']);
        $street = mysqli_real_escape_string($connection, $_POST['street']);
        $street_nr = mysqli_real_escape_string($connection, $_POST['street_nr']);
        $zip_code = mysqli_real_escape_string($connection, $_POST['zip_code']);
        $city = mysqli_real_escape_string($connection, $_POST['city']);
        $first_name = mysqli_real_escape_string($connection, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($connection, $_POST['last_name']);
        
        $query = "INSERT INTO users(username,email,password,birthdate,street,street_nr,zip_code,city,first_name,last_name)";
        $query .= "VALUES ('$username', '$email', '$hashed_password', '$birthdate', '$street', '$street_nr', '$zip_code', '$city', '$first_name', '$last_name')";
        
        $result = mysqli_query($connection, $query);
    
        if(!$result) {
            die('Något gick fel' . mysqli_error());
        } else {
            $row = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM users WHERE username = '$username'"));
            
            $ModalToLogin = true;
            
            if($row) {
                        $_SESSION['LoggedIn'] = true;
                        $username = $row['username'];
                        $RegSuccess = 'Du är nu registrerad, ';
            } else {
                    $error = '<p class="bg-danger text-danger">kunde ej logga in</p>';    
                    //Kunde inte hitta en användare i databasen med den kombinationen av användarnamn och lösenord        
            } 
        }
        }
?>