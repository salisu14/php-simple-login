<?php

require 'connection_db.php';
require 'core.inc.php';

//core.inc.php functionality protect the login i.e. provided a middleware to the route to either access index.php when logged in.


if (loggedin()) {

  $id = getuserfield('id');
  $first_name = getuserfield('first_name');
  $last_name = getuserfield('last_name');
  $username = getuserfield('username');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<body>
    <div class="container">
        <h1>Dashboard</h1>
  
        <!-- <?php //if(isset($welcome)) : ?>
          <h3><?php //echo $welcome; ?></h3>
       <?php //endif; ?>
       <div>-->

        <?php if (isset($_SESSION['flash_message'])) : ?>
              <?php echo $_SESSION['flash_message']?>
        <?php
            unset($_SESSION['flash_message']);
            endif
        ?>
        <p></p>
            <h3>Welcome Back! <?php echo $first_name. ' '. $last_name;?></h3>
        <p></p>
        <a href="logout.php">Logout</a>

       </div>
    </div>
</body>
</html>

<?php
}
else {
    include ("login_form.php");
}
?>