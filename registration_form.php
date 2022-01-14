<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h1>Registration Form</h1>
    <form action="registration.php" method="post">
        <div>
            <label for="fname">First Name:</label>
            <input type="text" name="fname" id="fname">
        </div>
        <div>
            <label for="sname">Last Name:</label>
            <input type="text" name="sname" id="sname">
        </div>
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
            <input type="submit" name="submit" value="Register">
        </div>
    </form>
</body>
</html>