<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

  <div class="container">
    <div class="header">

      <h2>Registration</h2>
    </div>

    <form action="regdb.php" method="POST">

      <div class="input-group">
        <label for="name">Firstname : </label>
        <input type="text" name="fname" required>
      </div>

      <div class="input-group">
        <label for="name">Lastname : </label>
        <input type="text" name="lname" required>
      </div>


      <div class="input-group">
        <label for="email">Email : </label>
        <input type="email" name="email" required>
      </div>

      <div class="input-group">
        <label for="password">password : </label>
        <input type="password" name="password" required>
      </div>

      <div class="input-group">
        <button type="submit" name="reg_user" class="btn">Register</button>
      </div>


      <p>Already a user?<a href="login.php"><b>Log in</b></a></p>

    </form>

  </div>
</body>

</html>