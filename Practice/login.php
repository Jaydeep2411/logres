<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <div class="container">
        <div class="header">

            <h2>Login</h2>

        </div>
        <form action="logdb.php" method="POST">

            <div class="input-group">
                <label for="email">Email : </label>
                <input type="email" name="email" placeholder="Email" required>
            </div>


            <div class="input-group">
                <label for="password">password : </label>
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <button type="submit" name="login_user" class="btn"> Log In </button>

            <p>Not a user?<a href="register.php"><b>Register Here</b></a></p>

        </form>

    </div>

</body>

</html>