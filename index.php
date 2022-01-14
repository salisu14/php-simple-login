<?php 

  session_start();

  if(isset($_SESSION['first_name']) && isset($_SESSION['last_name']) && isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name']; 

    $welcome = 'Welcome: ' . ucwords($last_name) . ', ' . $first_name; 
  } else {
     header("Location: login_form.php");
  }

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
        <?php if(isset($welcome)) : ?>
          <h3><?php echo $welcome; ?></h3>
       <?php endif; ?>
       <div>
        <a href="logout.php">Logout</a>
       </div>
    </div>
</body>
</html>