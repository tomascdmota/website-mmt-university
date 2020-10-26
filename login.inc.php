<?php

if (isset($_POST["submit"])) {
  $username = $_POST["uid"];
  $pwd = $_POST["pwd"];

  require_once 'db_connection';
  require_once 'funtions.php';


  if (emptyInputLogin($username, $password) !== false) {
    header("location: welcome.php?error=emptyInput");
    exit();
  }


  loginUser($conn, $username, $password);
}
else {
  header("location: welcome.php");
  exit();
}
