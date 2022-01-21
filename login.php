<?php
   
    session_start();

    if(isset($_SESSION['first_name']) && isset($_SESSION['last_name']) && isset($_SESSION['username'])) {
        header("Location: index.php");
    }
 
    require 'connection_db.php';

    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');

    $query = "SELECT * FROM registration WHERE username = :username";
    $statement=$pdo->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->execute();
    $row = $statement->fetch(PDO::FETCH_ASSOC);

    //$row = $statement->fetch(PDO::FETCH_OBJ);
    //Suggesting $row->id, $row->u_password .... Intead of PDO::FETCH_ASSOC Where $row['id'];

    $statement->closeCursor();

    if($row === false) {
        $error_message = "Invalid username or password!";
        include('login_form.php');
        
    } else {
        if(password_verify($password, $row['u_password'])) {
            /*$_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];
            $_SESSION['username'] = $row['username']; */

            $user_id = $row['id'];
			$_SESSION['user_id'] = $user_id;
            $_SESSION['flash_message'] = 'You are now logged in.';

            header('Location: index.php');
        } else {
            $error_message = 'Invalid username or password';
            include('login_form.php');
        }
    }

    