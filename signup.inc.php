<?php

if(isset($_POST["submit"])){

  $name = $_POST['name'];
  $email = $_POST['email'];
  $username = $_POST['uid'];
  $pwd = $_POST['pwd'];
  $pwdRepeat = $_POST['pwdrepeat'];

  require_once 'db_connection.php';
  require_once 'functions.php';

  if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
    header("location: welcome.php?error=emptyInput");
    exit();
  }
  if (invalidUid($username) !== false) {
    header("location: welcome.php?error=invalidUid");
    exit();
  }
  if (invalidEmail($email) !== false) {
    header("location: welcome.php?error=invalidEmail");
    exit();
  }

  if (pwdMatch($pwd, $pwdRepeat) !== false) {
    header("location: welcome.php?error=passwordsdontmatch");
    exit();
  }

  if (uidExists($conn, $username, $email) !== false) {
    header("location: welcome.php?error=usernameTaken");
    exit();
  }

  createUser($conn, $name, $email, $username, $pwd);

}
else {
  header("location: welcome.php");
  exit();
}
