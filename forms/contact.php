<?php

if (isset($_POST['submit'])){
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['email'];
  $message = $_POST['message'];


  require_once "../../universitymmt/includes/db_connection.php";
  $mailTo = 'suporte@universitymmt.com';
  $headers = "De: ".$mailFrom;
  $txt = "Recebeste um email de " .$name.".\n\n".$message;



  mail($mailTo, $subject, $txt, $headers);
  header("Location: ../index.html?mailsend");
}