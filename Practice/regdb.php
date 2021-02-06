<?php


$errors = array();

if (isset($_POST['reg_user'])) {

  include_once("dbcon.php");

  $fname = mysqli_real_escape_string($conn, $_POST['fname']);
  $lname = mysqli_real_escape_string($conn, $_POST['lname']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, md5($_POST['password']));

  $sql = "SELECT email FROM registration WHERE email = '{$email}'";
  $result = mysqli_query($conn, $sql) or die("query failed");

  if (mysqli_num_rows($result) > 0) {

    echo "<script type='text/javascript'>alert('Email already Exists');
    window.location='registration.php';
    </script>";
  } else {
    $sql1 = "INSERT INTO registration (fname,lname,email,password)
         VALUES('{$fname}','{$lname}','{$email}','{$password}')";

    if (mysqli_query($conn, $sql1)) {
      echo "<script type='text/javascript'>alert('Successfully Registered');
    window.location='Login.php';
    </script>";
    }
  }
}
?>