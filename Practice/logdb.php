<?php

// session_start();

$errors = array();
include_once("dbcon.php");
if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (empty($email)) {
        array_push($errors, "email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM registration WHERE email='$email' AND password='$password'";
        $results = mysqli_query($conn, $query);
       
       
        if (mysqli_num_rows($results) == 1) {
         while ($row = mysqli_fetch_assoc($results)) {
            session_start();
            $_SESSION["email"] = $row["email"];
            $_SESSION["password"] = $row["password"];
?>
            <script>
                alert("Successfully login");
            </script>
<?php
          header("location:header.php");
             }
        } else {
            echo "<script type='text/javascript'>alert('Wrong Email or Password');
            window.location='Login.php';
            </script>";
        }
    }
}
?>