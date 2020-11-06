<?php

if(isset($_POST["submit"])){

  $name = $_POST['name'];
  $email = $_POST['email'];
  $username = $_POST['uid'];
  $pwd = $_POST['pwd'];
  $pwdRepeat = $_POST['pwdrepeat'];

  $vkey = md5(time() .$uid);

  require_once 'db_connection.php';
  require_once 'functions.php';

  if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
    header("location: ../index.html?error=emptyInput");
    exit();
  }
  if (invalidUid($username) !== false) {
    header("location: ../index.html?error=invalidUid");
    exit();
  }
  if (invalidEmail($email) !== false) {
    header("location: ../index.html?error=invalidEmail");
    exit();
  }

  if (pwdMatch($pwd, $pwdRepeat) !== false) {
    header("location: ../index.html?error=passwordsdontmatch");
    exit();
  }

  if (uidExists($conn, $username, $email) !== false) {
    header("location: ../index.html?error=usernameTaken");
    exit();
  }

  createUser($conn, $name, $email, $username, $pwd, $vkey);


     $to = $email;
    $subject = "Verificação da conta";
    $headers = "De: suporte@universitymmt.com \r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" ."\r\n";
    $message = "<h1>Bem vindo à MMT University!<h1> \r\n \r\n";
    $message .= "<h2> A sua conta foi criada com sucesso e estamos muito felizes por o ter na nossa comunidade.</h2><br><br>";
   
      
    $message .= "<p>O seu nome de usuário é: $name</p><br>  </p>A sua senha é: $pwd</p><br>";
  
    
    
      
    $message .= "Apenas lhe falta um passo para poder entrar na sua conta da MMT University, só tem que clicar no botão abaixo e seguir para o seu registo, <br>
    estamos à sua espera:<br>
      <a href='https://universitymmt.com/verify.php?vkey=$vkey'> Confirmar </a>";


      $message .= "<br> <p> Esta mensagem foi enviada pelo suporte da MMT University, caso tenha alguma dúvida por favor envie-nos um email ou mensagem</p><br>
      <br><br><p> Cumprimentos da equipe MMT University.</p>"; 
    
  
    mail($to, $subject, $message, $headers); 
 

}
else {
  header("location: ../index.html");
  exit();
}