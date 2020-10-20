<?php


if (isset($_POST["submit"])) {
  // code...

  $name = $_POST["name"];
  $email = $_POST["mail"];
  $pwd = $_POST["pwd"];
  $pwdRepeat = $_POST["pwdrepeat"];

  require_once 'db_connection.php';
  require_once 'functions.php';

  if (emptyInputSignup($name, $email, $pwd, $pwdRepeat) !== false) {
    header("location: login.php?error=emptyinput");
    exit();
  }
  if (invalidUid($username) !== false) {
    header("location: login.php?error=invalidUid");
    exit();
  }

  if (invalidEmail($email) !== false) {
    header("location: login.php?error=invalidEmail");
    exit();
  }


  if (pwdMatch($pwd, $pwdRepeat) !== false) {
    header("location: login.php?error=pwddontmatch");
    exit();
  }

  if (uidExists($conn, $username) !== false) {
    header("location: login.php?error=usernameTaken");
    exit();
  }


  createUser($conn, $name, $email,$pwd);
}
  else {
    header("location: mainpage.php");
    exit();
  }
