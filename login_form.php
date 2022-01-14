<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h1>Login Form</h1>
    <?php if(isset($error_message)) : ?>
        <p style="font-weight: bold; color: red;">
          <?php echo $error_message; ?>
        </p>
    <?php endif; ?>
    <form action="login.php" method="post">
    <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="">&nbsp;</label>
            <input type="submit" name="submit" value="Login">
        </div>
    </form>
    <div>
        Not registered? <a href="registration_form.php">Register</a>
    </div>
</body>
</html>