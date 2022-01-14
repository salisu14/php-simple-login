<?php
   require 'connection_db.php';
   

   $first_name = filter_input(INPUT_POST, 'fname');
   $last_name = filter_input(INPUT_POST, 'sname');
   $username = filter_input(INPUT_POST, 'username');
   $password = filter_input(INPUT_POST, 'password');

   $password = password_hash($password, PASSWORD_BCRYPT);


   $query = "INSERT INTO registration(first_name, last_name, username, u_password)
             VALUES(:first_name, :last_name, :username, :u_password)";

   $statement=$pdo->prepare($query);
   $statement->bindValue(':first_name', $first_name);
   $statement->bindValue(':last_name', $last_name);
   $statement->bindValue(':username', $username);
   $statement->bindValue(':u_password', $password);
   $statement->execute();
   $rowCount = $statement->rowCount();
   $statement->closeCursor();
  
   if($rowCount == 1) {
        header("Location: login_form.php");
   } else {
       die('An error had occurred, please check all input and try again!');
   }
