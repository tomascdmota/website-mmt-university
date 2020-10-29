<?php

if (isset($_POST["submit"])) {
  $username = $_POST["uid"];
  $pwd = $_POST["pwd"];

  require_once 'db_connection.php';
  require_once 'functions.php';


  if (emptyInputLogin($username, $pwd) !== false) {
    header("location: welcome.php?error=emptyInput");
    exit();
  }


  loginUser($conn, $username, $pwd);
}
else {
  header("location: welcome.php");
  exit();
}
