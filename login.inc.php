<?php

if (isset($_POST["submit"])) {
  $username = $_POST["uid"];
  $pwd = $_POST["pwd"];

<<<<<<< HEAD
  require_once 'db_connection.php';
  require_once 'functions.php';


  if (emptyInputLogin($username, $pwd) !== false) {
=======
  require_once 'db_connection';
  require_once 'funtions.php';


  if (emptyInputLogin($username, $password) !== false) {
>>>>>>> 0390a603a7be7c50ddad275f7a654cec59115016
    header("location: welcome.php?error=emptyInput");
    exit();
  }


<<<<<<< HEAD
  loginUser($conn, $username, $pwd);
=======
  loginUser($conn, $username, $password);
>>>>>>> 0390a603a7be7c50ddad275f7a654cec59115016
}
else {
  header("location: welcome.php");
  exit();
}
